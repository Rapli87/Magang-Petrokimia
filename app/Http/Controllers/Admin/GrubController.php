<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GroupKlasemenRequest;
use Illuminate\Http\Request;
use App\Models\Grub;

class GrubController extends Controller
{
    
    public function index(Request $request)
    {
    
        $Grub = Grub::all();
        return view('pages.admin.Group-klasmen.index',['Grub' => $Grub]);
    }

    public function store(GroupKlasemenRequest $request)
    {
        $data = $request->all();
    

        Grub::create($data);

        return redirect()->route('Group-klasmen.create')->with('success', 'Tambah Group successfully created');
    }

    public function create()
    {
        return view('pages.admin.Group-klasmen.create');
    }


    public function edit(string $id)
    {
        $item = Grub::findOrFail($id);


        return view('pages.admin.Group-Klasmen.edit', [
            'item' => $item
        ]);
    }

    public function update(GroupKlasemenRequest $request, string $id)
    {
        $data = $request->all();
    

        $item = Grub::findOrFail($id);
        $item->update($data);

        return redirect()->route('Group-klasmen.index')->with('success', 'Group KLasmen  successfully updated');
    }

    public function destroy(string $id)
    {
        $item = Grub::findOrFail($id);
        $item->delete();

        return redirect()->route('Group-klasmen.index')->with('success', 'Group Klasmen successfully deleted');
    }



}
