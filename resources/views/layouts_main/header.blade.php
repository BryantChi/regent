<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>




<header class="site-navbar py-1 fixed-top site-navbar" role="banner">

    <div class="container-fluid">
        <div class="row justify-content-between align-items-center px-lg-5">

            <div class="col-6 col-xl-2" data-aos="fade-down">
                <h1 class="mb-0">
                    <a href="{{route('index')}}" class="text-black h2 mb-0">
                        <img src="{{asset('assets/images/00-hp/top_logo.svg')}}" alt="Logo" class="img-fluid">
                    </a>
                </h1>
            </div>
            <div class="col-auto col-xl-8 justify-content-end" data-aos="fade-down">
                <nav class="site-navigation position-relative text-right2 text-lg-center2 d-none d-xl-block"
                    role="navigation">

                    <ul class="site-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{route('about')}}" class="p-lg-auto px-0 pb-0">關於麗晶</a><br
                                class="d-lg-block d-none"><span>About</span></li>
                        <li><a href="{{route('cases')}}" class="p-lg-auto px-0 pb-0">案例分享</a><br
                                class="d-lg-block d-none"><span>Cases</span></li>
                        <li><a href="{{route('activity')}}" class="p-lg-auto px-0 pb-0">活動訊息</a><br
                                class="d-lg-block d-none"><span>Activity</span></li>
                        <li><a href="{{route('contact')}}" class="p-lg-auto px-0 pb-0">聯絡我們</a><br
                                class="d-lg-block d-none"><span>Contact</span></li>
                        <li><a href="{{route('stores')}}" class="p-lg-auto px-0 pb-0">門市據點</a><br
                                class="d-lg-block d-none"><span>Stores</span></li>
                        <!-- <li class="has-children active">
          <a href="index.html">Home</a>
          <ul class="dropdown">
            <li><a href="#">Menu One</a></li>
            <li><a href="#">Menu Two</a></li>
            <li><a href="#">Menu Three</a></li>
            <li class="has-children">
              <a href="#">Sub Menu</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
          </ul>
        </li> -->

                    </ul>
                </nav>

                <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3"
                    style="position: relative; top: 3px;"><a href="#"
                        class="site-menu-toggle js-menu-toggle text-black">
                        <img src="{{asset('assets/images/fimgs/iconmenu.png')}}" class="img-fluid" width="30"
                            alt="">
                    </a></div>
            </div>

        </div>
    </div>

</header>
