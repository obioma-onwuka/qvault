<x-main>

    @section('title', $social->name)

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">
                
                @include('layouts.aside')
                

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">

                        @if(session()->has('error'))

                            <p class="mb-4" style = "color: rgba(216, 26, 48, 0.858)">{{session('error')}}</p>

                        @endif
                    
                        <h5 class="alt-font display-block tz-text text-center" style = "color: rgb(22, 170, 22);  font-size: 16px">
                            Update: {{ $social->name }}

                            
                        </h5>
                        <hr>

                        <form action="{{ route('boarded.social.update', $social->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div>

                                <label for="name">Name:</label>
                                <input type = "text" name = "name" id = "name" value = "{{ old('name', $social->name) }}" class = "medium-input border-radius-8" autofocus>

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
                                    <input type = "text" name = "facebook_handle" id = "facebook_handle" value = "{{ old('facebook_handle', $social->facebook_handle) }}" class = "medium-input border-radius-8">

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
                                    <input type = "text" name = "twitter_handle" id = "twitter_handle" value = "{{ old('twitter_handle', $social->twitter_handle) }}" class = "medium-input border-radius-8">

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
                                    <input type = "text" name = "instagram_handle" id = "instagram_handle" value = "{{ old('instagram_handle', $social->instagram_handle) }}" class = "medium-input border-radius-8">

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
                                    <input type = "text" name = "phone_number" id = "phone_number" value = "{{ old('phone_number', $social->phone_number) }}" class = "medium-input border-radius-8">

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
                                <input type = "email" name = "email" id = "email" value = "{{ old('email', $social->email) }}" class = "medium-input border-radius-8">

                                @error('email')
                                
                                    <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>

                                @enderror

                            </div>

  
                            <button class="btn-medium btn-circle btn bg-greenish-blue text-white tz-text" type="submit">
                                Update
                            </button>

                        </form>

                    </div>

                </div>

                

            </div>
        </div>
    </section> 


</x-main>