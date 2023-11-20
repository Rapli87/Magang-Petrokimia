<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BaganKlasemenRequest;
use App\Models\Grub;
use Illuminate\Http\Request;

class BaganChampionshipController extends Controller
{
    public function index()
    {

        $bagan = Grub::all();
        return view('pages.admin.Bagan-Championship.index',['bagan'=> $bagan]);
    }

    public function show()
    {

        $bagan = Grub::all();
        return view('pages.admin.Bagan-Championship.show',['bagan'=> $bagan]);
    }


    public function create()
    {
        return view('pages.admin.Bagan-championship.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BaganKlasemenRequest $request)
    {
        $data = $request->all();
     

        grub::create($data);


        return redirect()->route('Bagan-Championship.index')->with('success', 'Upcoming Match successfully created');
    }

    
    public function edit(string $id)
    {
        $item = Grub::findOrFail($id);


        return view('pages.admin.Bagan-Championship.edit', [
            'item' => $item
        ]);
    }

    public function update(BaganKlasemenRequest $request, string $id)
    {
        $data = $request->all();
    

        $item = Grub::findOrFail($id);
        $item->update($data);

        return redirect()->route('Bagan-Championship.index')->with('success', 'Bagan Championship  successfully updated');
    }

    public function destroy(string $id)
    {
        $item = Grub::findOrFail($id);
        $item->delete();

        return redirect()->route('Bagan-Championship.index')->with('success', 'Bagan Champpionship successfully deleted');
    }

}
