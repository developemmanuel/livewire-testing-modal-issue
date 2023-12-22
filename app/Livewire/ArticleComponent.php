<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleComponent extends Component
{
    public $modal = false;
    public function openModal(){
        $this->modal = true;
    }
    public function closeModal(){
        $this->reset('modal');
    }
    public function render()
    {
        return view('livewire.article-component');
    }
}
