<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'email',
        'phone_number',
        'password',
        'user_type',
        'avatar',
        'status',
        'api_token',
        'otp_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    static function generateOtp(): string
    {
        $number = uniqid();
        $varray = str_split($number);
        $len = sizeof($varray);
        $otp = array_slice($varray, $len - 5, $len);
        $otp = implode(",", $otp);
        $otp = str_replace(',', '', $otp);
        return strtoupper($otp);
    }

    static function generateApiToken(): string
    {
        return hash('sha256', Str::random(60));
    }
}
