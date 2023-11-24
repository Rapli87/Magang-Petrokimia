<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PjtimRequest;
use App\Models\PjTim;
use Illuminate\Http\Request;

class PjtimController extends Controller
{
    public function index(Request $request)
    {
        $Pjtim = PjTim::with('grub')->get();
        return view('pages.admin.user.Pj-Tim.index', ['pjtim' => $Pjtim]);
    }
    

    public function create()
    {
        return view('pages.admin.user.Pj-Tim.create');
    }

    public function show($id) {
        $pjtim = PjTim::with('grub')->find($id);
    
        if (!$pjtim) {
            abort(404);
        }
    
        return view('Pages.admin.user.Pj-Tim.show', compact('pjtim'));
    }


    public function store(PjtimRequest $request)
    {
        $data = $request->all();
        $data['pj_tim_id'] = $request->input('pj_tim_id');
        $data['foto'] = $request->file('foto')->store(
            'user/pjtim/foto',
            'public'
        );

        $data['ktp'] = $request->file('ktp')->store(
            'user/pjtim/ktp',
            'public'
        );
       
        PjTim::create($data);

      

        return redirect()->route('Pj-Tim.index')->with('success', 'Pj Tim successfully created');
    }


    public function edit(string $id)
    {
        $data= PjTim::findOrFail($id);


        return view('pages.admin.user.Pj-Tim.edit', [
            'data' => $data
        ]);
    }

    public function update(PjtimRequest $request, string $id)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store(
            'user/pjtim/foto',
            'public'
        );
        $data['ktp'] = $request->file('ktp')->store(
            'user/pjtim/ktp',
            'public'
        );
    

        $item = pjtim::findOrFail($id);

        $item->update($data);

        return redirect()->route('Pj-Tim.index')->with('success', 'Pj Tim  successfully updated');
    }

    public function destroy(string $id)
    {
        $data = pjtim::findOrFail($id);
        $data->delete();

        return redirect()->route('Pj-Tim.index')->with('success', 'Pj Tim successfully deleted');
    }

    public function delete($id){
        $data = pjtim::find($id);

        if (!$data) {
            return response()->json('Pj-Tim')->with(['error' => 'Data Pj Tim tidak ditemukan']);

        }
        $data->delete();
        return redirect()->route('Pj-Tim.index')->with(['success' => 'Data Pj tIM berhasil dihapus']);
        
    }

}
