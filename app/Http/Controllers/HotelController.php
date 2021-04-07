<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.pages.hotels.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('backend.pages.hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'name' => 'required|min:3',
            'phone' => 'required|min:11|max:15',
            'email' => 'required|email',
            'website' => 'required',
            'star_rating' => 'required|min:1|max:5',
            'location' => 'required|min:5',
            'street_address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'zip_code' => 'required|integer',
            'district' => 'required',
            'thana' => 'required',
            'payment_method' => 'required',
            'remark' => 'required',
            'description' => 'required',
        ]);

        $hotel = Hotel::create($validated + [
                'user_id' => auth()->id(),
                'hotel_id' => strtoupper(mb_substr($request->name, 0, 5) . rand(1000, 9999))
            ]);

        return back()->with(['success' => 'Hotel Created Successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Hotel $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Hotel $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Hotel $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Hotel $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
