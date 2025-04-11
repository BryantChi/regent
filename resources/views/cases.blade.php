@extends('layouts_main.master')

@section('content')
    <div class="container-xxl py-5 cases-bg">

        <div class="container-fluid px-md-5">
            <div class="row justity-content-center mx-lg-5" id="cases">
                <div class="col-12 mb-4">
                    <div class="pg-title-section text-center">
                        <h2 class="text-e9">案例分享</h2>
                        <p class="text-997d53 font-weight-light">
                            Cases
                        </p>
                    </div>

                </div>
            </div>

            <div class="row mx-lg-5">
                <div class="col-lg-2">
                    <form method="GET" action="{{ route('cases') }}" data-aos="fade" data-aos-delay="200">
                        <div class="form-group position-relative">
                            <input type="text" name="search" class="form-control cases-search" placeholder="搜尋案例"
                                value="{{ request('search') }}">
                            <button class="btn-search" type="submit">
                                <img src="{{ asset('assets/images/02/search_icon.png') }}" class="img-fluid" alt="">
                            </button>
                        </div>
                    </form>

                    <div class="d-lg-none d-flex justify-content-between align-items-center category-dropdown w-100 mt-2" data-aos="fade-up" data-aos-delay="200">
                        <h5 class="mb-0 text-white text-uppercase fw-bold">案例分類</h5>
                        <span class="text-white c-down">
                            <i class="fas fa-sort-down"></i>
                        </span>
                        <span class="text-white c-up">
                            <i class="fas fa-sort-up"></i>
                        </span>
                    </div>
                    <div class="cases-category" data-aos="fade-up" data-aos-delay="200">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link {{ empty(request('category_id')) ? 'active' : '' }}"
                                    href="{{ route('cases', ['search' => request('search')]) }}">全部</a>
                            </li>
                            @foreach ($categories ?? [] as $category)
                                <li class="nav-item">
                                    <a class="nav-link {{ request('category_id') == $category->id ? 'active' : '' }}"
                                        href="{{ route('cases', ['category_id' => $category->id, 'search' => request('search')]) }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                            {{-- <li class="nav-item"><a class="nav-link active" href="javascript:void(0);">廚房設計</a></li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">酒櫃設計</a></li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">系統櫥櫃</a></li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">系統浴櫃</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="col-12 d-flex justify-content-end" data-aos="fade-up" data-aos-delay="200">
                        <p class="text-997d53 font-weight-light" style="font-size: 14px;">共 {{ $cases->total() ?? 0 }} 件案例
                        </p>
                    </div>


                    @foreach ($cases ?? [] as $key => $case)
                        <div class="row mb-4">
                            <div class="col-lg-6 align-self-center mb-lg-0 mb-4 {{ $key % 2 == 0 ? '' : 'order-lg-2 order-1' }}" data-aos="zoom-in" data-aos-delay="200">
                                <a href="{{ route('cases-details', ['id' => $case->id, 'category_id' => request('category_id')]) }}">
                                    <img src="{{ env('APP_URL', 'https://regent-kitchen.com') . '/uploads/' . $case->image }}"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-lg-6 align-self-center mb-lg-0 mb-3 {{ $key % 2 == 0 ? '' : 'order-lg-1 order-2' }}" data-aos="fade-up" data-aos-delay="200">
                                <a href="{{ route('cases', ['category_id' => $case->category_id]) }}">
                                    <h6 class="text-e9 pb-2 wm-content" style="border-bottom: 1px solid #c8a063;">
                                        {{ \App\Models\Admin\Category::find($case->category_id)->name }}</h6>
                                </a>
                                <a href="{{ route('cases-details', ['id' => $case->id, 'category_id' => request('category_id')]) }}">
                                    <h4 class="text-e9 mb-3">{{ $case->title }}</h4>
                                </a>

                                @php
                                    // 移除圖片標籤
                                    $cleanContent = preg_replace('/<img[^>]*>/i', '', $case->content ?? '');
                                    // 移除其他 HTML 標籤
                                    $cleanText = strip_tags($cleanContent);
                                    // 截取前100字（處理UTF-8中文）
                                    $preview = mb_substr($cleanText, 0, 100);
                                @endphp
                                <div class="text-ac font-weight-light multiline-ellipsis-4">
                                    {!! $preview ?? '' !!}
                                </div>
                                <a href="{{ route('cases-details', ['id' => $case->id, 'category_id' => request('category_id')]) }}"
                                    class="text-a-more">MORE →</a>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="row mb-4">

                        <div class="col-lg-6 align-self-center mb-lg-0 mb-4">
                            <a href="{{ route('cases-details-mock')}}">
                                <img src="{{ asset('assets/images/02/02_pic01.jpg') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 align-self-center mb-lg-0 mb-3">
                            <h6 class="text-e9 pb-2 wm-content" style="border-bottom: 1px solid #997d53;">酒櫃設計</h6>
                            <a href="{{ route('cases-details-mock')}}">
                                <h4 class="text-e9 mb-3">陳府別墅</h4>
                            </a>
                            <a href="{{ route('cases-details-mock')}}">
                                <p class="text-e9 font-weight-light multiline-ellipsis-4">
                                    紅酒櫃設計不只是簡單的收納，更是要在美觀與實用之間取得平衡。我們
                                    的設計師考量到每位顧客的空間需求和個人風格，從材質、色彩、到照明
                                    ，每一個細節都精心打造，使紅酒櫃成為空間中的藝術品。透過環繞的燈
                                    光設計，紅酒櫃可以營造出高雅且舒適的氛圍，讓紅酒在合適的溫度和濕
                                    度下恆久保存。
                                </p>
                            </a>
                            <a href="{{ route('cases-details-mock')}}" class="text-a-more">MORE →</a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-6 align-self-center mb-lg-0 mb-4 order-lg-2 order-1">
                            <img src="{{ asset('assets/images/02/02_pic01.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 align-self-center mb-lg-0 mb-3 order-lg-1 order-2">
                            <h6 class="text-e9 pb-2 wm-content" style="border-bottom: 1px solid #997d53;">廚房設計</h6>
                            <h4 class="text-e9 mb-3">張府私宅</h4>

                            <p class="text-e9 font-weight-light multiline-ellipsis-4">
                                廚櫃的材質和色彩選擇也是設計中的重要一環。通過高品質的材質和多樣
                                的色彩搭配，使廚房櫃體既耐用又富有質感。溫暖的木質面板、光滑的大
                                理石檯面、以及內嵌的燈光設計，讓廚房既具現代感又充滿溫馨氛圍，成
                                為家中最具吸引力的場所。
                            </p>
                            <a href="javascript:void(0);" class="text-a-more">MORE →</a>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="overflow-auto mb-3">
                {{ $cases->onEachSide(3)->links('layouts_main.custom-pagination') }}
            </div>
        </div>

    </div>
