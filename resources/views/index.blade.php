@extends('layout')

@push('content')

    <!-- Bnner Section One -->
    <section class="banner-section-one">
        <div class="banner-carousel owl-carousel owl-theme default-arrows dark">
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{url('assets/images/doctor-2.jpg')}});">
                <div class="auto-container">
                    <div class="content-outer">
                        <div class="content-box">

                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">About Developer</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{url('assets/images/nurse.jpg')}});">
                <div class="auto-container">
                    <div class="content-outer">
                        <div class="content-box">

                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">About Developer</span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bnner Section One -->



@endpush