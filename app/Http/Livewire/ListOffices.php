<?php

namespace App\Http\Livewire;

use App\Models\Office;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables;

class ListOffices extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected $listeners = [
        '$refresh'
    ];

    protected function getTableQuery(): Builder
    {
        return Office::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
        ];
    }

    protected function getTableFilters(): array
    {
        return [];
    }

    protected function getTableActions(): array
    {
        return [];
    }

    protected function getTableBulkActions(): array
    {
        return [];
    }

    public function render()
    {
        return view('livewire.list-offices');
    }
}
