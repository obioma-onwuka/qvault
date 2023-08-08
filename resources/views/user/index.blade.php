<x-main>

    @section('title', 'Dashboard')

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="no-padding-top no-padding-bottom xs-no-padding">

                        <h5 class="alt-font text-dark-gray display-block tz-text text-capitalize">Welcome <span class="text-success">Obioma</span>!</h5>
                        <br>

                    </div>

                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 xs-margin-fifteen-top">
                    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">
                
                        <!-- Aside Menu -->
                        
                        @include('layouts.aside')
                        
                        
                        <!-- End Aside Menu -->
                    </div>
                </div>
                

                <div class="col-md-9 col-sm-9 col-xs-12 text-center">
                    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">
                    
                        <div class="row">

                            <div class="col-md-3 col-sm-12 col-xs-12 register-list-left text-center sm-text-center sm-margin-ten-bottom" style = "border:3px solid green; border-radius: 8px; background: orange; margin-right: 10px">

                                <div class="alt-font title-large text-dark-gray display-block sm-title-extra-large tz-text font-weight-600" style = "padding-top: 5px">
                                    50
                                </div>
                                <p style = "color: #FFF; font-weight: bolder">URLs</p>

                            </div>


                            <div class="col-md-3 col-sm-12 col-xs-12 register-list-left text-center sm-text-center sm-margin-ten-bottom" style = "border:3px solid green; border-radius: 8px; background: orange; margin-right: 10px">

                                <div class="alt-font title-large text-dark-gray display-block sm-title-extra-large tz-text font-weight-600" style = "padding-top: 5px">
                                    500
                                </div>
                                <p style = "color: #FFF; font-weight: bolder">NOTES</p>

                            </div>

                            <div class="col-md-3 col-sm-12 col-xs-12 register-list-left text-center sm-text-center sm-margin-ten-bottom" style = "border:3px solid green; border-radius: 8px; background: orange">

                                <div class="alt-font title-large text-dark-gray display-block sm-title-extra-large tz-text font-weight-600" style = "padding-top: 5px">
                                    500
                                </div>
                                <p style = "color: #FFF; font-weight: bolder">SOCIALS</p>

                            </div>

                        </div>

                    </div>

                </div>

                

            </div>
        </div>
    </section> 

</x-main>