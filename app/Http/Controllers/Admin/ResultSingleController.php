<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ResultSingle;
use App\Models\Result;
use App\Http\Requests\Admin\ResultSingleRequest;
use App\Http\Requests\Admin\UpdateResultSingleRequest;

class ResultSingleController extends Controller
{
    public function index()
    {
        // Ambil semua data result single
        $resultSingles = ResultSingle::all();

        // Group data by round
        $groupedResultSingles = $resultSingles->groupBy('round');

        // Pernyataan debugging
        // dd($groupedResultSingles);

        return view('pages.admin.result-singles.index', compact('groupedResultSingles'));
    }

    public function create()
    {
        // Ambil semua hasil pertandingan
        $results = Result::all();
        return view('pages.admin.result-singles.create', compact('results'));
    }

    public function store(ResultSingleRequest $request)
    {
        $data = $request->all();
    
        // Proses menyimpan gambar logo tim 1
        if ($request->hasFile('team1_logo')) {
            $data['team1_logo'] = $request->file('team1_logo')->store(
                'admin/result_singles/team1_logo',
                'public'
            );
        }
    
        // Proses menyimpan gambar logo tim 2
        if ($request->hasFile('team2_logo')) {
            $data['team2_logo'] = $request->file('team2_logo')->store(
                'admin/result_singles/team2_logo',
                'public'
            );
        }
    
        // Tambahkan logika untuk menyimpan data file atau informasi lain yang diperlukan
    
        ResultSingle::create($data);
    
        return redirect()->route('result-singles.index')->with('success', 'Data result single berhasil ditambahkan.');
    }

    public function show($id)
    {
        $resultSingle = ResultSingle::findOrFail($id);

        return view('pages.admin.result-singles.show', [
            'resultSingle' => $resultSingle
        ]);
    }

    public function edit($id)
    {
        $resultSingle = ResultSingle::findOrFail($id);
    
        // Ambil data results untuk dropdown
        $results = Result::all();
    
        return view('pages.admin.result-singles.edit', [
            'resultSingle' => $resultSingle,
            'results' => $results, // Menambahkan variabel results ke tampilan
        ]);
    }

    public function update(UpdateResultSingleRequest $request, $id)
    {
        $data = $request->all();

        // Tambahkan logika untuk menyimpan data file atau informasi lain yang diperlukan

        $resultSingle = ResultSingle::findOrFail($id);
        $resultSingle->update($data);

        return redirect()->route('result-singles.index')->with('success', 'Data result single berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $resultSingle = ResultSingle::findOrFail($id);
        $resultSingle->delete();

        return redirect()->route('result-singles.index')->with('success', 'Data result single berhasil dihapus.');
    }
}
