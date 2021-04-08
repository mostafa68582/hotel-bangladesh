@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-list"></i> Edit Facility
                </div>
                <div class="card-body col-md-8 mx-auto">
                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div class="col-12">
                            <div class="alert alert-danger">
                                @if($errors->count() === 1)
                                    <li>{{ $errors->first() }}</li>
                                @else
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    @endif
                    <form action="{{ route('admin.facilities.update', $facility) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Facility name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Facility name" value="{{ $facility->name }}">
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="icon">Icon</label>
                                <input type="file" class="form-control-file" id="icon" name="icon">
                            </div>
                            <div>
                                <img src="{{ $facility->icon }}" alt="{{ $facility->name }}" height="100px" width="auto">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select id="type" name="type" class="form-control">
                                    <option value="">Select type</option>
                                    <option value="{{ $facility->type }}" selected>{{ $facility->type }}</option>
                                    <option value="hotel">hotel</option>
                                    <option value="room">room</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control">
                                    <option value="">Select status</option>
                                    <option value="{{ $facility->status }}" selected>{{ $facility->status }}</option>
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="add-Category" class="btn btn-primary">Update
                            </button>
                        </div>
                    </form>
                </div>
            </div><!--facilities list search end-->
        </div>
    </div>
@endsection

@push('scripts')
    <script>


    </script>
@endpush
