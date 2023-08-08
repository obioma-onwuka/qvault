<x-auth>

    @section('title', 'Register')

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <div class = "app-brand justify-content-center">
                            <a href="{{route('guest.welcome')}}" class="app-brand-link gap-2">
                                <span class = "app-brand-text demo text-body fw-bolder">
                                    <img src="{{ asset('/images/logo.png') }}" alt="Qvault" height = "40">
                                </span>
                            </a>
                        </div>

                        
                        
                        @if(session()->has('error'))

                            <p class="mb-4" style = "color: rgba(143, 10, 27, 0.858)">{{session('error')}}</p>
                        
                        @else
                            
                            <h4 class="mb-2" style = "color: #595BD9">Welcome To Pet Reunite 🤝</h4>
                            <p class="mb-4">Please register and start your adventure</p>

                        @endif

                        <form id="formAuthentication" class="mb-3" action="{{ route('guest.register.try') }}" method="POST">
                            @csrf

                            <div class="mb-3 row">

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">

                                    <label for="first_name" class="form-label">First Name:</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" value = "{{old('first_name')}}"  autofocus>

                                    @error('first_name')
                                        <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                            <small>
                                                {{ $message }}
                                            </small>
                                        </div>
                                    @enderror

                                </div>


                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">

                                    <label for="last_name" class="form-label">Last Name:</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" value = "{{old('last_name')}}">

                                    @error('last_name')
                                        <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                            <small>
                                                {{ $message }}
                                            </small>
                                        </div>
                                    @enderror

                                </div>

                            </div>

                            <div class="mb-3">

                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" value = "{{old('email')}}">

                                @error('email')
                                    <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>
                                @enderror
                            

                            </div>

                            <div class="mb-3 form-password-toggle row">

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                                
                                    <div class = "d-flex justify-content-between">
                                        <label for="password" class="form-label">Password:</label>
                                    </div>

                                    <div class = "input-group input-group-merge">
                                        <input type="password" name="password" id="password" class="form-control" value = "{{ old('password') }}" >
                                        <span class="input-group-text cursor-pointer">
                                            <i class="bx bx-hide" style = "color: #595BD9"></i>
                                        </span>
                                    </div>

                                    @error('password')
                                        <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                            <small>
                                                {{ $message }}
                                            </small>
                                        </div>
                                    @enderror

                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">

                                    <div class = "d-flex justify-content-between">
                                        <label for="password" class="form-label">Confirm Password:</label>
                                    </div>
    
                                    <div class = "input-group input-group-merge">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value = "{{ old('password_confirmation') }}" >
                                        <span class="input-group-text cursor-pointer">
                                            <i class="bx bx-hide" style = "color: #595BD9"></i>
                                        </span>
                                    </div>

                                    @error('password_confirmation')
                                        <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                            <small>
                                                {{ $message }}
                                            </small>
                                        </div>
                                    @enderror
                                    
                                </div>
                                
                                

                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id = "terms-conditions" name = "terms" checked />
                                    <label class="form-check-label" for="terms-conditions">
                                        I agree to
                                        <a href="javascript:void(0);" style = "color: #595BD9">privacy policy & terms</a>
                                    </label>
                                   
                                </div>
                            </div>

                            <div class="mb-3">
                                <button style = "background: #595BD9; color: #FFF" class="btn btn-primary d-grid w-100" type="submit">Sign Up</button>
                            </div>

                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            
                            <a href="{{ route('guest.login.show') }}" style = "color: #595BD9">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                <span>Login</span>
                            </a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-auth>