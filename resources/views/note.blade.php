<x-main>

    @section('title', 'Note')

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="padding-eighteen bg-white box-shadow tz-background-color xs-padding-eleven border-radius-8">

                      
                        <div class = "margin-fifteen-bottom">

                            <h5 class="alt-font display-block tz-text" style = "color: rgb(22, 170, 22);  font-size: 16px">
                                Note has been create with QR code
                            </h5>

                            @if(auth()->check()){

                                <p></p>
                                
                            @else

                                <p class = "text-success">As you are not logged in, store your generated URL somewhere safe or download your note QRCode.</p>

                            @endif

                        </div>

                    

                        <form action="#">
                           
                            <input type = "text" value = "{{ $shortUrl }}" class = "medium-input border-radius-8" id='myInput' readOnly>


                            <a href="{{ route('notes.show_form') }}" class="btn-medium btn-circle btn bg-greenish-blue text-white tz-text">
                                Create Another Note 
                            </a>

                        </form>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 xs-margin-fifteen-top">
                    <div class="padding-eighteen no-padding-top no-padding-bottom xs-no-padding">
                        <h2 class="alt-font text-dark-gray title-large display-block xs-title-extra-large-2 tz-text margin-nine-bottom width-90 md-width-100">Resources</h2>

                        <div class="text-medium tz-text margin-ten-bottom">
                            Title: 
                            <br> 
                            <span class = "text-primary">
                                {{ decrypt($title) }}
                            </span>
                        </div>
                        <div class="text-medium tz-text margin-ten-bottom">

                            <img src="/images/qrc/{{ $qrFile }}" alt="">

                        </div>
                        <div class="text-medium tz-text margin-ten-bottom">

                            <button class = "btn btn-success" onclick="myFunction()">Copy</button> &nbsp;
                            
                            <a href="/images/qrc/{{ $qrFile }}" download class = "btn btn-danger">Download</a>

                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section> 


    <script>
        function myFunction() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");
    
            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */
    
            /* Copy the text inside the text field */
            document.execCommand("copy");
    
            /* Alert the copied text */
            alert("Short link copied successfully");
        }
    </script>

</x-main>