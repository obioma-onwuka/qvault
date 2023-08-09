<x-main>

    @section('title', 'Socials')

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">
                
                @include('layouts.aside')
                

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">
                    
                        <h5 class="alt-font display-block tz-text" style = "color: rgb(22, 170, 22);  font-size: 16px">
                            All Social Profiles

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
                                    <th>Title</th>
                                    <th>Visits</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                @forelse($socials as $index => $social)

                                    <tr>

                                        <td>{{ $serialNumbers++ }}</td>
                                        <td>{{ $social->name }}</td>
                                        <td>{{ $social->hits }}</td>
                                        <td>{{date('d-m-Y h:i a', strtotime(strip_tags($social->created_at)))}}</td>
                                        <td width="200">

                                            <a href="{{ route('boarded.social.show', decrypt($social->data_code)) }}" class = "btn btn-sm btn-success">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="{{ route('boarded.social.edit', decrypt($social->data_code)) }}" class = "btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>


                                            <div style="display: inline-block;">
                                                <form action="{{ route('boarded.social.delete', ['social' => decrypt($social->data_code)]) }}" style="border:none" method="POST" id="deleteForm{{ decrypt($social->data_code) }}">
                                                    
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" onclick="confirmDelete(event, 'deleteForm{{ decrypt($social->data_code) }}')">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>

                                        </td>


                                    </tr>

                                @empty

                                    @include('user._empty-table')

                                @endforelse

                            </tbody>

                            
                        </table>

                        {{ $socials->appends(request()->except('page'))->links('pagination::bootstrap-4') }}


                    </div>

                </div>

                

            </div>
        </div>
    </section> 

    <script>
        function confirmDelete(event, formId) {
            event.preventDefault(); // Prevent form submission
    
            // Display confirmation box
            if (confirm('Are you sure you want to delete this task?')) {
                document.getElementById(formId).submit(); // Submit the form
            } else {
                // Do nothing
            }
        }
    </script>


</x-main>