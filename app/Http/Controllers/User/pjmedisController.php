<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PjmedisRequest;
use App\Models\pjmedis;
use Illuminate\Http\Request;
use App\Models\DataSekolah;

class pjmedisController extends Controller
{
    public function index(Request $request)
    {
        $data = pjmedis::with('sekolah')->get();
        $sekolah = DataSekolah::all();
        return view('pages.admin.user.Pj-Medis.index', ['data' => $data],['sekolah' => $sekolah]);
    }
    

    public function create()
    {
        $data = pjmedis::with('sekolah')->get();
        $sekolahs = DataSekolah::all();
        return view('pages.admin.user.Pj-Medis.create',['data'=> $data, 'sekolahs' => $sekolahs]);
    }

    public function show($id) {
        $data = pjmedis::all();
    
        if (!$data) {
            abort(404);
        }
    
        return view('Pages.admin.user.Pj-Medis.index', compact('data'));
    }



    public function store(PjmedisRequest $request)
    {
        $data = $request->all();
      
        $data['foto'] = $request->file('foto')->store(
            'user/pjmedis/foto',
            'public'
        );
        $data['ktp'] = $request->file('ktp')->store(
            'user/pjmedis/ktp',
            'public'
        );
       
        pjmedis::create($data);
        $sekolahs = DataSekolah::all();
      

        return redirect()->route('Pj-Medis.index',compact('sekolahs'))->with('success', 'Pj-Medis successfully created');
    }


    public function edit(string $id)
    {
        $data= pjmedis::findOrFail($id);


        return view('pages.admin.user.Pj-Medis.edit', [
            'data' => $data
        ]);
    }

    public function update(PjmedisRequest $request, string $id)
    {
        $data = $request->all();
        $data['data_pjmedis_id'] = $request->input('data_pjmedis_id');
        $data['foto'] = $request->file('foto')->store(
            'user/pjmedis/foto',
            'public'

        );
        $data['ktp'] = $request->file('ktp')->store(
            'user/pjmedis/ktp',
            'public'
        );
    

        $item = pjmedis::findOrFail($id);

        $item->update($data);

        return redirect()->route('Pj-Medis.index')->with('success', 'Data Pj-Medis  successfully updated');
    }

    public function destroy(string $id)
    {
        $data = pjmedis::findOrFail($id);
        $data->delete();

        return redirect()->route('Pj-Medis.index')->with('success', 'Data Pj-Medis successfully deleted');
    }

    public function delete($id){
        $data = pjmedis::find($id);

        if (!$data) {
            return response()->json('Pj-Medis')->with(['error' => 'Data Pj-Medis  tidak ditemukan']);

        }
        $data->delete();
        return redirect()->route('Pj-Medis.index')->with(['success' => 'Data Pj-Medis berhasil dihapus']);
        
    }
}
