<?php

namespace App\Http\Livewire;

use App\Models\SuratMasuk;
use Livewire\Component;

class SuratTable extends Component
{
    public $search;
 
    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.surat-table', [
            'items' => SuratMasuk::where('judul_surat', 'like', '%'.$this->search.'%')->get()->sortDesc(),
        ]);
    }
}
