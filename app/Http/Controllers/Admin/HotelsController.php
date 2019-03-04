<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHotelRequest;
use App\Http\Requests\UpdateHotelRequest;

class HotelsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('hotel_access'), 403);
        $hotels = Hotel::all();

        return view('admin.hotels.index', compact('hotels'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('hotel_create'), 403);
        $countries = Country::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.hotels.create', compact('countries'));
    }

    public function store(StoreHotelRequest $request)
    {
        abort_unless(\Gate::allows('hotel_create'), 403);

        $hotel = Hotel::create($request->all());

        return redirect()->route('admin.hotels.index');
    }

    public function edit(Hotel $hotel)
    {
        abort_unless(\Gate::allows('hotel_edit'), 403);
        $countries = Country::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $hotel->load('country');

        return view('admin.hotels.edit', compact('countries', 'hotel'));
    }

    public function update(UpdateHotelRequest $request, Hotel $hotel)
    {
        abort_unless(\Gate::allows('hotel_edit'), 403);

        $hotel->update($request->all());

        return redirect()->route('admin.hotels.index');
    }

    public function show(Hotel $hotel)
    {
        abort_unless(\Gate::allows('hotel_show'), 403);

        $hotel->load('country');

        return view('admin.hotels.show', compact('hotel'));
    }

    public function destroy(Hotel $hotel)
    {
        abort_unless(\Gate::allows('hotel_delete'), 403);

        $hotel->delete();

        return back();
    }
}
