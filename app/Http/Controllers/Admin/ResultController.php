<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ResultRequest;
use App\Http\Requests\Admin\UpdateResultRequest;

class ResultController extends Controller
{
    public function index()
    {
        // Ambil semua hasil pertandingan
        $results = Result::all();

        // Kelompokkan hasil pertandingan berdasarkan round
        $groupedResults = $results->groupBy('round');

        return view('pages.admin.results.index', compact('groupedResults'));
    }

    public function create()
    {
        return view('pages.admin.results.create');
    }

    public function store(ResultRequest $request)
    {
        $data = $request->all();
        $data['team1_logo'] = $request->file('team1_logo')->store(
            'admin/results/team1_logo',
            'public'
        );
        $data['team2_logo'] = $request->file('team2_logo')->store(
            'admin/results/team2_logo',
            'public'
        );

        Result::create($data);

        return redirect()->route('results.index')->with('success', 'Hasil futsal berhasil ditambahkan.');
    }

    public function show($id)
    {
        $result = Result::findOrFail($id);

        return view('pages.admin.results.show', [
            'result' => $result
        ]);
    }

    public function edit($id)
    {
        $result = Result::findOrFail($id);

        return view('pages.admin.results.edit', [
            'result' => $result
        ]);
    }

    public function update(UpdateResultRequest $request, $id)
    {
        $data = $request->all();

        if ($request->hasFile('team1_logo')) {
            $data['team1_logo'] = $request->file('team1_logo')->store(
                'admin/results/team1_logo',
                'public'
            );
        }

        if ($request->hasFile('team2_logo')) {
            $data['team2_logo'] = $request->file('team2_logo')->store(
                'admin/results/team2_logo',
                'public'
            );
        }

        $result = Result::findOrFail($id);
        $result->update($data);

        return redirect()->route('results.index')->with('success', 'Hasil futsal berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $result = Result::findOrFail($id);
        $result->delete();

        return redirect()->route('results.index')->with('success', 'Hasil futsal berhasil dihapus.');
    }
}
