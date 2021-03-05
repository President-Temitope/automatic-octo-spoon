<!-- Navigation Menu Starts -->
<nav class="site-navigation navigation" id="site-navigation">
    <div class="container">
        <div class="site-nav-inner">
            <!-- Logo For ONLY Mobile display Starts -->
            <a class="logo-mobile" href="/">
                <img id="logo-mobile" class="img-responsive" src="{{asset('images/logo.png')}}" width="40%" alt="">
            </a>
            <!-- Logo For ONLY Mobile display Ends -->
            <!-- Toggle Icon for Mobile Starts -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Toggle Icon for Mobile Ends -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <!-- Main Menu Starts -->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    @auth
                        <li><a href="/investments">Plans</a></li>@endauth
                    {{--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">pages <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="register.html">Register page</a></li>
                            <li><a href="login.html">Login page</a></li>
                            <li><a href="shopping-cart.html">Shopping cart</a></li>
                            <li><a href="shopping-checkout.html">shopping checkout</a></li>
                            <li><a href="faq.html">FAQ page</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="503.html">Server Error Page</a></li>
                            <li><a href="terms-of-services.html">Terms of Services</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>--}}
                    <li><a href="/contact">Contact</a></li>
                    @guest
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->fullName() }} <i
                                    class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/dashboard">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>


                                @endguest
                            </ul>
                            <!-- Cart Icon Starts -->
                        {{--                    <li class="cart"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
                        <!-- Cart Icon Starts -->
                            <!-- Search Icon Starts -->
                            <!--  <li class="search"><button class="fa fa-search"></button></li>
                           Search Icon Ends -->
                </ul>
                <!-- Main Menu Ends -->
            </div>
        </div>
    </div>
    <!-- Search Input Starts
    <div class="site-search">
        <div class="container">
            <input type="text" placeholder="type your keyword and hit enter ...">
            <span class="close">×</span>
        </div>
    </div> -->
    <!-- Search Input Ends -->
</nav>
<!-- Navigation Menu Ends -->
