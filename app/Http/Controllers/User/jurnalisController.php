<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\jurnalisRequest;
use App\Models\jurnalis;
use Illuminate\Http\Request;
use App\Models\DataSekolah;

class jurnalisController extends Controller
{
    public function index(Request $request)
    {
        $data = jurnalis::with('sekolah')->get();
        $sekolah = DataSekolah::all();
        return view('pages.admin.user.Jurnalis.index', ['data' => $data],['sekolah' => $sekolah]);
    }
    

    public function create()
    {
        $data = jurnalis::with('sekolah')->get();
        $sekolahs = DataSekolah::all();
        return view('pages.admin.user.Jurnalis.create',['data'=> $data, 'sekolahs' => $sekolahs]);
    }

    public function show($id) {
        $data = jurnalis::all();
    
        if (!$data) {
            abort(404);
        }
    
        return view('Pages.admin.user.Jurnalis.index', compact('data'));
    }



    public function store(jurnalisRequest $request)
    {
        $data = $request->all();
      
        $data['foto'] = $request->file('foto')->store(
            'user/jurnalis/foto',
            'public'
        );
        $data['ktp'] = $request->file('ktp')->store(
            'user/jurnalis/ktp',
            'public'
        );
       
        jurnalis::create($data);
        $sekolahs = DataSekolah::all();

      

        return redirect()->route('Jurnalis.index',compact('sekolahs'))->with('success', 'Jurnalis successfully created');
    }


    public function edit(string $id)
    {
        $data= jurnalis::findOrFail($id);


        return view('pages.admin.user.Jurnalis.edit', [
            'data' => $data
        ]);
    }

    public function update(jurnalisRequest $request, string $id)
    {
        $data = $request->all();
        $data['data_jurnallis_id'] = $request->input('data_jurnallis_id');
        $data['foto'] = $request->file('foto')->store(
            'user/jurnalis/foto',
            'public'

        );
        $data['ktp'] = $request->file('ktp')->store(
            'user/jurnalis/ktp',
            'public'
        );
    

        $item = jurnalis::findOrFail($id);

        $item->update($data);

        return redirect()->route('Jurnalis.index')->with('success', 'Data Jurnalis  successfully updated');
    }

    public function destroy(string $id)
    {
        $data = jurnalis::findOrFail($id);
        $data->delete();

        return redirect()->route('Jurnalis.index')->with('success', 'Data Jurnalis successfully deleted');
    }

    public function delete($id){
        $data = jurnalis::find($id);

        if (!$data) {
            return response()->json('Jurnalis')->with(['error' => 'Data Jurnalis tidak ditemukan']);

        }
        $data->delete();
        return redirect()->route('Jurnalis.index')->with(['success' => 'Data Jurnalis berhasil dihapus']);
        
    }
}
