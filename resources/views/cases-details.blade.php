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
                    <form method="GET" action="{{ route('cases') }}">
                        <div class="form-group position-relative">
                            <input type="text" name="search" class="form-control cases-search" placeholder="搜尋案例"
                                value="{{ request('search') }}">
                            <button class="btn-search" type="submit">
                                <img src="{{ asset('assets/images/02/search_icon.png') }}" class="img-fluid" alt="">
                            </button>
                        </div>
                    </form>

                    <div class="d-lg-none d-flex justify-content-between align-items-center category-dropdown w-100 mt-2">
                        <h5 class="mb-0 text-white text-uppercase fw-bold">案例分類</h5>
                        <span class="text-white c-down">
                            <i class="fas fa-sort-down"></i>
                        </span>
                        <span class="text-white c-up">
                            <i class="fas fa-sort-up"></i>
                        </span>
                    </div>
                    <div class="cases-category">
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
                <div class="col-lg-10 mt-lg-0 mt-4">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="cases-title text-center">
                                <h3 class="text-e9">{{ $case->title ?? '陳府別墅' }}</h3>
                                <p class="text-997d53 font-weight-light mb-0" style="font-size: 13px;">
                                    {{ \Carbon\Carbon::parse($case->created_at ?? '')->format('Y-m-d') ?? '2024-12-15' }} |
                                    {{ \App\Models\Admin\Category::find($case->category_id ?? '')->name ?? '未分類' }}
                                </p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="cases-content text-e9 font-weight-light">
                                @if ($case->content ?? null != null)
                                    {!! $case->content ?? '這是一個案例的描述，這裡可以放一些關於這個案例的詳細信息。' !!}
                                @endif

                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <img src="{{ asset('assets/images/02/02_inside_pic1.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <h5 class="text-997d53">紅酒櫃設計：優雅收納，品味生活</h5>
                                        <p class="text-e9 mb-4">
                                            在現代居家中，紅酒櫃不僅僅是用來存放紅酒的空間，更是彰顯主人品味
                                            與生活格調的亮點。無論是愛好紅酒的收藏家，還是喜愛聚會的社交達人
                                            ，一個精心設計的紅酒櫃都能讓居家環境更具質感與獨特氛圍。
                                        </p>
                                        <h5 class="text-997d53">紅酒櫃設計的美學與功能</h5>
                                        <p class="text-e9 mb-4">
                                            紅酒櫃設計不只是簡單的收納，更是要在美觀與實用之間取得平衡。我們
                                            的設計師考量到每位顧客的空間需求和個人風格，從材質、色彩、到照明
                                            ，每一個細節都精心打造，使紅酒櫃成為空間中的藝術品。透過環繞的燈
                                            光設計，紅酒櫃可以營造出高雅且舒適的氛圍，讓紅酒在合適的溫度和濕
                                            度下恆久保存。
                                        </p>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <img src="{{ asset('assets/images/02/02_inside_pic2.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <div class="col-12 mb-3">
                                        <h5 class="text-997d53">量身訂製，專屬您的紅酒收藏</h5>
                                        <p class="text-e9 mb-4">
                                            我們提供量身訂製的紅酒櫃設計服務，根據客戶的藏酒數量、瓶型和擺放需求，打造符合個人生活品味的收藏空間。無論您喜愛的是現代簡約風、古典復古風
                                            ，還是工業風格，我們的設計團隊都能為您創造理想的紅酒展示櫃，完美融合於您的居家設計中。
                                        </p>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <img src="{{ asset('assets/images/02/02_inside_pic3.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <h5 class="text-997d53">提升居家空間的格調</h5>
                                        <p class="text-e9 mb-4">
                                            紅酒櫃設計不僅提升了居家品味，更讓生活質感上升一個層次。在私密的家
                                            庭聚會中，當您從精美的紅酒櫃中取出一瓶佳釀，這一刻的儀式感會為整個
                                            聚會增添別樣的風采。紅酒櫃不僅僅是紅酒的存放之處，更是生活態度的表
                                            達。
                                        </p>

                                        <h5 class="text-997d53">紅酒櫃設計的無限可能</h5>
                                        <p class="text-e9 mb-4">
                                            無論是嵌入式紅酒櫃、獨立式展示櫃，還是結合廚房與餐廳一體的開放式紅
                                            酒收藏空間，我們都能根據您的空間需求提供最佳解決方案。每一處設計的
                                            背後，是我們對品質和細節的堅持，讓您的紅酒櫃在兼具美觀與功能之餘，
                                            更成為您居家空間中無可取代的亮點。
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-center border-top-997d53 py-3 mt-3">
                            <a href="{{ route('cases') }}" class="btn-back"><span class="back-arrow mr-3">←</span>BACK
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
            $(window).on('resize', function() {
                if ($(window).width() <= 992) {
                    const $casesCategory = $('.cases-category').hide();
                    $('.category-dropdown').find('.c-up').hide();

                    $('.category-dropdown').on('click', function() {
                        $casesCategory.toggle('1500');

                        if ($casesCategory.is(':visible')) {
                            $(this).find('.c-up').show();
                            $(this).find('.c-down').hide();
                        } else {
                            $(this).find('.c-up').hide();
                            $(this).find('.c-down').show();
                        }
                    });
                } else {
                    $('.cases-category').show();
                }
            }).trigger('resize');
        })
    </script>
@endpush
