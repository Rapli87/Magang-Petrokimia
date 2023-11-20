<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\OfficialRequest;
use App\Models\DataOfficial;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    public function index(Request $request)
    {
        $Official = DataOfficial::with('grub')->get();
        return view('pages.admin.user.Official.index', ['Official' => $Official]);
    }
    

    public function create()
    {
        return view('pages.admin.user.Official.create');
    }

    public function store(OfficialRequest $request)
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
       
        DataOfficial::create($data);

      

        return redirect()->route('Official.index')->with('success', 'Official successfully created');
    }


    public function edit(string $id)
    {
        $data= DataOfficial::findOrFail($id);


        return view('pages.admin.user.Official.edit', [
            'data' => $data
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
