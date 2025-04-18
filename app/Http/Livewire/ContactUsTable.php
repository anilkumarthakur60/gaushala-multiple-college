<?php

namespace App\Http\Livewire;

use App\Models\ContactUs;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ContactUsTable extends DataTableComponent
{
    protected $model = ContactUs::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [

            Column::make('ID', 'id')
                ->sortable(),
            Column::make('Name', 'name')
                ->sortable(),
            Column::make('Email', 'email')
                ->sortable(),
            Column::make('Subject', 'subject')
                ->sortable(),
            Column::make('Message', 'message')
                ->sortable(),
            Column::make('Created at', 'created_at')
                ->sortable(),
        ];
    }

    public function bulkActions(): array
    {
        return [
            'delete' => 'Delete',
        ];
    }

    public function delete()
    {
        ContactUs::whereIn('id', $this->getSelected())->forceDelete();
        $this->clearSelected();
    }
}
