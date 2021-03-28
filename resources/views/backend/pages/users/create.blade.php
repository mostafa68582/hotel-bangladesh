@extends('backend.master')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6"><h4>Registration Users</h4></div>
                <div class="col-6 text-right"> <a href="{{ route ('users.index') }}" class="btn btn-primary">All Users</a></div>
            </div>
            <hr>

            <form  method="POST" id="createForm">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input class="form-control" id="first_name" type="text" name="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input class="form-control" id="last_name" type="text" name="last_name">
                </div>
                <div class="form-group">
                    <label for="user_name">User Name</label>
                    <input class="form-control" id="user_name" type="text" name="user_name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" type="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input class="form-control" id="phone" type="number" name="phone">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" type="password" name="password">
                </div>
                <div class="form-group">
                    <label for="image">Profile Picture</label>
                    <input class="form-control" id="image" type="file" name="image">
                </div>
                <button type="submit" class="btn btn-primary"> Save </button>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
	<script>
		/*Form reset function*/
        function resetForm() {
            $("#myForm").trigger("reset")
        }
        /* For Store Users*/
        let url = '{{ url("/users") }}'
        $("#createForm").on('submit', function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            let first_name = $("#first_name").val()
            let last_name = $("#last_name").val()
            let user_name = $("#user_name").val()
            let email = $("#email").val()
            let phone = $("#phone").val()
            let image = $("#image").val();
            let formData = new FormData(this);
            if (first_name.trim() == '') return toastr.error('First Name is required')
            if (last_name.trim() == '') return toastr.error('Last Name is required')
            if (user_name.trim() == '') return toastr.error('User Name is required')
            if (email.trim() == '') return toastr.error('Email is required')
            if (phone.trim() == '') return toastr.error('Phone is required')
            if (image.trim() == '') return toastr.error('Image is required')

            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    if (data.status) {
                        this.reset()
                        toastr.success(data.message)
                        window.location = '/users'
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
