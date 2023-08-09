<x-main>

    @section('title', $social->name)

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">
                
                @include('layouts.aside')
                

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">
                    
                        <h5 class="alt-font display-block tz-text" style = "color: rgb(22, 170, 22);  font-size: 16px">
                            All Social Profiles

                            <a class="btn-large btn text-primary" href="{{ route('social.show_form') }}">

                                <i class="fa fa-plus-circle icon-extra-small tz-icon-color"></i>

                                <span class="tz-text">
                                    Add
                                </span>

                            </a>
                            
                        </h5>

                        <form action="#">
                           
                            <div class = "row">

                                
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 col-12">

                                    <p style = "margin-bottom: 3px">

                                        <i class="fa fa-facebook" style = "border-radius: 50%; background: #2b2bed; color: #FFF; padding:5px; font-size: 16px"></i> &nbsp;
                                        {{ strip_tags($socialCheck->facebook_handle) }}
    
                                    </p>
    
                                    <p style = "margin-bottom: 3px">
    
                                        <i class="fa fa-twitter" style = "border-radius: 50%; background: #2086eb; color: #FFF; padding:5px; font-size: 16px"></i> &nbsp;
                                        {{ strip_tags($socialCheck->twitter_handle) }}
    
                                    </p>
    
                                    <p style = "margin-bottom: 3px">
    
                                        <i class="fa fa-instagram" style = "border-radius: 50%; background: #f24014; color: #FFF; padding:5px; font-size: 16px"></i> &nbsp;
                                        {{ strip_tags($socialCheck->instagram_handle) }}
    
                                    </p>
    
                                    <p style = "margin-bottom: 3px">
    
                                        <i class="fa fa-envelope" style = "border-radius: 50%; background: #01330b; color: #FFF; padding:5px; font-size: 16px"></i> &nbsp;
                                        {{ strip_tags($socialCheck->email) }}
    
                                    </p>
    
                                    <p style = "margin-bottom: 3px">
    
                                        <i class="fa fa-whatsapp" style = "border-radius: 50%; background: #035513; color: #FFF; padding:5px; font-size: 16px"></i> &nbsp;
                                        {{ strip_tags($socialCheck->phone_number) }}
    
                                    </p>

                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12">

                                    <div class="text-medium tz-text margin-ten-bottom text-center">
                                        <p style="font-size: 13px" class = "mb-3">
                                            <i class="fa fa-eye" style = 'font-size:18px'></i> &nbsp;
                                            <strong style="color: green">
                                                {{ $socialCheck->hits }} &nbsp;
                                            </strong> 
                                        </p> 

                                        <img src="/images/qrc/{{ strip_tags($socialCheck->qr_code) }}" alt="">
            
                                    </div>

                                </div>
                                

                            </div>



                            <div class="text-medium tz-text margin-ten-bottom text-center">

                                <input readOnly style = "font-size: 13px; color: green; border:none;margin-bottom:2px; text-align:center" id='myInput' value = "{{ route('social.redirect', $socialCheck->code) }}">


                                <button class = "btn btn-success" onclick="myFunction()">Copy</button> &nbsp;
                                
                                <a href="/images/qrc/{{ strip_tags($socialCheck->qr_code) }}" download class = "btn btn-danger">Download</a>
    
                            </div>
                                    
                           

                        </form>

                    </div>

                </div>

                

            </div>
        </div>
    </section> 



</x-main>