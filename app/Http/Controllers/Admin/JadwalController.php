<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JadwalRequest;
use App\Models\DataSekolah;
use App\Models\Grub;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
    
        $Jadwal = Jadwal::with('group','sekolah')->get();
        return view('pages.admin.Jadwal.index',['Jadwal' => $Jadwal]); 


    }

// Controller
public function create()
{
    $sekolahs = DataSekolah::all();

    return view('pages.admin.Jadwal.create', compact('sekolahs'));
}


    public function store(JadwalRequest $request)
{



    $data = Jadwal::where('group', $request->group)
        ->orderBy('tanggal', 'desc')
        ->orderBy('mulai', 'desc')
        ->orderBy('selesai', 'desc')
        ->orderBy('tim', 'desc')
        ->orderBy('tim2', 'desc')

        ->max('status');

    Jadwal::create([
        'group' => $request->group,
        'tanggal' => $request->tanggal,
        'mulai' => $request->mulai,
        'tim' => $request->tim,
        'tim2' => $request->tim2,
        'selesai' => $request->selesai,
        'status' => $data,
    ]);

    $sekolahs = DataSekolah::all();
    return redirect()->route('Jadwal.index', compact('sekolahs'))->with('success', 'Jadwal successfully created');
}



public function edit(string $id)
{
    $item = Jadwal::findOrFail($id);
    $sekolahs = DataSekolah::all();

    return view('pages.admin.Jadwal.edit', [
        'item' => $item,
        'sekolahs' => $sekolahs,
    ]);
}


    public function update(JadwalRequest $request, string $id)
    {
        $data = $request->all();
        
        $item = Jadwal::findOrFail($id);
        $sekolahs = DataSekolah::all();
        $item->update($data);
    
        return redirect()->route('Jadwal.index', compact('item', 'sekolahs'))->with('success', 'Jadwal successfully updated');
    }
    

    public function destroy(string $id)
    {
        $item = Jadwal::findOrFail($id);
        $item->delete();

        return redirect()->route('Jadwal.index')->with('success', 'Jadwal successfully deleted');
    }

    
}
