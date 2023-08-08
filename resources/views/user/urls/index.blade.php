<x-main>

    @section('title', 'Urls')

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="no-padding-top no-padding-bottom xs-no-padding">

                        <h5 class="alt-font text-dark-gray display-block tz-text text-capitalize">Welcome <span class="text-success">Obioma</span>!</h5>
                        <br>

                    </div>

                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 xs-margin-fifteen-top">
                    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">
                
                        <!-- Aside Menu -->
                        
                        @include('layouts.aside')
                        
                        
                        <!-- End Aside Menu -->
                    </div>
                </div>
                

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">
                    
                        <h5 class="alt-font display-block tz-text" style = "color: rgb(22, 170, 22);  font-size: 16px">
                            All Short Urls

                            <a class="btn-large btn text-primary" href="{{ route('social.show_form') }}">

                                <i class="fa fa-plus-circle icon-extra-small tz-icon-color"></i>

                                <span class="tz-text">
                                    Add
                                </span>

                            </a>
                            
                        </h5>

                        <table class="table table-responsive table-bordered">

                            <thead>

                                <tr>

                                    <th>S/n</th>
                                    <th>Short Link</th>
                                    <th>Visits</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>1</td>
                                    <td>https://obt.ng/we2r</td>
                                    <td>500</td>
                                    <td>2023-08-12</td>
                                    <td width="200">

                                        <a href="" class = "btn btn-sm btn-success">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <a href="" class = "btn btn-sm btn-primary">
                                            <i class="fa fa-edit"></i>
                                        </a>


                                        <div style="display: inline-block;">
                                            <form action="#" style="border:none" method="POST" >
                                                
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" >
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
                                        </div>

                                    </td>


                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

                

            </div>
        </div>
    </section> 

</x-main>