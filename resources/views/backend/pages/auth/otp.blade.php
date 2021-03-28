@extends('backend.master')
@section('content')

<div class="card">
    <div class="card-body">
        <form action="" method="post" id="otpForm">
            <div class="form-group">
                <label for="otp">Enter Your Otp</label>
                <input type="text" class="form-control" id="otp" name="otp">
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
            $("#otpForm").trigger("reset")
        }
        /* For Otp */
        let url = '{{ url("otp/verified") }}'
        $("#otpForm").on('submit', function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            let otp = $("#otp").val()
            let formData = new FormData(this);
            if (otp.trim() == '') return toastr.error('Otp is required')
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: (data) => {
                    console.log(data)
                    if (data.status) {
                        toastr.success(data.message)
                        window.location = '/auth/dashboard'
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
