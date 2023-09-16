<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class TeacherDataTable extends DataTableComponent
{
    protected $model = Teacher::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),

            ImageColumn::make('Image')
                ->location(
                    fn ($row) => $row->firstMedia('image')?->getUrl()
                )->attributes(fn ($row) => [
                    'class' => 'rounded-full ',
                    'style' => 'height:40px',
                    'alt' => $row->firstMedia('image')?->getUrl(),
                ]),

            Column::make('Name', 'name')
                ->searchable()
                ->sortable(),
            Column::make('Subject', 'subject')
                ->searchable()
                ->sortable(),

            Column::make('Email', 'email')
                ->searchable()
                ->sortable(),

            Column::make('Slug', 'slug')
                ->sortable(),

            ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => 'mx-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                        ->title(fn ($row) => 'Edit')
                        ->location(fn ($row) => route('teachers.edit', $row?->slug))
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
            'delete' => 'Delete',
        ];
    }

    public function builder(): Builder
    {
        return Teacher::query()->withMedia('image');
    }

    public function delete(): void
    {
        Teacher::whereIn('id', $this->getSelected())->forceDelete();
        $this->clearSelected();
    }
}
