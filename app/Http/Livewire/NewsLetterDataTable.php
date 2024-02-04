<?php

namespace App\Http\Livewire;

use App\Models\NewsLetter;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class NewsLetterDataTable extends DataTableComponent
{
    protected $model = NewsLetter::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),
            Column::make('Email', 'email')
                ->sortable(),
            Column::make('Date', 'created_at')
                ->format(fn ($value, $row, Column $column) => $row->created_at?->format('Y-m-d'))
                ->sortable(),

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
        return NewsLetter::query();
    }

    public function delete(): void
    {
        NewsLetter::whereIn('id', $this->getSelected())->forceDelete();
        $this->clearSelected();
    }
}
