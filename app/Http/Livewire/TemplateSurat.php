<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\NomorSurat;
use Illuminate\Support\Str;

class TemplateSurat extends Component
{
    public $template = '';
    public $jk;
    public $sp;

    public $no_surat_a;
    public $no_surat_b;
    public $no_surat_c;
    public $no_surat_d;
    public $no_surat_e;

    public function mount()
    {
        $this->no_surat_a = $this->generateNomor('09');
        $this->no_surat_b = $this->generateNomor('09');
        $this->no_surat_c = $this->generateNomor('15');
        $this->no_surat_d = $this->generateNomor('15');
        $this->no_surat_e = $this->generateNomor('03');
    }

    public function updateNomor($jenis_surat)
    {
        switch ($jenis_surat) {
            case 1:
                $this->no_surat_a = $this->generateNomor('09');
                break;
            case 2:
                $this->no_surat_b = $this->generateNomor('09');
                break;
            case 3:
                $this->no_surat_c = $this->generateNomor('15');
                break;
            case 4:
                $this->no_surat_d = $this->generateNomor('15');
                break;
            case 5:
                $this->no_surat_e = $this->generateNomor('03');
                break;
        }
    }

    public function render()
    {
        return view('livewire.template-surat');
    }

    public function generateNomor($tipe)
    {
        $bulanR = $this->getRomawi(Carbon::now()->isoFormat('M'));
        $bulan = Carbon::now()->isoFormat('MM');
        $tahun = Carbon::now()->isoFormat('YYYY');
        
        $data = NomorSurat::where('type', $tipe)->whereYear('created_at', $tahun)->whereMonth('created_at', $bulan)->get();
        if ($data->isEmpty()) {
            $order = '001';
        } else {
            $order = Str::padLeft($data->last()->order+1, 3, 0);
        }

        $nomor_surat = $tipe . '.' . $order . '/KEC-GIRIAN/' . $bulanR . '/' . $tahun;

        return $nomor_surat;
    }

    public function getRomawi($bulan)
    {
        switch ($bulan) {
            case 1:
                return 'I';
                break;
            case 2:
                return 'II';
                break;
            case 3:
                return 'III';
                break;
            case 4:
                return 'IV';
                break;
            case 5:
                return 'V';
                break;
            case 6:
                return 'VI';
                break;
            case 7:
                return 'VII';
                break;
            case 8:
                return 'VIII';
                break;
            case 9:
                return 'IX';
                break;
            case 10:
                return 'X';
                break;
            case 11:
                return 'XI';
                break;
            case 12:
                return 'XII';
                break;
        }
    }
}
