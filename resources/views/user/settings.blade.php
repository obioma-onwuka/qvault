<x-main>

    @section('title', $userCheck->first_name)

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">
                
                @include('layouts.aside')
                

                <div class="col-md-9 col-sm-9 col-xs-12">
                    

                        @if(session()->has('error'))

                            <p class="mb-4" style = "color: rgba(10, 91, 10, 0.858)">{{session('error')}}</p>

                            <hr>

                        @endif

                        <div class="row">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">

                                    <h4>Basic Data</h4>
                                    <hr>

                                    <form action="{{ route('profile.settings.bio') }}" method = "POST">

                                        @csrf
                                        @method('PUT')
                                
                                        <div>
        
                                            <label for="">First Name:</label>

                                            <input class = "medium-input border-radius-8" value = "{{ old('first_name', strip_tags($userCheck->first_name)) }}" type = "text" name = "first_name">

                                            @error('first_name')
                                                <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
        
                                        </div>

                                        <div>

                                            <label for="">Last Name:</label>
                                                
                                            <input class = "medium-input border-radius-8" value = "{{ old('last_name', strip_tags($userCheck->last_name)) }}" type = "text" name = "last_name">

                                            @error('last_name')
                                                <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror

                                        </div>
        
        
                                        <div class="text-medium tz-text margin-ten-bottom text-center">
        
        
                                            <a href="{{route('profile.show')}}" class="btn btn-success btn-sm">Back</a>
                                            
        
                                            <button type="submit" class = "btn btn-primary btn-sm">
                                                Save
                                            </button>
        
                
                                        </div>
                                                
                                    
        
                                    </form>
                                </div>

                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">

                                    <h4>Account Security</h4>
                                    <hr>

                                    <form action="{{ route('profile.settings.pass') }}" method = "POST">
                                        
                                        @csrf
                                        @method('PUT')

                                        <div>
        
                                            <label for="">Current Password:</label>

                                            <input class = "medium-input border-radius-8" type = "password" name = "current_password">

                                            @error('current_password')
                                                <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                                    <small>
                                                        {{ $message }}
                                                    </small>
                                                </div>
                                            @enderror
        
                                        </div>

                                        <div class = "row">

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                <label for="">New Password:</label>
                                                
                                                <input class = "medium-input border-radius-8" type = "password" name = "new_password">

                                                @error('new_password')
                                                    <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                                        <small>
                                                            {{ $message }}
                                                        </small>
                                                    </div>
                                                @enderror

                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                <label for="">Confirm New Password:</label>
                                                
                                                <input class = "medium-input border-radius-8" type = "password" name = "new_password_confirmation">

                                                @error('new_password_confirmation')
                                                    <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                                        <small>
                                                            {{ $message }}
                                                        </small>
                                                    </div>
                                                @enderror

                                            </div>

                                        </div>
        
        
                                        <div class="text-medium tz-text margin-ten-bottom text-center">
        
                                            
        
                                            <button type="submit" class = "btn btn-primary btn-sm">
                                                Save
                                            </button>
        
                
                                        </div>
                                                
                                    
        
                                    </form>
                                </div>

                            </div>

                        </div>


                </div>

                

            </div>
        </div>
    </section> 


</x-main>