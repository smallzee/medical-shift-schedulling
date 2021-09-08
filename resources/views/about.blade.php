@extends('layout')

@push('content')

<!--Page Title-->
<section class="page-title" style="background-image: url({{url('assets/images/doctor-2.jpg')}});">
    <div class="auto-container">
        <div class="title-outer">
            <h1>{{ $page_title }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>{{ $page_title }}</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="contact-section" style="background: #fff">
    <div class="small-container">
        <div class="sec-title text-center">
            <h2>About Developer</h2>
            <span class="divider"></span>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <h3 align="center" style="margin-bottom: 20px;">Project Topic</h3>
                <h5 style="margin-bottom: 50px;" align="center">
                    Design and implementation of medical shift scheduling system A case studey of federal polytechnic ede medical
                </h5>
            </div>

            <div class="col-sm-6">
                <h4 style="margin-bottom: 20px;">Supervised By</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>Name</td>
                        <td>Mr Adegoke</td>
                    </tr>
                </table>
            </div>

            <div class="col-sm-6">
                <h4 style="margin-bottom: 20px;">Developed By</h4>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Matric Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Aladeetan Daniel</td>
                        <td>CS201702308PT</td>
                    </tr>
                    <tr>
                        <td>Bodunrinde John Oluwaseyi</td>
                        <td>CS201702590PT</td>
                    </tr>
                    <tr>
                        <td>Oladiti Quadri Adewale </td>
                        <td>CS201703468PT</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

@endpush