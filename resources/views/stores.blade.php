@extends('layouts_main.master')

@section('content')

    <div class="container-xxl py-5 stores-bg bg-23">
        <div class="container-fluid px-md-5">

            <div class="row justity-content-center" id="stores">
                <div class="col-12 mb-4">
                    <div class="pg-title-section text-center">
                        <h2 class="text-e9">門市據點</h2>
                        <p class="text-967d56 font-weight-light mb-4">
                            Stores
                        </p>
                        <p class="text-e9">
                            想親身感受高品質廚具的細節與設計美感嗎？麗晶品櫥在地門市竭誠歡迎您的到來！
                        </p>
                    </div>

                </div>
            </div>


            <div class="row mx-lg-5">
                <div class="col-lg-6 mb-4">
                    <div class="stores-card">
                        <div class="stores-card-map mb-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.598973660917!2d121.59487307534292!3d23.974617078518097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34689f96e306b3c5%3A0x154261f0df71fe86!2zOTcw6Iqx6JOu57ij6Iqx6JOu5biC5Lit6I-v6LevMzMx6Jmf!5e0!3m2!1szh-TW!2stw!4v1743699804892!5m2!1szh-TW!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="stores-card-content text-center">
                            <h5 class="text-967d56 mb-3">中華店</h5>
                            <div class="d-flex flex-lg-row flex-column justify-content-center">
                                <p class="text-e9 font-weight-light mb-1">
                                    <img src="{{asset('assets/images/05/icon_phone.png')}}" class="img-fluid mr-1" alt="">
                                    {{-- <span class="text-967d56 mr-1"><i class="fas fa-phone-alt"></i></span> --}}
                                    Tel：03-8321000
                                </p>
                                <span class="text-e9 mx-2 d-lg-flex d-none">|</span>
                                <p class="text-e9 font-weight-light mb-1">
                                    <img src="{{asset('assets/images/05/icon_fax.png')}}" class="img-fluid mr-1" alt="">
                                    {{-- <span class="text-967d56 mr-1"><i class="fas fa-fax"></i></span> --}}
                                    Fax：03-8320333
                                </p>
                                <span class="text-e9 mx-2 d-lg-flex d-none">|</span>
                                <p class="text-e9 font-weight-light mb-1">
                                    <img src="{{asset('assets/images/05/icon_location.png')}}" class="img-fluid mr-1" alt="">
                                    {{-- <span class="text-967d56 mr-1"><i class="fas fa-map-marker-alt"></i></span> --}}
                                    花蓮市中華路331號
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="stores-card">
                        <div class="stores-card-map mb-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.569135852029!2d121.59456151173326!3d23.9756715784278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34689f9655f249a9%3A0xdcdafd9646ce9bcb!2zOTcw6Iqx6JOu57ij6Iqx6JOu5biC5p6X5qOu6LevMzbomZ8!5e0!3m2!1szh-TW!2stw!4v1743699963452!5m2!1szh-TW!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="stores-card-content text-center">
                            <h5 class="text-967d56 mb-3">林森店</h5>
                            <div class="d-flex flex-lg-row flex-column justify-content-center">
                                <p class="text-e9 font-weight-light mb-1">
                                    <img src="{{asset('assets/images/05/icon_phone.png')}}" class="img-fluid mr-1" alt="">
                                    {{-- <span class="text-967d56 mr-1"><i class="fas fa-phone-alt"></i></span> --}}
                                    Tel：03-8322852
                                </p>
                                <span class="text-e9 mx-2 d-lg-flex d-none">|</span>
                                <p class="text-e9 font-weight-light mb-1">
                                    <img src="{{asset('assets/images/05/icon_fax.png')}}" class="img-fluid mr-1" alt="">
                                    {{-- <span class="text-967d56 mr-1"><i class="fas fa-fax"></i></span> --}}
                                    Fex：03-8340523
                                </p>
                                <span class="text-e9 mx-2 d-lg-flex d-none">|</span>
                                <p class="text-e9 font-weight-light mb-1">
                                    <img src="{{asset('assets/images/05/icon_location.png')}}" class="img-fluid mr-1" alt="">
                                    {{-- <span class="text-967d56 mr-1"><i class="fas fa-map-marker-alt"></i></span> --}}
                                    花蓮市林森路36號
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
