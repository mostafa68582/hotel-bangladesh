<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.images.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.images.create');
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
            'room_type_id' => 'required',
            'image'        => 'required',
            'image.*'      => 'mimes:jpeg,png,jpg',
            'caption'      => 'required',
            'status'       => 'required',
       ]);
       try{
            if($request->hasfile('image')){
                if(sizeof($request->image) > 2){
                    return response()->json([
                        'status' => false,
                        'message' => 'Only two Image Allowed to Upload'
                    ]);
                }
                foreach($request->file('image') as $file)
                {
                    $file_Name      = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $full_file_name = $file_Name."-".\Str::random(20)."-".time().'.'.$file->getClientOriginalExtension();
                    /*$img_uploads= $file->move(public_path().'/uploads/user_img/', $full_file_name);*/
                    $img_uploads  = Image::make($file)->resize(200, 250)->save(public_path('uploads/room_picture/').$full_file_name);
                    if($img_uploads){
                        Image::create([
                            'room_type_id' => $request->room_type_id,
                            'image'        => $full_file_name,
                            'caption'      => $request->caption,
                            'status'       => $request->status,
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
