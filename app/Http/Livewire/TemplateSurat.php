<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TemplateSurat extends Component
{
    public $template = '';
    public $jk;

    public function render()
    {
        return view('livewire.template-surat');
    }
}
