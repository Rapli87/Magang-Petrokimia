<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Http\Requests\Admin\GalleryRequest;
use App\Http\Requests\Admin\UpdateGalleryRequest;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'asc')->get();
        return view('pages.admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('pages.admin.galleries.create');
    }

    public function store(GalleryRequest $request)
    {
        $gallery = new Gallery;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/admin/galleries', $imageName);

            $gallery->image = 'storage/admin/galleries/' . $imageName;
        }

        $gallery->title = $request->input('title');

        $gallery->save();

        return redirect()->route('galleries.index')->with('success', 'Gallery berhasil ditambahkan.');
    }

    public function edit(Gallery $gallery)
    {
        return view('pages.admin.galleries.edit', compact('gallery'));
    }

    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/admin/galleries', $imageName);

            $gallery->image = 'storage/admin/galleries/' . $imageName;
        }

        $gallery->title = $request->input('title');

        $gallery->save();

        return redirect()->route('galleries.index')->with('success', 'Gallery berhasil di perbarui.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Gallery berhasil dihapus.');
    }
}
