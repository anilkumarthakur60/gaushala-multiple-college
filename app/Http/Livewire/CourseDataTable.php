<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Course;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class CourseDataTable extends DataTableComponent
{
    protected $model = Course::class;

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
                        ->location(fn ($row) => route('courses.edit', $row?->slug))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'btn btn-sm btn-secondary',
                            ];
                        }),

                ]),

        ];
    }
}
