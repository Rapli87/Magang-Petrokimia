<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PjsekolahRequest;
use App\Models\pjsekolah;
use Illuminate\Http\Request;

class PjsekolahController extends Controller
{
    //
    public function index(Request $request)
    {
        $PjSekolah = pjsekolah::with('grub')->get();
        return view('pages.admin.user.Pj-Sekolah.index', ['pjsekolah' => $PjSekolah]);
    }
    

    public function create()
    {
        return view('pages.admin.user.Pj-Sekolah.create');
    }

    public function show($id) {
        $pjsekolah = pjsekolah::with('grub')->find($id);
    
        if (!$pjsekolah) {
            abort(404);
        }
    
        return view('Pages.admin.user.Pj-Sekolah.show', compact('pjsekolah'));
    }


    public function store(PjsekolahRequest $request)
    {
        $data = $request->all();
        $data['pj_sekolah_id'] = $request->input('pj_sekolah_id');
        $data['filerekomendasi'] = $request->file('filerekomendasi')->store(
            'admin/user/pjsekolah/filerekomendasi',
            'public'
        );
       
        pjsekolah::create($data);

      

        return redirect()->route('Pj-Sekolah.index')->with('success', 'Pj Sekolah successfully created');
    }


    public function edit(string $id)
    {
        $data= pjsekolah::findOrFail($id);


        return view('pages.admin.user.Pj-Sekolah.edit', [
            'data' => $data
        ]);
    }

    public function update(PjsekolahRequest $request, string $id)
    {
        $data = $request->all();
    

        $item = pjsekolah::findOrFail($id);
        $item->update($data);

        return redirect()->route('Pj-Sekolah.index')->with('success', 'Pj Sekolah  successfully updated');
    }

    public function destroy(string $id)
    {
        $item = pjsekolah::findOrFail($id);
        $item->delete();

        return redirect()->route('Pj-Sekolah.index')->with('success', 'Pj Sekolah successfully deleted');
    }

    public function delete($id){
        $data = pjsekolah::find($id);

        if (!$data) {
            return response()->json('Pj-Sekolah')->with(['error' => 'Data Sekolah tidak ditemukan']);

        }
        $data->delete();
        return redirect()->route('Pj-Sekolah.index')->with(['success' => 'Pj Sekolah berhasil dihapus']);
        
    }

}
