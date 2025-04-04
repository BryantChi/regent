@extends('layouts_main.master')

@section('content')
    <div class="container-xxl bg-0d-23">
        <div class="container-fluid px-md-5 py-5 contact-bg">

            <div class="row justity-content-center" id="contact">
                <div class="col-12 mb-4">
                    <div class="pg-title-section text-center">
                        <h2 class="text-e9">聯絡我們</h2>
                        <p class="text-967d56 font-weight-light mb-4">
                            Contact
                        </p>
                    </div>

                </div>
            </div>


            <div class="row mx-lg-5">
                <div class="col-lg-4 mb-4">
                    <picture>
                        <source srcset="{{ asset('assets/images/04/04pic_mob.jpg') }}" media="(max-width: 767px)"
                            type="image/jpeg">
                        <source srcset="{{ asset('assets/images/04/04pic_flat.jpg') }}" media="(max-width: 1023px)"
                            type="image/jpeg">
                        <img src="{{ asset('assets/images/04/04pic_com.jpg') }}" class="img-fluid contact-img"
                            alt="">
                    </picture>
                </div>
                <div class="col-lg-7 mb-4">
                     {{-- 成功提示訊息 --}}
                    @if (session('success'))
                        <div class="alert text-center my-3" style="background-color: #111; border: 1px solid #c9a86a; color: #c9a86a;">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- 錯誤提示訊息 --}}
                    @if ($errors->any())
                        <div class="alert alert-danger text-center my-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <h5 class="mb-4 text-967d56"><span class="required"></span>為必填或必選欄位</h5>

                    <form method="POST" action="{{ route('requirements.store') }}" id="requirements-form">
                        {{-- CSRF Token --}}
                        @csrf

                        <div class="form-group form-section">
                            <label class="text-e9 required" for="type">諮詢類型：</label>
                            <select id="type" name="type" class="custom-select">
                                <option value="" selected>請選擇</option>
                                <option value="廚房設計">廚房設計</option>
                                <option value="酒櫃設計">酒櫃設計</option>
                                <option value="系統櫥櫃">系統櫥櫃</option>
                                <option value="系統浴櫃">系統浴櫃</option>
                            </select>
                        </div>

                        <div class="form-group form-section">
                            <label class="text-e9 required">身分別：</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="identity" id="identity1" value="一般戶"
                                    checked>
                                <label class="form-check-label" for="identity1">一般戶</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="identity" id="identity2"
                                    value="室內設計師／公司">
                                <label class="form-check-label text-e9" for="identity2">室內設計師／公司</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="identity" id="identity3"
                                    value="建商">
                                <label class="form-check-label text-e9" for="identity3">建商</label>
                            </div>
                        </div>

                        <div class="form-row form-section">
                            <div class="form-group col-md-6">
                                <label class="text-e9 required" for="name">姓名：</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-e9 required" for="phone">行動電話：</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>

                        <div class="form-group form-section">
                            <label class="text-e9 required" for="email">電子郵件：</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group form-section">
                            <label class="text-e9" for="address">聯絡地址：</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>

                        <div class="form-group form-section">
                            <label class="text-e9" for="message">內容：</label>
                            <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                        </div>

                        <div class="form-group d-flex justify-content-start pr-lg-5">
                            <button type="reset" class="btn btn-clear mx-1">清除重填</button>
                            <button type="submit" class="btn btn-submit mx-1">確認送出</button>
                        </div>
                    </form>
                </div>

                <div class="col-12">
                    <p class="text-e9 font-weight-light mb-0">
                        無論您正在規劃全新的廚房空間，或是想提升現有的廚房功能與美感，麗晶品櫥的專業團隊都隨時準備為您提供協助與建議。
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
