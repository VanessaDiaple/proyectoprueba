<div>
    <x-danger-button wire:click="$set('open',true)">
        Crear nuevo post
    </x-danger-button>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear nuevo post
        </x-slot>

        <x-slot name="content">

            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Imagen cargando!</strong>
                <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado.</span>
            </div>
            @if($image)
                <img src="{{$image->temporaryUrl()}}">

            @endif
            <div class="mb-4">
                <x-label value="Titulo del Post"></x-label>
                <x-input type="text" class="w-full" wire:model="title"></x-input>

                <x-input-error for="title"></x-input-error>

            </div>

            <div class="mb-4">
                <x-label value="Contenido del Post"></x-label>
                <textarea class="w-full rounded" rows="6" wire:model="content"></textarea>

                <x-input-error for="content"></x-input-error>

            </div>
            <div>
                <x-input type="file" wire:model="image" id="{{$identificador}}"></x-input>
                <x-input-error for="image"></x-input-error>
            </div>
        </x-slot>

        <x-slot name="footer">
        <x-secondary-button wire:click="save" wire:loading.remove wire:target="save, image">Crear Post</x-secondary-button>
        <x-danger-button wire:click="$set('open',false)">Cancelar</x-danger-button>
            <span wire:loading wire:target="save">Guardando ...</span>
        </x-slot>
    </x-dialog-modal>
</div>
