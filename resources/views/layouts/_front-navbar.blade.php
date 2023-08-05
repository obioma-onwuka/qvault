<header class="header-style4" id="header-section9">
    <!-- nav -->
    <nav class="navbar bg-white white-header alt-font no-margin no-padding shrink-medium-header light-header">
        <div class="header-top bg-light-gray tz-header-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="mail">GET SUPPORT: <a href="mailto:no-reply@domain.com" class="text-light-gray tz-text">NO-REPLY@DOMAIN.COM</a></div>
                        <!-- social elements -->
                        <div class="social float-right">
                            <a href="#"><i class="fa fa-facebook tz-icon-color"></i></a>
                            <a href="#"><i class="fa fa-twitter tz-icon-color"></i></a>
                            <a href="#"><i class="fa fa-google-plus tz-icon-color"></i></a>
                            <a href="#"><i class="fa fa-linkedin tz-icon-color"></i></a>
                            <a href="#"><i class="fa fa-pinterest tz-icon-color"></i></a>
                        </div>
                        <!-- end social elements -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom bg-white tz-header-bg">
            <div class="container navigation-menu">
                <div class="row">
                    
                    <div class="col-md-3 col-sm-4 col-xs-9">
                        <a href="{{ route('guest.welcome') }}" class="inner-link">
                            <img alt="" src="{{ asset('/images/logo.png') }}" data-img-size="(W)163px X (H)39px">
                        </a>
                    </div>
                    
                    <div class="col-md-9 col-sm-8 col-xs-3 position-inherit">
                        <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pull-right">
                            <ul class="nav navbar-nav font-weight-600">
                                <li class="propClone">
                                    <a class="inner-link" href="{{ route('notes.show_form') }}">
                                        Big Text
                                    </a>
                                </li>
                                <li class="propClone">
                                    <a class="inner-link" href="{{ route('url.show_form') }}">
                                        Long Urls
                                    </a>
                                </li>
                                <li class="propClone">
                                    <a class="inner-link" href="#">
                                        Social Profile
                                    </a>
                                </li>
                                <li class="propClone">
                                    <a class="inner-link" href="{{ route('guest.welcome') }}#how">
                                        What's Included?
                                    </a>
                                </li>
                                <li class="propClone">
                                    <a class="inner-link" href="{{ route('guest.login.show') }}">
                                        Login
                                    </a>
                                </li>
                                <li class="propClone">
                                    <a class="inner-link" href="#contact-section9">
                                        Dashboard
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav> 
    <!-- end nav -->
</header>