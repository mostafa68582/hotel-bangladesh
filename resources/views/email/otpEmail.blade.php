@component('mail::message')
# Introduction

This is a secret otp use this to login ur account

 <p>{{ $otp }}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
