@extends('backend.master')
@push('style')

@endpush
@section('content')
    <section class="data_table">
        <!--========== data table start ==========-->
        <form action="{{ route('admin.room-types.store') }}" method="POST" enctype="multipart/form-data">
            <!--==========data form start ==========-->
            @csrf
            <div class="data_heading">
                <!--========== data table heading start ==========-->
                <h3>Add Room Type</h3>
                <h4><span class="data_text"><a href="#">Database</a></span> / <span class="add_text">Add Room Type</span>
                </h4>
            </div>
            <!--========== data table heading end ==========-->

            <!--========== data table input start ==========-->
            <div class="data">
                <div class="row">
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

                    <div class="col-12 col-sm-12 col-md-12">
                        <!--========== basic info start ==========-->
                        <div class="data_input_field">
                            <div class="data_input">
                                <div class="row input_row">
                                    <div class="col-12 col-sm-12 col-md-3">
                                        <label class="input_field_name" for="name">Room Type name</label>
                                        <br>
                                        <input class="data_field_input_tag" type="text" id="name" name="name"
                                               value="{{ old('name') }}"
                                               placeholder="Room Type name">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3">
                                        <label class="input_field_name" for="costs_per_day">Room Type costs per day</label>
                                        <br>
                                        <input class="data_field_input_tag" type="number" id="costs_per_day" name="costs_per_day"
                                               value="{{ old('costs_per_day') }}"
                                               placeholder="Room Type costs per day">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3">
                                        <label class="input_field_name" for="size">Room Type size</label>
                                        <br>
                                        <input class="data_field_input_tag" type="number" id="size" name="size"
                                               value="{{ old('size') }}"
                                               placeholder="Enter Room Type size">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3">
                                        <label class="input_field_name" for="capacity">Room Type capacity</label>
                                        <br>
                                        <input class="data_field_input_tag" type="number" id="capacity" name="capacity"
                                               value="{{ old('capacity') }}"
                                               placeholder="Enter Room Type capacity">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3">
                                        <label class="input_field_name" for="max_adult">Room Type max adult</label>
                                        <br>
                                        <input class="data_field_input_tag" type="number" id="max_adult" name="max_adult"
                                               value="{{ old('max_adult') }}"
                                               placeholder="Enter Room Type max adult">
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-3">
                                        <label class="input_field_name" for="max_child">Room Type max child</label>
                                        <br>
                                        <input class="data_field_input_tag" type="number" id="max_child" name="max_child"
                                               value="{{ old('max_child') }}"
                                               placeholder="Enter Room Type max child">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3">
                                        <label class="input_field_name" for="bed_type">Bed Type</label>
                                        <br>
                                        <select name="bed_type" id="bed_type" class="data_field_input_tag">
                                            <option value="">Select Bed Type</option>
                                            <option value="1">Test 1</option>
                                            <option value="2">Test 2</option>
                                            <option value="3">Test 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3">
                                        <label class="input_field_name" for="room_service">room service</label>
                                        <br>
                                        <select name="room_service" id="room_service" class="data_field_input_tag">
                                            <option value="">Select room service</option>
                                            <option value="1">Test 1</option>
                                            <option value="2">Test 2</option>
                                            <option value="3">Test 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row input_row">
                                    <div class="col-12 col-sm-12 col-md-3">
                                        <label class="input_field_name" for="status">status</label>
                                        <br>
                                        <select name="status" id="status" class="data_field_input_tag">
                                            <option value="">Select status</option>
                                            <option value="available">available</option>
                                            <option value="not_available">not available</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row input_row">
                                    <div class="col-12">
                                        <label class="input_field_name" for="description">Description</label>
                                        <br>
                                        <textarea class="description_taxt" name="description" id="description"
                                                  cols="30"
                                                  rows="3">{{ old('description') }}</textarea>
                                    </div>
                                </div>

                                <div class="row input_row">
                                    <div class="col-12 col-sm-12">
                                        <label class="input_field_name" for="images[]">Images</label>
                                        <br>
                                        <input class="data_field_input_tag" type="file" id="images[]" name="images[]"
                                               value="" placeholder="Enter images" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--========== basic info end ==========-->
                </div>
            </div>

            <!--========== data table input end ==========-->


                <div class="data_input_field_head">
                    <h3>Room Type facility</h3>
                </div>
                <div class="row">
                    @forelse($facilities as $facility)
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="check_boxes padding_bottom">
                                <img src="{{ $facility->icon }}" height="20px" width="auto" alt="">
                                <input class="check_box_input" type="checkbox" name="facilities[]"
                                       id="facility{{ $facility->id }}"
                                       value="{{ $facility->id }}">
                                <label class="input_field_name check_box_label"
                                       for="facility{{ $facility->id }}">{{ $facility->name }}</label>
                            </div>
                        </div>
                    @empty
                        No facilities available yet!
                    @endforelse
                </div>


            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="continue_btn continue_btn_1">
                            <button class="cuntinue_1 stop_scrolling" type="submit" data-user-code="">continue
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--==========data form end ==========-->
    </section>
    <!--========== data table end ==========-->
@endsection
@push('scripts')


@endpush
