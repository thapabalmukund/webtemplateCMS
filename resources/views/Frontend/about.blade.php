@extends('Frontend.Layouts.main')
@section('main-container')
    <!-- about section start -->
    <div class="about_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_taital">
                        <h1 class="about_text">{{ $data1->title }}</h1>
                        <p class="long_text">{{ $data1->description }}</p>
                        <div class="about_bt"><a href="#">ABOUT MORE</a></div>
                    </div>
                </div>
                <div class="col-md-6 padding_0">
                    <div class="about_img"><img src="{{ asset('frontend/images/about-bg.png') }}"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
@endsection
