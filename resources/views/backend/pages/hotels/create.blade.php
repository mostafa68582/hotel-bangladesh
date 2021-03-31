@extends('backend.master')
@push('style')

@endpush
@section('content')
<section class="data_table"> <!--========== data table start ==========-->
                <form action=""> <!--==========data form start ==========-->
                    <div class="data_heading"> <!--========== data table heading start ==========-->
                    <h3>room hotel</h3>
                    <h4><span class="data_text"><a href="#">Database</a></span> / <span class="add_text">Add hotel</span></h4>
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
                                                    <input class="data_field_input_tag" type="text" id="room_name" placeholder="Hotel name">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="room_number">hotel phone</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="room_number" placeholder="Hotel phone">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="available">user phone</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="available" placeholder="User phone">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="status">status</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="status" placeholder="Status">
                                                </div>
                                            </div>
                                            <div class="row input_row">
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="bed_type">bed type</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="bed_type" placeholder="Bed type">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="type_name">Type name</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="type_name" placeholder="Type name">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="cost_pre_day">Cost per day</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="cost_pre_day" placeholder="Cost per day">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="discount">Discount</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="discount" placeholder="Discount">
                                                </div>
                                            </div>
                                            <div class="row input_row">
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="size">Size</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="size" placeholder="Size">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="max_adult">Max adult</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="max_adult" placeholder="Max adult">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <label class="input_field_name" for="max_guest">Max guest</label>
                                                    <br>
                                                    <input class="data_field_input_tag" type="text" id="max_guest" placeholder="Max guest">
                                                </div>
                                            </div>
                                            <div class="row input_row">
                                                <div class="col-12">
                                                    <label class="input_field_name" for="description">Description</label>
                                                    <br>
                                                    <textarea class="description_taxt" name="" id="description" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="continue_btn continue_btn_1">
                                        <a class="cuntinue_1 stop_scrolling" data-user-code="@(user.Code)" href="#">continue</a>
                                    </div>
                                </div>
                            </div> <!--========== basic info end ==========-->
                        </div>
                    </div>
                </div> <!--========== data table input end ==========-->
    
                <div class="container content_display_none_1"> <!--========== check box data input start ==========-->
                    <div class="check_bata_field">
                        <div class="data_input_field_head">
                            <h3>room facility</h3>
                        </div>
                        <div class="row content_display_none_2">
                            <div class="col-12">
                                <div class="chack_box_area">
                                    <div class="room_facility_head">
                                        <h3>room facility</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="free_wifi">
                                            <label class="input_field_name check_box_label" for="free_wifi">free wifi</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="resturent">
                                            <label class="input_field_name check_box_label" for="resturent">resturent</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="room_service">
                                            <label class="input_field_name check_box_label" for="room_service">room service</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="bar">
                                            <label class="input_field_name check_box_label" for="bar">bar</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="family_room">
                                            <label class="input_field_name check_box_label" for="family_room">family room</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="breakfast">
                                            <label class="input_field_name check_box_label" for="breakfast">breakfast</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="lunch">
                                            <label class="input_field_name check_box_label" for="lunch">lunch</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="balcony">
                                            <label class="input_field_name check_box_label" for="balcony">balcony</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="free_wifi">
                                            <label class="input_field_name check_box_label" for="free_wifi">free wifi</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="resturent">
                                            <label class="input_field_name check_box_label" for="resturent">resturent</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="room_service">
                                            <label class="input_field_name check_box_label" for="room_service">room service</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="bar">
                                            <label class="input_field_name check_box_label" for="bar">bar</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="family_room">
                                            <label class="input_field_name check_box_label" for="family_room">family room</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="breakfast">
                                            <label class="input_field_name check_box_label" for="breakfast">breakfast</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="lunch">
                                            <label class="input_field_name check_box_label" for="lunch">lunch</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="balcony">
                                            <label class="input_field_name check_box_label" for="balcony">balcony</label>
                                        </div>
                                    </div>
                                    <div class="continue_btn continue_btn_2">
                                        <a class="cuntinue_2 stop_scrolling" data-user-code="@(user.Code)" href="#">continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row_margin_top content_display_none_3">
                            <div class="col-12">
                                <div class="chack_box_area">
                                    <div class="room_facility_head">
                                        <h3>room facility</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="free_wifi">
                                            <label class="input_field_name check_box_label" for="free_wifi">free wifi</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="resturent">
                                            <label class="input_field_name check_box_label" for="resturent">resturent</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="room_service">
                                            <label class="input_field_name check_box_label" for="room_service">room service</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="bar">
                                            <label class="input_field_name check_box_label" for="bar">bar</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="family_room">
                                            <label class="input_field_name check_box_label" for="family_room">family room</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="breakfast">
                                            <label class="input_field_name check_box_label" for="breakfast">breakfast</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="lunch">
                                            <label class="input_field_name check_box_label" for="lunch">lunch</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="balcony">
                                            <label class="input_field_name check_box_label" for="balcony">balcony</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="free_wifi">
                                            <label class="input_field_name check_box_label" for="free_wifi">free wifi</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="resturent">
                                            <label class="input_field_name check_box_label" for="resturent">resturent</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="room_service">
                                            <label class="input_field_name check_box_label" for="room_service">room service</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="bar">
                                            <label class="input_field_name check_box_label" for="bar">bar</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="family_room">
                                            <label class="input_field_name check_box_label" for="family_room">family room</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="breakfast">
                                            <label class="input_field_name check_box_label" for="breakfast">breakfast</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="lunch">
                                            <label class="input_field_name check_box_label" for="lunch">lunch</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="balcony">
                                            <label class="input_field_name check_box_label" for="balcony">balcony</label>
                                        </div>
                                    </div>
                                    <div class="continue_btn continue_btn_3">
                                        <a class="cuntinue_3 stop_scrolling" data-user-code="@(user.Code)" href="#">continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row_margin_top content_display_none_4">
                            <div class="col-12">
                                <div class="chack_box_area">
                                    <div class="room_facility_head">
                                        <h3>room facility</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="free_wifi">
                                            <label class="input_field_name check_box_label" for="free_wifi">free wifi</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="resturent">
                                            <label class="input_field_name check_box_label" for="resturent">resturent</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="room_service">
                                            <label class="input_field_name check_box_label" for="room_service">room service</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="bar">
                                            <label class="input_field_name check_box_label" for="bar">bar</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="family_room">
                                            <label class="input_field_name check_box_label" for="family_room">family room</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="breakfast">
                                            <label class="input_field_name check_box_label" for="breakfast">breakfast</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="lunch">
                                            <label class="input_field_name check_box_label" for="lunch">lunch</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="balcony">
                                            <label class="input_field_name check_box_label" for="balcony">balcony</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="free_wifi">
                                            <label class="input_field_name check_box_label" for="free_wifi">free wifi</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="resturent">
                                            <label class="input_field_name check_box_label" for="resturent">resturent</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="room_service">
                                            <label class="input_field_name check_box_label" for="room_service">room service</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="bar">
                                            <label class="input_field_name check_box_label" for="bar">bar</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="family_room">
                                            <label class="input_field_name check_box_label" for="family_room">family room</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="breakfast">
                                            <label class="input_field_name check_box_label" for="breakfast">breakfast</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="lunch">
                                            <label class="input_field_name check_box_label" for="lunch">lunch</label>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-2">
                                            <input class="check_box_input" type="checkbox" id="balcony">
                                            <label class="input_field_name check_box_label" for="balcony">balcony</label>
                                        </div>
                                    </div>
                                    <div class="continue_btn continue_btn_4">
                                        <a class="cuntinue_4 stop_scrolling" data-user-code="@(user.Code)" href="#">continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="row">
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="check_boxes padding_bottom">
                                    <div class="room_facility_head">
                                        <h3>room facility</h3>
                                    </div>
                                    <input class="check_box_input" type="checkbox" id="free_wifi">
                                    <label class="input_field_name check_box_label" for="free_wifi">free wifi</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="resturent">
                                    <label class="input_field_name check_box_label" for="resturent">resturent</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="room_service">
                                    <label class="input_field_name check_box_label" for="room_service">room service</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="bar">
                                    <label class="input_field_name check_box_label" for="bar">bar</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="family_room">
                                    <label class="input_field_name check_box_label" for="family_room">family room</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="breakfast">
                                    <label class="input_field_name check_box_label" for="breakfast">breakfast</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="lunch">
                                    <label class="input_field_name check_box_label" for="lunch">lunch</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="balcony">
                                    <label class="input_field_name check_box_label" for="balcony">balcony</label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="check_boxes padding_top">
                                    <div class="room_facility_head">
                                        <h3>room facility</h3>
                                    </div>
                                    <input class="check_box_input" type="checkbox" id="air_condition">
                                    <label class="input_field_name check_box_label" for="air_condition">air condition</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="front_desk">
                                    <label class="input_field_name check_box_label" for="front_desk">24-hour front desk</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="garden">
                                    <label class="input_field_name check_box_label" for="garden">garden</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="water_park">
                                    <label class="input_field_name check_box_label" for="water_park">water park</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="swimming_pool">
                                    <label class="input_field_name check_box_label" for="swimming_pool">swimming pool</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="dinner">
                                    <label class="input_field_name check_box_label" for="dinner">dinner</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="tv">
                                    <label class="input_field_name check_box_label" for="tv">tv</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="view">
                                    <label class="input_field_name check_box_label" for="view">view</label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="check_boxes padding_top">
                                    <div class="room_facility_head">
                                        <h3>room facility</h3>
                                    </div>
                                    <input class="check_box_input" type="checkbox" id="air_condition">
                                    <label class="input_field_name check_box_label" for="air_condition">air condition</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="front_desk">
                                    <label class="input_field_name check_box_label" for="front_desk">24-hour front desk</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="garden">
                                    <label class="input_field_name check_box_label" for="garden">garden</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="water_park">
                                    <label class="input_field_name check_box_label" for="water_park">water park</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="swimming_pool">
                                    <label class="input_field_name check_box_label" for="swimming_pool">swimming pool</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="dinner">
                                    <label class="input_field_name check_box_label" for="dinner">dinner</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="tv">
                                    <label class="input_field_name check_box_label" for="tv">tv</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="view">
                                    <label class="input_field_name check_box_label" for="view">view</label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="check_boxes padding_top">
                                    <div class="room_facility_head">
                                        <h3>room facility</h3>
                                    </div>
                                    <input class="check_box_input" type="checkbox" id="air_condition">
                                    <label class="input_field_name check_box_label" for="air_condition">air condition</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="front_desk">
                                    <label class="input_field_name check_box_label" for="front_desk">24-hour front desk</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="garden">
                                    <label class="input_field_name check_box_label" for="garden">garden</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="water_park">
                                    <label class="input_field_name check_box_label" for="water_park">water park</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="swimming_pool">
                                    <label class="input_field_name check_box_label" for="swimming_pool">swimming pool</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="dinner">
                                    <label class="input_field_name check_box_label" for="dinner">dinner</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="tv">
                                    <label class="input_field_name check_box_label" for="tv">tv</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="view">
                                    <label class="input_field_name check_box_label" for="view">view</label>
                                </div>
                            </div>
                        </div>-->
                        <!--<div class="row">
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="check_boxes padding_bottom">
                                    <div class="room_facility_head">
                                        <h3>room facility</h3>
                                    </div>
                                    <input class="check_box_input" type="checkbox" id="free_wifi">
                                    <label class="input_field_name check_box_label" for="free_wifi">free wifi</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="resturent">
                                    <label class="input_field_name check_box_label" for="resturent">resturent</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="room_service">
                                    <label class="input_field_name check_box_label" for="room_service">room service</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="bar">
                                    <label class="input_field_name check_box_label" for="bar">bar</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="family_room">
                                    <label class="input_field_name check_box_label" for="family_room">family room</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="breakfast">
                                    <label class="input_field_name check_box_label" for="breakfast">breakfast</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="lunch">
                                    <label class="input_field_name check_box_label" for="lunch">lunch</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="balcony">
                                    <label class="input_field_name check_box_label" for="balcony">balcony</label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="check_boxes padding_top">
                                    <div class="room_facility_head">
                                        <h3>room facility</h3>
                                    </div>
                                    <input class="check_box_input" type="checkbox" id="air_condition">
                                    <label class="input_field_name check_box_label" for="air_condition">air condition</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="front_desk">
                                    <label class="input_field_name check_box_label" for="front_desk">24-hour front desk</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="garden">
                                    <label class="input_field_name check_box_label" for="garden">garden</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="water_park">
                                    <label class="input_field_name check_box_label" for="water_park">water park</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="swimming_pool">
                                    <label class="input_field_name check_box_label" for="swimming_pool">swimming pool</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="dinner">
                                    <label class="input_field_name check_box_label" for="dinner">dinner</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="tv">
                                    <label class="input_field_name check_box_label" for="tv">tv</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="view">
                                    <label class="input_field_name check_box_label" for="view">view</label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="check_boxes padding_top">
                                    <div class="room_facility_head">
                                        <h3>room facility</h3>
                                    </div>
                                    <input class="check_box_input" type="checkbox" id="air_condition">
                                    <label class="input_field_name check_box_label" for="air_condition">air condition</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="front_desk">
                                    <label class="input_field_name check_box_label" for="front_desk">24-hour front desk</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="garden">
                                    <label class="input_field_name check_box_label" for="garden">garden</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="water_park">
                                    <label class="input_field_name check_box_label" for="water_park">water park</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="swimming_pool">
                                    <label class="input_field_name check_box_label" for="swimming_pool">swimming pool</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="dinner">
                                    <label class="input_field_name check_box_label" for="dinner">dinner</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="tv">
                                    <label class="input_field_name check_box_label" for="tv">tv</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="view">
                                    <label class="input_field_name check_box_label" for="view">view</label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="check_boxes padding_top">
                                    <div class="room_facility_head">
                                        <h3>room facility</h3>
                                    </div>
                                    <input class="check_box_input" type="checkbox" id="air_condition">
                                    <label class="input_field_name check_box_label" for="air_condition">air condition</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="front_desk">
                                    <label class="input_field_name check_box_label" for="front_desk">24-hour front desk</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="garden">
                                    <label class="input_field_name check_box_label" for="garden">garden</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="water_park">
                                    <label class="input_field_name check_box_label" for="water_park">water park</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="swimming_pool">
                                    <label class="input_field_name check_box_label" for="swimming_pool">swimming pool</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="dinner">
                                    <label class="input_field_name check_box_label" for="dinner">dinner</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="tv">
                                    <label class="input_field_name check_box_label" for="tv">tv</label>
                                    <br>
                                    <input class="check_box_input" type="checkbox" id="view">
                                    <label class="input_field_name check_box_label" for="view">view</label>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div> <!--========== check box data input end ==========-->
                <div class="container content_display_none_5">
                    <div class="add_room_imgs_wrapp">
                        <div class="add_room_imgs"> <!--========== add room and text start ==========-->
                            <div class="row">
                                <div class="col-9">
                                    <div class="select_img_text">
                                        <div>
                                            <h3>Select your hotel imeages for make a beautiful result</h3>
                                            <h4>You can select only 2 images. Now <span class="img_quentity">0</span>images selected</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="img_select_input">
                                        <input type="file">
                                    </div>
                                </div>
                            </div>
                        </div> <!--========== add room and text end ==========-->
                        <div class="continue_btn continue_btn_5">
                            <a class="cuntinue_5 stop_scrolling" data-user-code="@(user.Code)" href="#">continue</a>
                        </div>
                    </div>
                </div>
                
                <div class="container content_display_none_6">
                    <div class="row">
                        <button class="add_btn">add</button>
                    </div>
                </div>
                </form> <!--==========data form end ==========-->
            </section> <!--========== data table end ==========-->
@endsection
@push('scripts')


@endpush