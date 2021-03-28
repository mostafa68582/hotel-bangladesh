<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.users.index');
    }

    public function fetchUser(){

        try{
            $users = User::all();
            return response()->json([
                'status' => true,
                'users'  => $users
            ]);

        }catch(\Excetion $e){
            
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
        return view('backend.pages.users.create');
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
            'first_name' => 'required',
            'last_name'  => 'required',
            'user_name'  => 'bail|required|unique:users',
            'email'      => 'bail|required|email|unique:users',
            'phone'      => 'bail|required|unique:users',
            'image'      => 'bail|required|mimes:jpeg,png,jpg,gif',
            'password'   => 'bail|required|min:4|max:8',
        ]);

        try{
            // get file Name
            $file_Name = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
            // create unique file name
            $full_file_name = $file_Name."-".time().'.'.$request->image->getClientOriginalExtension();
            //file upload using img intervention
            $img_uploads  = Image::make($request->image)->resize(200, 200)->save(public_path('uploads/user_profile_pic/').$full_file_name);
            // store the value into the database based on file uploads
            if($img_uploads){
                User::create([
                    'first_name' => $request->first_name,
                    'last_name'  => $request->last_name,
                    'user_name'  => $this->generateUsername($request->user_name),
                    'email'      => $request->email,
                    'phone'      => $request->phone,
                    'image'      => $full_file_name,
                    'password'   => bcrypt($request->password),
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return response()->json([
            'user' => $user,
            'img' => asset( 'uploads/user_profile_pic/' . $user->image)
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

            'email' => "email|unique:users,email,$request->id",
        ]);

        try{

            $user = User::where('id', $request->id)->first();
            $file_Name  = $user->image;
            $data = [
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email'      => $request->email,
                'phone'      => $request->phone,
                'user_type'  => $request->user_type,
            ];
            if($request->image){
                if(file_exists(public_path('uploads/user_profile_pic/'.$file_Name))){
                    unlink(public_path('uploads/user_profile_pic/'.$file_Name));
                }
                // get file Name
                $file_Name = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
                // create unique file name
                $full_file_name = $file_Name."-".time().'.'.$request->image->getClientOriginalExtension();
                //file upload using img intervention
                $img_uploads = Image::make($request->image)->resize(100, 100)->save(public_path('uploads/user_profile_pic/').$full_file_name);
                if($img_uploads){
                    $data = [
                        'image' => $full_file_name
                    ];
                }
            }
            $user->update($data);

            return response()->json([
                'status' => true,
                'message' => 'update Successfully!',
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
        try {
            $user = User::where('id', $id)->first();

            $file_Name = $user->image;

           if( $user->delete()){
               if(file_exists(public_path('uploads/user_profile_pic/'.$file_Name))){

                   unlink(public_path('uploads/user_profile_pic/'.$file_Name));
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

    function generateUsername($name)
    {
        $number = uniqid();
        $varray = str_split($number);
        $len = sizeof($varray);
        $otp = array_slice($varray, $len-5, $len);
        $otp = implode(",", $otp);
        $otp = str_replace(',', '', $otp);
        return \Str::slug($name) .'_'. $otp;
    }
    function generateOtp()
    {
        $number = uniqid();
        $varray = str_split($number);
        $len = sizeof($varray);
        $otp = array_slice($varray, $len-5, $len);
        $otp = implode(",", $otp);
        $otp = str_replace(',', '', $otp);
        return  $otp;
    }
}
