<?php

namespace App\Http\Controllers;

use App\Facility;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.facilities');
    }

    public function fetchFacilities(){
        try{
            $facilities = Facility::where('status', 'active')->get();
            return response()->json([
                'status'     => true,
                'facilities' => $facilities
            ]);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Something Went Wrong!'
            ]);
        }
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
        // Validation
        $request->validate([
            'name'   => 'required|unique:facilities',
            'icon'   => 'required|mimes:jpeg,png,jpg,gif',
            'status' => 'required'
        ]);
        try{
            // get file Name
            $file_Name = pathinfo($request->icon->getClientOriginalName(), PATHINFO_FILENAME);
            // get file extention
            $extension = pathinfo($request->icon->getClientOriginalName(), PATHINFO_EXTENSION);
            // create unique file name
            $full_file_name = $file_Name."-".time().'.'.$request->icon->getClientOriginalExtension();
            //file upload using img intervention
            $img_uploads  = Image::make($request->icon)->resize(60, 44)->save(public_path('uploads/facilities/').$full_file_name);
            // store the value into the database based on file uploads
            if($img_uploads){
                Facility::create([
                    'name'   => $request->name,
                    'icon'   => $full_file_name,
                    'status' => $request->status
                ]);
                return response()->json([
                    'status' => true,
                    'message' => 'Data Insert Done'
                ]);
            }
        }catch(\Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'something Went Wrong'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\facilities  $facilities
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{

            $facilities = Facility::where('id', $id)->first();

            return $facilities;

        }catch(\Exception $e){

            return $e->getMessage();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\facilities  $facilities
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       try{

          $facilities = Facility::where('id', $id)->first();
           return response()->json([
                'facilities' => $facilities,
                'img' => asset( 'uploads/facilities/' . $facilities->icon)
           ]);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\facilities  $facilities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $facilities = Facility::where('id', $request->id)->first();
            $file_Name  = $facilities->icon;
            $data = [
                'name'   => $request->name,
                'status' => $request->status,
            ];
            if($request->icon){
                if(file_exists(public_path('uploads/facilities/'.$file_Name))){
                    unlink(public_path('uploads/facilities/'.$file_Name));
                }
                // get file Name
                $file_Name = pathinfo($request->icon->getClientOriginalName(), PATHINFO_FILENAME);
                // get file extention
                $extension = pathinfo($request->icon->getClientOriginalName(), PATHINFO_EXTENSION);
                // create unique file name
                $full_file_name = $file_Name."-".time().'.'.$request->icon->getClientOriginalExtension();
                //file upload using img intervention
                $img_uploads = Image::make($request->icon)->resize(100, 100)->save(public_path('uploads/facilities/').$full_file_name);
                if($img_uploads){
                    $data = [
                        'icon' => $full_file_name
                    ];
                }
            }
            $facilities->update($data);
            return response()->json([
                'status' => true,
                'facilities' => $facilities,
                'message' => 'update Successfully!',
            ]);
        }catch(\Exception $e){
           return response()->json([
                'message' => 'something went Wrong!'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\facilities  $facilities
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $facilities = Facility::where('id', $id)->first();
            $file_Name = $facilities->icon;
           if( $facilities->delete()){
               if(file_exists(public_path('uploads/facilities/'.$file_Name))){
                   unlink(public_path('uploads/facilities/'.$file_Name));
               }
           }
            return response()->json([
                'status'  => true,
                'message' => 'delete successfully'
            ]);
        }catch (\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    public function facilitiesSearch(Request $request)
    {
        if(isset($request->name))
        {
            $facilities = Facility::where('name', 'LIKE', '%' . $request->get('name'). '%' );
        }
        if(isset($request->status)){
            $facilities = Facility::where('status', $request->status);
        }
        $facilities =  $facilities->get();
        return $facilities;

    }
}
