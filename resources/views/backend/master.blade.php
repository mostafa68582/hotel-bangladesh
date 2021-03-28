<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="It is a hotel booking website dashboard. It use for insert data in admin website.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="hosting, web hosting">
    <meta name="author" content="Al-azim himu">
    <!--== css link ==-->
    @include("backend.layouts.css")
    <!--===== responsive css link =====-->
    <!--== site title ==-->
   <meta name="csrf-token" content="{{ csrf_token() }}" />
    @stack('style')
    <title>Hotel Booking System</title>
    <!--== favicon ==-->
    <link rel="icon" href="assets/favicon/favicon.ico" type="icon/ico" sizes="48x48">
</head>
<body>
    <div class="wrapper"> <!--========== full content wrapper start ==========-->
        <!--========== header section start ==========-->
         @include('backend.layouts.navbar')
         <!--========== header section end ==========-->

            <!--========== side navigation bar start ==========-->
       @include("backend.layouts.sidebar")
        <!--========== side navigation bar end ==========-->
            <!--========== data table start ==========-->
        <div class="main_content"> <!--========== main content start ==========-->
            @yield('content')
        </div> <!--========== main content end ==========-->
        <!--==========footer start ==========-->
        @include("backend.layouts.footer")
         <!--========== footer end ==========-->
    </div> <!--========== full content wrapper end ==========-->
    <div class="wrapper_overlay"><div></div></div> <!--========== wrapper overlay ==========-->
    <!--== javascript link ==-->
     @include("backend.layouts.scripts")
    @stack('scripts')
    <script type="text/javascript">
        @if (session()->has('success'))
            toastr.success(`{{ session()->get('success') }}`)
        @elseif (session()->has('error'))
            toastr.error(`{{ session()->get('error') }}`)
        @endif
    </script>
</body>
</html>
