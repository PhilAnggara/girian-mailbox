<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuratRequest;
use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SuratKeluarController extends Controller
{
    
    public function index()
    {
        $items = SuratKeluar::all()->sortDesc();
        $type = 'surat-keluar';

        return view('pages.surat-keluar', [
            'items' => $items,
            'type' => $type
        ]);
    }
    
    public function create()
    {
        //
    }
    
    public function store(SuratRequest $request)
    {
        $data = $request->all();
        $data['nomor_surat'] = $this->nomorSurat('SM', $data['tanggal_masuk'], SuratKeluar::all());

        $nama_file = $data['nomor_surat'];

        if ($data['buat-baru'] != 1) {
            $data['surat'] = $request->file('surat')->storeAs(
                'files/surat', $nama_file, 'public'
            );
        }

        SuratKeluar::create($data);
        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
    }
    
    public function show($id)
    {
        $data = SuratKeluar::find($id);

        $judul = $data->judul_surat . '.pdf';

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pages.pdf.surat', [
            'judul' => $judul,
            'isi' => $data['isi_surat'],
        ]);
        
        return $pdf->stream($judul);
    }
    
    public function edit($id)
    {
        //
    }

    public function update(SuratRequest $request, $id)
    {
        $data = $request->all();
        $data['nomor_surat'] = $this->updateNomorSurat('SM', $data['tanggal_masuk'], $id);

        $nama_file = $data['nomor_surat'];

        if ($request->surat) {
            $data['surat'] = $request->file('surat')->storeAs(
                'files/surat', $nama_file, 'public'
            );
        }

        SuratKeluar::find($id)->update($data);

        return redirect()->back()->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        $item = SuratKeluar::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
