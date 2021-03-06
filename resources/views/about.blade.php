@extends('layouts.master')

@section('content')
    <!-- About Section Starts -->
    <section class="about-page">
        <div class="container">
            <!-- Section Content Starts -->
            <div class="row about-content">
                <!-- Image Starts -->
                <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                    <img id="about-us" class="img-responsive img-about-us" src="images/geg.jpg" alt="about us">
                </div>
                <!-- Image Ends -->
                <!-- Content Starts -->
                <div class="col-sm-12 col-md-7 col-lg-6">
                    <div class="feature-about">
                        <h3 class="title-about">WE ARE {{config('app.name')}}</h3>
                        <p>A place for everyone who wants to simply mine and earn cryptocurrencies.sign up with  your wallet, choose most suitable mining plan for you with no hidden or required fees, automatic profit return guaranteed. Nothing extra. Join over 700,000 users from all over the world satisfied with our services.</p>
                    </div>
                    <div class="feature-about">
                        <h3 class="title-about risk-title"><i class="fa fa-warning"></i> risk warning</h3>
                        <p>Bitcoin is not legal tender and is not backed by any government. Accounts and value balances are not subject to any government backed deposit insurance or any other government protections.</p>
                    </div>
                    <a class="btn btn-primary btn-services" href="/investments">see plans</a>
                </div>
                <!-- Content Ends -->

            </div>
            <!-- Section Content Ends -->
        </div><!--/ Content row end -->
    </section>
    <!-- About Section Ends -->
    <!-- Facts Section Starts -->
    <section class="facts">
        <!-- Container Starts -->
        <div class="container">
            <!-- Fact Badges Starts -->
            <div class="row text-center facts-content">
                <div class="text-center heading-facts">
                    <h2>{{config('app.name')}}<span></span></h2>
                    <p>leadind platform since the discovery of Bitcoin </p>
                </div>
                <!-- Fact Badge Item Starts -->
                <div class="col-xs-12 col-md-3 col-sm-6 fact">
                    <h3>$77.45B</h3>
                    <h4>market cap</h4>
                </div>
                <!-- Fact Badge Item Ends -->
                <!-- Fact Badge Item Starts -->
                <div class="col-xs-12 col-md-3 col-sm-6 fact fact-clear">
                    <h3>165k</h3>
                    <h4>daily transactions</h4>
                </div>
                <!-- Fact Badge Item Ends -->
                <!-- Fact Badge Item Starts -->
                <div class="col-xs-12 col-md-3 col-sm-6 fact">
                    <h3>1726</h3>
                    <h4>active accounts</h4>
                </div>
                <!-- Fact Badge Item Ends -->
                <!-- Fact Badge Item Starts -->
                <div class="col-xs-12 col-md-3 col-sm-6">
                    <h3>17</h3>
                    <h4>years on the market</h4>
                </div>
                <!-- Fact Badge Item Ends -->
                <div class="col-xs-12 buttons">
                    <a class="btn btn-primary btn-pricing" href="/investments">See plans</a>
                    <span class="or"> or </span>
                    <a class="btn btn-primary btn-register" href="/register">Register Now</a>
                </div>
            </div>
            <!-- Fact Badges Ends -->
        </div>
        <!-- Container Ends -->
    </section>
    <!-- facts Section Ends -->
    <!-- Team Section Starts -->
    <section class="team">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">our <span>experts</span></h2>
                <div class="title-head-subtitle">A TALENTED TEAM OF CRYPTOCURRENCY EXPERTS BASED IN AUSTRALIA</div>
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
                            <h4>Maryana Mori</h4>
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
                        <!-- Team Member Details Starts -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="images/team/member2.jpg" class="img-responsive" alt="team member">
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
                            <p>bitcoin consultant/admin</p>
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
    <!-- Call To Action Section Starts -->
    <section class="call-action-all">
        <div class="call-action-all-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Call To Action Text Starts -->
                        <div class="action-text">
                            <h2>Get Started Today With Mining</h2>
                            <p class="lead">Open account for free and start mining cryptocurrencies!</p>
                        </div>
                        <!-- Call To Action Text Ends -->
                        <!-- Call To Action Button Starts -->
                        <p class="action-btn"><a class="btn btn-primary" href="/register">Register</a></p>
                        <!-- Call To Action Button Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
