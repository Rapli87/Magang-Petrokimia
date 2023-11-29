<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CompetitionRequest;
use App\Http\Requests\Admin\UpdateCompetitionRequest;
use Illuminate\Http\Request;
use App\Models\Competition;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = Competition::orderBy('match_number')->get();
        return view('pages.admin.competitions.index', compact('competitions'));
    }

    public function create()
    {
        return view('pages.admin.competitions.create');
    }

    public function store(CompetitionRequest $request)
    {
        // Create a new competition record
        Competition::create($request->all());

        // Redirect to the competitions list
        return redirect()->route('competitions.index')->with('success', 'Competition created successfully.');
    }
    
    public function show($id)
    {
        $competition = Competition::findOrFail($id);
        return view('pages.admin.competitions.show', compact('competition'));
    }

    public function edit($id)
    {
        $competition = Competition::findOrFail($id);
        return view('pages.admin.competitions.edit', compact('competition'));
    }

    public function update(UpdateCompetitionRequest $request, $id)
    {

        $request->validated();
        
        // Update the competition record
        $competition = Competition::findOrFail($id);
        $competition->update($request->all());

        // Redirect to the competitions list
        return redirect()->route('competitions.index')->with('success', 'Competition updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the competition record
        Competition::findOrFail($id)->delete();


        // Redirect to the competitions list
        return redirect()->route('competitions.index')->with('success', 'Competition deleted successfully.');
    }
}
