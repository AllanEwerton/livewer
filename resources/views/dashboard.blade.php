<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if (session()->has('mensagem'))
    <div class="bg-green-100 border p-2 rounded text-green-800 mb-4">
        {{ session('mensagem') }}
    </div>
@endif
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-4">Gerenciador de Tarefas</h1>
                    <p class="mb-4">Adicione, edite e exclua suas tarefas facilmente.</p>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <livewire:tarefa-form />
                    <hr class="my-8">
                    <livewire:tarefa-lista />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
