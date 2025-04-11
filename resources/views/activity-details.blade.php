@extends('layouts_main.master')

@section('content')
    <div class="container-xxl py-5 activity-bg">

        <div class="container-fluid px-md-5">
            <div class="row justity-content-center" id="activity">
                <div class="col-12 mb-4">
                    <div class="pg-title-section text-center">
                        <h2 class="text-e9">活動訊息</h2>
                        <p class="text-997d53 font-weight-light">
                            Activity
                        </p>
                    </div>

                </div>
            </div>

            <div class="row mx-lg-5">
                <div class="col-lg-2">
                    {{-- <form method="GET" action="">
                        <div class="form-group position-relative">
                            <input type="text" name="search" class="form-control cases-search" placeholder="搜尋案例"
                                value="{{ request('search') }}">
                            <button class="btn-search" type="submit">
                                <img src="{{ asset('assets/images/02/search_icon.png') }}" class="img-fluid" alt="">
                            </button>
                        </div>
                    </form> --}}

                    <div class="d-lg-none d-flex justify-content-between align-items-center category-dropdown w-100 mt-2">
                        <h5 class="mb-0 text-white text-uppercase fw-bold">訊息分類</h5>
                        <span class="text-white c-down">
                            <i class="fas fa-sort-down"></i>
                        </span>
                        <span class="text-white c-up">
                            <i class="fas fa-sort-up"></i>
                        </span>
                    </div>
                    <div class="activity-category">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link {{ empty(request('classification_id')) ? 'active' : '' }}"
                                    href="{{ route('activity', ['search' => request('search')]) }}">全部</a>
                            </li>
                            @foreach ($classifications ?? [] as $classification)
                                <li class="nav-item">
                                    <a class="nav-link {{ request('classification_id') == $classification->id ? 'active' : '' }}"
                                        href="{{ route('activity', ['classification_id' => $classification->id, 'search' => request('search')]) }}">
                                        {{ $classification->name }}
                                    </a>
                                </li>
                            @endforeach
                            {{-- <li class="nav-item"><a class="nav-link active" href="javascript:void(0);">樣品出清</a></li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">營業公告</a></li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">參展訊息</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 mt-lg-0 mt-4">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="activity-title text-center">
                                <h2 class="text-cba783 font-weight-normal w-100">{{ $activity->title ?? '網站正式啟用' }}</h2>
                                <p class="text-e9 font-weight-light mb-0" style="font-size: 14px;">
                                    {{ \Carbon\Carbon::parse($activity->created_at ?? '')->format('Y.m.d') ?? '2024.12.15' }} ・
                                    {{ \App\Models\Admin\Classification::find($activity->classification_id ?? '')->name ?? '未分類' }}
                                </p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="activity-content">
                                @if ($activity->content ?? null != null)
                                    {!! $activity->content ?? '這是一個活動訊息的描述，這裡可以放一些關於這個活動訊息的詳細信息。' !!}
                                @endif
                            </div>

                            <div class="activity-content">
                                <h5>麗晶品櫥官方網站正式上線！</h5>
                                <p>
                                    我們很高興向您宣布，麗晶品櫥官方網站正式啟用！為了讓每位關注我們的顧客與朋友更方便地了解我們的產品與服務，我們傾注心力打造了這個專屬平台，為您帶來全新的數位體驗。
                                </p>

                                <img src="{{ asset('assets/images/03/03_inside_pic.jpg') }}" alt="">

                                <h5>網站特色與功能</h5>

                                <p>
                                    1.全方位產品介紹<br>
                                    無論是精緻的廚具設計、客製化櫥櫃方案，還是最新的廚房空間靈感，您都可以在我們的網站上找到詳細的資訊與豐富的圖片，讓選擇更加輕鬆。<br>
                                    2.案例分享與設計靈感<br>
                                    我們整理了多個成功的廚房設計案例，供您參考。這些真實的作品展現了麗晶品櫥如何結合創意與實用性，為每位客戶打造專屬的理想廚房。<br>
                                    3.即時活動與優惠資訊<br>
                                    不再錯過任何一場精彩活動或限時優惠！網站將持續更新最新的促銷活動，讓您輕鬆掌握省錢良機。<br>
                                    4.專業諮詢預約<br>
                                    想要專業設計師的建議？透過網站即可快速預約諮詢服務，讓我們為您量身打造完美的廚房空間。
                                </p>

                                <h5>立即探索麗晶品櫥的全新世界！</h5>

                                <p>
                                    歡迎造訪我們的官方網站，探索更多驚喜與靈感。感謝您對麗晶品廚的支持與信任，我們期待與您攜手，共創更美好的廚房與居家生活！
                                </p>

                            </div>

                        </div>

                        <div class="col-12 text-center border-top-997d53 py-3 mt-3">
                            <a href="{{ route('activity') }}" class="btn-back"><span class="back-arrow mr-3">←</span>BACK
                                返回列表</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('page_scripts')
    <script>
        $(function() {
            // $(window).on('resize', function() {
            //     if ($(window).width() <= 992) {
            //         const $activityCategory = $('.activity-category').hide();
            //         $('.category-dropdown').find('.c-up').hide();

            //         $('.category-dropdown').on('click', function() {
            //             $activityCategory.toggle('1500');

            //             if ($activityCategory.is(':visible')) {
            //                 $(this).find('.c-up').show();
            //                 $(this).find('.c-down').hide();
            //             } else {
            //                 $(this).find('.c-up').hide();
            //                 $(this).find('.c-down').show();
            //             }
            //         });
            //     } else {
            //         $('.activity-category').show();
            //     }
            // }).trigger('resize');

            $(window).on('resize', function() {
                if ($(window).width() <= 992) {
                    const $activityCategory = $('.activity-category');
                    $activityCategory.hide();
                    const $dropdown = $('.category-dropdown');
                    $dropdown.find('.c-up').hide();

                    // Remove previous click event handlers to prevent multiple bindings
                    $dropdown.off('click').on('click', function() {
                        $activityCategory.toggle(1500);
                        // Check visibility once and toggle icons accordingly
                        const isVisible = $activityCategory.is(':visible');
                        $(this).find('.c-up').toggle(isVisible);
                        $(this).find('.c-down').toggle(!isVisible);
                    });
                } else {
                    // When the screen is wider than 992px, always show the category list
                    $('.activity-category').show();
                }
            }).trigger('resize');
        })
    </script>
@endpush
