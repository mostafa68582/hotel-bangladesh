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
      <label for="inputCity">Category name</label>
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
 	

</script>
@endpush