@extends('layouts.master')

@section('content')
    <!-- Slider Starts -->
    <div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators Starts -->
        <ol class="carousel-indicators visible-lg visible-md">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!-- Indicators Ends -->
        <!-- Carousel Inner Starts -->
        <div class="carousel-inner">
            <!-- Carousel Item Starts -->
            <div class="item active bg-parallax item-1">
                <div class="slider-content">
                    <div class="container">
                        <div class="slider-text text-center">
                            <h3 class="slide-title"><span>Secure</span> and <span>Easy Way</span><br/> To mine cryptocurrencies</h3>
                            <p>
                                <a href="/about" class="slider btn btn-primary">Learn more</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Item Ends -->
            <!-- Carousel Item Starts -->
            <div class="item bg-parallax item-2">
                <div class="slider-content">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="slider-text text-center">
                                <h3 class="slide-title"><span>The legit mining</span> platform <br/>You can <span>Trust</span>
                                </h3>
                                <p>
                                    <a href="/investments" class="slider btn btn-primary"> learn more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Item Ends -->
        </div>
        <!-- Carousel Inner Ends -->
        <!-- Carousel Controlers Starts -->
        <a class="left carousel-control" href="/#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="/#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
        <!-- Carousel Controlers Ends -->
    </div>
    <!-- Slider Ends -->
    <!-- Features Section Starts -->
    {{--<section class="features">
        <div class="container">
            <div class="row features-row">
                <!-- Feature Box Starts -->
                <div class="feature-box col-md-4 col-sm-12">
                        <span class="feature-icon">
							<img id="download-bitcoin" src="images/icons/orange/download-bitcoin.png" alt="download bitcoin">
						</span>
                    <div class="feature-box-content">
                        <h3>Download Bitcoin Wallet</h3>
                        <p>Get it on PC or Mobile to create, send and receive bitcoins.</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
                <!-- Feature Box Starts            <div class="feature-box two col-md-4 col-sm-12">
                        <span class="feature-icon">
							<img id="add-bitcoins" src="images/icons/orange/add-bitcoins.png" alt="add bitcoins">
						</span>
                    <div class="feature-box-content">
                        <h3>Add coins to your Wallet</h3>
                        <p>Add bitcoins you’ve created or exchanged via credit card.</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
                <!-- Feature Box Starts -->
                <div class="feature-box three col-md-4 col-sm-12">
                        <span class="feature-icon">
							<img id="buy-sell-bitcoins" src="images/icons/orange/buy-sell-bitcoins.png" alt="buy and sell bitcoins">
						</span>
                    <div class="feature-box-content">
                        <h3>Buy/Sell with Wallet</h3>
                        <p>Enter receiver's address, specify the amount and send.</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
            </div>
        </div>
    </section>--}}
    <!-- Features Section Ends -->
    <!-- About Section Starts -->
    <section class="about-us">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">About <span>Us</span></h2>
                <div class="title-head-subtitle">
                    <p>A COMMERCIAL WEBSITE THAT OFFERS HASH POWER TO MINE CRYPTOCURRENCIES</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row about-content">
                <!-- Image Starts -->
                <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                    <img id="about-us" class="img-responsive img-about-us" src="images/npo.jpg" alt="about us">
                </div>
                <!-- Image Ends -->
                <!-- Content Starts -->
                <div class="col-sm-12 col-md-7 col-lg-6">
                    <h3 class="title-about">WE ARE {{config('app.name')}}</h3>
                    <p class="about-text">A place for everyone who wants to simply mine and earn Bitcoins . Autominer is
                        a global cloud mining platform that offers hash power to mine cryptocurrencies .our team has
                        been working in crypto currency mining field since the begining of 2016. Our platform
                        specializes in providing integrated solutions for mining ,including direct equipment supply,
                        service and repair, warranty service and best mining equipment such as :Antiminer S9
                        Antiminier L3+
                        whatsminer M3x
                        AntMiner D3
                        to extract automatic payout to investors wallet address ..
                        With our aim to purchase and host our own mining equipment operations . we provide service
                        maintenance, for that purpose we found our own main site in the city of australia and usa ,built
                        all required mining infrastructure .A team of professional miners was aasembled to monitor
                        eqiupment oeprtations to provide adequate service maintainance ,we have over 500,000 users from
                        all over the world satisfied with our services!
                        Through our experience technological services experience how, autominer earned the trust of
                        investors around the world!</p>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu1">Our Mission</a></li>
                        <li><a data-toggle="tab" href="#menu2">Our advantages</a></li>
                        <li><a data-toggle="tab" href="#menu3">Our guarantees</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade in active">
                            <p>Bitcoin is based on a protocol known as the blockchain, which allows to create, transfer
                                and verify ultra-secure financial data without interference of third parties.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <p>Our mission as an official partner of Bitcoin mining Foundation is to help you enter and better
                                understand the world of #1 cryptocurrency and avoid any issues you may encounter while mining.</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <p>We are here because we are passionate about open, transparent markets and aim to be a
                                major driving force in widespread adoption, we are the first and the best in
                                cryptocurrency mining. </p>
                        </div>
                    </div>
                    {{--                    <a class="btn btn-primary" href="{{route('about')}}">Read More</a>--}}
                </div>
                <!-- Content Ends -->
            </div>
            <!-- Section Content Ends -->
        </div>
    </section>
    <!-- About Section Ends -->
    <!-- Features and Video Section Starts -->
    <section class="image-block">
        <div class="container-fluid">
            <div class="row">
                <!-- Features Starts -->
                <div class="col-md-8 ts-padding img-block-left">
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="strong-security" src="images/icons/orange/strong-security.png"
                                             alt="strong security"/>
									</span>
                                <h3 class="feature-title">Strong Security</h3>
                                <p>Protection against DDoS attacks, <br>full data encryption</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="world-coverage" src="images/icons/orange/world-coverage.png"
                                             alt="world coverage"/>
									</span>
                                <h3 class="feature-title">World Coverage</h3>
                                <p>Providing services in 99% countries<br> around all the globe</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="payment-options" src="images/icons/orange/payment-options.png"
                                             alt="payment options"/>
									</span>
                                <h3 class="feature-title">Payment Options</h3>
                                <p>Popular methods: Bitcoin <br>LiteCoin, Ethereum</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="mobile-app" src="images/icons/orange/mobile-app.png" alt="mobile app"/>
									</span>
                                <h3 class="feature-title">Mobile App</h3>
                                <p>Coming Soon</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="cost-efficiency" src="images/icons/orange/cost-efficiency.png"
                                             alt="cost efficiency"/>
									</span>
                                <h3 class="feature-title">Cost efficiency</h3>
                                {{--                                <p>Reasonable trading fees for takers<br> and all market makers</p>--}}
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img id="high-liquidity" src="images/icons/orange/high-liquidity.png"
                                             alt="high liquidity"/>
									</span>
                                <h3 class="feature-title">High Profit Margin</h3>
                                {{--                                <p>Fast access to high liquidity orderbook<br> for top currency pairs</p>--}}
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                </div>
                <!-- Features Ends -->
                <!-- Video Starts -->
                <div class="col-md-4 ts-padding bg-image-1">
                    <div>
                        <div class="text-center">
                            <a class="button-video mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"></a>
                        </div>
                    </div>
                </div>
                <!-- Video Ends -->
            </div>
        </div>
    </section>
    <!-- Features and Video Section Ends -->
    @auth
        <!-- Pricing Starts -->
        <section class="pricing">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <h2 class="title-head">Our <span>plans</span></h2>
                    <div class="title-head-subtitle">
                        <p>A goal without a plan is just a wish.</p>
                    </div>
                </div>
                <!-- Section Title Ends -->
                <!-- Section Content Starts -->
                <div class="row pricing-tables-content">
                    <div class="pricing-container">
                        <!-- Pricing Switcher Starts -->
                        <div class="pricing-switcher">
                            <p>
                                <input type="radio" name="switch" value="buy" id="buy-1" checked>
                                <label for="buy-1">BUY</label>
                                {{--<input type="radio" name="switch" value="sell" id="sell-1">
                                <label for="sell-1">SELL</label>
                                <span class="switch"></span>--}}
                            </p>
                        </div>
                        <!-- Pricing Switcher Ends -->
                        <!-- Pricing Tables Starts -->
                        <ul class="pricing-list bounce-invert">
                            @if(count($investments) > 0)
                                @foreach($investments as $investment)
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #1 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
{{--                                            <h2>GET {{$investment->proposed_amount}} BTC <span>For </span></h2>--}}
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">{{$investment->price}}</span>
                                                <h2>{{$investment->daysOfMining}} <span>Days of mining </span></h2>
                                                <h2><span>Starts after  </span>{{$investment->startDate}} </h2>
                                                <h2><span>Plan hashrate  </span>{{$investment->rate}} </h2>
                                                <h2 class="info">{{$investment->info}} </h2>
                                            </div>
                                        </header>
                                        @if(Auth::user()->hasRole('user'))
                                        <footer class="pricing-footer">
                                            <a href="#" data-toggle="modal" data-target="#{{Str::slug($investment->name)}}" class="btn btn-primary">START PLAN</a>
                                            <div class="modal fade" id="#{{Str::slug($investment->name)}}">
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
                                        </footer>
                                            @endif
                                    </li>
                                </ul>
                            </li>
                                @endforeach
                            @endif
                           {{-- <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #2 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>GET 0.015 BTC <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">300</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">BUY PLAN</a>
                                        </footer>
                                    </li>
                                    <!-- Buy Pricing Table #2 Ends -->
                                    <!-- Sell Pricing Table #2 Starts -->
                                --}}{{--                                <li data-type="sell" class="is-hidden">--}}{{--
                                --}}{{--                                    <header class="pricing-header">--}}{{--
                                --}}{{--                                        <h2>GET 1000 USD <span>For </span></h2>--}}{{--
                                --}}{{--                                        <div class="price">--}}{{--
                                --}}{{--                                            <span class="currency"><i class="fa fa-bitcoin"></i></span>--}}{{--
                                --}}{{--                                            <span class="value">0.5</span>--}}{{--
                                --}}{{--                                        </div>--}}{{--
                                --}}{{--                                    </header>--}}{{--
                                --}}{{--                                    <footer class="pricing-footer">--}}{{--
                                --}}{{--                                        <a href="#" class="btn btn-primary">ORDER NOW</a>--}}{{--
                                --}}{{--                                    </footer>--}}{{--
                                --}}{{--                                </li>--}}{{--
                                <!-- Sell Pricing Table #2 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #3 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>GET 0.031 BTC <span>For </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">500</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Buy Pricing Table #3 Ends -->
                                    <!-- Yearlt Pricing Table #3 Starts -->
                                    <li data-type="sell" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>GET 3000 USD <span>For </span></h2>

                                            <div class="price">
                                                <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                                <span class="value">1</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Sell Pricing Table #3 Ends -->
                                </ul>
                            </li>--}}
                            {{--                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">--}}
                            {{--                            <ul class="pricing-wrapper">--}}
                            {{--                                <!-- Buy Pricing Table #4 Starts -->--}}
                            {{--                                <li data-type="buy" class="is-visible">--}}
                            {{--                                    <header class="pricing-header">--}}
                            {{--                                        <h2>GET 0.081 BTC <span>For </span></h2>--}}
                            {{--                                        <div class="price">--}}
                            {{--                                            <span class="currency"><i class="fa fa-dollar"></i></span>--}}
                            {{--                                            <span class="value">1,000</span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </header>--}}
                            {{--                                    <footer class="pricing-footer">--}}
                            {{--                                        <a href="#" class="btn btn-primary">ORDER NOW</a>--}}
                            {{--                                    </footer>--}}
                            {{--                                </li>--}}
                            {{--                                <!-- Buy Pricing Table #4 Ends -->--}}
                            {{--                                <!-- Sell Pricing Table #4 Starts -->--}}
                            {{--                                <li data-type="sell" class="is-hidden">--}}
                            {{--                                    <header class="pricing-header">--}}
                            {{--                                        <h2>GET 9000 USD <span>For </span></h2>--}}
                            {{--                                        <div class="price">--}}
                            {{--                                            <span class="currency"><i class="fa fa-bitcoin"></i></span>--}}
                            {{--                                            <span class="value">2</span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </header>--}}
                            {{--                                    <footer class="pricing-footer">--}}
                            {{--                                        <a href="#" class="btn btn-primary">ORDER NOW</a>--}}
                            {{--                                    </footer>--}}
                            {{--                                </li>--}}
                            {{--                                <!-- Sell Pricing Table #4 Ends -->--}}
                            {{--                            </ul>--}}
                            {{--                        </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Ends -->
    @endauth
    <!-- Bitcoin Calculator Section Starts -->
    <section class="bitcoin-calculator-section">
        <div class="container">
            <div class="row">
                <!-- Section Heading Starts -->
                <div class="col-md-12">
                    <h2 class="title-head text-center"><span>Bitcoin</span> Calculator</h2>
                    <p class="message text-center">Find out the current Bitcoin value with our easy-to-use converter</p>
                </div>
                <!-- Section Heading Ends -->
                <!-- Bitcoin Calculator Form Starts -->
                <div class="col-md-12 text-center">
                    <form class="bitcoin-calculator" id="bitcoin-calculator">
                        <!-- Input #1 Starts -->
                        <input class="form-input" name="btc-calculator-value" value="1">
                        <!-- Input #1 Ends -->
                        <div class="form-info"><i class="fa fa-bitcoin"></i></div>
                        <div class="form-equal">=</div>
                        <!-- Input/Result Starts -->
                        <input class="form-input form-input-result" name="btc-calculator-result">
                        <!-- Input/Result Ends -->
                        <!-- Select Currency Starts -->
                        <div class="form-wrap">
                            <select id="currency-select" class="form-input select-currency select-primary"
                                    name="btc-calculator-currency"
                                    data-dropdown-class="select-primary-dropdown"></select>
                        </div>
                        <!-- Select Currency Ends -->
                    </form>
                    <p class="info"><i>* Data updated every 15 minutes</i></p>
                </div>
                <!-- Bitcoin Calculator Form Ends -->
            </div>
        </div>
    </section>
    <!-- Bitcoin Calculator Section Ends -->
    <!-- Team Section Starts -->
    <section class="team">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">our <span>experts</span></h2>
                <div class="title-head-subtitle">
                    <p> A talented team of Cryptocurrency experts based in AUSTRALIA</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Team Members Starts -->
            <div class="row team-content team-members">
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="images/team/member1.jpg" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Lina Marzouki</h4>
                            <p>Ceo Founder</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="images/npg.jpg" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>JEFFERY KURT</h4>
                            <p>founder and cmo</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <!-- Team Member-->
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="images/npk.jpg" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>FREDDIE WADE</h4>
                            <p>Bitcoin Consultant/admin</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="images/nqe.jpg" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>ALFREDO KIRK</h4>
                            <p>co founder</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
            </div>
            <!-- Team Members Ends -->
        </div>
    </section>
    <!-- Team Section Ends -->
    <!-- Quote and Chart Section Starts -->
    {{--<section class="image-block2">
        <div class="container-fluid">
            <div class="row">
                <!-- Quote Starts -->
                <div class="col-md-4 img-block-quote bg-image-2">
                    <blockquote>
                        <p>Bitcoin is one of the most important inventions in all of human history. For the first time
                            ever, anyone can send or receive any amount of money with anyone else, anywhere on the
                            planet, conveniently and without restriction. It’s the dawn of a better, more free
                            world.</p>
                        <footer><img src="images/ceo.jpg" alt="ceo"/> <span>Marc Smith</span> - CEO</footer>
                    </blockquote>
                </div>
                <!-- Quote Ends -->
                <!-- Chart Starts -->
                <div class="col-md-8 bg-grey-chart">
                    <div class="chart-widget dark-chart chart-1">
                        <div>
                            <div class="btcwdgt-chart" data-bw-theme="dark"></div>
                        </div>
                    </div>
                    <div class="chart-widget light-chart chart-2">
                        <div>
                            <div class="btcwdgt-chart" bw-theme="light"></div>
                        </div>
                    </div>
                </div>
                <!-- Chart Ends -->
            </div>
        </div>
    </section>--}}
    <!-- Quote and Chart Section Ends -->
    <!-- Call To Action Section Starts -->
    <section class="call-action-all">
        <div class="call-action-all-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Call To Action Text Starts -->
                        <div class="action-text">
                            <h2>Get Started Today With Bitcoin</h2>
                            <p class="lead">Open account for free and start mining cryptocurrencies!</p>
                        </div>
                        <!-- Call To Action Text Ends -->
                        <!-- Call To Action Button Starts -->
                        <p class="action-btn"><a class="btn btn-primary" href="register.html">Register Now</a></p>
                        <!-- Call To Action Button Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section Ends -->
@endsection
