@extends('layouts_main.master')

@section('content')
    <div class="container-xxl pt-5 hp-ab-bg bg-23">
        <div class="container">
            <div class="row" id="about">
                <div class="col-lg-6">
                    <img src="{{asset('assets/images/00-hp/in_pic01.jpg')}}" class="img-fluid mb-3" alt="">
                    <small class="mb-4 text-e9">High-quality kitchen space that meets the needs of modern
                        families.</small>
                    <p class="text-e9 mt-4">
                        麗晶品櫥擁有技藝精湛的設計與施工團隊，<br>
                        包含忍斗、組英、安装以及石材加重的完教服務。
                    </p>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <h2 class="text-967d56 mb-2 hp-ab-title">About Us</h2>
                    <h5 class="text-967d56 mb-3">麗贔品櫥，匠心成就理想生活</h5>
                    <p class="text-e9">
                        自1994年成立以來，麗晶品櫥已在花蓮耕耘了30餘年。<br>
                        專注於廚具與櫥櫃品牌的經營與發展，致力將歐洲廚具的設計美學與國人的使用習慣完美結合，創造出符合現代家庭需求的高品質廚具空間。
                    </p>
                    <a href="{{ route('about') }}" class="btn-more"><span class="more-arrow mr-3">→</span>View
                        More</a>

                    <div class="text-lg-right w-100 mt-4">
                        <img src="{{asset('assets/images/00-hp/in_pic02.jpg')}}" class="img-fluid w-75 mb-3" alt="">
                    </div>


                </div>

                <div class="col-12 my-3 p-3 w-100" style="height: 10rem;"></div>

            </div>
        </div>
    </div>

    <div class="container-xxl pt-5 bg-23">
        <div class="container">
            <div class="row position-relative" id="about2">

                <div class="col-12 mt-5 hp-ab-s2">
                    <div class="text-center">
                        <picture>
                            <source media="(max-width: 640px)" srcset="{{asset('assets/images/00-hp/in_pic3_640.png')}}">
                            <img src="{{asset('assets/images/00-hp/in_pic3_1608.png')}}" class="img-fluid" alt="">
                        </picture>
                        <h5 class="text-967d56 mt-3">麗贔的專業設計，滿足您對理想廚房的所有想像；每一處用心，成就您的高品質生活</h5>
                    </div>
                </div>
                <div class="col-12 ab2-mask"></div>

            </div>
        </div>

    </div>

    <div class="container-xxl py-5 hp-case-bg">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 text-right">
                    <h2 class="text-967d56 hp-case-title">Cases</h2>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-7">
                    <img src="{{asset('assets/images/00-hp/in_pic04.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 pt-5 pl-lg-4">
                    <h6 class="text-e9 pb-2 wm-content" style="border-bottom: 1px solid #967d56;">酒櫃設計</h6>
                    <h4 class="text-e9 mb-3">陳府別墅</h4>

                    <p>
                        紅酒櫃設計不只是簡單的收納，更是要在美觀與實用之間取得平衡。我們
                        的設計師考量到每位顧客的空間需求和個人風格，從材質、色彩、到照明
                        ，每一個細節都精心打造，使紅酒櫃成為空間中的藝術品。透過環繞的燈
                        光設計，紅酒櫃可以營造出高雅且舒適的氛圍，讓紅酒在合適的溫度和濕
                        度下恆久保存。
                    </p>
                    <a href="javascript:void(0);" class="text-967d56">MORE →</a>
                </div>
            </div>

            <div class="row mt-5">

                <div class="col-lg-5 pt-5 pl-lg-4 ">
                    <h6 class="text-e9 pb-2 wm-content" style="border-bottom: 1px solid #967d56;">廚房設計</h6>
                    <h4 class="text-e9 mb-3">張府私宅</h4>

                    <p>
                        廚櫃的材質和色彩選擇也是設計中的重要一環。通過高品質的材質和多樣
                        的色彩搭配，使廚房櫃體既耐用又富有質感。溫暖的木質面板、光滑的大
                        理石檯面、以及內嵌的燈光設計，讓廚房既具現代感又充滿溫馨氛圍，成
                        為家中最具吸引力的場所。
                    </p>
                    <a href="javascript:void(0);" class="text-967d56">MORE →</a>
                </div>
                <div class="col-lg-7">
                    <img src="{{asset('assets/images/00-hp/in_pic05.jpg')}}" class="img-fluid" alt="">
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="hp-case-line mb-3"></div>

                    <p class="text-e9">
                        歷晶品櫥用心呈現每個細節，讓您的廚原空間更具溫度與品味。
                    </p>
                    <a href="{{ route('cases') }}" class="btn-more"><span class="more-arrow mr-3">→</span>View
                        More</a>
                </div>
            </div>

        </div>
    </div>

    <div class="container-xxl py-5 hp-activity-bg bg-23">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="text-e9 hp-activity-title">Regent living studio</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 d-flex flex-column justify-content-between mb-lg-0 mb-5">
                    <h3 class="text-e9 mb-5">活動訊息</h3>

                    <div class="">
                        <p class="text-e9">
                            麗晶品櫥活動期間限定特惠，<br>
                            與您一起實現理想廚房空間。
                        </p>
                        <a href="{{ route('activity') }}" class="btn-more"><span class="more-arrow mr-3">→</span>View More</a>
                    </div>
                </div>
                <div class="col-lg-9 d-block d-lg-flex justify-content-around mt-lg-0 mt-5">
                    <div class="hp-activity-box mr-lg-3">
                        <div class="hab-content1 mb-5">
                            <p class="hp-activity-date text-a7 mb-0">2024.11.22</p>
                            <p class="hp-activity-category text-e9 mb-0">・訊息分類</p>
                            <h4 class="text-967d56 ">網站正式啟用</h4>
                        </div>

                        <div class="hab-content02 d-flex flex-column">
                            <a href="javascript:void(0);" class="text-e9">MORE →</a>
                            <img src="{{asset('assets/images/00-hp/in_pic06.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="hp-activity-line mx-lg-3 my-lg-auto my-5"></div>

                    <div class="hp-activity-box ml-lg-3">
                        <div class="hab-content1 mb-5">
                            <p class="hp-activity-date text-a7 mb-0">2024.11.22</p>
                            <p class="hp-activity-category text-e9 mb-0">・訊息分類</p>
                            <h4 class="text-967d56 ">網站正式啟用</h4>
                        </div>

                        <div class="hab-content02 d-flex flex-column">
                            <a href="javascript:void(0);" class="text-967d56">MORE →</a>
                            <img src="{{asset('assets/images/00-hp/in_pic07.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl">
        <div class="container-fluid m-0 p-0">
            <div class="row px-0 mx-0" id="hp-contact">
                <div class="col-lg-6 p-0 bg-0a15 d-flex justify-content-lg-around justify-content-between align-items-center px-lg-auto px-3">
                    <div>
                        <h3 class="text-e9">Store</h3>
                        <p class="text-e9 font-weight-light">
                            門市據點
                        </p>
                    </div>

                    <div>
                        <a href="{{ route('stores') }}">
                            <img src="{{asset('assets/images/00-hp/bu_arrow.png')}}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 p-0 bg-0a15 d-flex justify-content-lg-around justify-content-between align-items-center px-lg-auto px-3">
                    <div>
                        <h3 class="text-e9">Contact</h3>
                        <p class="text-e9 font-weight-light">
                            聯絡我們
                        </p>
                    </div>

                    <div>
                        <a href="{{ route('contact') }}">
                            <img src="{{asset('assets/images/00-hp/bu_arrow_rollin.png')}}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
