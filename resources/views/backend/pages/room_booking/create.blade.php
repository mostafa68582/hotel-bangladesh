@extends('backend.master')
@section('content')
<!-- add start -->
<div class="container my-5" style="margin-top: 8rem!important;">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6"><h4>Room Booking </h4></div>
                <div class="col-6 text-right"> <a href="{{ route ('room-booking.index') }}" class="btn btn-primary">All Room Booking</a></div>
            </div>
            <hr>
            <form method="post" id="addForm">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="room_id">Choose Room</label>
                        <select id="room_id" class="form-control room_name" name="room_id">
                            <option value="choose">Choose...</option>
                        </select>
                    </div>
<!--                     <div class="form-group">
                        <label for="name">User </label>
                        <input type="text" class="form-control" id="name" placeholder="User Name" name="name">
                    </div> -->
                    <div class="form-group">
                        <label for="arrival_date">Arrival Date</label>
                        <input type="date" class="form-control" id="arrival_date" placeholder="Arrival Date" name="arrival_date">
                    </div>
                    <div class="form-group">
                        <label for="departure_date">Departure Date</label>
                        <input type="date" class="form-control" id="departure_date" placeholder="Departure Date" name="departure_date">
                    </div>
                    <div class="form-group">
                        <label for="room_cost">Room Cost</label>
                        <input type="number"  class="form-control" id="room_cost" name="room_cost" placeholder="Room Cost" >
                    </div>
                    <div class="form-group">
                        <label for="payment">Payment</label>
                        <input type="text"  class="form-control" id="payment" name="payment" placeholder="Room Payment" >
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" class="form-control" name="status">
                            <option selected>Choose...</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm" id="add-room">+ Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End add  -->
@endsection
@push('scripts')
    <script>
        let rooms = []
        let get_Room_url = '{{ url("/fetch/room") }}'
    function fetchRoom() {
        $.ajax({
            url: get_Room_url,
            type: "GET",
            dataType: "JSON",
            success: (res) => {
                if (res.status) {
                    rooms = res.rooms
                    createSelectOption(rooms)
                } else {
                    toastr.error(res.message)
                }
            },
            error: (e) => {
                console.log(e)
            }
        });
    }
    function createSelectOption(data) {
        let seleectOption = $('.room_name');
        for (let i = 0; i < data.length; i++) {
            let option = `
                    <option value="${data[i].id}">${data[i].name }</option>
                `
            seleectOption.append(option)
        }
    }
   fetchRoom()
        /* For Store RoomBooking*/
        let url = '{{ url("/room-booking") }}'
        $("#addForm").on('submit', function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            let room_id        = $("#room_id").val()
            let arrival_date   = $("#arrival_date").val()
            let departure_date = $("#departure_date").val()
            let room_cost      = $("#room_cost").val()
            let payment        = $("#payment").val()
            let status         = $("#status").val()
            let formData = new FormData(this);
            if (room_id.trim() == '') return toastr.error('Room Name is required')
            if (arrival_date.trim() == '') return toastr.error('Arrival date is required')
            if (departure_date.trim() == '') return toastr.error('Departure date is required')
            if (room_cost.trim() == '') return toastr.error('Room cost is required')
            if (payment.trim() == '') return toastr.error('Payment is required')
            if (status == 'Choose...') return toastr.error('Status is required')

            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    console.log(data)
                    if (data.status) {
                        this.reset()
                        toastr.success(data.message)
                        /*window.location = '/users'*/
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
