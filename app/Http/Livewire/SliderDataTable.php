<?php

namespace App\Http\Livewire;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class SliderDataTable extends DataTableComponent
{
    protected $model = Slider::class;

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
                ->location(fn ($row) => $row->firstMedia('image')?->getUrl()
                )->attributes(fn ($row) => [
                    'class' => 'rounded-full ',
                    'style' => 'height:40px',
                    'alt' => $row->name,
                ]),
            Column::make('Name', 'name')
                ->searchable()
                ->sortable(),
            Column::make('Slug', 'slug')
                ->searchable()
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
                        ->location(fn ($row) => route('sliders.edit', $row?->slug))
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
        return Slider::query()->withMedia( );
    }

    public function delete(): void
    {
        Slider::whereIn('id', $this->getSelected())->forceDelete();
        $this->clearSelected();
    }
}
