<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JadwalRequest;
use App\Models\Grub;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
    
        $Jadwal = Jadwal::with('grub')->get();
        return view('pages.admin.Jadwal.index',['Jadwal' => $Jadwal]); 


    }

    public function create()
    {
        return view('pages.admin.Jadwal.create');
    }

    public function store(JadwalRequest $request)
    {
        $data = $request->all();
       
        Jadwal::create($data);

        return redirect()->route('Jadwal.index')->with('success', 'Jadwal successfully created');
    }


    public function edit(string $id)
    {
        $item = Jadwal::findOrFail($id);


        return view('pages.admin.Jadwal.edit', [
            'item' => $item
        ]);
    }

    public function update(JadwalRequest $request, string $id)
    {
        $data = $request->all();
    

        $item = Jadwal::findOrFail($id);
        $item->update($data);

        return redirect()->route('Jadwal.index')->with('success', 'Jadwal  successfully updated');
    }

    public function destroy(string $id)
    {
        $item = Jadwal::findOrFail($id);
        $item->delete();

        return redirect()->route('Jadwal.index')->with('success', 'Jadwal successfully deleted');
    }

    
}
