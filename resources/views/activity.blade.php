@extends('layouts_main.master')

@section('content')
    <div class="container-xxl py-5 activity-bg bg-23">

        <div class="container-fluid px-md-5">
            <div class="row justity-content-center" id="activity">
                <div class="col-12 mb-4">
                    <div class="pg-title-section text-center">
                        <h2 class="text-e9">活動訊息</h2>
                        <p class="text-967d56 font-weight-light">
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
                                    href="{{ route('cases', ['search' => request('search')]) }}">全部</a>
                            </li>
                            @foreach ($classifications ?? [] as $classification)
                                <li class="nav-item">
                                    <a class="nav-link {{ request('classification_id') == $classification->id ? 'active' : '' }}"
                                        href="{{ route('cases', ['classification_id' => $classification->id, 'search' => request('search')]) }}">
                                        {{ $classification->name }}
                                    </a>
                                </li>
                            @endforeach
                            <li class="nav-item"><a class="nav-link active" href="javascript:void(0);">樣品出清</a></li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">營業公告</a></li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">參展訊息</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="col-12 d-flex justify-content-end">
                        <p class="text-967d56 font-weight-light" style="font-size: 14px;">共 {{ 0 }} 則訊息
                        </p>
                    </div>

                    @php
                    if (isset($activities) && count($activities) > 0) {
                        $chunkedData = $activities->chunk(3);
                    } else {
                        $activity = [
                            ['date' => '2024.11.22', 'category' => '訊息分類', 'title' => '網站正式啟用', 'image' => 'in_pic06.jpg'],
                            ['date' => '2024.11.22', 'category' => '訊息分類', 'title' => '網站正式啟用', 'image' => 'in_pic07.jpg'],
                            ['date' => '2024.11.22', 'category' => '訊息分類', 'title' => '網站正式啟用', 'image' => 'in_pic07.jpg'],
                            ['date' => '2024.11.22', 'category' => '訊息分類', 'title' => '網站正式啟用', 'image' => 'in_pic07.jpg'],
                            ['date' => '2024.11.22', 'category' => '訊息分類', 'title' => '網站正式啟用', 'image' => 'in_pic07.jpg'],
                            ['date' => '2024.11.22', 'category' => '訊息分類', 'title' => '網站正式啟用', 'image' => 'in_pic07.jpg'],
                            ['date' => '2024.11.22', 'category' => '訊息分類', 'title' => '網站正式啟用', 'image' => 'in_pic07.jpg'],
                            ['date' => '2024.11.22', 'category' => '訊息分類', 'title' => '網站正式啟用', 'image' => 'in_pic07.jpg'],
                            ['date' => '2024.11.22', 'category' => '訊息分類', 'title' => '網站正式啟用', 'image' => 'in_pic07.jpg'],
                            ['date' => '2024.11.22', 'category' => '訊息分類', 'title' => '網站正式啟用', 'image' => 'in_pic07.jpg'],
                            ['date' => '2024.11.22', 'category' => '訊息分類', 'title' => '網站正式啟用', 'image' => 'in_pic07.jpg'],
                        ];
                        $chunkedData = array_chunk($activity ?? [], 3);
                    }


                    @endphp

                    @foreach ($chunkedData ?? [] as $rowIndex => $row)
                    <div class="row py-4 border-bottom {{ $loop->last ? 'last-row' : '' }}">

                        @foreach ($row as $colIndex => $activity)
                        <div class="col-lg-4 d-flex align-items-center pr-lg-3 pb-lg-auto pb-3 {{ $colIndex < count($row) - 1 ? 'border-end' : '' }}">
                            <div class="hp-activity-box m-lg-3w">
                                <div class="hab-content1 mb-5">
                                    <p class="hp-activity-date text-a7 mb-0">{{ \Carbon\Carbon::parse($activity->created_at ?? new DateTime())->format('Y.m.d')}}</p>
                                    <a href="{{ route('activity', ['classification_id' => $activity->classification_id ?? '']) }}">
                                        <p class="hp-activity-category text-e9 mb-0">・{{ \App\Models\Admin\Classification::find($activity->calssification_id ?? '')->name ?? '未分類' }}</p>
                                    </a>
                                    {{-- <a href="{{ route('activity-details', ['id' => $course->id, 'classification_id' => request('classification_id')]) }}"> --}}
                                    <a href="{{ route('activity-details-mock')}}">
                                        <h4 class="text-967d56 multiline-ellipsis-1">{{ $activity->title ?? '網站正式啟用' }}</h4>
                                    </a>
                                </div>

                                <div class="hab-content02 d-flex flex-column">
                                    <a href="javascript:void(0);" class="{{ $colIndex == 0 ? 'text-e9' : 'text-967d56' }}">MORE →</a>
                                    {{-- <a href="{{ route('activity-details', ['id' => $course->id, 'classification_id' => request('classification_id')]) }}"> --}}
                                    <a href="{{ route('activity-details-mock')}}">
                                        {{-- <img src="{{ env('APP_URL', 'https://regent.powerchi.com.tw') . '/uploads/' . $activity->image }}" class="img-fluid" alt=""> --}}
                                        <img src="{{asset('assets/images/00-hp/in_pic06.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            {{-- <div class="hp-activity-line mx-lg-3 my-lg-auto my-5"></div> --}}
                        </div>
                        @endforeach

                    </div>

                    @endforeach


                </div>
            </div>

            <div class="overflow-auto mb-3">
                {{ $activities->onEachSide(3)->links('layouts_main.custom-pagination') }}
            </div>
        </div>

    </div>
@endsection

@push('page_scripts')
    <script>
        $(function() {
            $(window).on('resize', function() {
                if ($(window).width() <= 992) {
                    const $activityCategory = $('.activity-category').hide();
                    $('.category-dropdown').find('.c-up').hide();

                    $('.category-dropdown').on('click', function() {
                        $activityCategory.toggle('1500');

                        if ($activityCategory.is(':visible')) {
                            $(this).find('.c-up').show();
                            $(this).find('.c-down').hide();
                        } else {
                            $(this).find('.c-up').hide();
                            $(this).find('.c-down').show();
                        }
                    });
                } else {
                    $('.activity-category').show();
                }
            }).trigger('resize');
        })
    </script>
@endpush
