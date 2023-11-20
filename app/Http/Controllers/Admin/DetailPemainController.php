<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PemainRequest;
use App\Models\Pemain;
use Illuminate\Http\Request;

class DetailPemainController extends Controller
{
    public function show($id)
    {
        $pemain = Pemain::with('dataSekolah','pjsekolah','pjtim','datapelatih','dataofficial','datasupportersiswa','datasupporterguru')
                     ->find($id);
    
        if (!$pemain) {
            abort(404); // Menampilkan halaman 404 jika data tidak ditemukan
        }
    
        return view('pages.admin.Data-Sekolah.Pemain.show', ['pemain' => $pemain]);
    }
    

    public function store(PemainRequest $request)
    {
        $data = $request->all();
      
    
        $data['Ijasah'] = $request->file('Ijasah')->store(
            'admin/Pemain/Ijasah',
            'public'
        );
        $data['Rapor'] = $request->file('Rapor')->store(
            'admin/Pemain/Raport',
            'public'
        );
        $data['Kartu_Siswa'] = $request->file('Kartu_Siswa')->store(
            'admin/Pemain/Kartusiswa',
            'public'
        );

        Pemain::created($data);


        return redirect()->route('Data-Sekolah.index')->with('success', 'Upcoming Match successfully created');

     

    }

    public function create()
    {
        return view('pages.admin.Data-Sekolah.Pemain.create');
    }
}
