<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PjsupportersiswaRequest;
use App\Models\Datasuportersiswa;
use Illuminate\Http\Request;

class pjsupportersiswaController extends Controller
{
    public function index(Request $request)
    {
        $data = Datasuportersiswa::all();
        return view('pages.admin.user.Pj-Supporter-Siswa.index', ['data' => $data]);
    }
    

    public function create()
    {
        return view('pages.admin.user.Pj-Supporter-Siswa.create');
    }

    public function show($id) {
        $data = Datasuportersiswa::all();
    
        if (!$data) {
            abort(404);
        }
    
        return view('Pages.admin.user.Pj-Supporter-Siswa.index', compact('data'));
    }



    public function store(PjsupportersiswaRequest $request)
    {
        $data = $request->all();
      
        $data['foto'] = $request->file('foto')->store(
            'user/pjsupportersiswa/foto',
            'public'
        );
        $data['ktp'] = $request->file('ktp')->store(
            'user/pjsupportersiswa/ktp',
            'public'
        );
       
        Datasuportersiswa::create($data);

      

        return redirect()->route('Pj-Supporter-Siswa.index')->with('success', 'Pj-Supporter-Siswa successfully created');
    }


    public function edit(string $id)
    {
        $data= Datasuportersiswa::findOrFail($id);


        return view('pages.admin.user.Pj-Supporter-Siswa.edit', [
            'data' => $data
        ]);
    }

    public function update(PjsupportersiswaRequest $request, string $id)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store(
            'user/pjsupportersiswa/foto',
            'public'

        );
        $data['ktp'] = $request->file('ktp')->store(
            'user/pjsupportersiswa/ktp',
            'public'
        );
    

        $item = Datasuportersiswa::findOrFail($id);

        $item->update($data);

        return redirect()->route('Pj-Supporter-Siswa.index')->with('success', 'Data Pj-Supporter-Siswa  successfully updated');
    }

    public function destroy(string $id)
    {
        $data = Datasuportersiswa::findOrFail($id);
        $data->delete();

        return redirect()->route('Pj-Supporter-Siswa.index')->with('success', 'Data Pj-Supporter-Siswa successfully deleted');
    }

    public function delete($id){
        $data = Datasuportersiswa::find($id);

        if (!$data) {
            return response()->json('Pj-Supporter-Siswa')->with(['error' => 'Data Pj-Supporter-Siswa tidak ditemukan']);

        }
        $data->delete();
        return redirect()->route('Pj-Supporter-Siswa.index')->with(['success' => 'Data Pj-Supporter-Siswa berhasil dihapus']);
        
    }
}
