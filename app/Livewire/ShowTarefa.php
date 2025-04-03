<?php

namespace App\Livewire;

use Livewire\Component;

class ShowTarefa extends Component
{
public $tarefa = 'Tarefa 1';

    public function render()
    {
        return view('livewire.show-tarefa');
    }
}
