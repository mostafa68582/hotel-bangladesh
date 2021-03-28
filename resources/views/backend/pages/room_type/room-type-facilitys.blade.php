@extends('backend.master')
@section('content')
	 <section class="data_table"> <!--========== data table start ==========-->
            <div class="data_heading"> <!--========== data table heading start ==========-->
                <h3>room add</h3>
            </div> <!--========== data table heading end ==========-->
            <div class="container"> <!--========== data table input start ==========-->
                <div class="data">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6"> <!--========== basic info start ==========-->
                            <div class="data_input_field">
                                <div class="data_input_field_head">
                                    <h3>basic info</h3>
                                </div>
                                <div class="data_input">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <label class="input_field_name" for="room_name">room name</label>
                                                <br>
                                                <input class="data_field_input_tag" type="text" id="room_name" placeholder="Room name">
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <label class="input_field_name" for="room_number">room number</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="room_number" placeholder="Room number">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <label class="input_field_name" for="available">available</label>
                                                <br>
                                                <input class="data_field_input_tag" type="text" id="available" placeholder="Available">
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <label class="input_field_name" for="status">status</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="status" placeholder="Status">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <label class="input_field_name" for="bed_type">bed type</label>
                                                <br>
                                                <input class="data_field_input_tag" type="text" id="bed_type" placeholder="Bed type">
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="input_field_name" for="description">Description</label>
                                                <br>
                                                <textarea class="description_taxt" name="" id="description" cols="30" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!--========== basic info end ==========-->
                        <div class="col-12 col-sm-12 col-md-6"> <!--========== about room start ==========-->
                            <div class="data_input_field">
                                <div class="data_input_field_head">
                                    <h3>about room</h3>
                                </div>
                                <div class="data_input">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <label class="input_field_name" for="type_name">Type name</label>
                                                <br>
                                                <input class="data_field_input_tag" type="text" id="type_name" placeholder="Type name">
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <label class="input_field_name" for="cost_pre_day">Cost per day</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="cost_pre_day" placeholder="Cost per day">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <label class="input_field_name" for="discount">Discount</label>
                                                <br>
                                                <input class="data_field_input_tag" type="text" id="discount" placeholder="Discount">
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <label class="input_field_name" for="size">Size</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="size" placeholder="Size">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <label class="input_field_name" for="max_adult">Max adult</label>
                                                <br>
                                                <input class="data_field_input_tag" type="text" id="max_adult" placeholder="Max adult">
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6">
                                                <label class="input_field_name" for="max_guest">Max guest</label>
                                            <br>
                                            <input class="data_field_input_tag" type="text" id="max_guest" placeholder="Max guest">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="input_field_name" for="description2">Description</label>
                                                <br>
                                                <textarea class="description_taxt" name="" id="description2" cols="30" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!--========== about room end ==========-->
                    </div>
                </div>
            </div> <!--========== data table input end ==========-->

            <div class="container"> <!--========== check box data input start ==========-->
                <div class="check_bata_field">
                    <div class="data_input_field_head">
                        <h3>room facility</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="check_boxes padding_bottom">
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
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="check_boxes padding_top">
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
                    </div>
                    <div class="add_room_img_text"> <!--========== add room and text start ==========-->
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 room_img_col_1">
                                <div class="add_text">
                                    <div class="add_text_head">
                                        <h3>add text</h3>
                                    </div>
                                    <div class="all_text">
                                        <textarea name="" id="txt" cols="30" rows="10" placeholder="Write Description...."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 room_img_col_2">
                                <div class="room_img">
                                    <div class="add_text_head">
                                        <h3>room images</h3>
                                    </div>
                                    <div class="room_product_img">
                                        <div class="row">
                                            <div class="col-6 col-sm-6 col-md-3">
                                                <div class="room_img_wrapp">
                                                    <div class="room_image" contenteditable="true" placeholder="Image"></div>
                                                    <div class="close_btn"><button>&#8722;</button></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-3">
                                                <div class="room_img_wrapp">
                                                    <div class="room_image" contenteditable="true" placeholder="Image"></div>
                                                    <div class="close_btn"><button>&#8722;</button></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-3">
                                                <div class="room_img_wrapp">
                                                    <div class="room_image" contenteditable="true" placeholder="Image"></div>
                                                    <div class="close_btn"><button>&#8722;</button></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-3">
                                                <div class="room_img_wrapp">
                                                    <div class="room_image" contenteditable="true" placeholder="Image"></div>
                                                    <div class="close_btn"><button>&#8722;</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row margin_top_img_row">
                                            <div class="col-6 col-sm-6 col-md-3">
                                                <div class="room_img_wrapp">
                                                    <div class="room_image" contenteditable="true" placeholder="Image"></div>
                                                    <div class="close_btn"><button>&#8722;</button></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-3">
                                                <div class="room_img_wrapp">
                                                    <div class="room_image" contenteditable="true" placeholder="Image"></div>
                                                    <div class="close_btn"><button>&#8722;</button></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-3">
                                                <div class="room_img_wrapp">
                                                    <div class="room_image" contenteditable="true" placeholder="Image"></div>
                                                    <div class="close_btn"><button>&#8722;</button></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-3">
                                                <div class="room_img_wrapp">
                                                    <div class="room_image" contenteditable="true" placeholder="Image"></div>
                                                    <div class="close_btn"><button>&#8722;</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row margin_top_img_row">
                                            <div class="col-6 col-sm-6 col-md-3">
                                                <div class="room_img_wrapp">
                                                    <div class="room_image" contenteditable="true" placeholder="Image"></div>
                                                    <div class="close_btn"><button>&#8722;</button></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-3">
                                                <div class="room_img_wrapp">
                                                    <div class="room_image" contenteditable="true" placeholder="Image"></div>
                                                    <div class="close_btn"><button>&#8722;</button></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-3">
                                                <div class="room_img_wrapp">
                                                    <div class="room_image" contenteditable="true" placeholder="Image"></div>
                                                    <div class="close_btn"><button>&#8722;</button></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-3">
                                                <div class="room_img_wrapp">
                                                    <div class="room_image" contenteditable="true" placeholder="Image"></div>
                                                    <div class="close_btn"><button>&#8722;</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clear_add_btn">
                                            <div class="col-6 clear_all_col">
                                                <div class="clear_img_btn das_add_img_btn">
                                                    <button>clear all</button>
                                                </div>
                                            </div>
                                            <div class="col-6 add_img_col">
                                                <div class="add_img_btn das_add_img_btn">
                                                    <button>add imeage</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--========== add room and text end ==========-->
                </div>
            </div> <!--========== check box data input end ==========-->
            <div class="container">
                <div class="row">
                    <button class="add_btn">add</button>
                </div>
            </div>
        </section>
@endsection
