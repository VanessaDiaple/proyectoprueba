<div>
    <a class="btn btn-green" wire:model="confirmDelete wire:click="$set('open',true)">
        <i class="fas fa-edit"></i>
    </a>
    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Borrar Post
        </x-slot>
        <x-slot name="content">
            ¿Esta seguro de que quiere eliminar este post?
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="confirmDelete"  wire:loading.remove wire:target="destroy">Borrar</x-secondary-button>
            <x-danger-button wire:click="$set('open',false)">Cancelar</x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>


