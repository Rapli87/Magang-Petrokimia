<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TimelineRequest;
use App\Http\Requests\Admin\UpdateTimelineRequest;
use App\Models\Timeline;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Time;

class TimelineController extends Controller
{
    public function index()
    {
        $timelines = Timeline::all(); // Mengambil semua timelines dari database
        return view('pages.admin.timelines.index', compact('timelines'));
    }

    public function create()
    {
        return view('pages.admin.timelines.create');
    }

    public function store(TimelineRequest $request)
    {
        $timeline = new Timeline;

        if ($request->hasFile('image_timeline')) {
            $imageTimeline = $request->file('image_timeline');
            $imageTimelineName = time() . '.' . $imageTimeline->getClientOriginalExtension();
            $imageTimeline->storeAs('public/admin/timelines', $imageTimelineName);

            $timeline->image_timeline = 'storage/admin/timelines/' . $imageTimelineName;
        }

        $timeline->title_timeline = $request->input('title_timeline');
        $timeline->date_timeline = $request->input('date_timeline');
        $timeline->description = $request->input('description');

        $timeline->save();

        return redirect()->route('timelines.index')->with('success', 'Timeline berhasil ditambahkan.');
    }

    public function edit(Timeline $timeline)
    {
        return view('pages.admin.timelines.edit', compact('timeline'));
    }

    public function update(UpdateTimelineRequest $request, Timeline $timeline)
    {
        if ($request->hasFile('image_timeline')) {
            $imageTimeline = $request->file('image_timeline');
            $imageTimelineName = time() . '.' . $imageTimeline->getClientOriginalExtension();
            $imageTimeline->storeAs('public/admin/timelines', $imageTimelineName);

            $timeline->image_timeline = 'storage/admin/timelines/' . $imageTimelineName;
        }

        $timeline->title_timeline = $request->input('title_timeline');
        $timeline->date_timeline = $request->input('date_timeline');
        $timeline->description = $request->input('description');

        $timeline->save();

        return redirect()->route('timelines.index')->with('success', 'Timeline berhasil diperbarui.');
    }

    public function destroy(Timeline $timeline)
    {
        $timeline->delete();

        return redirect()->route('timelines.index')->with('success', 'Timeline berhasil dihapus.');
    }
}
