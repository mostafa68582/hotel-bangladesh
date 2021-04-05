<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomType;
use App\FacilityCategory;
use App\Facility;
use App\Image;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.room.index');
    }
    public function fetchRoom(){
        $all_rooms = Room::with('roomTypes')->get();
        $rooms = [];
        foreach($all_rooms as $singleRoom){
            array_push($rooms, [
                'id'             => $singleRoom->id,
                'room_type_name' => $singleRoom->roomTypes->name,
                'name'           => $singleRoom->name,
                'room_number'    => $singleRoom->room_number,
                'description'    => $singleRoom->description,
                'avaiable'       => $singleRoom->avaiable,
                'status'         => $singleRoom->status,
            ]);
        }
        return response()->json([
            'status' => true,
            'rooms' => $rooms
        ]);
    }

    public function fetchRoomType(){
        $room_type = RoomType::all();
        return response()->json([
            'status'    => true,
            'room_type' =>  $room_type
        ]);
    }
    public function fetchFacilitiesCategory(){
        $facilities_category = FacilityCategory::all();
        return response()->json([
            'status' => true,
            'facilities_category' => $facilities_category
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*return $request->selected_facilities;*/
    /*    $request->validate([
            'room_name'        => 'required',
            'room_number'      => 'required',
            'available'        => 'required',
            'description'      => 'required',
            'status'           => 'required',
            'bed_type'         => 'required',
            'type_name'        => 'required',
            'cost_per_day'     => 'required',
            'discount'         => 'required',
            'size'             => 'required',
            'max_adult'        => 'required',
            'room_type_status' => 'required',
            'image'            => 'required',
            'image.*'          => 'mimes:jpeg,png,jpg',
            'room_type_status' => 'required',
        ]);*/
        try{
            if($request->hasfile('image')){
                if(sizeof($request->image) > 2){
                    return response()->json([
                        'status' => false,
                        'message' => 'Only two Image Allowed to Upload'
                    ]);
                }
                $room_type = RoomType::create([
                    'name'                => $request->type_name,
                    'cost_per_day'        => $request->cost_per_day,
                    'discount_percentage' => $request->discount,
                    'size'                => $request->size,
                    'max_adult'           => $request->max_adult,
                    'max_guest'           => $request->max_guest,
                    'description'         => $request->description,
                    'status'              => $request->room_type_status
                ]);
                $room = Room::create([
                    'room_type_id' => $room_type->id,
                    'name'         => $request->room_name,
                    'room_number'  => $request->room_number,
                    'available'     => $request->available,
                    'bed_type'     => $request->bed_type,
                    'description'  => $request->description,
                    'status'       => $request->status,
                ]);
                    $facilites = json_decode($request->selected_facilities, true);
                    $facilities_category = FacilityCategory::all();
                    foreach($facilities_category as $category){
                        foreach($facilites[$category->name] as $facility){
                            Facility::create([
                                'facilities_cat_id' => $category->id,
                                'room_id'           => $room->id,
                                'name'              => $facility
                            ]);
                        }
                    }
                foreach($request->file('image') as $file)
                {
                    $file_Name      = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $full_file_name = $file_Name."-".\Str::random(20)."-".time().'.'.$file->getClientOriginalExtension();
                    $img_uploads  = Image::make($file)->resize(200, 250)->save(public_path('uploads/room_picture/').$full_file_name);
                    if($img_uploads){
                        Image::create([
                            'room_type_id' => $room_type->id,
                            'image'        => $full_file_name,
                        ]);
                    }
                }
                return response()->json([
                    'status' => true,
                    'message' => 'Data Insert Done'
                ]);
            }
        }catch(\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $room = Room::where('id', $id)->with('roomTypes')->first();
            return response()->json([
                'status' => true,
                'room'  => $room
            ]);
        }catch(\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $rooms = Room::where('id', $id)->with('roomTypes')->first();
            $room = [];
            array_push($room, [
                'id'             => $rooms->id,
                'room_type_id' => $rooms->roomTypes->id,
                'name'           => $rooms->name,
                'room_number'    => $rooms->room_number,
                'description'    => $rooms->description,
                'avaiable'       => $rooms->avaiable,
                'status'         => $rooms->status,
            ]);
            return response()->json([
                'status' => true,
                'room'  => $room
            ]);
        }catch(\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'room_type_id' => 'required',
            'name'         => 'required',
            'room_number'  => 'required',
            'description'  => 'required',
            'avaiable'     => 'required',
            'description'  => 'required',
            'status'       => 'required',
        ]);
        try{
            $room = Room::where('id', $id)->first();
            $room->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Update successfully'
            ]);
        }catch(\Exception $e){
            return response()->json([
                'messsage' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       try{
            $room = Room::where('id', $id)->first();
            $room->delete();
            return response()->json([
                'status' => true,
                'message' => 'Delete successfully'
            ]);
       }catch(\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
            ]);
       }
    }
}
