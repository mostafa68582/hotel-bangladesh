@extends('backend.master')
@section('content')
<div class="card">
  <div class="card-header">
    <i class="fas fa-list"></i> Facilities Categories
  </div>
  <div class="card-body">
  <form action="post" id="categoryForm">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="Categoryname">Category name</label>
      <input type="text" class="form-control" id="Categoryname" placeholder="Category name">
    </div>

    <div class="form-group col-md-4">
      <div class="form-group">
          <label for="icon">Icon</label>
          <input type="file" class="form-control" id="icon" name="icon">
      </div>
    </div>
    <div class="form-group col-md-4">
      <button type="submit" id="add-Category" class="btn btn-primary" style="margin-top: 19px;
    border-radius: 7px;">Add</button>
    </div>
    </form>
    
  </div>


  </div>
</div><!--facilities list search end-->

<!--facilities list show start-->
<div class="card">
  <div class="card-body">
    <table class="table table-bordered">
  <thead>
    <tr style="font-size: 11px;">
      <th>Sl/No</th>
      <th>Category</th>
      <th>Icon</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody id="myTable">

  </tbody>
</table>
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
        let url = '{{ url("/categories") }}'
        $("#createForm").on('submit', function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            let Categoryname = $("#Categoryname").val()
            let icon = $("#icon").val();
            let formData = new FormData(this);
            if (Categoryname.trim() == '') return toastr.error('Categories is required')
            if (icon.trim() == '') return toastr.error('Icon is required')

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