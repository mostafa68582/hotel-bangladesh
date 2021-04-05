<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\HotelImage;
use Intervention\Image\Facades\Image;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $hotels = Hotel::with('hotelImages')->get();
        return $hotels;
        return response()->json([
            'status' => true,
            'hotels' => $hotels
        ]);*/
        return view('backend.pages.hotels.hotels');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'hotel_name' => 'required',
            'hotel_phone' => 'required',
            'user_phone' => 'required',
            'hotel_email' => 'required',
            'user_email' => 'required',
            'web_url' => 'required',
            'star_rating' => 'required',
            'location' => 'required',
            'street_address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'district' => 'required',
            'thana' => 'required',
            'payment_method' => 'required',
            'hotel_type' => 'required',
            'description' => 'required',
            'status' => 'required',
            'hotel_id' => 'required',
            'remark' => 'required',
            //'image.*'        => 'mimes:jpeg,png,jpg',
            //'caption'        => 'required',
        ]);

        try {
            /*return getType($request->image);*/
            if ($request->hasfile('image')) {
                if (sizeof($request->image) > 5) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Only five Image Allowed to Upload'
                    ]);
                }
                $hotel = Hotel::create($request->all());
                foreach ($request->file('image') as $file) {
                    $file_Name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $full_file_name = $file_Name . "-" . \Str::random(20) . "-" . time() . '.' . $file->getClientOriginalExtension();
                    $img_uploads = Image::make($file)->resize(200, 250)->save(public_path('uploads/hotel_picture/') . $full_file_name);
                    if ($img_uploads) {
                        HotelImage::create([
                            'hotel_id' => $hotel->id,
                            'image' => $full_file_name,
                            'caption' => $request->caption,
                        ]);
                    }
                }
                return response()->json([
                    'status' => true,
                    'message' => 'Data insert Successfully'
                ]);
            }

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        try {
            $hotel = Hotel::with('hotelImages')->where('id', $id)->first();
            return response()->json([
                'status' => true,
                'hotel' => $hotel
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($id)
    {
        try {
            $hotel = Hotel::with('hotelImages')->where('id', $id)->first();
            return response()->json([
                'status' => true,
                'hotel' => $hotel
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        try {
            $hotel = Hotel::where('id', $id)->first();
            $hotel->update($request->all());
            return response()->json([
                'status' => true,
                'hotel' => $hotel
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $hotel = Hotel::where('id', $id)->first();
            $hotel->delete();
            return response()->json([
                'status' => true,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }
}
