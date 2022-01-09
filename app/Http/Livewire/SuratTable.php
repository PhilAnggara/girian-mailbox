<?php

namespace App\Http\Livewire;

use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Livewire\Component;

class SuratTable extends Component
{
    public $search;
    public $type;
 
    protected $queryString = ['search'];

    public function render()
    {
        if ($this->type == 'surat-masuk') {
            return view('livewire.surat-table', [
                'items' => SuratMasuk::where('judul_surat', 'like', '%'.$this->search.'%')->get()->sortDesc(),
            ]);
        } else {
            return view('livewire.surat-table', [
                'items' => SuratKeluar::where('judul_surat', 'like', '%'.$this->search.'%')->get()->sortDesc(),
            ]);
        }
        
    }
}
