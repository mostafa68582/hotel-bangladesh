@extends('backend.master')
<!--
@section('master-panel')
<div class="pageheader-title float-left">Facilities Panel</div>
 <div class="pageheader-title float-right"><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#facilitiesModal"><i class="fas fa-plus"></i></a></div>
@endsection-->
@section('content')
<!--facilities list search start-->
<div class="card">
  <div class="card-header">
   	<i class="fas fa-list"></i> Facilities Filtering
  </div>
  <div class="card-body">
  <form action="post" id="searchForm">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Facilities name</label>
      <input type="text" class="form-control" id="facilitiesname" placeholder="facilities name">
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Status</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>active</option>
        <option>inactive</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <button type="submit" id="search-submit" class="btn btn-primary" style="margin-top: 19px;
    border-radius: 7px;"><i class="fas fa-search"></i>Search</button>
    </div>
  </div>
</form>
  </div>
</div><!--facilities list search end-->

<!--facilities list show start-->
<div class="card">
  <div class="card-body">
    <table class="table table-bordered">
  <thead>
    <tr style="font-size: 11px;">
      <th>Sl/No</th>
      <th>Name</th>
      <th>Icon</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody id="myTable">

  </tbody>
</table>
  </div>
</div>
<!--facilities list show end-->
@endsection


<!--Facilities Modal start-->
<!-- Modal -->
<div class="modal fade" id="facilitiesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Facilities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data" id="myForm">
            <div class="modal-body">
              <div class="form-group">
                <label for="facilities">Facilities Name</label>
                <input type="text" class="form-control" id="facilities" placeholder="facilities" name="name">
              </div>
              <div class="form-group">
                <label for="icon">Icon</label>
                <input type="file" class="form-control" id="icon" name="icon">
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
            <button type="submit" class="btn btn-primary btn-sm" id="add-facilities">Add</button>
          </div>
       </form>
    </div>
  </div>
</div>
<!-- Edit modal start -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Facilities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data" id="myUpdateForm">
          <input type="hidden" name="edit_id" value="" id ="facilities_id">
            <div class="modal-body">
              <div class="form-group">
                <label for="facilities">Facilities Name</label>
                    <input type="text" class="form-control" id="edit_facilities" placeholder="facilities" name="name">
              </div>
              <div class="form-group">
                <label for="icon">Icon</label>
                    <input type="file" class="form-control" id="edit_icon" name="icon">
                </div>
                 <div class="form-group">
                    <img class="form-control img"  width="60px" height="60px" src="" alt="img" />
                </div>

              <div class="form-group">
                <label for="status">Status</label>
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
<!--Facilities Modal end-->
@push('scripts')
  <script>
    let facilities = []
    let fetch_url = '{{ url("/fetch/facilities") }}'
    function fetchFacilities() {
        $.ajax({
            url: fetch_url,
            type: "GET",
            dataType: "JSON",
            success: (res) => {
                if (res.status) {
                    facilities = res.facilities
                    /*createTbody(facilities)*/
                } else {
                    toastr.error(res.message)
                }
            },
            error: (e) => {
                console.log(e)
            }
        });
    }
    fetchFacilities()
    createTbody(facilities)
    /*create table body with data*/
    function createTbody(data) {
        let tBody = $('#myTable');
        tBody.empty()
        for (let i = 0; i < data.length; i++) {
            let row = `
                    <tr>
                          <th>${i+1}</th>
                          <td>${data[i].name}</td>
                          <td><img src="{{ asset('/uploads/facilities/${data[i].icon}')}}" alt="img"/></td>
                          <td>
                            <a href="#editModal" data-toggle="modal" class="btn btn-primary btn-sm" onclick="edit('${data[i].id}', '${i}')"><i class="far fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" onclick="deleteFacilities('${data[i].id}')"><i class="far fa-trash-alt"></i></a>
                          </td>
                    </tr> `
            tBody.append(row)
        }
    }
    /* For Store facilities*/
    let url = '{{ url("/facilities") }}'
    $("#myForm").on('submit', function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        let name = $("#facilities").val()
        let icon = $("#icon").val();
        let status = $("#status").val()
        let formData = new FormData(this);
        if (name.trim() == '') return toastr.error('Name is required')
        if (icon.trim() == '') return toastr.error('Icon Image is required')
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
                    fetchFacilities()
                    this.reset()
                    $('#facilitiesModal').modal('hide')
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
    let array_index = {
        index:null
    }
    function edit(id, index) {
        array_index.index=index
        let facilities_id = $('#facilities_id')
        let name = $('#edit_facilities')
        let icon = $('#edit_icon')
        let status = $('#edit_status')
        let eidtUrl = '{{ url("/facilities") }}/' + id + '/edit'
        $.ajax({
            url: eidtUrl,
            type: "GET",
            dataType: "JSON",
            success: (res) => {
                facilities_id.val(res.facilities.id)
                name.val(res.facilities.name)
                $(".img").attr("src", res.img);
                status.val(res.facilities.status)
            },
            error: (e) => {
                console.log(e)
            }
        });
    }
    /*For Update Data*/
    $('#myUpdateForm').on('submit', function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        let update_id = $('#facilities_id').val()
        let updateUrl = '{{ url("/facilities") }}/' + update_id
        let formData = new FormData(document.getElementById('myUpdateForm'))
        $.ajax({
            type: 'POST',
            url: updateUrl,
            data: formData,
            contentType: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                if (data.status) {
                   facilities[array_index.index] = data.facilities
                    this.reset()
                    $('#editModal').modal('hide')
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
    /*Facilities delete function*/
    let token = document.querySelector(`meta[name='csrf-token']`).content;

    function deleteFacilities(id) {
        let deleteUrl = '{{ url("/facilities")}}/' + id;
        let confirm_btn = confirm("Are u sure to remove this task!");
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
                        fetchFacilities()
                    }
                },
                error: (e) => {
                    console.log(e)
                }
            });
        }
    }

    /*Facilities search*/
    $('#search-submit').on('click', function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        let searchUrl = '{{ url("/search/facilities") }}'
        let facilities_name = $('#facilitiesname').val()
        let facilities_status = $('#inputState').val()
        if(facilities_status == 'Choose...'){
            facilities_status = ''
        }
        $.ajax({
            type: 'POST',
            url: searchUrl,
            data: {
                name: facilities_name,
                status: facilities_status
            },
            dataType: "JSON",
            success: (data) => {
                facilities = data
                createTbody(facilities)
            },
            error: function(error) {
                toastr.error(error)
            }
        });
    })

  </script>
@endpush
