<header class="header-style4" id="header-section9">
    <!-- nav -->
    <nav class="navbar bg-white white-header alt-font no-margin no-padding shrink-medium-header light-header">
        <div class="header-top bg-light-gray tz-header-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="mail">Hire Me 🤝 
                            <a href="mailto:hello@obtechng.com" target = "_blank" class="text-light-gray tz-text">
                                hello@obtechng.com
                            </a>
                        </div>
                        <!-- social elements -->
                        <div class="social float-right">
                            <a href="https://github.com/obioma-onwuka" target = "_blank">
                                <i class="fa fa-github tz-icon-color"></i>
                            </a>
                            <a href="https://twitter.com/obioma_onwuka" target = "_blank">
                                <i class="fa fa-twitter tz-icon-color"></i>
                            </a>
                            <a href="https://obtechng.com" target = "_blank">
                                <i class="fa fa-globe tz-icon-color"></i>
                            </a>
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
                                <li class="nav-link" style = "margin-right: 0px !important">
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
                                    <a class="inner-link" href="{{ route('social.show_form') }}">
                                        Social Profile
                                    </a>
                                </li>
                                <li class="propClone">
                                    <a class="inner-link" href="{{ route('guest.welcome') }}#how">
                                        What's Included?
                                    </a>
                                </li>
                                
                                @auth
                                    
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-user-circle text-success"></i> &nbsp;
                                            Obioma Onwuka <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('boarded.panel.index') }}">Dashboard</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('guest.logout') }}">Logout</a>
                                            </li>
                                        </ul>
                                    </li>

                                @else

                                    <li class="propClone">
                                        <a class="inner-link" href="{{ route('guest.login.show') }}">
                                            Login
                                        </a>
                                    </li>

                                    <li class="nav-button propClone btn-medium">
                                        <a href="{{ route('guest.register.show') }}" class="inner-link btn btn-small propClone bg-dark-gray text-white border-radius-0 font-weight-500 sm-paontact-section3dding-nav-btn sm-display-inline-block" style = "background: orange; color:#FFF; border-radius: 37px !important" >
                                            Register
                                        </a> 
                                    </li>

                                @endauth
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav> 
    <!-- end nav -->
</header>