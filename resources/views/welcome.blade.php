<x-main>

    @section('title', 'Qvault')

    <section id="home" class="no-padding slider-style1 border-none">
        <div class="owl-slider-full owl-carousel owl-dark-pagination owl-without-next-pre-arrow">
            <!-- slider item -->
            <div class="item owl-bg-img tz-builder-bg-image cover-background bg-img-one" id="tz-bg-1" data-img-size="(W)1920px X (H)994px" style="background: linear-gradient(rgba(15, 15, 15, 0.0), rgba(15, 15, 15, 0.0)) repeat scroll 0% 0%, transparent url('{{ asset('/images/bg-image/agency-slider-01.png') }}') repeat scroll 0% 0%;">
                <div class="container one-third-screen xs-one-second-screen position-relative">
                    <div class="col-md-12 col-sm-12 col-xs-12 slider-typography text-left sm-position-inherit">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle"> 
                                <div class="col-md-7 col-sm-10 col-xs-12 no-padding alt-font slider-content sm-no-margin-top">
                                    <div class="title-extra-large-6 line-height-75 font-weight-700 text-light-purple-blue slider-title margin-seven-bottom tz-text letter-spacing-minus-1" id="tz-slider-text1" style = "color: #FFF">
                                        Qvault For Everything
                                    </div>
                                    <div class="text-extra-large text-light-gray2 main-font font-weight-600 slider-text margin-ten-bottom tz-text width-80 xs-width-100" id="tz-slider-text2" style = "color: #FFF">Qvault is a smart way to securely compress large data into qr-code and short link, with extra layer of security.</div>
                                    <div class="btn-dual">
                                        <a class="btn btn-medium propClone btn-circle bg-middle-light-gray text-white inner-link" href="{{ route('guest.welcome') }}#how">
                                            <span class="tz-text" id="tz-slider-text6" style = "color: orange">
                                                What's Included?
                                            </span>
                                            <i class="fa fa-angle-right icon-extra-small tz-icon-color" id="tz-icon-5"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            
        </div>
    </section> 

    <section class="padding-110px-tb bg-white builder-bg xs-padding-60px-tb feature-style-31 border-none" id="feature-section31">
        <div class="container">
            <div class="row">
                <!-- feature box -->
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-fifteen-bottom">
                    <div class=" display-table margin-five-bottom width-100">
                        <div class="text-greenish-blue icon-style margin-seven-right display-table-cell-vertical-middle floal-none">
                            <span class="fa fa-book title-extra-large-2 tz-icon-color"></span>
                        </div>
                        <div class="display-table-cell-vertical-middle ">
                            <span class="text-medium text-medium-gray tz-text">#1</span>
                            <h3 class="text-large alt-font text-dark-gray position-relative top-minus3 tz-text">Note To QR Code</h3>
                        </div>
                    </div>
                    <div class="text-medium width-95 xs-width-100 xs-margin-five-top tz-text">
                        <p class="no-margin-bottom">
                            Enter our notes, Qvault turns it to QR code and a short link. If you are a registered user, extra layer is provided for you Notes using email OTP. No account, no problem.
                        </p>
                    </div>
                </div>
                <!-- end feature box -->
                <!-- feature box -->
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-fifteen-bottom">
                    <div class=" display-table margin-five-bottom width-100">
                        <div class="text-greenish-blue icon-style margin-seven-right display-table-cell-vertical-middle floal-none">
                            <span class="fa fa-search title-extra-large-2 tz-icon-color"></span>
                        </div>
                        <div class="display-table-cell-vertical-middle ">
                            <span class="text-medium text-medium-gray tz-text">#2</span>
                            <h3 class="text-large alt-font text-dark-gray position-relative top-minus3 tz-text">URL Shortener </h3>
                        </div>
                    </div>
                    <div class="text-medium width-95 xs-width-100 xs-margin-five-top tz-text">
                        <p class="no-margin-bottom">
                            That long, untidy URL can be shortened to nice one using QVault. In order to be able to track your URL and edit at any time, sign in, before making your URLs.
                        </p>
                    </div>
                </div>
                <!-- end feature box -->
                <!-- feature box -->
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-fifteen-bottom">
                    <div class=" display-table margin-five-bottom width-100">
                        <div class="text-greenish-blue icon-style margin-seven-right display-table-cell-vertical-middle floal-none">
                            <span class="fa fa-instagram title-extra-large-2 tz-icon-color"></span>
                        </div>
                        <div class="display-table-cell-vertical-middle ">
                            <span class="text-medium text-medium-gray tz-text">#3</span>
                            <h3 class="text-large alt-font text-dark-gray position-relative top-minus3 tz-text">Social Profile</h3>
                        </div>
                    </div>
                    <div class="text-medium width-95 xs-width-100 xs-margin-five-top tz-text">
                        <p class="no-margin-bottom">
                            Collet all your social handles together and compress them into QR code and short link for easy sharing. In order to track your URL and edit at any time, sign in, before making your Social profile.
                        </p>
                    </div>
                </div>
                <!-- end feature box -->
            </div>
        </div>
    </section>
    <section class="padding-110px-tb xs-padding-60px-tb bg-light-gray builder-bg border-none">
        <div class="container">
            <div class="row equalize xs-equalize-auto equalize-display-inherit" id = "how">
                <!-- content details -->
                <div class="col-md-6 col-sm-6 xs-12 xs-text-center xs-margin-nineteen-bottom display-table" style="">
                    <div class="display-table-cell-vertical-middle">
                        <div class="margin-five-bottom sm-margin-ten-bottom">
                            <span class="line-height-0 small-titel-text builder-bg font-weight-700 bg-greenish-blue alt-font text-white text-extra-medium tz-text">
                                Everything in 1
                            </span>
                        </div>
                        <h2 class="alt-font title-extra-large sm-title-large xs-section-title-large text-light-purple-blue line-height-40 width-90 sm-width-100 margin-eight-bottom tz-text sm-margin-ten-bottom">
                            QVault for everything: texts, Urls, social handles etc.
                        </h2>
                        <div class="text-medium tz-text width-90 sm-width-100">
                            <p>Provide your data,compress into shareable Qr-code, to make data sharing easy. Access to your data isn't backed with 2FA.</p>
                            <p>
                                When you have an account with QVAULT, it provides extra layer of security to your shareables. They can only be accessed through 2FA.
                            </p>
                        </div>
                        <a class="btn btn-medium propClone btn-circle bg-middle-light-gray text-white inner-link" href="#content-section36">
                            <span class="tz-text">Get Started</span>
                        </a>
                    </div>
                </div>
                <!-- end content details -->                        
                <div class="col-md-6 col-sm-6 xs-12 xs-text-center display-table" style="">
                    <div class="display-table-cell-vertical-middle">
                        <img alt="" src="images/content-14.png" data-img-size="(W)800px X (H)681px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature box section -->
    <section class="padding-60px-tb bg-light-purple-blue builder-bg border-none" id="callto-action2">
        <div class="container">
            <div class="row equalize">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="display-inline-block sm-display-block vertical-align-middle margin-five-right sm-no-margin-right sm-margin-ten-bottom tz-text alt-font text-white title-medium sm-title-medium">Want to securely compress your data, backed by 2FA?</div>
                    <a class="btn-large btn text-white highlight-button-white-border btn-circle" href="#contact-section9">
                        <span class="tz-text">
                            Create Account
                        </span>
                        <i class="fa fa-long-arrow-right icon-extra-small tz-icon-color"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-110px-tb bg-light-gray builder-bg xs-padding-60px-tb border-none" id="counter-section6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <!-- timer -->
                    <div id="counter">
                        <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-fifteen-bottom xs-margin-seventeen-bottom">
                            <div class="counter-content">                                          
                                <span class="timer counter-number title-extra-large sm-title-extra-large-1 alt-font text-dark-gray margin-three-bottom xs-margin-one-half-bottom display-block tz-text font-weight-600" data-to="2" data-speed="1000">2</span>
                                <span class="text-medium sm-text-medium display-block tz-text">Happy Clients</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-fifteen-bottom xs-margin-seventeen-bottom">
                            <div class="counter-content">                                          
                                <span class="timer counter-number title-extra-large sm-title-extra-large-1 alt-font text-dark-gray margin-three-bottom xs-margin-one-half-bottom display-block tz-text font-weight-600" data-to="2" data-speed="1000">2</span>
                                <span class="text-medium sm-text-medium display-block tz-text">Texts</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 xs-margin-seventeen-bottom">
                            <div class="counter-content">                                          
                                <span class="timer counter-number title-extra-large sm-title-extra-large-1 alt-font text-dark-gray margin-three-bottom xs-margin-one-half-bottom display-block tz-text font-weight-600" data-to="{{$getUrls}}" data-speed="1000">
                                    {{$getUrls}}
                                </span>
                                <span class="text-medium sm-text-medium display-block tz-text">Urls</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 xs-no-margin-bottom">
                            <div class="counter-content">                                          
                                <span class="timer counter-number title-extra-large sm-title-extra-large-1 alt-font text-dark-gray margin-three-bottom xs-margin-one-half-bottom display-block tz-text font-weight-600" data-to="2" data-speed="1000">2</span>
                                <span class="text-medium sm-text-medium display-block tz-text">Social Handles</span>
                            </div>
                        </div>
                    </div>
                    <!-- end timer -->
                </div>
            </div>
        </div>
    </section>
    

</x-main>