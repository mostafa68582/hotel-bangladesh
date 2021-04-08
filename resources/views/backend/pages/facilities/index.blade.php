@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-list"></i> Facilities
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
                    <form action="{{ route('admin.facilities.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Facility name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Facility name">
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="icon">Icon</label>
                                <input type="file" class="form-control-file" id="icon" name="icon">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select id="type" name="type" class="form-control">
                                    <option value="">Select type</option>
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
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="add-Category" class="btn btn-primary">Add
                            </button>
                        </div>
                    </form>
                </div>
            </div><!--facilities list search end-->
        </div>
    </div>


    <!--facilities list show start-->
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr style="font-size: 11px;">
                    <th>Sl/No</th>
                    <th>Icon</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="myTable">
                @forelse($facilities as $facility)
                    <tr>
                        <td>{{ $facility->id }}</td>
                        <td><img src="{{ $facility->icon }}" alt="{{ $facility->name }}" height="50px" width="auto">
                        </td>
                        <td>{{ $facility->name }}</td>
                        <td>{{ $facility->type }}</td>
                        <td>{{ $facility->status }}</td>
                        <td>
                            <a href="{{ route('admin.facilities.edit', $facility) }}"
                               class="btn btn-primary btn-block mb-1"><i class="fas fa-edit"></i> Edit</a>

                            <form action="{{ route('admin.facilities.destroy', $facility) }}" method="POST"
                                  onsubmit="return confirm('Are you sure to delete data?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-block">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    No facility available!
                @endforelse
                </tbody>
            </table>

            <div class="row py-3">
                <div class="col d-flex justify-content-center">
                    {{ $facilities->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>


    </script>
@endpush
