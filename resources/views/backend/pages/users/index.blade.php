@extends('backend.master')
@section('content')
<div class="container my-5">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<div class="col-6"><h4>All Users</h4></div>
				<div class="col-6 text-right"> <a href="{{ route ('users.create') }}" class="btn btn-primary">Registration</a></div>
			</div>
			<hr>
			<div class="card">
				<div class="card-body p-0">
					<table class="table table-striped table-inverse table-hover">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First Name</th>
								<th scope="col">Last Name</th>
								<th scope="col">User Name</th>
								<th scope="col">Email</th>
								<th scope="col">Imag</th>
								<th scope="col">Type</th>
								<th scope="col">Phone Number</th>
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
<!-- Edit modal start -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data" id="myUpdateForm">
          <input type="hidden" name="edit_id" value="" id ="user_id">
            <div class="modal-body">
              <div class="form-group">
                <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
              </div>
              <div class="form-group">
                <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
              </div>
              <div class="form-group">
                <label for="user_name">User Name</label>
                    <input type="text" class="form-control" id="user_name" placeholder="User Name" name="user_name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                    <input type="number" class="form-control" id="phone" placeholder="Phone" name="phone">
              </div>
              <div class="form-group">
                <label for="image">Profile Picture</label>
                    <input type="file" class="form-control" id="edit_image" name="image">
                </div>
                 <div class="form-group">
                    <img class="rounded img "  width="150" height="150" src="" alt="img" />
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
@endsection

@push('style')
<style>

</style>
@endpush

@push('scripts')
	<script>
		let users = []
    	let fetch_url = '{{ url("/fetch/user") }}'

		function fetchUsers() {
			$.ajax({
				url: fetch_url,
				type: "GET",
				dataType: "JSON",
				success: (res) => {
					if (res.status) {
						users = res.users
						createTbody(users)
					} else {
						toastr.error(res.message)
					}
				},
				error: (e) => {
					console.log(e)
				}
			});
		}
	fetchUsers()
    /*create table body with data*/
    function createTbody(data) {
        let tBody = $('#myTable');
        tBody.empty()
        for (let i = 0; i < data.length; i++) {
            let row = `
					<tr>
						<th scope="row">${i+1}</th>
						<td>${data[i].first_name}</td>
						<td>${data[i].last_name}</td>
						<td>${data[i].user_name}</td>
						<td>${data[i].email}</td>
						<td><img class="rounded" width="50" height="50" src="{{ asset('/uploads/user_profile_pic/${data[i].image}')}}" alt="img"/></td>
						<td>${data[i].user_type}</td>
						<td>${data[i].phone}</td>
						<td>
							<div class="btn-group">
								<a onclick="editUser('${data[i].id}')" title="To Edit User details" href="#editModal" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
								<button  title="To Delete User"  onclick="deleteUser('${data[i].id}')" title="Delete User" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
							</div>
						</td>
					</tr>`
            tBody.append(row)
        }
    }

	// // Edit User
	function editUser(id){
        let eidtUrl = '{{ url("/users") }}/' + id + '/edit'
		let user_id = $("#user_id")
		let first_name = $("#first_name")
		let last_name = $("#last_name")
		let user_name = $("#user_name")
		let email = $("#email")
		let phone = $("#phone")
		let status = $("#edit_status")
        $.ajax({
            url: eidtUrl,
            type: "GET",
            dataType: "JSON",
            success: (res) => {
				console.log(res.user.id)
				user_id.val(res.user.id)
				first_name.val(res.user.first_name)
				last_name.val(res.user.last_name)
                user_name.val(res.user.user_name)
                email.val(res.user.email)
				phone.val(res.user.phone)
                $(".img").attr("src", res.img);
                status.val(res.user.status)

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
        let update_id = $('#user_id').val()
        let updateUrl = '{{ url("/users") }}/' + update_id
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
                    fetchUsers()
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
	// Delete User Function
	function deleteUser(id){
		console.log(id)
		let token = document.querySelector(`meta[name='csrf-token']`).content;
		let deleteUrl = '{{ url("/users")}}/' + id;
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
						fetchUsers()
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

