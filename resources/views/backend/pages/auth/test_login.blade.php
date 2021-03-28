<!--This is orginal login page and login.blade.php duplicate page for test-->
@extends('backend.master')
@section('content')

<div class="card">
    <div class="card-body">
        <form action="" method="post" id="loginForm">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script>
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
    </script>
@endpush
