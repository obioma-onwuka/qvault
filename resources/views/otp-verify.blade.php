<x-main>

    @section('title', 'Verify')

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-3 col-xs-12"></div>

                <div class="col-md-6 col-sm-6 col-xs-12 mx-auto">
                    <div class="padding-eighteen bg-white box-shadow tz-background-color xs-padding-eleven border-radius-8">
                        <h5 class="alt-font text-dark-gray display-block tz-text margin-fifteen-bottom text-capitalize">Enter Otp Sent To Your Email</h5>
                        <p>To view this note, please provide the <span class="badge" style = "padding: 5px; background: #FF0000; color: #FFF">6-digit</span> code sent to your registered email address.</p>

                        <form action="{{ route('notes.otp.verify', $note->otp) }}" method="POST">
                            @csrf
                            <input type = "text" name = "otp" id = "title" placeholder = "Enter Code:" class = "medium-input border-radius-8" autofocus>

                            @error('otp')
                                <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                    <small>
                                        {{ $message }}
                                    </small>
                                </div>
                            @enderror


                            <button class="btn-medium btn-circle btn bg-greenish-blue text-white tz-text" type="submit">
                                Continue
                            </button>

                            <a href="{{ route('notes.show_form') }}" class="btn-medium btn-circle btn text-white tz-text" style = "background: rgb(72, 72, 224)">New Note</a>

                        </form>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12"></div>


            </div>
        </div>
    </section> 

</x-main>