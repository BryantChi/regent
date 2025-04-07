@extends('layouts_main.master')

@section('content')
    <div class="container-xxl py-5 about-bg">
        <div class="container">
            <div class="row justity-content-center" id="about">
                <div class="col-12 mb-4">
                    <div class="pg-title-section text-center">
                        <h2 class="text-e9">關於麗晶</h2>
                        <p class="text-997d53 font-weight-light">
                            About Us
                        </p>
                    </div>

                </div>

                <div class="col-lg-6 pr-lg-5 pr-auto d-flex flex-column justify-content-between">
                    <div class="about-content mb-lg-4 mb-3">
                        <h5 class="text-caa883 mb-4">麗晶 | 品櫥 &emsp; Regent living studio</h5>

                        <p class="text-e9 mb-4 font-weight-light">
                            自1994年成立以來，麗晶品櫥已在花蓮耕耘了30餘年。<br>
                            專注於廚具與櫥櫃品牌的經營與發展，致力將歐洲廚具的設計美學與國人的使用習慣完美結合，創造出符合現代家庭需求的高品質廚具空間。
                        </p>
                    </div>

                    <div class="about-slogan mt-lg-3 mt-1">
                        <h4 class="text-d5 font-weight-light">Create a high-quality kitchen for you.</h4>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <picture>
                        <source media="(max-width: 768px)" srcset="{{asset('assets/images/01/01pic1_640.jpg')}}">
                        <img src="{{asset('assets/images/01/01pic1_840.jpg')}}" class="img-fluid" alt="">
                    </picture>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row position-relative">
                <div class="abpic-mask"></div>
                <div class="col-12 ab-pic2 text-center">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{asset('assets/images/01/01pic2_640.jpg')}}">
                        <source media="(max-width: 1023px)" srcset="{{asset('assets/images/01/01pic2_1024.jpg')}} ">
                        <img src="{{asset('assets/images/01/01pic2_1608.jpg')}}" class="img-fluid" alt="">
                    </picture>
                </div>
            </div>
        </div>

    </div>

    <div class="container-xxl py-5 about-bg2">

        <div class="container mt-5 mb-3">
            <div class="row position-relative">
                <div class="abpic-mask"></div>
            </div>
        </div>


        <div class="container">
            <div class="row" id="about2">
                <div class="col-lg-5 mb-lg-0 mb-3 text-center">
                    <img src="{{asset('assets/images/01/01pic3.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7">

                    <div class="about-content mb-lg-4 mb-3">
                        <h5 class="text-caa883 mb-3">核心價值</h5>

                        <p class="text-e9 mb-5 font-weight-light">
                            麗晶品櫥的核心價值建立在「人」的基礎上。我們將顧客視為朋友，正是這些客戶長年的支持，成就了今日堅持品質與品味的麗晶；我們不僅銷售產品，更是傳達對廚房與生活品質的追求，並提供專業的生活領域建議與體驗。
                        </p>

                        <h5 class="text-caa883 mb-3">特色與優勢</h5>

                        <p class="text-e9 mb-5 font-weight-light">
                            身處花東地區，我們面臨著地理與資訊的限制，但麗晶品櫥在這樣的環境中展現了獨特的優勢。<br>
                            我們不僅擁有陣容堅強的設計師，還擁有自己的組裝、安裝與石材加工團隊。<br>
                            這使我們的產品多樣性與設計具有獨特優勢，同時確保安裝品質的穩定性與精確性，此外我們亦注重與客戶的溝通，確保了解產品的材質與選擇，致力於減少信息不對等，讓客戶在成本與品質之間有更多的選擇權。
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
