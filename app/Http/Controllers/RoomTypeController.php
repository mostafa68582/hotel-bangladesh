<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomType;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.room_type.index');
    }

    public function fetchRoomType()
    {
       $room_types = RoomType::all();
       return response()->json([
            'status'     => true,
            'room_types' => $room_types
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
        $request->validate([
            'name'                => 'required',
            'cost_per_day'        => 'required',
            'discount_percentage' => 'required',
            'size'                => 'required',
            'man_adult'           => 'required',
            'guest'               => 'required',
            'description'         => 'required',
            'room_service'        => 'required',
            'status'              => 'required',
        ]);
        try{

            RoomType::create([
                'name'                => $request->name,
                'cost_per_day'        => $request->cost_per_day,
                'discount_percentage' => $request->discount_percentage,
                'size'                => $request->size,
                'man_adult'           => $request->man_adult,
                'guest'               => $request->guest,
                'description'         => $request->description,
                'room_service'        => $request->room_service,
                'status'              => $request->status,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Data insert Successfully'
            ]);
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
        $room_type =  RoomType::where('id', $id)->first();
        return response()->json([
            'status'    => true,
            'room_type' => $room_type
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room_type =  RoomType::where('id', $id)->first();
        return response()->json([
            'status'    => true,
            'room_type' => $room_type
        ]);
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
            'name'                => 'required',
            'cost_per_day'        => 'required',
            'discount_percentage' => 'required',
            'size'                => 'required',
            'man_adult'           => 'required',
            'guest'               => 'required',
            'description'         => 'required',
            'room_service'        => 'required',
            'status'              => 'required',
        ]);
        try{
            $room_type = RoomType::where('id', $id)->first();
            $room_type->update([
                'name'                => $request->name,
                'cost_per_day'        => $request->cost_per_day,
                'discount_percentage' => $request->discount_percentage,
                'size'                => $request->size,
                'man_adult'           => $request->man_adult,
                'guest'               => $request->guest,
                'description'         => $request->description,
                'room_service'        => $request->room_service,
                'status'              => $request->status,
            ]);
            return response()->json([
                'status'  => true,
                'message' => 'Data Update Success'
            ]);

        }catch(\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
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
            $room_type = RoomType::where('id', $id)->first();
            $room_type ->delete();
            return response()->json([
                'status' => true,
                'message' => 'Room type delete successfully'
            ]);
        }catch(\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

}
