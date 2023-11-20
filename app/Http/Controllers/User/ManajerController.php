<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\manajerRequest;
use App\Models\Datamanajer;
use Illuminate\Http\Request;

class ManajerController extends Controller
{
    public function index(Request $request)
    {
        $manajer = Datamanajer::with('grub')->get();
        return view('pages.admin.user.manajer.index', ['manajer' => $manajer]);
    }
    

    public function create()
    {
        return view('pages.admin.user.manajer.create');
    }

    public function show($id) {
        $manajer = Datamanajer::with('grub')->find($id);
    
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

      

        return redirect()->route('manajer.index')->with('success', 'Manajer successfully created');
    }


    public function edit(string $id)
    {
        $data= Datamanajer::findOrFail($id);


        return view('pages.admin.user.manajer.edit', [
            'data' => $data
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
