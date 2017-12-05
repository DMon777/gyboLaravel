@extends('layouts.main')

@section('header')
    <!--Page Title-->
    <section class="page-title theme-overlay overlay-black" style="background-image:url(../../public/assets/images/parallax/image-4.jpg);">
        <div class="auto-container">
            <div class="text-center">
                <h1>Expert Trainers</h1>
                <div class="bread-crumb">
                    <a href="index.html">Home</a> <i class="fa fa-angle-right"></i> <a class="current" href="#">Trainers</a>
                </div>

            </div>
        </div>
    </section>
@endsection


@section('content')
    @include('frontend.trainers_content')
@endsection

