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
                                                <div class="price">
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">{{$investment->price}}</span>
                                                    <h2>{{$investment->daysOfMining}} <span>Days of mining </span></h2>
                                                    <h2><span>Starts after  </span>{{$investment->startDate}} </h2>
                                                    <h2><span>Plan hashrate  </span>{{$investment->rate}} </h2>
                                                    <h2><span>e.g  </span>{{$investment->info}} </h2>
                                                </div>
                                            </header>
                                            @if(Auth::user()->hasRole('user'))
                                                <footer class="pricing-footer">
                                                <a href="" data-toggle="modal" data-target="#{{$investment->id}}" class="btn btn-primary">ORDER NOW</a>
                                            </footer>
{{--                                                {{$setting = DB::table('settings')->first()}};--}}
                                                <div class="modal fade" id="{{$investment->id}}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"> Wallet addresses:</h5>
                                                                <h5 class="info">Pay into one of the wallet addresses and upload evidence of payment <br/> <i class="fa fa-info-circle"></i>click to copy</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="/investments/getPlan" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="input">Bitcoin Wallet Address</label>
                                                                        <input class="form-control" type="text" readonly id="copytext" name="bitcoinWalletAddress" placeholder="Enter Bitcoin Wallet Address" value="{{$setting->bitcoinWalletAddress ?? ""}}" autocomplete="on" />
                                                                        <input type="hidden" value="{{$investment->id}}" name="investment_id"/>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="input">LiteCoin Wallet Address</label>
                                                                        <input class="form-control" type="text"readonly id="copytext" name="litecoinWalletAddress" placeholder="Enter LiteCoin Wallet" value="{{$setting->litecoinWalletAddress ?? ""}}" autocomplete="on" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="input">Ethereum Wallet Address</label>
                                                                        <input class="form-control" type="text" readonly id="copytext" name="ethereumWalletAddress" placeholder="Enter Ethereum Wallet Address" value="{{$setting->ethereumWalletAddress ?? ""}}" autocomplete="on" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="input">Upload payment verification</label>
                                                                        <input class="form-control" type="file" name="file" placeholder="Choose image" />
                                                                    </div>

                                                                    <div class="form-group">

                                                                        <input class="form-control btn btn-outline-success" type="submit" value="Complete Payment"/>
                                                                    </div>

                                                                </form>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

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
