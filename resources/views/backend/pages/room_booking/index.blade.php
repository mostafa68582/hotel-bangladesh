@extends('backend.master')
@section('content')
<div class="container my-5" style="margin-top: 8rem!important;">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6"><h4>Room Type</h4></div>
                <div class="col-6 text-right"> <a href="{{ route('room-booking.create') }}"  class="btn btn-primary">Create Room</a></div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped table-inverse table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Room Name</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Arrival data</th>
                                <th scope="col">Departure Date</th>
                                <th scope="col">Room Cost</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                        </tbody>
                    </table>
                    <!-- Paginate -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="updateForm">
                <input type="hidden" name="edit_id" value="" id ="booking_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="room_id">Chose Room Name</label>
                        <select id="room_id" class="form-control room_name" name="room_id">
                            <option value="choose">Choose...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_user_name">User Name</label>
                        <input type="text" disabled class="form-control" id="edit_user_name" placeholder="Room Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="edit_arrival_date">Arraival Date</label>
                        <input type="date" class="form-control" id="edit_arrival_date" placeholder="Room Number" name="arrival_date">
                    </div>
                    <div class="form-group">
                        <label for="edit_departure_date">Departure</label>
                        <input type="date" class="form-control" id="edit_departure_date" name="departure_date" placeholder="Departure Date">
                    </div>
                    <div class="form-group">
                        <label for="edit_room_cost">Room Cost</label>
                        <input type="text" class="form-control" id="edit_room_cost" name="room_cost" placeholder="Room Cost">
                    </div>
                    <div class="form-group">
                        <label for="edit_payment">Payment</label>
                        <input type="text" class="form-control" id="edit_payment" name="payment" placeholder="Room Payment">
                    </div>
                    <div class="form-group">
                        <label for="edit_status">Status</label>
                        <select id="edit_status" class="form-control" name="status">
                            <option selected>Choose...</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm" id="update-room-booking">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Edit Modal -->
@endsection

@push('style')
<style>

</style>
@endpush

@push('scripts')
    <script>
        let room_booking = []
        let fetch_url = '{{ url("/fetch/room-booking") }}'
        function fetchRoomBooking() {
            $.ajax({
                url: fetch_url,
                type: "GET",
                dataType: "JSON",
                success: (res) => {
                    if (res.status) {
                        room_booking = res.room_booking
                        createTbody(room_booking)
                    } else {
                        toastr.error(res.message)
                    }
                },
                error: (e) => {
                    console.log(e)
                }
            });
        }
    fetchRoomBooking()
    /*create table body with data*/
    function createTbody(data) {
        let tBody = $('#myTable');
        tBody.empty()
        for (let i = 0; i < data.length; i++) {
            let row = `
                    <tr>
                        <th scope="row">${i+1}</th>
                        <td>${data[i].room.map(r => r.name).join(',')}</td>
                        <td>${data[i].user.user_name}</td>
                        <td>${data[i].arrival_date}</td>
                        <td>${data[i].departure_date} inc</td>
                        <td>${data[i].room_cost}</td>
                        <td>${data[i].payment}</td>
                        <td>${data[i].status}</td>
                        <td>
                            <div class="btn-group">
                                <a onclick="edit('${data[i].id}')" title="To Edit User details" href="#editModal" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                <button  title="To Delete User"  onclick="deleteRoom('${data[i].id}')" title="Delete User" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>`
            tBody.append(row)
        }
    }
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
                    <option value="${data[i].id}">${data[i].name}</option>
                `
            seleectOption.append(option)
        }
    }
   fetchRoom()

    // Edit Room Booking
    function edit(id){
        let eidtUrl = '{{ url("/room-booking") }}/' + id + '/edit'
        let room_booking_id     = $("#booking_id")
        let room_id             = $("#room_id")
        let edit_user_name      = $("#edit_user_name");
        let edit_arrival_date   = $("#edit_arrival_date")
        let edit_departure_date = $("#edit_departure_date")
        let edit_room_cost      = $("#edit_room_cost")
        let edit_payment        = $("#edit_payment")
        let status              = $("#edit_status")
        $.ajax({
            url: eidtUrl,
            type: "GET",
            dataType: "JSON",
            success: (res) => {
               if(res.status){
                    room_booking_id.val(res.room_booking.id)
                    room_id.val(res.room_booking.room_id)
                    edit_user_name.val(res.room_booking.user.user_name)
                    edit_arrival_date.val(res.room_booking.arrival_date)
                    edit_departure_date.val(res.room_booking.departure_date)
                    edit_room_cost.val(res.room_booking.room_cost)
                    edit_payment.val(res.room_booking.payment)
                    status.val(res.room_booking.status)
               }else{
                    toastr.error(data.message)
               }
            },
            error: (e) => {
                console.log(e)
            }
        });
    }
     /*For Update Data*/
    $('#updateForm').on('submit', function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        let update_id = $('#booking_id').val()
        let updateUrl = '{{ url("/room-booking") }}/' + update_id
        let formData = new FormData(document.getElementById('updateForm'))
        $.ajax({
            type: 'POST',
            url: updateUrl,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                if (data.status) {
                    fetchRoomBooking()
                    $('#editModal').modal('hide')
                    this.reset()
                    toastr.success(data.message)
                } else {
                    toastr.error(data.message)
                }
            },
            error: function(error) {
                toastr.error(error)
            }
        });
    })
    // Delete  Function
    function deleteRoom(id){
        let token = document.querySelector(`meta[name='csrf-token']`).content;
        let deleteUrl = '{{ url("/room-booking")}}/' + id;
        let confirm_btn = confirm("Are u sure to Delete this User!");
        if (confirm_btn) {
            $.ajax({
                url: deleteUrl,
                type: "DELETE",
                data: {
                    _token: token,
                },
                dataType: "JSON",
                success: (res) => {
                    if (res.status) {
                        toastr.success(res.message);
                        fetchRoomBooking()
                    }
                },
                error: (e) => {
                    console.log(e)
                }
            });
        }
    }
    </script>
@endpush

