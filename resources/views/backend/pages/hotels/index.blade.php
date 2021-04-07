@extends('backend.master')
@push('style')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backend/assets/css/allHotelPage.css') }}"> <!--===== style.css link =====-->
@endpush
@section('content')

    <section class="user_data"> <!--========== user data start ==========-->
        <form action=""> <!--========== user data form start ==========-->
            <div class="row"> <!--========== room booking head start ==========-->
                <div class="col-6">
                    <div class="data_heading">
                        <h3>all hotels</h3>
                        <h4><span class="data_text"><a href="#">Database</a></span> / <span
                                class="add_text">all hotels</span></h4>
                    </div>
                </div>
                <div class="col-6 header_btn_col">
                    <div class="create_new_room_btn">
                        <div>
                            <li class="bar_icon_li"><a href=""><i class="fas fa-bars"></i></a></li>
                            <li>
                                <h3><a href="#"><i class="fas fa-plus"></i>create new</a></h3>
                            </li>
                        </div>
                    </div>
                </div>
            </div> <!--========== room booking head end ==========-->
            <section class="payments_entries"> <!--========== room booking start ==========-->
                <form action=""> <!--========== room booking from start ==========-->
                    <div class="row room_booking_row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="date_picker">
                                <input id="start" type="text" readonly="readonly" placeholder="Client ID">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="date_picker">
                                <input id="end" type="text" readonly="readonly" placeholder="Client Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="select_status">
                                <label for="status"></label>
                                <select name="" id="status">
                                    <option value="booinkg" selected>Select Company</option>
                                    <option value="booinkg">booking</option>
                                    <option value="evay">evay</option>
                                    <option value="evay">evay</option>
                                    <option value="evay">evay</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="das_room_button">
                                <a href="#" class="stop_scrolling" data-user-code="@(user.Code)">
                                    <button class="room_das_btn">SEARCH</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </form> <!--========== room booking from end ==========-->
                <div class="all_hotels"> <!--========== all hotels start ==========-->
                    <div class="row">
                        @forelse($hotels as $hotel)
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="hotel_contents_wrap">
                                <div class="hotel_contents">
                                    <li class="all_hotel_more_opt_icon mor_opt_icon_li"><i
                                            class="fas fa-ellipsis-v"></i>
                                        <div class="more_opt">
                                            <ul>
                                                <li>edit</li>
                                                <li>remove</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <img src="{{ asset('backend/assets/images/hotel.jpg') }}" alt="img">
                                    <h4>{{ $hotel->name }}</h4>
                                    <h5>{{ $hotel->user->getFullName() }}</h5>
                                    <h5>{{ $hotel->hotel_id }}</h5>
                                    <h6>Owner</h6>
                                    <h3><a href="#">message</a><a href="#">view profile</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @empty
                            No hotels available!
                        @endforelse
                    </div>
                </div> <!--========== all hotels end ==========-->
            </section> <!--========== room booking end ==========-->

        </form> <!--==========data form end ==========-->
    </section>
@endsection
@push('scripts')

    <script type="text/javascript"
            src="{{ asset('backend/assets/js/allHotelPage.js') }}"></script> <!--===== custom js link =====-->
@endpush
