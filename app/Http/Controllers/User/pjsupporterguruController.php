<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Http\Requests\User\PjsupporterguruRequest;
use App\Models\Datasuporguru;
use Illuminate\Http\Request;
use App\Models\DataSekolah;

class pjsupporterguruController extends Controller
{
    public function index(Request $request)
    {
        $data = Datasuporguru::with('sekolah')->get();
        $sekolah = DataSekolah::all();
        return view('pages.admin.user.Pj-Supporter-Guru.index', ['data' => $data],['sekolah' => $sekolah]);
    }
    

    public function create()
    {
        $data = Datasuporguru::with('sekolah')->get();
        $sekolahs = DataSekolah::all();
        return view('pages.admin.user.Pj-Supporter-Guru.create',['data'=> $data, 'sekolahs' => $sekolahs]);
    }

    public function show($id) {
        $data = Datasuporguru::all();
    
        if (!$data) {
            abort(404);
        }
    
        return view('Pages.admin.user.Pj-Supporter-Guru.index', compact('data'));
    }



    public function store(PjsupporterguruRequest $request)
    {
        $data = $request->all();

        $data['data_supporterguru_id'] = $request->input('data_supporterguru_id');
      
        $data['foto'] = $request->file('foto')->store(
            'user/pjsupporterguru/foto',
            'public'
        );
        $data['ktp'] = $request->file('ktp')->store(
            'user/pjsupporterguru/ktp',
            'public'
        );
       
        Datasuporguru::create($data);

        $sekolahs = DataSekolah::all();

        return redirect()->route('Pj-Supporter-Guru.index',compact('sekolahs'))->with('success', 'pjsupporterguru successfully created');
    }


    public function edit(string $id)
    {
        $data= Datasuporguru::findOrFail($id);
        $sekolahs  = DataSekolah::all();


        return view('pages.admin.user.Pj-Supporter-Guru.edit', [
            'data' => $data,
            'sekolahs' => $sekolahs,
        ]);
    }

    public function update(PjsupporterguruRequest $request, string $id)
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
    

        $item = Datasuporguru::findOrFail($id);

        $item->update($data);

        return redirect()->route('Pj-Supporter-Guru.index')->with('success', 'Data supporter guru  successfully updated');
    }

    public function destroy(string $id)
    {
        $data = Datasuporguru::findOrFail($id);
        $data->delete();

        return redirect()->route('Pj-Supporter-Guru.index')->with('success', 'Data pemain successfully deleted');
    }

    public function delete($id){
        $data = Datasuporguru::find($id);

        if (!$data) {
            return response()->json('Pj-Supporter-Guru')->with(['error' => 'Data pjsupporterguru tidak ditemukan']);

        }
        $data->delete();
        return redirect()->route('Pj-Supporter-Guru.index')->with(['success' => 'Data pjsupporterguru berhasil dihapus']);
        
    }
}
