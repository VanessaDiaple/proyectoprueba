<div>
    <x-danger-button wire:click="$set('open',true)">
        Crear nuevo post
    </x-danger-button>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear nuevo post
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-label value="Titulo del Post"></x-label>
                <x-input type="text" class="w-full" wire:model.defer="title"></x-input>
            </div>

            <div class="mb-4">
                <x-label value="Contenido del Post"></x-label>
                <textarea class="w-full" rows="6" wire:model.defer="content"></textarea>
            </div>
        </x-slot>

        <x-slot name="footer">
        <x-secondary-button wire:click="save">Crear Post</x-secondary-button>
        <x-danger-button wire:click="$set('open',false)">Cancelar</x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>
