<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\manajerRequest;
use App\Models\Datamanajer;
use Illuminate\Http\Request;
use App\Models\DataSekolah;

class ManajerController extends Controller
{
    public function index(Request $request)
    {
        $manajer = Datamanajer::with('grub','sekolah')->get();
        $sekolah = DataSekolah::all();
        return view('pages.admin.user.manajer.index', ['manajer' => $manajer],['sekolah' => $sekolah]);
    }
    

    public function create()
    {
        $manajer = Datamanajer::with('sekolah')->get();
        $sekolahs = DataSekolah::all();
        return view('pages.admin.user.manajer.create',['manajer' => $manajer, 'sekolahs' => $sekolahs]);
    }

    public function show($id) {
        $manajer = Datamanajer::with('grub,pemain')->find($id);
    
        if (!$manajer) {
            abort(404);
        }
    
        return view('Pages.admin.user.manajer.show', compact('manajer'));
    }



    public function store(manajerRequest $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store(
            'user/official/foto',
            'public'
        );

        $data['ktp'] = $request->file('ktp')->store(
            'user/official/ktp',
            'public'
        );
       
        Datamanajer::create($data);
        $sekolahs = DataSekolah::all();

      

        return redirect()->route('manajer.index',compact('sekolahs'))->with('success', 'Manajer successfully created');
    }


    public function edit(string $id)
    {
        $data= Datamanajer::findOrFail($id);
        $sekolahs  = DataSekolah::all();


        return view('pages.admin.user.manajer.edit', [
            'data' => $data,
            'sekolahs' => $sekolahs,
        ]);
    }

    public function update(manajerRequest $request, string $id)
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
    

        $item = Datamanajer::findOrFail($id);

        $item->update($data);

        return redirect()->route('manajer.index')->with('success', 'Data Manajer  successfully updated');
    }

    public function destroy(string $id)
    {
        $data = Datamanajer::findOrFail($id);
        $data->delete();

        return redirect()->route('manajer.index')->with('success', 'Data Manajer successfully deleted');
    }

    public function delete($id){
        $data = Datamanajer::find($id);

        if (!$data) {
            return response()->json('manajer')->with(['error' => 'Data Manajer tidak ditemukan']);

        }
        $data->delete();
        return redirect()->route('manajer.index')->with(['success' => 'Data Manajer berhasil dihapus']);
        
    }
}
