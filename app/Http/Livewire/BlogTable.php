<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class BlogTable extends DataTableComponent
{
    protected $model = Blog::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable(),
            ImageColumn::make('Image')
                ->location(fn ($row) => $row->firstMedia('blogImage')?->getUrl()
                )->attributes(fn ($row) => [
                    'class' => 'rounded-full ',
                    'style' => 'height:40px',
                    'alt' => $row->name,
                ]),
            Column::make('Name', 'name')
                ->searchable()
                ->sortable(),
            Column::make('Slug', 'slug')
                ->sortable(),
            BooleanColumn::make('Status', 'status')
                ->sortable(),
            Column::make('Tags')
                ->label(fn ($row) => $row->tags->pluck('name')->implode(', ')),
            ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => 'mx-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                    ->title(fn ($row) => 'Edit')
                        ->location(fn ($row) => route('blogs.edit', $row?->slug))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'btn btn-sm btn-secondary',
                            ];
                        }),

                ]),

        ];
    }

    public function bulkActions(): array
    {
        return [
            'activate' => 'Activate',
            'deactivate' => 'Deactivate',
            'delete' => 'Delete',
        ];
    }

    public function filters(): array
    {
        return [

            SelectFilter::make('Status')
                ->setFilterPillTitle('Blog Status Status')
                ->setFilterPillValues([
                    '1' => 'Active',
                    '0' => 'Inactive',
                ])
                ->options([
                    '' => 'All',
                    '1' => 'Active',
                    '0' => 'Inactive',
                ])
                ->filter(function (Builder $builder, string $value) {
                    if ($value === '1') {
                        $builder->where('blogs.status', true);
                    } elseif ($value === '0') {
                        $builder->where('blogs.status', false);
                    }
                }),

        ];
    }

    public function builder(): Builder
    {
        return Blog::query()->withMedia(['blogImage', 'blogThumbnail'])->with('tags');
    }

    public function activate()
    {
        Blog::whereIn('id', $this->getSelected())->update(['status' => 1]);

        $this->clearSelected();
    }

    public function deactivate()
    {
        Blog::whereIn('id', $this->getSelected())->update(['status' => 0]);

        $this->clearSelected();
    }

    public function delete()
    {
        Blog::whereIn('id', $this->getSelected())->forceDelete();
        $this->clearSelected();
    }
}
