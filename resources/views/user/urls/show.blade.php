<x-main>

    @section('title', 'Url')

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">
                
                @include('layouts.aside')
                

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">

                        @if(session()->has('success'))

                            <p class="mb-4" style = "color: rgba(10, 91, 10, 0.858)">{{session('success')}}</p>

                        @endif
                    
                        <h5 class="alt-font display-block tz-text" style = "color: rgb(22, 170, 22);  font-size: 16px">
                            Code: {{ $url->data_code }}

                            <a class="btn-large btn text-primary" href="{{ route('url.show_form') }}">

                                <i class="fa fa-plus-circle icon-extra-small tz-icon-color"></i>

                                <span class="tz-text">
                                    Create
                                </span>

                            </a>
                            
                        </h5>
                        <hr>

                        <form action="#">
                           
                            <div class = "row">

                                
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 col-12">

                                    {{ strip_tags($url->url) }}

                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12">

                                    <div class="text-medium tz-text margin-ten-bottom text-center">
                                        <p style="font-size: 13px" class = "mb-3">
                                            <i class="fa fa-eye" style = 'font-size:18px'></i> &nbsp;
                                            <strong style="color: green">
                                                {{ $url->hits }} &nbsp;
                                            </strong> 
                                        </p> 

                                        <img src="/images/qrc/{{ strip_tags($url->qr_code) }}" alt="">
            
                                    </div>

                                </div>
                                

                            </div>



                            <div class="text-medium tz-text margin-ten-bottom text-center">

                                <input readOnly style = "font-size: 13px; color: green; border:none;margin-bottom:2px; text-align:center" id='myInput' value = "{{ route('url.redirect', $url->code) }}">

                                <a href="{{route('boarded.urls.index')}}" class="btn btn-success btn-sm">Back</a>
                                
                                <a href="/images/qrc/{{ strip_tags($url->qr_code) }}" download class = "btn btn-primary btn-sm">Save Qr</a>

                                
                                <div style="display: inline-block;">
                                    <form action="{{ route('boarded.url.delete', ['url' => $url->id]) }}" style="border:none" method="POST" id="deleteForm{{ $url->id }}">

                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="confirmDelete(event, 'deleteForm{{ $url->id }}')">
                                            Delete
                                        </button>
                                        
                                    </form>
                                </div>


    
                            </div>
                                    
                           

                        </form>

                    </div>

                </div>

                

            </div>
        </div>
    </section> 

    <script>
        function confirmDelete(event, formId) {
            event.preventDefault(); // Prevent form submission
    
            // Display confirmation box
            if (confirm('Are you sure you want to delete this URL?')) {
                document.getElementById(formId).submit(); // Submit the form
            } else {
                // Do nothing
            }
        }
    </script>


</x-main>