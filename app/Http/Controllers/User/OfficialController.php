<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\OfficialRequest;
use App\Models\DataOfficial;
use Illuminate\Http\Request;
use App\Models\DataSekolah;

class OfficialController extends Controller
{
    public function index(Request $request)
    {
        $Official = DataOfficial::with('grub','sekolah')->get();
        $sekolah = DataSekolah::all();
        return view('pages.admin.user.Official.index', ['Official' => $Official],['sekolah' => $sekolah]);
    }
    

    public function create()
    {
        $official = DataOfficial::with('sekolah')->get();
        $sekolahs = DataSekolah::all();
        return view('pages.admin.user.Official.create',['official' => $official, 'sekolahs' => $sekolahs]);
    }

    
    public function show($id) {
        $official = DataOfficial::with('grub')->find($id);
    
        if (!$official) {
            abort(404);
        }
    
        return view('Pages.admin.user.official.show', compact('official'));
    }

    public function store(OfficialRequest $request)
    {
        $data = $request->all();
        $data['data_official_id'] = $request->input('data_official_id');
        $data['foto'] = $request->file('foto')->store(
            'user/official/foto',
            'public'
        );

        $data['ktp'] = $request->file('ktp')->store(
            'user/official/ktp',
            'public'
        );
       
        DataOfficial::create($data);
        $sekolahs = DataSekolah::all();

      

        return redirect()->route('Official.index',compact('sekolahs'))->with('success', 'Official successfully created');
    }


    public function edit(string $id)
    {
        $data= DataOfficial::findOrFail($id);
        $sekolahs  = DataSekolah::all();


        return view('pages.admin.user.Official.edit', [
            'data' => $data,
            'sekolahs' => $sekolahs,
        ]);
    }

    public function update(OfficialRequest $request, string $id)
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
    

        $item = DataOfficial::findOrFail($id);

        $item->update($data);

        return redirect()->route('Official.index')->with('success', 'Official  successfully updated');
    }

    public function destroy(string $id)
    {
        $data = DataOfficial::findOrFail($id);
        $data->delete();

        return redirect()->route('Official.index')->with('success', 'Official successfully deleted');
    }

    public function delete($id){
        $data = DataOfficial::find($id);

        if (!$data) {
            return response()->json('Official')->with(['error' => 'Data Official tidak ditemukan']);

        }
        $data->delete();
        return redirect()->route('Official.index')->with(['success' => 'Data Official berhasil dihapus']);
        
    }
}
