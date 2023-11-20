<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PelatihRequest;
use App\Models\Datapelatih;
use Illuminate\Http\Request;

class PelatihController extends Controller
{
    public function index(Request $request)
    {
        $Pelatih = Datapelatih::with('grub')->get();
        return view('pages.admin.user.Pelatih.index', ['Pelatih' => $Pelatih]);
    }
    

    public function create()
    {
        return view('pages.admin.user.Pelatih.create');
    }

    public function store(PelatihRequest $request)
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
       
        Datapelatih::create($data);

      

        return redirect()->route('Pelatih.index')->with('success', 'Pelatih successfully created');
    }


    public function edit(string $id)
    {
        $data= Datapelatih::findOrFail($id);


        return view('pages.admin.user.Pelatih.edit', [
            'data' => $data
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
