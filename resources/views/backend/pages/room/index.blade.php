
@extends('backend.master')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6"><h4>Room Type</h4></div>
                <div class="col-6 text-right"> <a href="#addModal" data-toggle="modal" class="btn btn-primary">Create Room</a></div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped table-inverse table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Room Name</th>
                                <th scope="col">Room Type Name</th>
                                <th scope="col">Room_number</th>
                                <th scope="col">Description</th>
                                <th scope="col">Avaiable</th>
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
<!-- add  modal start -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Room</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="addForm">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="room_type_id">Chose Room type</label>
                        <select id="room_type_id" class="form-control room_type_name" name="room_type_id">
                            <option value="choose">Choose...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" id="name" placeholder="Room Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="room_number">Room Number</label>
                        <input type="number" class="form-control" id="room_number" placeholder="Room Number" name="room_number">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea  class="form-control" id="description" name="description"> Write Description?</textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Avaiable</label>
                        <select id="avaiable" class="form-control" name="avaiable">
                            <option selected>Choose...</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
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
<!-- End add modal -->
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
                <input type="hidden" name="edit_id" value="" id ="room_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_room_type_id">Chose Room type</label>
                        <select id="edit_room_type_id" class="form-control room_type_name" name="room_type_id">
                            <!-- <option value="choose">Choose...</option -->>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_name">name</label>
                        <input type="text" class="form-control" id="edit_name" placeholder="Room Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="edit_room_number">Room Number</label>
                        <input type="number" class="form-control" id="edit_room_number" placeholder="Room Number" name="room_number">
                    </div>
                    <div class="form-group">
                        <label for="edit_description">Description</label>
                        <textarea  class="form-control" id="edit_description" name="description"> Write Description?</textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_avaiable">Avaiable</label>
                        <select id="edit_avaiable" class="form-control" name="avaiable">
                            <option selected>Choose...</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
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
                    <button type="submit" class="btn btn-primary btn-sm" id="update-facilities">Update</button>
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
        let rooms = []
        let fetch_url = '{{ url("/fetch/rooms") }}'
        function fetchRoom() {
            $.ajax({
                url: fetch_url,
                type: "GET",
                dataType: "JSON",
                success: (res) => {
                    if (res.status) {
                        rooms = res.rooms
                        createTbody(rooms)
                    } else {
                        toastr.error(res.message)
                    }
                },
                error: (e) => {
                    console.log(e)
                }
            });
        }
    fetchRoom()
    /*create table body with data*/
    function createTbody(data) {
        let tBody = $('#myTable');
        tBody.empty()
        for (let i = 0; i < data.length; i++) {
            let row = `
                    <tr>
                        <th scope="row">${i+1}</th>
                        <td>${data[i].name}</td>
                        <td>${data[i].room_type_name}</td>
                        <td>${data[i].room_number}</td>
                        <td>${data[i].description} inc</td>
                        <td>${data[i].avaiable}</td>
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
    let room_type = []
    let get_Room_type_url = '{{ url("/fetch/room-type") }}'
    function fetchRoomType() {
        $.ajax({
            url: get_Room_type_url,
            type: "GET",
            dataType: "JSON",
            success: (res) => {
                if (res.status) {
                    room_type = res.room_type
                    createSelectOption(room_type)
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
        let seleectOption = $('.room_type_name');
        for (let i = 0; i < data.length; i++) {
            let option = `
                    <option value="${data[i].id}">${data[i].name}</option>
                `
            seleectOption.append(option)
        }
    }
   fetchRoomType()
  /*  function resetForm() {
        $("#addForm").trigger("reset")
    }*/

    /*For Store Room type*/
    $("#addForm").on('submit', function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        let url = '{{ url("/rooms") }}'
        let room_type_id = $("#room_type_id").val()
        let name         = $("#name").val();
        let room_number  = $("#room_number").val()
        let description  = $("#description").val();
        let avaiable     = $("#avaiable").val()
        let status       = $("#status").val()
        let formData = new FormData(this);
        if (room_type_id       == 'choose') return toastr.error('Room Type is required')
        if (name.trim()        == '') return toastr.error('Name is required')
        if (room_number.trim() == '') return toastr.error('Room number is required')
        if (description.trim() == '') return toastr.error('Description is required')
        if (avaiable.trim()    == 'Choose...') return toastr.error('Avaiablet is required')
        if (status             == 'Choose...') return toastr.error('Status is required')

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                if (data.status) {
                    fetchRoom()
                    this.reset()
                    $('#addModal').modal('hide')
                    toastr.success(data.message)
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


    // Edit Room
    function edit(id){
        let eidtUrl = '{{ url("/rooms") }}/' + id + '/edit'
        let room_id     = $("#room_id")
        let edit_room_type_id = $("#edit_room_type_id")
        let name        = $("#edit_name");
        let room_number = $("#edit_room_number")
        let description = $("#edit_description")
        let avaiable    = $("#edit_avaiable")
        let status      = $("#edit_status")
        $.ajax({
            url: eidtUrl,
            type: "GET",
            dataType: "JSON",
            success: (res) => {
               if(res.status){
                    room_id.val(res.room[0].id)
                    edit_room_type_id.val(res.room[0].room_type_id)
                    name.val(res.room[0].name)
                    room_number.val(res.room[0].room_number)
                    description.val(res.room[0].description)
                    avaiable.val(res.room[0].avaiable)
                    status.val(res.room[0].status)
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
        let update_id = $('#room_id').val()
        let updateUrl = '{{ url("/rooms") }}/' + update_id
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
                    fetchRoom()
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
        let deleteUrl = '{{ url("/rooms")}}/' + id;
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
                        fetchRoom()
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

