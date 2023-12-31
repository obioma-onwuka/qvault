<x-main>

    @section('title', 'Social Profile')

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="no-padding-top no-padding-bottom xs-no-padding">
                        

                        @auth

                            <h5 class="alt-font text-dark-gray display-block tz-text text-capitalize">Benefit of having a Qvault account!</h5>

                            <p style = "margin-top:5px; font-size: 15px">
                                All generated Social links are available in your dashboard. Modify them whenever you want.
                            </p>

                        @else

                            <h5 class="alt-font text-dark-gray display-block tz-text text-capitalize">No Account, No Problem!</h5>
                            <p style = "margin-top:5px; font-size: 15px">
                                You can proceed to create your notes without registering as a user, and your notes stays up to <span style = "background: red; color: #FFF; padding: 3px">7 days</span>, before they become unavailable. To make it avaialbale forever, then REGISTER
                            </p>

                            <h5 class="alt-font text-dark-gray display-block tz-text text-capitalize">Register and sign in before you create notes!</h5>

                            <p style = "margin-top:5px; font-size: 15px">
                                Why you may not want to create notes anonymously. <br> Claiming in an account prevents your links from expiring and you gain the ability to edit at any time. 
                                <a class="btn-large btn text-primary" href="{{ route('guest.register.show') }}">
                                    <span class="tz-text">
                                        Create Account
                                    </span>
                                    <i class="fa fa-long-arrow-right icon-extra-small tz-icon-color"></i>
                                </a>
                            </p>

                        @endauth

                    
                    </div>

                </div>

                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="padding-eighteen bg-white box-shadow tz-background-color xs-padding-eleven border-radius-8">
                        <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom text-capitalize">Create Your Note</h5>
                        <p></p>

                        <form action="{{ route('social.try') }}" method="POST">
                            @csrf
                            
                            <div>

                                <label for="name">Name:</label>
                                <input type = "text" name = "name" id = "name" placeholder = "Eg. Obioma Onwuka" class = "medium-input border-radius-8" autofocus>

                                @error('name')
                                    <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>
                                @enderror

                            </div>


                            <div class = "row">

                                <div class="col-xl-6 col-lg-6 col-md-12 col-12">

                                    <label for="facebook">Facebook Username:</label>
                                    <input type = "text" name = "facebook_handle" id = "facebook_handle" placeholder = "Eg. kings.obioma" class = "medium-input border-radius-8">

                                    @error('facebook_handle')
                                        <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                            <small>
                                                {{ $message }}
                                            </small>
                                        </div>
                                    @enderror

                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-12">

                                    <label for="twitter">Twitter Username:</label>
                                    <input type = "text" name = "twitter_handle" id = "twitter_handle" placeholder = "Eg. obioma-onwuka1" class = "medium-input border-radius-8">

                                    @error('twitter_handle')
                                        <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                            <small>
                                                {{ $message }}
                                            </small>
                                        </div>
                                    @enderror

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-12 col-12">

                                    <label for="instagram">Instagram Username:</label>
                                    <input type = "text" name = "instagram_handle" id = "instagram_handle" placeholder = "Eg. kings.obioma" class = "medium-input border-radius-8">

                                    @error('instagram_handle')
                                        <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                            <small>
                                                {{ $message }}
                                            </small>
                                        </div>
                                    @enderror

                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-12">

                                    <label for="email">Whatsapp Number:</label>
                                    <input type = "text" name = "phone_number" id = "phone_number" placeholder = "Eg. 8081450821" class = "medium-input border-radius-8">

                                    @error('phone_number')

                                        <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                            <small>
                                                {{ $message }}
                                            </small>
                                        </div>

                                    @enderror

                                </div>

                            </div>

                            <div>

                                <label for="email">Email Address:</label>
                                <input type = "email" name = "email" id = "email" placeholder = "Eg. example@gmail.com" class = "medium-input border-radius-8">

                                @error('email')
                                
                                    <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>

                                @enderror

                            </div>

  
                            <button class="btn-medium btn-circle btn bg-greenish-blue text-white tz-text" type="submit">
                                Create Social Profile
                            </button>

                        </form>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-fifteen-top">
                    <div class="padding-eighteen no-padding-top no-padding-bottom xs-no-padding">
                        <h2 class="alt-font text-dark-gray title-large display-block xs-title-extra-large-2 tz-text margin-nine-bottom width-90 md-width-100">What To Expect!</h2>

                        <div class="text-medium tz-text margin-ten-bottom">- Shortened URL For Note</div>
                        <div class="text-medium tz-text margin-ten-bottom">- QR Code For Note</div>
                        <div class="text-medium tz-text margin-ten-bottom">- 2FA For Notes (Registered Users)</div>

                        <div class="text-medium tz-text margin-ten-bottom">- All Notes Are Hashed For Security</div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section> 

</x-main>