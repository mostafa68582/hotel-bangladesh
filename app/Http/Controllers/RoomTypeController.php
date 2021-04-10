<?php

namespace App\Http\Controllers;

use App\Facility;
use App\FacilityRoomType;
use App\RoomType;
use App\RoomTypeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $facilities = Facility::where('type', 'room')->oldest()->get();

        return view('backend.pages.room-type.create', compact('facilities'));
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
            'name' => 'required',
            'costs_per_day' => 'required',
            'size' => 'required',
            'capacity' => 'required',
            'max_adult' => 'required',
            'max_child' => 'required',
            'description' => 'required',
            'bed_type' => 'required',
            'room_service' => 'required',
            'status' => 'required',
            'facilities' => 'required',
            'facilities.*' => 'integer',
            'images' => 'required',
            'images.*' => 'image',
        ]);

        $roomType = RoomType::create([
            'name' => $request->name,
            'costs_per_day' => $request->costs_per_day,
            'size' => $request->size,
            'capacity' => $request->capacity,
            'max_adult' => $request->max_adult,
            'max_child' => $request->max_child,
            'description' => $request->description,
            'bed_type' => $request->bed_type,
            'room_service' => $request->room_service,
            'status' => $request->status
        ]);

        $facilities = $request->facilities;

        if (!empty($facilities)) {
            foreach ($facilities as $facility) {
                FacilityRoomType::create([
                    'room_type_id' => $roomType->id,
                    'facility_id' => $facility,
                    'status' => 'active'
                ]);
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $caption = $image->getClientOriginalName();
                $name = Str::uuid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('storage') . '/room-type-images/', $name);
                $path = '/storage/room-type-images/' . $name;
                $image = Image::make(public_path('storage') . '/room-type-images/' . $name)
                    ->resize(2048, 2048, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                $image->save(public_path('storage') . '/room-type-images/' . $name, '80', 'jpg');
                $paths[] = $path;
            }
        }

        if (!empty($paths)) {
            foreach ($paths as $path) {
                RoomTypeImage::create([
                    'room_type_id' => $roomType->id,
                    'path' => $path
                ]);
            }
        }

        return back()->with(['success' => 'Room Type Created Successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\RoomType $roomType
     * @return \Illuminate\Http\Response
     */
    public function show(RoomType $roomType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\RoomType $roomType
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomType $roomType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\RoomType $roomType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomType $roomType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\RoomType $roomType
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomType $roomType)
    {
        //
    }
}
