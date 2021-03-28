@extends('backend.master')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6"><h4>Room Type</h4></div>
                <div class="col-6 text-right"> <a href="#addModal" data-toggle="modal" class="btn btn-primary">Create Room Type</a></div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped table-inverse table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Cost Per Day</th>
                                <th scope="col">Discount Percentage</th>
                                <th scope="col">Size</th>
                                <th scope="col">Man Adult</th>
                                <th scope="col">Guest</th>
                                <th scope="col">Description</th>
                                <th scope="col">Room Service</th>
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
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="addForm">
            <div class="modal-body">
              <div class="form-group">
                <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
              </div>
              <div class="form-group">
                <label for="cost_per_day">Cost Per Day</label>
                    <input type="number" class="form-control" id="cost_per_day" placeholder="Cost Per Day" name="cost_per_day">
              </div>
              <div class="form-group">
                <label for="discount_percentage">Discount Percentage</label>
                    <input type="number" class="form-control" id="discount_percentage" placeholder="Discount Percentage" name="discount_percentage">
              </div>
              <div class="form-group">
                <label for="size">Size</label>
                    <input type="text" class="form-control" id="size" placeholder="Size in Inch" name="size">
              </div>
              <div class="form-group">
                <label for="man_adult">Man Adult</label>
                    <input type="number" class="form-control" id="man_adult" placeholder="How many Man Adult?" name="man_adult">
              </div>
              <div class="form-group">
                <label for="guest">Guest</label>
                    <input type="number" class="form-control" id="guest" placeholder="How many guest?" name="guest">
             </div>
                <div class="form-group">
                <label for="description">Description</label>
                    <textarea  class="form-control" id="description" name="description"> Write Description?</textarea>
                </div>
                <div class="form-group">
                <label for="room_service">Room Service</label>
                    <input type="text" class="form-control" id="room_service" placeholder="Description" name="room_service">
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
            <button type="submit" class="btn btn-primary btn-sm" id="add-room-type">+ Add</button>
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
            <input type="hidden" name="edit_id" value="" id ="room-type-id">
            <div class="modal-body">
              <div class="form-group">
                <label for="edit_name">Name</label>
                    <input type="text" class="form-control" id="edit_name" placeholder="Name" name="name">
              </div>
              <div class="form-group">
                <label for="edit_cost_per_day">Cost Per Day</label>
                    <input type="number" class="form-control" id="edit_cost_per_day" placeholder="Cost Per Day" name="cost_per_day">
              </div>
              <div class="form-group">
                <label for="edit_discount_percentage">Discount Percentage</label>
                    <input type="number" class="form-control" id="edit_discount_percentage" placeholder="Discount Percentage" name="discount_percentage">
              </div>
              <div class="form-group">
                <label for="edit_size">Size</label>
                    <input type="text" class="form-control" id="edit_size" placeholder="Size in Inch" name="size">
              </div>
              <div class="form-group">
                <label for="edit_man_adult">Man Adult</label>
                    <input type="number" class="form-control" id="edit_man_adult" placeholder="How many Man Adult?" name="man_adult">
              </div>
              <div class="form-group">
                <label for="edit_guest">Guest</label>
                    <input type="number" class="form-control" id="edit_guest" placeholder="How many guest?" name="guest">
             </div>
                <div class="form-group">
                <label for="edit_description">Description</label>
                    <textarea  class="form-control" id="edit_description" name="description"> Write Description?</textarea>
                </div>
                <div class="form-group">
                <label for="edit_room_service">Room Service</label>
                    <input type="text" class="form-control" id="edit_room_service" placeholder="Description" name="room_service">
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
            <button type="submit" class="btn btn-primary btn-sm" id="update-room-type">Update</button>
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
        let room_types = []
        let fetch_url = '{{ url("/fetch/room-type") }}'
        function fetchRoomType() {
            $.ajax({
                url: fetch_url,
                type: "GET",
                dataType: "JSON",
                success: (res) => {
                    console.log(res)
                    if (res.status) {
                        console.log(res.room_type)
                        room_types = res.room_type
                        createTbody(room_types)
                    } else {
                        toastr.error(res.message)
                    }
                },
                error: (e) => {
                    console.log(e)
                }
            });
        }
    fetchRoomType()
    /*create table body with data*/
    function createTbody(data) {
        let tBody = $('#myTable');
        tBody.empty()
        for (let i = 0; i < data.length; i++) {
            let row = `
                    <tr>
                        <th scope="row">${i+1}</th>
                        <td>${data[i].name}</td>
                        <td>${data[i].cost_per_day}</td>
                        <td>${data[i].discount_percentage}</td>
                        <td>${data[i].size} inc</td>
                        <td>${data[i].man_adult}</td>
                        <td>${data[i].guest}</td>
                        <td>${data[i].description}</td>
                        <td>${data[i].room_service}</td>
                        <td>${data[i].status}</td>
                        <td>
                            <div class="btn-group">
                                <a onclick="edit('${data[i].id}')" title="To Edit User details" href="#editModal" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                <button  title="To Delete User"  onclick="deleteRoomType('${data[i].id}')" title="Delete User" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>`
            tBody.append(row)
        }
    }

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
        let url = '{{ url("/room-type") }}'
        let name                = $("#name").val()
        let cost_per_day        = $("#cost_per_day").val();
        let discount_percentage = $("#discount_percentage").val()
        let man_adult           = $("#man_adult").val();
        let size                = $("#size").val()
        let guest               = $("#guest").val()
        let description         = $("#description").val()
        let room_service        = $("#room_service").val()
        let status              = $("#status").val()
        let formData = new FormData(this);
        if (name.trim() == '') return toastr.error('Name is required')
        if (cost_per_day.trim() == '') return toastr.error('Cost Per day is required')
        if (discount_percentage.trim() == '') return toastr.error('Discount is required')
        if (man_adult.trim() == '') return toastr.error('Man Adult is required')
        if (size.trim() == '') return toastr.error('Roome size is required')
        if (guest.trim() == '') return toastr.error(' Guest Number is required')
        if (description.trim() == '') return toastr.error('Description is required')
        if (room_service.trim() == '') return toastr.error('Room Service is required')
        if (status == 'Choose...') return toastr.error('Status is required')

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                if (data.status) {
                    fetchRoomType()
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


    // Edit Room Type
    function edit(id){
        let eidtUrl = '{{ url("/room-type") }}/' + id + '/edit'
        let room_type_id  = $("#room-type-id")
        let name               = $("#edit_name")
        let cost_per_day        = $("#edit_cost_per_day");
        let discount_percentage = $("#edit_discount_percentage")
        let man_adult           = $("#edit_man_adult");
        let size                = $("#edit_size")
        let guest               = $("#edit_guest")
        let description         = $("#edit_description")
        let room_service        = $("#edit_room_service")
        let status              = $("#edit_status")
        $.ajax({
            url: eidtUrl,
            type: "GET",
            dataType: "JSON",
            success: (res) => {
               if(res.status){
                console.log(res)
                    room_type_id.val(res.room_type.id)
                    name.val(res.room_type.name)
                    cost_per_day.val(res.room_type.cost_per_day)
                    discount_percentage.val(res.room_type.discount_percentage)
                    man_adult.val(res.room_type.man_adult)
                    size.val(res.room_type.size)
                    guest.val(res.room_type.guest)
                    description.val(res.room_type.description)
                    room_service.val(res.room_type.room_service)
                    status.val(res.room_type.status)
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
        let update_id = $('#room-type-id').val()
        let updateUrl = '{{ url("/room-type") }}/' + update_id
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
                    fetchRoomType()
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
    // Delete User Function
    function deleteRoomType(id){
        let token = document.querySelector(`meta[name='csrf-token']`).content;
        let deleteUrl = '{{ url("/room-type")}}/' + id;
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
                        fetchRoomType()
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

