<x-main>

    @section('title', $userCheck->first_name)

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">
                
                @include('layouts.aside')
                

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">

                        @if(session()->has('success'))

                            <p class="mb-4" style = "color: rgba(10, 91, 10, 0.858)">{{session('success')}}</p>

                            <hr>

                        @endif

                        

                        <form action="#">
                           
                            <div class = "row">

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                    <label for="">First Name:</label>

                                    <input class = "medium-input border-radius-8" value = "{{ strip_tags($userCheck->first_name) }}" readOnly>


                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                    <label for="">Last Name:</label>
                                    
                                    <input class = "medium-input border-radius-8" value = "{{ strip_tags($userCheck->last_name) }}" readOnly>


                                </div>

                            </div>

                            <div class = "row">

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

                                    <label for="">Notes:</label>

                                    <input class = "medium-input border-radius-8" value = "{{ strip_tags($getNotes) }}" readOnly>


                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

                                    <label for="">URLS:</label>
                                    
                                    <input class = "medium-input border-radius-8" value = "{{ strip_tags($getUrls) }}" readOnly>


                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

                                    <label for="">Socials:</label>
                                    
                                    <input class = "medium-input border-radius-8" value = "{{ strip_tags($getSocials) }}" readOnly>


                                </div>

                            </div>

                            <div>

                                <label for="">Email:</label>
                                    
                                <input class = "medium-input border-radius-8" value = "{{ strip_tags($userCheck->email) }}" readOnly>

                            </div>


                            <div class="text-medium tz-text margin-ten-bottom text-center">


                                <a href="{{route('boarded.panel.index')}}" class="btn btn-success btn-sm">Back</a>
                                
                                <a href="{{ route('profile.settings.show') }}" class = "btn btn-primary btn-sm">Settings</a>

    
                            </div>
                                    
                           

                        </form>

                    </div>

                </div>

                

            </div>
        </div>
    </section> 


</x-main>