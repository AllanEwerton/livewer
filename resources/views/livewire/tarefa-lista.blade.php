<div class="max-w-2xl mx-auto mt-8">
    <h2 class="text-xl font-bold mb-4">Lista de Tarefas</h2>

    @if ($tarefas->count())
    <ul class="bg-white shadow rounded divide-y">
        @foreach ($tarefas as $tarefa)
            <li class="p-4 hover:bg-gray-100 flex justify-between items-start">
                <div>
                    <div class="font-semibold text-gray-700">{{ $tarefa->titulo }}</div>
                    <div class="text-sm text-gray-600">{{ $tarefa->descricao }}</div>
                    <div class="text-xs text-gray-500 mt-1">Criado em: {{ $tarefa->created_at->format('d/m/Y H:i') }}</div>
                </div>

                <button
    wire:click="openModal({{ $tarefa->id }})"
    class="text-red-600 hover:underline text-sm"
>
    Excluir
</button>

            </li>
        @endforeach
    </ul>
    @else
        <p class="text-gray-600">Nenhuma tarefa cadastrada.</p>
    @endif
    <x-modal name="confirmar-exclusao" :show="$mostrarModal">
        <div class="p-6">
            <h2 class="text-lg font-bold mb-4 text-gray-900 dark:text-white">Confirmar exclusão</h2>
            <p class="mb-4 text-gray-700 dark:text-gray-300">Você deseja realmente excluir esta tarefa?</p>

            <div class="flex justify-end space-x-4">
                <button wire:click="closeModal"
                    class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 dark:bg-gray-700 dark:hover:bg-gray-600">
                    Cancelar
                </button>

                <button wire:click="delete"
                    class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                    Excluir
                </button>
            </div>
        </div>
    </x-modal>


</div>
