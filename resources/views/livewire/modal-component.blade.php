<div class="relative" wire:transition>
    <div class="fixed inset-0 z-40 bg-gray-500 bg-opacity-75" wire:transition></div>
        <div class="fixed inset-0 z-50 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0" wire:transition>
                <div class="relative overflow-hidden rounded-lg bg-white text-left shadow-xl sm:my-8 sm:w-full sm:max-w-lg">
                    <div>
                        <button wire:click="toggleDropdown">Dropdown</button>
                        @if($dropdown)
                        <div class="bg-gray-200" wire:transition>
                            <button>Clicked</button>
                        </div>
                        @endif
                    </div>
                    <button wire:click="$parent.closeModal">Cerrar</button>
                </div>
            </div>
        </div>
    {{--     The Master doesn't talk, he acts. --}}
</div>

