@extends('backend.master')
@push('style')

@endpush
@section('content')
    <section class="data_table"> <!--========== data table start ==========-->
        <form action="{{ route('admin.hotels.store') }}" method="POST"> <!--==========data form start ==========-->
            @csrf
            <div class="data_heading"> <!--========== data table heading start ==========-->
                <h3>room hotel</h3>
                <h4><span class="data_text"><a href="#">Database</a></span> / <span class="add_text">Add hotel</span>
                </h4>
            </div> <!--========== data table heading end ==========-->
            <div class="container"> <!--========== data table input start ==========-->
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

                        <div class="col-12 col-sm-12 col-md-12"> <!--========== basic info start ==========-->
                            <div class="data_input_field">
                                <div class="data_input">
                                    <div class="row input_row">
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="name">hotel name</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="name" name="name"
                                                   value="{{ old('name') }}"
                                                   placeholder="Hotel name">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="phone">hotel phone</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="phone" name="phone"
                                                   value="{{ old('phone') }}"
                                                   placeholder="Hotel phone">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="email">hotel email</label>
                                            <br>
                                            <input class="data_field_input_tag" type="email" id="email" name="email"
                                                   value="{{ old('email') }}"
                                                   placeholder="Enter hotel email">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="website">Website url</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="website" name="website"
                                                   value="{{ old('website') }}"
                                                   placeholder="Enter website url">
                                        </div>
                                    </div>
                                    <div class="row input_row">
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="star_rating">Star rating</label>
                                            <br>
                                            <select name="star_rating" id="star_rating" class="data_field_input_tag">
                                                <option value="">Select star rating</option>
                                                <option value="1">1 Star</option>
                                                <option value="2">2 Star</option>
                                                <option value="3">3 Star</option>
                                                <option value="4">4 Star</option>
                                                <option value="5">5 Star</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="location">Location</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="location"
                                                   name="location" value="{{ old('location') }}"
                                                   placeholder="Hotel Location">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="street_address">Street address</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="street_address"
                                                   name="street_address" value="{{ old('street_address') }}"
                                                   placeholder="Street address">
                                        </div>
                                    </div>
                                    <div class="row input_row">
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="country">Country</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="country" name="country"
                                                   value="{{ old('country') }}"
                                                   placeholder="Enter country">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="city">City</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="city" name="city"
                                                   value="{{ old('city') }}"
                                                   placeholder="Enter city">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="zip_code">zip code</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="zip_code"
                                                   name="zip_code" value="{{ old('zip_code') }}"
                                                   placeholder="Enter zip code">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="district">District</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="district"
                                                   name="district" value="{{ old('district') }}"
                                                   placeholder="Enter district">
                                        </div>
                                    </div>

                                    <div class="row input_row">
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="thana">Thana</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="thana" name="thana"
                                                   value="{{ old('thana') }}"
                                                   placeholder="Enter thana">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="payment_method">Payment Method</label>
                                            <br>
                                            <select name="payment_method" id="payment_method"
                                                    class="data_field_input_tag">
                                                <option value="">Select method</option>
                                                <option value="cash">Cash</option>
                                                <option value="gateway">Gateway</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="remark">Remark</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="remark" name="remark"
                                                   value="{{ old('remark') }}"
                                                   placeholder="Enter remark">
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
                                </div>
                                <div class="continue_btn continue_btn_1">
                                    <button class="cuntinue_1 stop_scrolling" type="submit" data-user-code="">continue
                                    </button>
                                </div>
                            </div>
                        </div> <!--========== basic info end ==========-->
                    </div>
                </div>
            </div> <!--========== data table input end ==========-->


        </form> <!--==========data form end ==========-->
    </section> <!--========== data table end ==========-->
@endsection
@push('scripts')


@endpush
