@extends('layouts.front')
@section('title', 'Top Contributors')
@section('class3', 'active')
@section('content')

    <div class="ms-hero-page-override ms-hero-img-city2 ms-hero-bg-primary">
        <div class="container">
            <div class="text-center">

                <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">
                    TOP CONTRIBUTORS</h1>
                <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">A wise man once said, “When everybody contributes a change to what he or she notices, it is then we will change our world”. Every contribution, no matter how big or small, can bring a cause close to success. Those individuals have learned the power of sincere and selfless contribution experience the true fulfilment. Such contributors are the pillars of Foss.lk and we consider it an an honour to have them on board with us working towards our united goal. Hence, We are proud and pleased to unveil the Top Contributors of Foss.lk to you all!</p>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center card-top">
            @if($contributors->count() > 0)
                @foreach($contributors as $c)
            <div class="col-lg-4 col-sm-6">
                <div class="card mt-4 card-danger wow zoomInUp animation-delay-7">
                    <div class="ms-hero-bg-danger ms-hero-img-city">
                        <img src="{{ $c->avatar }}" alt="{{ $c->name }}" class="img-avatar-circle"> </div>
                    <div class="card-body pt-6 text-center">
                        <h3 class="color-danger">{{ $c->name }}</h3>

                        <h4 class="color-info">{{ $c->about }}</h4>

                        <div class="col">
                            <a href="{{ $c->facebook }}" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                                <i class="zmdi zmdi-facebook"></i>
                            </a>
                            <a href="{{ $c->twitter }}" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                                <i class="zmdi zmdi-twitter"></i>
                            </a>
                            <a href="{{ $c->github }}" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-github">
                                <i class="zmdi zmdi-github"></i>
                            </a>
                            <a href="{{ $c->linkedin }}" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-linkedin">
                                <i class="zmdi zmdi-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

                @endforeach
            @endif

        </div>
    </div>

@stop            