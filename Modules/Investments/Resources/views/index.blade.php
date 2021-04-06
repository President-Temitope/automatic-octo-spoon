@extends('layouts.master')

@section('content')
    <section class="banner-area">
        <div class="banner-overlay">
            <div class="banner-text text-center">
                <div class="container">
                    <!-- Section Title Starts -->
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <!-- Title Starts -->
                            <h2 class="title-head">Our <span>Plans</span></h2>
                            <!-- Title Ends -->
                            <hr>
                            <!-- Breadcrumb Starts -->
                            <ul class="breadcrumb">
                                <li><a href="/"> home</a></li>
                                <li>plans</li>
                            </ul>
                            <!-- Breadcrumb Ends -->
                        </div>
                    </div>
                    <!-- Section Title Ends -->
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area Ends -->
    <!-- Pricing Starts -->
    <section class="pricing">
        <div class="container">
            <!-- Section Content Starts -->
            <h3 class="text-center">Subscribe to a Plan</h3>
            <p class="text-center">Start mining the three major coin today</p>
            <div class="row pricing-tables-content pricing-page">
                <div class="pricing-container">
                    <!-- Pricing Tables Starts -->
                    <ul class="pricing-list bounce-invert">
                        @if(count($investments) > 0)
                            @foreach($investments as $investment)
                                <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                    <ul class="pricing-wrapper">
                                        <!-- Pricing Table #1 Starts -->
                                        <li>
                                            <header class="pricing-header">
                                                <h2>GET {{$investment->proposed_amount}} BTC <span>For </span></h2>
                                                <div class="price">
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">{{$investment->price}}</span>
                                                </div>
                                            </header>
                                            @if(Auth::user()->hasRole('user')) <footer class="pricing-footer">
                                                <a href="/investments/getPlan/{{$investment->id}}" class="btn btn-primary">ORDER NOW</a>
                                            </footer>@endif

                                        </li>
                                        <!-- Pricing Table #1 Ends -->
                                    </ul>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Ends -->
    <!-- Call To Action Section Starts -->
    <section class="call-action-all">
        <div class="call-action-all-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Call To Action Text Starts -->
                        <div class="action-text">
                            <h2>Get Started Today With Mining</h2>
                            <p class="lead">Open account for free and start mining Bitcoins!</p>
                        </div>
                        <!-- Call To Action Text Ends -->
                        <!-- Call To Action Button Starts -->
                        <p class="action-btn"><a class="btn btn-primary" href="/dashboard">Dashboard</a></p>
                        <!-- Call To Action Button Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
