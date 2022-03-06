<?php

namespace App\Http\Livewire;

use App\Models\Office;
use Livewire\Component;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;

class CreateOffice extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $name;

    public function render()
    {
        return view('livewire.create-office');
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make()
                ->schema([
                    TextInput::make('name')->required()
                ])
                ->columns(2)
        ];
    }

    public function submit()
    {
        Office::create($this->form->getState());
    }
}
