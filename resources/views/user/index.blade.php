<x-main>

    @section('title', 'Dashboard')

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">

                @include('layouts.aside')
                

                <div class="col-md-9 col-sm-9 col-xs-12 text-center">
                    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">
                    
                        <div class="row">

                            <div class="col-md-3 col-sm-12 col-xs-12 register-list-left text-center sm-text-center sm-margin-ten-bottom" style = "border:3px solid green; border-radius: 8px; background: orange; margin-right: 10px">

                                <div class="alt-font title-large text-dark-gray display-block sm-title-extra-large tz-text font-weight-600" style = "padding-top: 5px">
                                    {{ $getUrl }}
                                </div>
                                <p style = "color: #FFF; font-weight: bolder">URLs</p>

                            </div>


                            <div class="col-md-3 col-sm-12 col-xs-12 register-list-left text-center sm-text-center sm-margin-ten-bottom" style = "border:3px solid green; border-radius: 8px; background: orange; margin-right: 10px">

                                <div class="alt-font title-large text-dark-gray display-block sm-title-extra-large tz-text font-weight-600" style = "padding-top: 5px">
                                    {{ $getNote }}
                                </div>
                                <p style = "color: #FFF; font-weight: bolder">NOTES</p>

                            </div>

                            <div class="col-md-3 col-sm-12 col-xs-12 register-list-left text-center sm-text-center sm-margin-ten-bottom" style = "border:3px solid green; border-radius: 8px; background: orange">

                                <div class="alt-font title-large text-dark-gray display-block sm-title-extra-large tz-text font-weight-600" style = "padding-top: 5px">
                                    {{ $getSocial }}
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