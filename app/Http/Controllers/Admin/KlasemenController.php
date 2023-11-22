<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\KlasemenRequest;
use App\Http\Requests\Admin\UpdateKlasemenRequest;
use App\Models\Klasemen;

class KlasemenController extends Controller
{
    public function index()
    {
        $klasemens = Klasemen::orderBy('group')
        ->orderBy('points', 'desc')
        ->orderBy('goal_difference', 'desc')
        ->orderBy('goals_for', 'desc')
        ->get();

    return view('pages.admin.klasemens.index', compact('klasemens'));
    }

    public function create()
    {
        // Tampilkan form untuk menambahkan data klasemen
        return view('pages.admin.klasemens.create');
    }

    public function store(KlasemenRequest $request)
    {
        // Hitung poin, selisih gol, dan tentukan peringkat
        $points = $request->won * 3 + $request->drawn;
        $goal_difference = $request->goals_for - $request->goals_against;

        $rank = Klasemen::where('group', $request->group)
            ->orderBy('points', 'desc')
            ->orderBy('goal_difference', 'desc')
            ->orderBy('goals_for', 'desc')
            ->max('rank');

        // Simpan data ke database menggunakan mass assignment
        Klasemen::create([
            'group' => $request->group,
            'rank' => $rank + 1,
            'team_name' => $request->team_name,
            'goal_difference' => $goal_difference,
            'points' => $points,
        ]);

        return redirect()->route('group-klasemens.index')->with('success', 'Data klasemen berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $klasemen = Klasemen::findOrFail($id);
        return view('pages.admin.klasemens.edit', compact('klasemen'));
    }

    public function update(UpdateKlasemenRequest $request, $id)
    {
        // Hitung poin, selisih gol, dan tentukan peringkat
        $points = $request->won * 3 + $request->drawn;
        $goal_difference = $request->goals_for - $request->goals_against;

        $rank = Klasemen::where('group', $request->group)
            ->orderBy('points', 'desc')
            ->orderBy('goal_difference', 'desc')
            ->orderBy('goals_for', 'desc')
            ->max('rank');

        // Update data ke database
        Klasemen::findOrFail($id)->update([
            'group' => $request->group,
            'rank' => $rank + 1,
            'team_name' => $request->team_name,
            'played' => $request->played,
            'won' => $request->won,
            'drawn' => $request->drawn,
            'lost' => $request->lost,
            'goals_for' => $request->goals_for,
            'goals_against' => $request->goals_against,
            'goal_difference' => $goal_difference,
            'points' => $points,
        ]);

        return redirect()->route('group-klasemens.index')->with('success', 'Data klasemen berhasil diperbarui.');
    }

    public function show($id)
    {
        $klasemen = Klasemen::findOrFail($id);

        return view('pages.admin.klasemens.show', compact('klasemen'));
    }

    public function destroy($id)
    {
        Klasemen::findOrFail($id)->delete();

        return redirect()->route('group-klasemens.index')->with('success', 'Data klasemen berhasil dihapus.');
    }

    // Tambahkan metode CRUD lainnya (edit, update, delete) sesuai kebutuhan
}

