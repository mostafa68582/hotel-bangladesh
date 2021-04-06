@extends('backend.master')
@push('style')

@endpush
@section('content')
    <section class="data_table"> <!--========== data table start ==========-->
        <form action=""> <!--==========data form start ==========-->
            <div class="data_heading"> <!--========== data table heading start ==========-->
                <h3>room hotel</h3>
                <h4><span class="data_text"><a href="#">Database</a></span> / <span class="add_text">Add hotel</span>
                </h4>
            </div> <!--========== data table heading end ==========-->
            <div class="container"> <!--========== data table input start ==========-->
                <div class="data">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12"> <!--========== basic info start ==========-->
                            <div class="data_input_field">
                                <div class="data_input">
                                    <div class="row input_row">
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="room_name">hotel name</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="room_name"
                                                   placeholder="Hotel name">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="room_number">hotel phone</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="room_number"
                                                   placeholder="Hotel phone">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="available">user phone</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="available"
                                                   placeholder="Enter User phone">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="status">hotel email</label>
                                            <br>
                                            <input class="data_field_input_tag" type="email" id="hotel-email"
                                                   placeholder="Enter hotel email">
                                        </div>
                                    </div>
                                    <div class="row input_row">
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="bed_type">User email</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="user-email"
                                                   placeholder="Enter user email">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="type_name">Website url</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="web-url"
                                                   placeholder="Enter website url">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="cost_pre_day">Location</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="location"
                                                   placeholder="Hotel Location">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="discount">Street address</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="street-address"
                                                   placeholder="Discount">
                                        </div>
                                    </div>
                                    <div class="row input_row">
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="size">Country</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="country"
                                                   placeholder="Enter country">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="max_adult">City</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="city"
                                                   placeholder="Enter city">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="max_guest">zip code</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="zip-code"
                                                   placeholder="Enter zip code">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="max_guest">District</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="district"
                                                   placeholder="Enter district">
                                        </div>
                                    </div>

                                    <div class="row input_row">
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="size">Thana</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="thana"
                                                   placeholder="Enter thana">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="star_rating">Star rating</label>
                                            <br>
                                            <input class="data_field_input_tag" type="number" id="star-rating"
                                                   placeholder="Enter Star rating">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="max_guest">Hotel type</label>
                                            <br>
                                            <select name="" id="hotel-type" class="data_field_input_tag">
                                                <option value="booinkg" selected>Select type</option>
                                                <option value="booinkg">High Level</option>
                                                <option value="evay">Mid Level</option>
                                                <option value="evay">Low Level</option>

                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <label class="input_field_name" for="max_guest">Payment Method</label>
                                            <br>
                                            <select name="" id="payment-method" class="data_field_input_tag">
                                                <option value="booinkg" selected>Select method</option>
                                                <option value="booinkg">Cash</option>
                                                <option value="evay">Gateway</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="row input_row">
                                        <div class="col-12">
                                            <label class="input_field_name" for="description">Description</label>
                                            <br>
                                            <textarea class="description_taxt" name="" id="description" cols="30"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="continue_btn continue_btn_1">
                                    <a class="cuntinue_1 stop_scrolling" data-user-code="@(user.Code)"
                                       href="#">continue</a>
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
