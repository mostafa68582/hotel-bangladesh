@extends('backend.master')
@push('style')
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/hotelChatingPage.css')}}"> <!--===== style.css link =====-->
@endpush
@section('content')
	<section class="user_data"> <!--========== user data start ==========-->
                <form action=""> <!--==========user data form start ==========-->
                    <section class="chat_box_wrapper"> <!--========== chat box wrapper start ==========-->
                        <div class="chat_box_content">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-7 col-lg-9">
                                    <div class="chat_box"> <!--========== chat box start ==========-->
                                        <div class="chat_box_head"> <!--========== chat box heading start ==========-->
                                            <div class="row">
                                                <div class="col-12 col-sm-5">
                                                    <div class="chat_box_head_content_wrap">
                                                        <div class="chat_box_head_content">
                                                            <div class="chat_box_user_img">
                                                                <img src="{{asset('backend/assets/images/about-man-img.jpg')}}" alt="img">
                                                            </div>
                                                            <div class="chat_box_user_name">
                                                                <h3>mike litorus <span class="typing_text">typing...</span></h3>
                                                                <h4>Last seen Today at 7:50 AM</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-7">
                                                    <div class="chat_box_search">
                                                        <ul>
                                                            <li class="chat_heading_serch_input"><input type="text" placeholder="search"></li>
                                                            <li><a href="#"><i class="fas fa-phone-alt"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-video"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-cogs"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!--========== chat box heading end ==========-->
                                        <div class="chat_box_text_area"> <!--========== chat box text area start ==========-->
                                            <div class="chat_box_mas_content">
                                                <div class="friend_img_div">
                                                    <div class="friend_img">
                                                        <img src="{{asset('backend/assets/images/about-man-img.jpg')}}" alt="img">
                                                        <div class="friend_img_text">
                                                            <h3>global technologies</h3>
                                                            <h4>barry cuda</h4>
                                                            <h5>company name <span class="job_type">ceo</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="receive_massege_wrapp massege_wrapp">
                                                    <div class="rsv_mgs_contant mgs_content">
                                                        <div class="frnd_img">
                                                            <img src="{{asset('backend/assets/images/about-man-img.jpg')}}" alt="img">
                                                        </div>
                                                        <div class="rsv_massege_text_wrapper massege_text_wrapper">
                                                            <div class="rsv_massege massege_txt">
                                                                <h4>hello</h4>
                                                            </div>
                                                            <div class="rsv_massege massege_txt">
                                                                <h4>How are you?</h4>
                                                            </div>
                                                            <div class="rsv_massege massege_txt">
                                                                <h4>What are you doing?</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="send_massege_wrapp massege_wrapp">
                                                    <div class="snd_mgs_contant mgs_content">
                                                        <div class="snd_massege_text_wrapper massege_text_wrapper">
                                                            <div class="snd_massege massege_txt">
                                                                <h4>hello</h4>
                                                            </div>
                                                            <div class="snd_massege massege_txt">
                                                                <h4>How are you?</h4>
                                                            </div>
                                                            <div class="snd_massege massege_txt">
                                                                <h4>What are you doing?</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="receive_massege_wrapp massege_wrapp">
                                                    <div class="rsv_mgs_contant mgs_content">
                                                        <div class="frnd_img">
                                                            <img src="{{asset('backend/assets/images/about-man-img.jpg')}}" alt="img">
                                                        </div>
                                                        <div class="rsv_massege_text_wrapper massege_text_wrapper">
                                                            <div class="rsv_massege massege_txt">
                                                                <h4>How are you?</h4>
                                                            </div>
                                                            <div class="rsv_massege massege_txt">
                                                                <h4>What are you doing?</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="send_massege_wrapp massege_wrapp">
                                                    <div class="snd_mgs_contant mgs_content">
                                                        <div class="snd_massege_text_wrapper massege_text_wrapper">
                                                            <div class="snd_massege massege_txt">
                                                                <h4>ok</h4>
                                                            </div>
                                                            <div class="snd_massege massege_txt">
                                                                <h4>How are you?</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!--========== chat box text area end ==========-->
                                        <div class="massege_input_box"> <!--========== massege input box start ==========-->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mas_inp_box">
                                                        <div class="file_link_wrapp">
                                                            <label for="file_link"><i class="fas fa-paperclip"></i></label>
                                                            <input type="file" id="file_link" class="file_link_input">
                                                            <label for=""><i class="far fa-images"></i></label>
                                                        </div>
                                                        <div class="massege_input_wrap">
                                                            <input type="text" placeholder="write massage...">
                                                            <button><i class="far fa-paper-plane"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!--========== massege input box end ==========-->
                                    </div> <!--========== chat box end ==========-->
                                </div>
                                <div class="col-12 col-sm-12 col-md-5 col-lg-3 margin_left">
                                    <div class="user_profile"> <!--========== user profile start ==========-->
                                        <div class="user_profile_content_wrapper">
                                            <div class="user_profile_content">
                                                <div class="user_profile_head">
                                                    <ul>
                                                        <li class="calls_li"><a href="#">calls</a></li>
                                                        <li class="profile_li"><a href="#">profile</a></li>
                                                    </ul>
                                                </div>
                                                <div class="profile_body_content">
                                                    <div class="body_content_top_wrapp">
                                                        <div class="body_content_top">
                                                            <li class="profile_edit_btn_icon"><i class="fas fa-pencil-alt"></i></li>
                                                            <img src="{{asset('backend/assets/images/about-man-img.jpg')}}" alt="profile img">
                                                            <h4>johm dou</h4>
                                                            <h5>web designer</h5>
                                                        </div>
                                                    </div>
                                                    <div class="profile_user_data">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="profile_data_name">
                                                                    <h4>username:</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="profile_data_value">
                                                                    <h4>johndou</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row margin_top_profile_name_row">
                                                            <div class="col-5">
                                                                <div class="profile_data_name">
                                                                    <h4>DOB:</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="profile_data_value">
                                                                    <h4>24 Feb</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row margin_top_profile_name_row">
                                                            <div class="col-5">
                                                                <div class="profile_data_name">
                                                                    <h4>email:</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="profile_data_value">
                                                                    <h4>johndou@gmail.com</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row margin_top_profile_name_row">
                                                            <div class="col-5">
                                                                <div class="profile_data_name">
                                                                    <h4>phone:</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="profile_data_value">
                                                                    <h4>00158492</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="side_profile_btn">
                                                    <button class="all_file_btn">all file</button>
                                                    <button>my file</button>
                                                </div>
                                                <div class="pdf_text_wrapp">
                                                    <div class="pdf_icon">
                                                        <i class="far fa-file-pdf"></i>
                                                    </div>
                                                    <div class="pdf_text">
                                                        <h4>AHA solfcare mobile alllication</h4>
                                                        <h5><span class="learn_gatin">learn geatin</span>may 3ths at 6:63pm</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!--========== user profile end ==========-->
                                </div>
                            </div>
                        </div>
                    </section> <!--========== chat box wrapper end ==========-->
                </form> <!--==========data form end ==========-->
            </section> 

@endsection
@push('scripts')

<script type="text/javascript" src="{{asset('backend/assets/js/hotelChatingPage.js')}}"></script> <!--===== custom js link =====-->
@endpush