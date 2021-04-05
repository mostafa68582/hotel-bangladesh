<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomBooking;
use App\Room;

class RoomBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.room_booking.index');
    }
    public function fetchRoomBooking(){
        $room_booking = RoomBooking::with('room', 'user')->get();
        return response()->json([
            'status'         => true,
            'room_booking' => $room_booking
        ]);
    }

    public function getRoom(){
        $rooms = Room::all();
        return response()->json([
            'status' => true,
            'rooms'  => $rooms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.room_booking.create');
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
            'room_id'        => 'required',
            'arrival_date'   => 'required',
            'departure_date' => 'required',
            'room_cost'      => 'required',
            'payment'        => 'required',
            'status'         => 'required',
        ]);
        try{
            RoomBooking::create(array_merge(
                $request->all(),
                [
                    'user_id' => auth()->id()
                ]
            ));
            return response([
                'status' => true,
                'message' => 'Data insert Success'
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
        try{
            $room_booking = RoomBooking::where('id', $id)->first();
            return response()->json([
                'status' => true,
                'room_booking'  => $room_booking
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
            $room_booking = RoomBooking::where('id', $id)->with('room','user')->first();
            return response()->json([
                'status' => true,
                'room_booking'  => $room_booking
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
            'room_id'        => 'required',
            'arrival_date'   => 'required',
            'departure_date' => 'required',
            'room_cost'      => 'required',
            'payment'        => 'required',
            'status'         => 'required',
        ]);
        try{
            $room_booking = RoomBooking::where('id', $id)->first();
            $room_booking->update($request->all());
            return response([
                'status' => true,
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
            $room_booking = RoomBooking::where('id', $id)->first();
            $room_booking->delete();
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
