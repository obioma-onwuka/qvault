<x-main>

    @section('title', $note->title)

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="padding-eighteen bg-white box-shadow tz-background-color xs-padding-eleven border-radius-8">

                      
                        <div class = "margin-fifteen-bottom">

                            <h5 class="alt-font display-block tz-text text-capitalize" style = "color: rgb(22, 170, 22);  font-size: 16px">
                                {{ strip_tags($note->title) }}
                            </h5>

                        </div>

                        <form action="#">
                           
                            <div>

                                {{ strip_tags($note->content) }}

                            </div>

                            <div style = "margin-top:9px; border: 1px solid gray; border-radius: 16px; padding: 5px">

                                <p style = "padding: 3px" class = "text-center">

                                    <span>
                                        <input readOnly style = "font-size: 13px; color: green; border:none; text-align:center; margin-bottom:2px" id='myInput' value = "{{ route('notes.redirect', $note->code) }}">

                                    </span>

                                    <span style="font-size: 13px">
                                        <i class="fa fa-eye"></i>
                                        <strong style="color: green">
                                            {{ $note->hits }} &nbsp;
                                        </strong> 
                                    </span> 
                                    

                                </p>

                                
                            </div>

                           

                        </form>

                    
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 xs-margin-fifteen-top">
                    <div class="padding-eighteen no-padding-top no-padding-bottom xs-no-padding">
                        <h2 class="alt-font text-dark-gray title-large display-block xs-title-extra-large-2 tz-text margin-nine-bottom width-90 md-width-100">Resources</h2>

                        <div class="text-medium tz-text margin-ten-bottom">
                            Created: 
                            
                            <span class = "text-primary">
                                {{ date('jS M, Y h:i:s a', strtotime(strip_tags($note->created_at)))}}
                            </span>
                        </div>
                        <div class="text-medium tz-text margin-ten-bottom">

                            <img src="/images/qrc/{{ strip_tags($note->qr_code) }}" alt="">

                        </div>
                        <div class="text-medium tz-text margin-ten-bottom">

                            <button class = "btn btn-success" onclick="myFunction()">Copy</button> &nbsp;
                            
                            <a href="/images/qrc/{{ strip_tags($note->qr_code) }}" download class = "btn btn-danger">Download</a>

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