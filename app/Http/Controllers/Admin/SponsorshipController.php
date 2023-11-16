<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sponsorhip;
use App\Http\Requests\Admin\SponsorshipRequest;
use Illuminate\Http\Request;

class SponsorshipController extends Controller
{
    public function index()
    {
        $sponsorships = Sponsorhip::take(6)->orderBy('created_at', 'asc')->get();
        return view('pages.admin.sponsorships.index', compact('sponsorships'));
    }

    public function create()
    {
        return view('pages.admin.sponsorships.create');
    }

    public function store(SponsorshipRequest $request)
    {
        $sponsorship = new Sponsorhip();

        if ($request->hasFile('image_sponsorship')) {
            $image = $request->file('image_sponsorship');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/admin/sponsorships', $imageName);

            $sponsorship->image_sponsorship = 'storage/admin/sponsorships/' . $imageName;
        }

        $sponsorship->name_sponsorship = $request->input('name_sponsorship');

        $sponsorship->save();

        return redirect()->route('sponsorships.index')->with('success', 'Sponsorship berhasil ditambahkan.');
    }

    public function edit(Sponsorhip $sponsorship)
    {
        return view('pages.admin.sponsorships.edit', compact('sponsorship'));
    }

    public function update(SponsorshipRequest $request, Sponsorhip $sponsorship)
    {
        if ($request->hasFile('image_sponsorship')) {
            $image = $request->file('image_sponsorship');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/admin/sponsorships', $imageName);

            $sponsorship->image_sponsorship = 'storage/admin/sponsorships/' . $imageName;
        }

        $sponsorship->name_sponsorship = $request->input('name_sponsorship');

        $sponsorship->save();

        return redirect()->route('sponsorships.index')->with('success', 'Sponsorship berhasil diperbarui.');
    }

    public function destroy(Sponsorhip $sponsorship)
    {
        $sponsorship->delete();
        return redirect()->route('sponsorships.index')->with('success', 'Sponsorship berhasil dihapus.');
    }
}
