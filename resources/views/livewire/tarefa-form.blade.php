<div class="max-w-md mx-auto">
    <h2 class="text-2xl font-bold mb-4">Adicionar Tarefa</h2>
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <form wire:submit.prevent="salvar" class="space-y-4 mt-4">
        <div>
            <label for="titulo">Título</label>
            <input wire:model="titulo" type="text" id="titulo" class="w-full border p-2 rounded text-black">
            @error('titulo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="descricao">Descrição</label>
            <textarea wire:model="descricao" id="descricao" class="w-full border p-2 rounded text-black"></textarea>
            @error('descricao') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Salvar</button>
    </form>
</div>
