<x-main>

    @section('title', 'Url Shortener')

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="no-padding-top no-padding-bottom xs-no-padding">
                        <h5 class="alt-font text-dark-gray display-block tz-text text-capitalize">Register before you shorten!</h5>

                        <p style = "margin-top:5px; font-size: 15px">
                            Why you may not want to shorten URLs anonymously. <br> Claiming in an account prevents your links from expiring and you gain the ability to edit at any time. 
                            <a class="btn-large btn text-primary" href="{{ route('guest.register.show') }}">
                                <span class="tz-text">
                                    Create Account
                                </span>
                                <i class="fa fa-long-arrow-right icon-extra-small tz-icon-color"></i>
                            </a>
                        </p>

                    
                    </div>

                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="padding-eighteen bg-white box-shadow tz-background-color xs-padding-eleven border-radius-8">
                        <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom text-capitalize">Shorten a long URL</h5>
                        <p></p>

                        <form action="{{ route('url.try') }}" method="POST">
                            @csrf
                            <input type = "url" name = "url" id = "name" placeholder = "Paste A Long URL:" class = "medium-input border-radius-8" autofocus>

                            @error('url')
                                <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                    <small>
                                        {{ $message }}
                                    </small>
                                </div>
                            @enderror

                            <button class="btn-medium btn-circle btn bg-greenish-blue text-white tz-text" type="submit">
                                Shorten URL
                            </button>

                        </form>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 xs-margin-fifteen-top">
                    <div class="padding-eighteen no-padding-top no-padding-bottom xs-no-padding">
                        <h2 class="alt-font text-dark-gray title-large display-block xs-title-extra-large-2 tz-text margin-nine-bottom width-90 md-width-100">What To Expect!</h2>

                        <div class="text-medium tz-text margin-ten-bottom">- Shortened URL</div>
                        <div class="text-medium tz-text margin-ten-bottom">- QR Code</div>
                        <div class="text-medium tz-text margin-ten-bottom">- URL Tracking (Registered)</div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section> 

</x-main>