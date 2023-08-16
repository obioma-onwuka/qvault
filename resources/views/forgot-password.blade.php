<x-auth>

    @section('title', 'Forgot Password')

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
                        @if(session()->has('success'))

                            <p class="mb-4" style = "color: rgba(9, 73, 9, 0.858)">{{session('success')}}</p>

                        @elseif(session()->has('error'))

                            <p class="mb-4" style = "color: rgba(143, 10, 27, 0.858)">{{session('error')}}</p>
                        
                        @else
                            
                            <h4 class="mb-2" style = "color: #595BD9">Reset Your Qvault Account <i class="fa fa-lock"></i> </h4>
                            <p class="mb-4">Password reset link will sent to the email you provide. Follow the instructions to reset your password.</p>

                        @endif

                        <form id="formAuthentication" class="mb-3" action="{{ route('guest.password.find') }}" method="POST">
                            @csrf
                            <div class="mb-3">

                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"  autofocus>

                                @error('email')
                                    <div class="text-danger" role="alert">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>
                                @enderror
                                
                            </div>


                            <div class="mb-3">
                                <button style = "background: #595BD9; color: #FFF" class="btn btn-primary d-grid w-100" type="submit">Submit</button>
                            </div>

                        </form>

                        <p class="text-center">
                            <span>Remember password?</span>
                            
                            <a href="{{ route('guest.register.show') }}" style = "color: #595BD9">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                <span>Sign in</span>
                            </a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-auth>