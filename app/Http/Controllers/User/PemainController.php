<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PemainRequest;
use App\Models\Pemain;
use App\Models\pjsekolah;
use Illuminate\Http\Request;
use App\Models\DataSekolah;

class PemainController extends Controller
{
    public function index(Request $request)
    {
        $data = Pemain::with('sekolah')->get();
        $sekolahs = DataSekolah::all();
    
        // Pass the variables in a single array
        return view('pages.admin.user.pemain.index', ['data' => $data, 'sekolahs' => $sekolahs]);
    }
    
    

    public function create()
    {
        $data = Pemain::with('sekolah')->get();
        $sekolahs = DataSekolah::all();
        return view('pages.admin.user.pemain.create', ['data' => $data, 'sekolahs' => $sekolahs]);
    }
    

    public function show($id) {
        $data = Pemain::all();
    
        if (!$data) {
            abort(404);
        }
    
        return view('Pages.admin.user.pemain.index', compact('data'));
    }



    public function store(PemainRequest $request)
{
    $data = $request->all();
    $data['data_sekolah_id'] = $request->input('data_sekolah_id');
    $generatedIds = $this->generatePjSekolahAndTimId($data['data_sekolah_id']);
    $data['pj_sekolah_id'] = $generatedIds['pj_sekolah_id'];
    $data['pj_tim_id'] = $generatedIds['pj_tim_id'];
    $data['data_pelatih_id'] = $generatedIds['data_pelatih_id'];
    $data['data_official_id'] = $generatedIds['data_official_id'];
    $data['data_manajer_id'] = $generatedIds['data_manajer_id'];
    $data['data_supportersiswa_id'] = $generatedIds['data_supportersiswa_id'];
    $data['data_supporterguru_id'] = $generatedIds['data_supporterguru_id'];
    $data['data_pjmedis_id'] = $generatedIds['data_pjmedis_id'];
    $data['data_jurnallis_id'] = $generatedIds['data_jurnallis_id'];
    $data['Ijasah'] = $request->file('Ijasah')->store(
        'user/pemain/ijasah',
        'public'
    );

    $data['Rapor'] = $request->file('Rapor')->store(
        'user/pemain/rapor',
        'public'
    );
    $data['Kartu_Siswa'] = $request->file('Kartu_Siswa')->store(
        'user/pemain/kartusiswa',
        'public'
    );
    $data['Foto'] = $request->file('Foto')->store(
        'user/pemain/foto',
        'public'
    );

    // Create the Pemain instance
    Pemain::create($data);
    $data = Pemain::with('sekolah')->get();

    $sekolahs = DataSekolah::with('pemain')->get();

    // return redirect()->route('pemain.create', ['data' => $pemain, 'sekolahs' => $sekolahs])->with('success', 'Pemain successfully created');

    return view('pages.admin.user.pemain.index',compact('sekolahs','data'))->with('success', 'Pemain successfully created');
}


        private function generatePjSekolahAndTimId($dataSekolahId)
    {
        // Example logic: You may query the PjSekolah model or use a mapping
        $pjSekolah = Pemain::where('data_sekolah_id', $dataSekolahId)->first();

        $generatedIds = [
            'pj_sekolah_id' => ($pjSekolah) ? $pjSekolah->data_sekolah_id : null,
            'pj_tim_id' => ($pjSekolah) ? $pjSekolah->data_sekolah_id : null,
            'data_pelatih_id' => ($pjSekolah) ? $pjSekolah->data_sekolah_id : null,
            'data_official_id' => ($pjSekolah) ? $pjSekolah->data_sekolah_id : null,
            'data_manajer_id' => ($pjSekolah) ? $pjSekolah->data_sekolah_id : null,
            'data_supportersiswa_id' => ($pjSekolah) ? $pjSekolah->data_sekolah_id : null,
            'data_supporterguru_id' => ($pjSekolah) ? $pjSekolah->data_sekolah_id : null,
            'data_pjmedis_id' => ($pjSekolah) ? $pjSekolah->data_sekolah_id : null,
            'data_jurnallis_id'=> ($pjSekolah) ? $pjSekolah->data_sekolah_id : null,
        ];

        // If no matching PjSekolah is found, you can handle it accordingly
        return $generatedIds;
    }



    public function edit(string $id)
    {
        $data= Pemain::findOrFail($id);
        $sekolahs  = DataSekolah::all();


        return view('pages.admin.user.pemain.edit', [
            'data' => $data,
            'sekolahs' => $sekolahs,
        ]);
    }

    public function update(PemainRequest $request, string $id)
    {
        $data = $request->all();
        $data['Ijasah'] = $request->file('Ijasah')->store(
            'user/pemain/ijasah',
            'public'

        );
        $data['Rapor'] = $request->file('Rapor')->store(
            'user/pelatih/rapor',
            'public'
        );
        $data['Kartu_Siswa'] = $request->file('Kartu_Siswa')->store(
            'user/pemain/kartusiswa',
            'public'

        );
        $data['Foto'] = $request->file('Foto')->store(
            'user/pemain/foto',
            'public'
        );
    

        $item = Pemain::findOrFail($id);

        $item->update($data);

        return redirect()->route('pemain.index')->with('success', 'Data Pemain  successfully updated');
    }

    public function destroy(string $id)
    {
        $data = Pemain::findOrFail($id);
        $data->delete();

        return redirect()->route('pemain.index')->with('success', 'Data pemain successfully deleted');
    }



    public function delete($id){
        $data = Pemain::find($id);

        if (!$data) {
            return response()->json('pemain')->with(['error' => 'Data Sekolah tidak ditemukan']);

        }
        $data->delete();
        return redirect()->route('pemain.index')->with(['success' => 'Pj Sekolah berhasil dihapus']);
        
    }
}
