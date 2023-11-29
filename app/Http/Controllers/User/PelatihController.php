<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PelatihRequest;
use App\Models\Datapelatih;
use Illuminate\Http\Request;
use App\Models\DataSekolah;

class PelatihController extends Controller
{
    public function index(Request $request)
    {
        $Pelatih = Datapelatih::with('grub','sekolah')->get();
        $sekolah = DataSekolah::all();
        return view('pages.admin.user.Pelatih.index', ['Pelatih' => $Pelatih],['sekolah' => $sekolah]);
    }
    

    public function create()
    {
        $pelatih = Datapelatih::with('sekolah')->get();
        $sekolahs = DataSekolah::all();
        return view('pages.admin.user.Pelatih.create',['pelatih' => $pelatih, 'sekolahs' => $sekolahs]);
    }

    public function show($id) {
        $pelatih = Datapelatih::with('grub')->find($id);
    
        if (!$pelatih) {
            abort(404);
        }
    
        return view('Pages.admin.user.pelatih.show', compact('pelatih'));
    }

    public function store(PelatihRequest $request)
    {
        $data = $request->all();
        $data['data_pelatih_id'] = $request->input('data_pelatih_id');
        $data['foto'] = $request->file('foto')->store(
            'user/pelatih/foto',
            'public'
        );

        $data['ktp'] = $request->file('ktp')->store(
            'user/pelatih/ktp',
            'public'
        );
       
        Datapelatih::create($data);
        $sekolahs = DataSekolah::all();
      

        return redirect()->route('Pelatih.index',compact('sekolahs'))->with('success', 'Pelatih successfully created');
    }


    public function edit(string $id)
    {
        $data= Datapelatih::findOrFail($id);
        $sekolahs  = DataSekolah::all();


        return view('pages.admin.user.Pelatih.edit', [
            'data' => $data,
            'sekolahs' => $sekolahs,
        ]);
    }

    public function update(PelatihRequest $request, string $id)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store(
            'user/pelatih/foto',
            'public'
        );
        $data['ktp'] = $request->file('ktp')->store(
            'user/pelatih/ktp',
            'public'
        );
    

        $item = Datapelatih::findOrFail($id);

        $item->update($data);

        return redirect()->route('Pelatih.index')->with('success', 'Pelatih  successfully updated');
    }

    public function destroy(string $id)
    {
        $data = Datapelatih::findOrFail($id);
        $data->delete();

        return redirect()->route('Pelatih.index')->with('success', 'Pelatih successfully deleted');
    }

    public function delete($id){
        $data = Datapelatih::find($id);

        if (!$data) {
            return response()->json('Pelatih')->with(['error' => 'Data Pelatih tidak ditemukan']);

        }
        $data->delete();
        return redirect()->route('Pelatih.index')->with(['success' => 'Data Pelatih berhasil dihapus']);
        
    }
}
