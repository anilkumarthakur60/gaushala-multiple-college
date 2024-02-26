<?php

namespace App\Http\Livewire;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

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
            BooleanColumn::make('Status', 'status')
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
            'activate' => 'Activate',
            'deactivate' => 'Deactivate',
        ];
    }

    public function builder(): Builder
    {
        return Slider::query()->withMedia(['image']);
    }

    public function delete(): void
    {
        Slider::whereIn('id', $this->getSelected())->forceDelete();
        $this->clearSelected();
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Status')
                ->setFilterPillTitle('Slider Status Status')
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
                        $builder->where('sliders.status', true);
                    } elseif ($value === '0') {
                        $builder->where('sliders.status', false);
                    }
                }),
        ];
    }

    public function activate()
    {
        Slider::whereIn('id', $this->getSelected())->update(['status' => 1]);

        $this->clearSelected();
    }

    public function deactivate()
    {
        Slider::whereIn('id', $this->getSelected())->update(['status' => 0]);

        $this->clearSelected();
    }
}
