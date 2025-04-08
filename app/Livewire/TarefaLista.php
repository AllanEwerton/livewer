<?php

namespace App\Livewire;

use App\Models\Tarefa;
use Livewire\Component;
use Livewire\Attributes\On;
#[On('tarefaSalva')] // Escuta o evento 'tarefaSalva'
class TarefaLista extends Component
{
    public $tarefapradelete = null;
    public $mostrarModal = false;

    public function openModal($id)
    {
        $this->tarefapradelete = $id;
        $this->mostrarModal = true;
        $this->js("window.dispatchEvent(new CustomEvent('open-modal', { detail: 'confirmar-exclusao' }))");
    }
    public function closeModal()
    {
        $this->tarefapradelete = null;
        $this->mostrarModal = false;
        $this->js("window.dispatchEvent(new CustomEvent('close-modal', { detail: 'confirmar-exclusao' }))");
    }

    public function delete()
    {
        $tarefa = Tarefa::find($this->tarefapradelete);
        if ($tarefa) {
            $tarefa->delete();
            session()->flash('message', 'Tarefa deletada com sucesso!');
        } else {
            session()->flash('mensagem', 'Tarefa não encontrada.');
        }
        $this->closeModal();
    }
    public function render()
    {
        $tarefas = Tarefa::latest()->get();

        return view('livewire.tarefa-lista', compact('tarefas'));
    }
}
