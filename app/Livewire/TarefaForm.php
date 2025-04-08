<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tarefa;
class TarefaForm extends Component
{
    public $titulo;
    public $descricao;

    protected $rules = [
        'titulo' => 'required|min:3',
        'descricao' => 'required|min:3',
    ];
    public function salvar()
    {
        $this->validate();

        Tarefa::create([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
        ]);
        $this->reset();
        session()->flash('message', 'Tarefa criada com sucesso!');

        $this->dispatch('tarefaSalva');
    }

    public function render()
    {
        return view('livewire.tarefa-form');
    }
}
