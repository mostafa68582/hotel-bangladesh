<header class="header"> 
            <div class="container_fluid">
                <div class="header_navbar">
                    <!--3/23/2021 start-->
                    <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="#">super admin</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                </ul>
                                <form class="d-flex">
                                    <input class="form-control me-2 search_input" type="search" placeholder="Search" aria-label="Search">
                                </form>
                                <ul class="notification_menu">
                                    <li class="notification_li"><a href="#"><i class="far fa-bell"></i></a></li>
                                    <li><a href="#"><img src="{{asset('backend/assets/images/about-man-img.jpg')}}" alt="img"></a></li>
                                    <li class="dropdown admin_drop_link"><a class="dropdown-toggle" href="#"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
                                        <ul class="dropdown-menu admin_drop_menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">profile</a></li>
                                            <li><a class="dropdown-item" href="#">account</a></li>
                                            <li><a class="dropdown-item" href="#">logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                    </nav>
                    <!--3/23/2021 end-->
                </div>
            </div>
        </header> 