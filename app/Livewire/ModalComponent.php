<?php

namespace App\Livewire;

use Livewire\Component;

class ModalComponent extends Component
{
    public $dropdown = false;
    public function toggleDropdown(){
        $this->dropdown = !$this->dropdown;
    }
    public function closeDropdown(){
        $this->reset(['dropdown']);
    }
    public function render()
    {
        return view('livewire.modal-component');
    }
}
