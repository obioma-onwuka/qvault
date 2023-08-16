<x-auth>

    @section('title', 'Reset Password')

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
                            
                            <h4 class="mb-2" style = "color: #595BD9">Reset Password 🤝</h4>
                            <p class="mb-4">Please create you new Qvault by Obtechng password</p>

                        @endif

                        <form id="formAuthentication" class="mb-3" action="{{ route('guest.login.try') }}" method="POST">
                            @csrf
                            @method('PUT')
                            

                            <div class="mb-3 form-password-toggle">
                            
                                <label for="password">New Password:</label>
                                <div class = "input-group input-group-merge">

                                    <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" >

                                    <span class="input-group-text cursor-pointer">
                                        <i class="bx bx-hide" style = "color: #595BD9"></i>
                                    </span>

                                </div>

                                @error('password')
                                    <div class="text-danger" role="alert">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>
                                @enderror
                                

                            </div>

                            <div class="mb-3 form-password-toggle">
                            
                                <label for="password">Confirm New Password:</label>
                                <div class = "input-group input-group-merge">

                                    <input type="password" name="password_confirmation" id="password" class="form-control" value="{{ old('password') }}" >

                                    <span class="input-group-text cursor-pointer">
                                        <i class="bx bx-hide" style = "color: #595BD9"></i>
                                    </span>

                                </div>

                                @error('password')
                                    <div class="text-danger" role="alert">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>
                                @enderror
                                

                            </div>


                            <div class="mb-3">
                                <button style = "background: #595BD9; color: #FFF" class="btn btn-primary d-grid w-100" type="submit">Save</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-auth>