<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\OtpSend;
use Illuminate\Support\Facades\Auth;
use Session;
class AuthController extends Controller
{
    public function getLogin(){
        return view('backend.pages.auth.login');
    }
    public function  postLogin(Request $request){
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required'
        ]);
        try {
            $user     = User::where('email', $request->email)->first();
            if ($user && \Hash::check($request->password, $user->password)) {
                $user->forceFill([
                    'otp_token' => $this->generateOtp(),
                ])->save();
                $otp = $user->otp_token;
                \Mail::to($user->email)->send(new OtpSend($otp));
                return response()->json([
                    'status'  => true,
                    'message' => 'We send You OTP In Your Phone and Email Use this before One minutes for login'
                ]);
            }else{
                return  response([
                    'status' => false,
                    'message' => 'Credetial Are invalid'
                ]);
            }

        }catch (\Exception $e){
            return  response([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function otp(){
        return view('backend.pages.auth.otp');
    }

    public function otpVerified(Request $request){
        $user = User::where('otp_token', $request->otp)->first();
        if($user){
            $send_time  =  $user->updated_at;
            $Now        =  \Carbon\Carbon::now();
            $diff_in_minutes = $send_time->diffInMinutes($Now);
            if( $diff_in_minutes > 5 ){
                return response()->json([
                    'message' => 'Otp Is expired'
                ]);
            }else{
                Auth::login($user);
                $auth_user = auth()->user();
                if ($auth_user) {
                    $token = \Str::random(60);
                    $user->forceFill([
                        'api_token' => hash('sha256', $token)
                    ])->save();
                    return response()->json([
                        'status'  => true,
                        'message' => 'Login Successfully!'
                    ]);
                }
            }
        }else{
            return response()->json([
                'message' => 'Otp Is Invalid'
            ]);
        }

    }
    public function sampleDashboard(){
        $user = Auth::user();
        return view('backend.pages.auth.simple',compact('user'));
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
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
