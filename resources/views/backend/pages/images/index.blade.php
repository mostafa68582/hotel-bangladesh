@extends('backend.master')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6"><h4>All Picture</h4></div>
                <div class="col-6 text-right"> <a href="{{ route ('room-images.create') }}" class="btn btn-primary">Upload Picture</a></div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped table-inverse table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Room Name</th>
                                <th scope="col">Picture</th>
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
@endsection

@push('style')
<style>

</style>
@endpush

@push('scripts')
    <script>

    </script>
@endpush