@endsection

@push('page_scripts')
    <script>
        $(function() {
            // $(window).on('resize', function() {
            //     if ($(window).width() <= 992) {
            //         const $casesCategory = $('.cases-category').hide();
            //         $('.category-dropdown').find('.c-up').hide();

            //         $('.category-dropdown').on('click', function() {
            //             $casesCategory.toggle('1500');

            //             if ($casesCategory.is(':visible')) {
            //                 $(this).find('.c-up').show();
            //                 $(this).find('.c-down').hide();
            //             } else {
            //                 $(this).find('.c-up').hide();
            //                 $(this).find('.c-down').show();
            //             }
            //         });
            //     } else {
            //         $('.cases-category').show();
            //     }
            // }).trigger('resize');
            $(window).on('resize', function() {
                if ($(window).width() <= 992) {
                    const $casesCategory = $('.cases-category');
                    $casesCategory.hide();
                    const $dropdown = $('.category-dropdown');
                    $dropdown.find('.c-up').hide();

                    // Remove previous click event handlers to prevent multiple bindings
                    $dropdown.off('click').on('click', function() {
                        $casesCategory.toggle(1500);
                        // Check visibility once and toggle icons accordingly
                        const isVisible = $casesCategory.is(':visible');
                        $(this).find('.c-up').toggle(isVisible);
                        $(this).find('.c-down').toggle(!isVisible);
                    });
                } else {
                    // When the screen is wider than 992px, always show the category list
                    $('.cases-category').show();
                }
            }).trigger('resize');
        })
    </script>
@endpush
