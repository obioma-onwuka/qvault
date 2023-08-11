<footer id="footer-section8" class="bg-white builder-bg footer-style8 padding-60px-tb xs-padding-40px-tb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 sm-text-center sm-margin-five-bottom ">
                <!-- logo -->
                <a class="margin-eight-bottom display-inline-block inner-link" href="#home">
                    <img src="{{ asset('/images/logo.png') }}"style = "height: 60px" alt="">
                </a>
                <!-- end logo -->
                <div class="tz-text width-80 sm-width-100">
                    <p class="no-margin-bottom">
                        Long texts, long Urls, social media handles etc. Securely convert them into shareable qrcode swiftly; With or without QVAULT account, entirely free.
                    </p>
                </div>
            </div>
            <!-- links -->
            <div class="col-md-2 col-sm-4 col-xs-12 xs-margin-nine-bottom xs-text-center">
                <ul class="links">
                    <li class="text-medium margin-seven-bottom font-weight-600 text-dark-gray tz-text xs-margin-one-half-bottom">Quick Links</li>
                    <li>
                        <a class="tz-text text-medium-gray inner-link" href="{{ route('notes.show_form') }}">
                            Big Texts
                        </a>
                    </li>
                    <li>
                        <a class="tz-text text-medium-gray inner-link" href="{{ route('url.show_form') }}">
                            Long Urls
                        </a>
                    </li>
                    <li>
                        <a class="tz-text text-medium-gray inner-link" href="{{ route('social.show_form') }}">
                            Social Profiles
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12 xs-margin-nine-bottom xs-text-center">
                <ul class="links">
                    <li class="text-medium margin-seven-bottom font-weight-600 text-dark-gray tz-text xs-margin-one-half-bottom">Account</li>
                    <li>
                        <a class="tz-text text-medium-gray inner-link" href="{{ route('guest.login.show') }}">
                            Login
                        </a>
                    </li>
                    <li>
                        <a class="tz-text text-medium-gray inner-link" href="{{ route('guest.register.show') }}">
                            Register
                        </a>
                    </li>
                    <li>
                        <a class="tz-text text-medium-gray inner-link" href="#clients-section2">
                            Forgot Password
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12 xs-margin-nine-bottom xs-text-center">
                <ul class="links">
                    <li class="text-medium margin-seven-bottom font-weight-600 text-dark-gray tz-text xs-margin-one-half-bottom">Follow Us</li>
                    <li>
                        <a class="tz-text text-medium-gray inner-link" href="https://github.com/obioma-onwuka" target = "_blank">Github</a>
                    </li>
                    <li>
                        <a class="tz-text text-medium-gray inner-link" href="https://twitter.com/obioma_onwuka" target = "_blank">Twitter</a>
                    </li>
                    <li>
                        <a class="tz-text text-medium-gray inner-link" href="https://obtechng.com" target = "_blank">Portfolio</a>
                    </li>
                </ul>
            </div>
            <!-- end links -->
        </div>
        <div class="row equalize">
            <div class="border-top margin-five-top padding-five-top tz-border">
                <div class="col-md-6 col-sm-6 col-xs-12 display-table xs-text-center xs-margin-nine-bottom">
                    <div class="display-table-cell-vertical-middle">
                        <span class="tz-text text-small">&copy; Copyright {{ date('Y') }} 
                            <a class="text-primary" href="{{ route('guest.welcome') }}">
                                QVAULT
                            </a> by

                            <a class="text-primary" href="http://obtechng.com" target = "_blank">
                                OBTECHNG
                            </a>

                            All rights reserved
                        </span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 display-table text-right xs-text-center">
                    <div class="display-table-cell-vertical-middle social social-icon-color icon-extra-small no-margin">
                        <a href="#" class="margin-eight-right">
                            <i class="fa fa-facebook tz-icon-color"></i>
                        </a>
                        <a href="#" class="margin-eight-right">
                            <i class="fa fa-twitter tz-icon-color"></i>
                        </a>
                        <a href="#" class="margin-eight-right">
                            <i class="fa fa-google-plus tz-icon-color"></i>
                        </a>
                        <a href="#" class="margin-eight-right">
                            <i class="fa fa-pinterest tz-icon-color"></i>
                        </a>
                        <a href="#" class="margin-eight-right">
                            <i class="fa fa-linkedin tz-icon-color"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>