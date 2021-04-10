<?php

namespace App\Http\Controllers;

use App\Facility;
use App\FacilityHotel;
use App\Hotel;
use App\HotelImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $hotels = Hotel::with('user')->latest()->paginate(20);

        return view('backend.pages.hotels.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $facilities = Facility::where('type', 'hotel')->oldest('id')->get();

        return view('backend.pages.hotels.create', compact('facilities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        dd($request->all());

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
            'facilities' => 'required',
            'facilities.*' => 'integer',
            'images' => 'required',
            'images.*' => 'image',
        ]);

        $hotel = Hotel::create([
            'user_id' => auth()->id(),
            'hotel_id' => Hotel::generateHotelId($request->name),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'website' => $request->website,
            'star_rating' => $request->star_rating,
            'location' => $request->location,
            'street_address' => $request->street_address,
            'country' => $request->country,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'district' => $request->district,
            'thana' => $request->thana,
            'payment_method' => $request->payment_method,
            'remark' => $request->remark,
            'description' => $request->description,
        ]);

        $facilities = $request->facilities;

        if (!empty($facilities)) {
            foreach ($facilities as $facility) {
                FacilityHotel::create([
                    'hotel_id' => $hotel->id,
                    'facility_id' => $facility,
                    'status' => 'active'
                ]);
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $caption = $image->getClientOriginalName();
                $name = Str::uuid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('storage') . '/hotel-images/', $name);
                $path = '/storage/hotel-images/' . $name;
                $image = Image::make(public_path('storage') . '/hotel-images/' . $name)
                    ->resize(2048, 2048, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                $image->save(public_path('storage') . '/hotel-images/' . $name, '80', 'jpg');
                $paths[] = $path;
            }
        }

        if (!empty($paths)) {
            foreach ($paths as $path) {
                HotelImage::create([
                    'hotel_id' => $hotel->id,
                    'path' => $path
                ]);
            }
        }

        return back()->with(['success' => 'Hotel Created Successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Hotel $hotel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Hotel $hotel)
    {
//        $facilities = Facility::where('type', 'hotel')->oldest()->get();

//        $hotel = Hotel::findOrFail($hotel)->with('hotelImages', 'facilities')->get();
//        return $hotel;

        return view('backend.pages.hotels.show', compact('hotel'));
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
