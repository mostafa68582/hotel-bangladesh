<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="It is a hotel booking website dashboard. It use for insert data in admin website.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="hosting, web hosting">
    <meta name="author" content="Al-azim himu">
    <!--== css link ==-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> <!--===== font awesome css link =====-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> <!--===== bootstrap css link =====-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/loginForm.css')}}"> <!--===== style.css link =====-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/responsive.css')}}"> <!--===== responsive css link =====-->
    <!--== site title ==-->
    <title>Booking</title>
    <!--== favicon ==-->
    <link rel="icon" href="{{asset('backend/assets/favicon/favicon.ico')}}" type="icon/ico" sizes="48x48">
</head>
<body>
    <div class="wrapper"> <!--========== full content wrapper start ==========-->
 <!--========== header section end ==========-->

      <!--========== side bar icon end ==========-->

        <!--========== side navigation bar end ==========-->

        <div class="main_content"> <!--========== main content start ==========-->
            <section class="user_data"> <!--========== user data start ==========-->
                <form action=""> <!--==========user data form start ==========-->
                   <!--========== user profile data heading end ==========-->
                    <section class="login_form_wrapper"> <!--========== login form start ==========-->
                        <div class="login_form_content_wrapp">
                            <form action="" method="post" id="loginForm">
                                <div class="form_content">
                                    <div class="form_head">
                                        <h4>Admin Login</h4>
                                        <p>Please enter your user information</p>
                                    </div>
                                    <div class="form_body_content">
                                        <input class="loging_input_field" type="email" placeholder="user email" id="email" name="email" required>
                                        <input class="loging_input_field" type="password" placeholder="Password" id="password" name="password" required>
                                        <div class="form_check_box">  
                                            <input type="checkbox" id="remember">
                                            <label for="remember">remember me</label>
                                        </div>
                                        <button type="submit" class="sing_in_btn">Sign in</button>
                                    </div>
                                    <div class="form_foorer_content">
                                        <button class="log_for_create_an_acc_btn">create an account</button>
                                        <button>forgot password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section> <!--========== login form end ==========-->
                    
                </form> <!--==========data form end ==========-->
            </section> <!--========== user data end ==========-->
        </div> <!--========== main content end ==========-->
        <!--========== footer end ==========-->
    </div> <!--========== full content wrapper end ==========-->
    <div class="wrapper_overlay"><div></div></div> <!--========== wrapper overlay ==========-->
    <!--== javascript link ==-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!--===== jquery link =====-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> <!--===== bootstrap js link =====-->
    <script type="text/javascript" src="{{asset('backend/assets/js/loginForm.js')}}"></script> <!--===== custom js link =====-->

    <script>
        @push('scripts')
        /*Form reset function*/
        function resetForm() {
            $("#loginForm").trigger("reset")
        }
        /* For Store Users*/
        let url = '{{ url("/login") }}'

        $("#loginForm").on('submit', function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            e.preventDefault();
            let email = $("#email").val()
            let password = $("#password").val()
            let formData = new FormData(this);
            if (email.trim() == '') return toastr.error('Email is required')
            if (password.trim() == '') return toastr.error('Password is required')

            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: (data) => {
                    if (data.status) {
                        toastr.success(data.message)
                        window.location = '/otp'
                    } else {
                        toastr.error(data.message)
                    }
                },
                error: function(error) {
                    console.log(error);
                    Object.keys(error.responseJSON.errors).forEach((key) => {
                        toastr.error(error.responseJSON.errors[key][0]);
                    })
                }
            });
        })
        @endpush
    </script>


</body>
</html>