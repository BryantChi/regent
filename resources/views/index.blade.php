@extends('layouts_main.master')

@section('content')
    <div class="container-xxl pt-5 hp-ab-bg bg-23">
        <div class="container">
            <div class="row" id="about">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/00-hp/in_pic01.jpg') }}" class="img-fluid mb-3 wow" alt="" data-aos="zoom-in" data-aos-delay="200"> >
                    <small class="mb-4 text-e9 wow" data-aos="fade-up" data-aos-delay="200">High-quality kitchen space that meets the needs of modern
                        families.</small>
                    <p class="text-e9 mt-4 wow" data-aos="fade-up" data-aos-delay="200">
                        麗晶品櫥擁有技藝精湛的設計與施工團隊，<br>
                        包含設計、組裝、安装以及石材加重的完整服務。
                    </p>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <h2 class="text-997d53 mb-2 hp-ab-title wow" data-aos="fade-up" data-aos-delay="200">About Us</h2>
                    <h5 class="text-caa883 mb-3 wow" data-aos="fade-up" data-aos-delay="200">麗晶品櫥，匠心成就理想生活</h5>
                    <p class="text-e9 wow" data-aos="fade-up" data-aos-delay="200">
                        自1994年成立以來，麗晶品櫥已在花蓮耕耘了30餘年。<br>
                        專注於廚具與櫥櫃品牌的經營與發展，致力將歐洲廚具的設計美學與國人的使用習慣完美結合，創造出符合現代家庭需求的高品質廚具空間。
                    </p>
                    <a href="{{ route('about') }}" class="btn-more wow" data-aos="fade-up" data-aos-delay="200"><span class="more-arrow mr-3">→</span>View
                        More</a>

                    <div class="text-lg-right w-100 mt-4 wow" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('assets/images/00-hp/in_pic02.jpg') }}" class="img-fluid w-75 mb-3"
                            alt="">
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
                            <source media="(max-width: 640px)" srcset="{{ asset('assets/images/00-hp/in_pic3_640.png') }}">
                            <img src="{{ asset('assets/images/00-hp/in_pic3_1608.png') }}" class="img-fluid wow" alt="" data-aos="zoom-in" data-aos-delay="200">
                        </picture>
                        <h5 class="text-caa883 mt-3 wow" style="line-height: 1.8rem;" data-aos="fade-up" data-aos-delay="200">麗晶的專業設計，滿足您對理想廚房的所有想像；每一處用心，成就您的高品質生活</h5>
                    </div>
                </div>
                <div class="col-12 ab2-mask"></div>

            </div>
        </div>

    </div>

    <div class="container-xxl py-5 hp-case-bg">
        <div class="container">
            <div class="row mb-3 wow" data-aos="fade-up" data-aos-delay="200">
                <div class="col-12 text-right">
                    <h2 class="text-997d53 hp-case-title">Cases</h2>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-7 align-self-center wow" data-aos="zoom-in" data-aos-delay="200">
                    <a href="{{ route('cases-details', ['id' => $cases[0]->id ?? 0, 'category_id' => $cases[0]->category_id ?? '']) }}">
                        <img src="{{ env('APP_URL', 'https://regent-kitchen.com') . '/uploads/' . ($cases[0]->image ?? '') }}"
                                        class="img-fluid" alt="">
                        {{-- <img src="{{ asset('assets/images/00-hp/in_pic04.jpg') }}" class="img-fluid" alt=""> --}}
                    </a>
                </div>
                <div class="col-lg-5 pt-lg-5 pt-3 pl-lg-4 align-self-center wow" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('cases', ['category_id' => $cases[0]->category_id ?? '']) }}">
                        <h6 class="text-e9 pb-2 wm-content" style="border-bottom: 1px solid #c8a063;">
                            {{ \App\Models\Admin\Category::find($cases[0]->category_id ?? '')->name ?? '未分類' }}</h6>
                    </a>
                    <a href="{{ route('cases-details', ['id' => $cases[0]->id ?? 0, 'category_id' => $cases[0]->category_id ?? '']) }}">
                        <h4 class="text-e9 mb-3">{{ $cases[0]->title ?? '陳府別墅' }}</h4>
                    </a>

                    @php
                        // 移除圖片標籤
                        $cleanContent = preg_replace('/<img[^>]*>/i', '', $cases[0]->content ?? '紅酒櫃設計不只是簡單的收納，更是要在美觀與實用之間取得平衡。我們的設計師考量到每位顧客的空間需求和個人風格，從材質、色彩、到照明，每一個細節都精心打造，使紅酒櫃成為空間中的藝術品。透過環繞的燈光設計，紅酒櫃可以營造出高雅且舒適的氛圍，讓紅酒在合適的溫度和濕度下恆久保存。');
                        // 移除其他 HTML 標籤
                        $cleanText = strip_tags($cleanContent);
                        // 截取前100字（處理UTF-8中文）
                        $preview = mb_substr($cleanText, 0, 100);
                    @endphp
                    <div class="text-ac font-weight-bold multiline-ellipsis-4 mb-3" style="font-weight: 600;">
                        {!! $preview ?? '' !!}
                    </div>
                    <a href="{{ route('cases-details', ['id' => $cases[0]->id ?? 0, 'category_id' => $cases[0]->category_id ?? '']) }}"
                        class="text-a-more">MORE →</a>
                </div>
            </div>

            <div class="row mt-5">

                <div class="col-lg-5 pt-lg-5 pt-3 pl-lg-4 align-self-center wow order-lg-1 order-2" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('cases', ['category_id' => $cases[1]->category_id ?? '']) }}">
                        <h6 class="text-e9 pb-2 wm-content" style="border-bottom: 1px solid #c8a063;">
                            {{ \App\Models\Admin\Category::find($cases[1]->category_id ?? '')->name ?? '未分類' }}</h6>
                    </a>
                    `
                        <h4 class="text-e9 mb-3">{{ $cases[1]->title ?? '張府私宅' }}</h4>
                    </a>

                    @php
                        // 移除圖片標籤
                        $cleanContent = preg_replace('/<img[^>]*>/i', '', $cases[1]->content ?? '廚櫃的材質和色彩選擇也是設計中的重要一環。通過高品質的材質和多樣的色彩搭配，使廚房櫃體既耐用又富有質感。溫暖的木質面板、光滑的大理石檯面、以及內嵌的燈光設計，讓廚房既具現代感又充滿溫馨氛圍，成為家中最具吸引力的場所。');
                        // 移除其他 HTML 標籤
                        $cleanText = strip_tags($cleanContent);
                        // 截取前100字（處理UTF-8中文）
                        $preview = mb_substr($cleanText, 0, 100);
                    @endphp
                    <div class="text-ac font-weight-bold multiline-ellipsis-4 mb-3" style="font-weight: 600;">
                        {{-- <div class="text-ac font-weight-bold multiline-ellipsis-4 mb-2"> --}}
                        {!! $preview ?? '' !!}
                    </div>
                    <a href="{{ route('cases-details', ['id' => $cases[1]->id ?? 0, 'category_id' => $cases[1]->category_id ?? '']) }}"
                        class="text-a-more">MORE →</a>
                </div>
                <div class="col-lg-7 align-self-center wow order-lg-2 order-1" data-aos="zoom-in" data-aos-delay="200">
                    <a href="{{ route('cases-details', ['id' => $cases[1]->id ?? 0, 'category_id' => $cases[1]->category_id ?? '']) }}">
                        <img src="{{ env('APP_URL', 'https://regent-kitchen.com') . '/uploads/' . ($cases[1]->image ?? '') }}"
                                        class="img-fluid" alt="">
                        {{-- <img src="{{ asset('assets/images/00-hp/in_pic05.jpg') }}" class="img-fluid" alt=""> --}}
                    </a>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="hp-case-line mb-3"></div>

                    <p class="text-e9 wow" data-aos="fade-up" data-aos-delay="200">
                        麗晶品櫥用心呈現每個細節，讓您的廚房空間更具溫度與品味。
                    </p>
                    <a href="{{ route('cases') }}" class="btn-more wow" data-aos="fade-up" data-aos-delay="200"><span class="more-arrow mr-3">→</span>View
                        More</a>
                </div>
            </div>

        </div>
    </div>

    <div class="container-xxl py-5 hp-activity-bg bg-23">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center wow" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-d5 hp-activity-title">Regent living studio</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 d-flex flex-column justify-content-between mb-lg-0 mb-5 wow" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-e9 mb-lg-5">活動訊息</h3>

                    <div class="d-lg-block d-none">
                        <p class="text-e9">
                            麗晶品櫥活動期間限定特惠，<br>
                            與您一起實現理想廚房空間。
                        </p>
                        <a href="{{ route('activity') }}" class="btn-more"><span class="more-arrow mr-3">→</span>View
                            More</a>
                    </div>
                </div>
                <div class="col-lg-9 d-block d-lg-flex justify-content-around mt-lg-0">
                    <div class="hp-activity-box mr-lg-3">
                        <div class="hab-content1 mb-5 wow" data-aos="fade-up" data-aos-delay="200">
                            <p class="hp-activity-date text-a7 mb-0">
                                {{ \Carbon\Carbon::parse($activities[0]->created_at ?? new DateTime())->format('Y.m.d') }}
                            </p>
                            <a
                                href="{{ route('activity', ['classification_id' => $activities[0]->classification_id ?? '']) }}">
                                <p class="hp-activity-category text-e9 mb-0">
                                    ・{{ \App\Models\Admin\Classification::find($activities[0]->classification_id ?? '')->name ?? '未分類' }}
                                </p>
                            </a>
                            <a href="{{ route('activity-details', ['id' => $activities[0]->id ?? 0, 'classification_id' => $activities[0]->classification_id]) }}">
                                <h4 class="text-caa883 ">{{ $activities[0]->title ?? '網站正式啟用' }}</h4>
                            </a>
                        </div>

                        <div class="hab-content02 d-flex flex-column">
                            <a href="{{ route('activity-details', ['id' => $activities[0]->id ?? 0, 'classification_id' => $activities[0]->classification_id]) }}" class="text-a-more wow" data-aos="fade-up" data-aos-delay="200">MORE →</a>
                            <a href="{{ route('activity-details', ['id' => $activities[0]->id ?? 0, 'classification_id' => $activities[0]->classification_id]) }}" class="wow" data-aos="zoom-in" data-aos-delay="200">
                                <img src="{{ env('APP_URL', 'https://regent-kitchen.com') . '/uploads/' . ($activities[0]->image ?? '') }}" class="img-fluid" alt="">
                                {{-- <img src="{{ asset('assets/images/00-hp/in_pic06.jpg') }}" class="img-fluid" alt=""> --}}
                            </a>
                        </div>
                    </div>

                    <div class="hp-activity-line mx-lg-3 my-lg-auto my-5"></div>

                    <div class="hp-activity-box ml-lg-3">
                        <div class="hab-content1 mb-5 wow" data-aos="fade-up" data-aos-delay="200">
                            <p class="hp-activity-date text-a7 mb-0">
                                {{ \Carbon\Carbon::parse($activities[1]->created_at ?? new DateTime())->format('Y.m.d') }}
                            </p>
                            <a
                                href="{{ route('activity', ['classification_id' => $activities[1]->classification_id ?? '']) }}">
                                <p class="hp-activity-category text-e9 mb-0">
                                    ・{{ \App\Models\Admin\Classification::find($activities[1]->classification_id ?? '')->name ?? '未分類' }}
                                </p>
                            </a>
                            <a href="{{ route('activity-details', ['id' => $activities[1]->id ?? 0, 'classification_id' => $activities[1]->classification_id]) }}">
                                <h4 class="text-caa883 ">{{ $activities[1]->title ?? '網站正式啟用' }}</h4>
                            </a>
                        </div>

                        <div class="hab-content02 d-flex flex-column">
                            <a href="{{ route('activity-details', ['id' => $activities[1]->id ?? 0, 'classification_id' => $activities[1]->classification_id]) }}" class="text-a-more wow" data-aos="fade-up" data-aos-delay="200">MORE →</a>
                            <a href="{{ route('activity-details', ['id' => $activities[1]->id ?? 0, 'classification_id' => $activities[1]->classification_id]) }}" class="wow" data-aos="zoom-in" data-aos-delay="200">
                                <img src="{{ env('APP_URL', 'https://regent-kitchen.com') . '/uploads/' . ($activities[1]->image ?? '') }}" class="img-fluid" alt="">
                                {{-- <img src="{{ asset('assets/images/00-hp/in_pic07.jpg') }}" class="img-fluid" alt=""> --}}
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-12 p-lg-0 m-lg-0 pt-3 mt-5">
                    <div class="d-lg-none d-block">
                        <p class="text-e9 wow" data-aos="fade-up" data-aos-delay="200">
                            麗晶品櫥活動期間限定特惠，<br>
                            與您一起實現理想廚房空間。
                        </p>
                        <a href="{{ route('activity') }}" class="btn-more wow" data-aos="fade-up" data-aos-delay="200"><span class="more-arrow mr-3">→</span>View
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl">
        <div class="container-fluid m-0 p-0">
            <div class="row px-0 mx-0" id="hp-contact">
                <div class="col-lg-6 p-0 bg-0a15  px-lg-auto px-3">
                    <a href="{{ route('stores') }}"
                        class="w-100 h-100 d-flex justify-content-lg-around justify-content-between align-items-center hp-contact-link">
                        <div class="hp-contact-content wow" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="text-e9">Store</h3>
                            <p class="text-e9 font-weight-light">
                                門市據點
                            </p>
                        </div>

                        <div class="wow" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('assets/images/00-hp/bu_arrow.png') }}" class="img-fluid hp-contact-arrow"
                                alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 p-0 bg-0a15 px-lg-auto px-3">
                    <a href="{{ route('contact') }}"
                        class="w-100 h-100 d-flex justify-content-lg-around justify-content-between align-items-center hp-contact-link">
                        <div class="hp-contact-content wow" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="text-e9">Contact</h3>
                            <p class="text-e9 font-weight-light">
                                聯絡我們
                            </p>
                        </div>

                        <div class="wow" data-aos="fade-up" data-aos-delay="200">

                            <img src="{{ asset('assets/images/00-hp/bu_arrow.png') }}" class="img-fluid hp-contact-arrow"
                                alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
