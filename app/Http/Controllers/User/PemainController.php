<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PemainRequest;
use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index(Request $request)
    {
        $data = Pemain::all();
        return view('pages.admin.user.pemain.index', ['data' => $data]);
    }
    

    public function create()
    {
        return view('pages.admin.user.pemain.create');
    }

    public function show($id) {
        $data = Pemain::all();
    
        if (!$data) {
            abort(404);
        }
    
        return view('Pages.admin.user.pemain.index', compact('data'));
    }



    public function store(PemainRequest $request)
    {
        $data = $request->all();
        $data['Ijasah'] = $request->file('Ijasah')->store(
            'user/pemain/ijasah',
            'public'
        );

        $data['Rapor'] = $request->file('Rapor')->store(
            'user/pemain/rapor',
            'public'
        );
        $data['Kartu_Siswa'] = $request->file('Kartu_Siswa')->store(
            'user/pemain/kartusiswa',
            'public'
        );
        $data['Foto'] = $request->file('Foto')->store(
            'user/pemain/foto',
            'public'
        );
       
        Pemain::create($data);

      

        return redirect()->route('pemain.index')->with('success', 'Pemain successfully created');
    }


    public function edit(string $id)
    {
        $data= Pemain::findOrFail($id);


        return view('pages.admin.user.pemain.edit', [
            'data' => $data
        ]);
    }

    public function update(PemainRequest $request, string $id)
    {
        $data = $request->all();
        $data['Ijasah'] = $request->file('Ijasah')->store(
            'user/pemain/ijasah',
            'public'

        );
        $data['Rapor'] = $request->file('Rapor')->store(
            'user/pelatih/rapor',
            'public'
        );
        $data['Kartu_Siswa'] = $request->file('Kartu_Siswa')->store(
            'user/pemain/kartusiswa',
            'public'

        );
        $data['Foto'] = $request->file('Foto')->store(
            'user/pemain/foto',
            'public'
        );
    

        $item = Pemain::findOrFail($id);

        $item->update($data);

        return redirect()->route('pemain.index')->with('success', 'Data Pemain  successfully updated');
    }

    public function destroy(string $id)
    {
        $data = Pemain::findOrFail($id);
        $data->delete();

        return redirect()->route('pemain.index')->with('success', 'Data pemain successfully deleted');
    }



    public function delete($id){
        $data = Pemain::find($id);

        if (!$data) {
            return response()->json('pemain')->with(['error' => 'Data Sekolah tidak ditemukan']);

        }
        $data->delete();
        return redirect()->route('pemain.index')->with(['success' => 'Pj Sekolah berhasil dihapus']);
        
    }
}
