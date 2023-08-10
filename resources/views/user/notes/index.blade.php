<x-main>

    @section('title', 'Notes')

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">
                
                @include('layouts.aside')
                

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">

                        @if(session()->has('success'))

                            <p class="mb-4" style = "color: rgba(10, 91, 10, 0.858)">{{session('success')}}</p>

                        @elseif(session()->has('error'))

                            <p class="mb-4" style = "color: rgba(143, 10, 27, 0.858)">{{session('error')}}</p>
                        
                        @endif
                    
                        <h5 class="alt-font display-block tz-text" style = "color: rgb(22, 170, 22);  font-size: 16px">
                            All Notes

                            <a class="btn-large btn text-primary" href="{{ route('notes.show_form') }}">

                                <i class="fa fa-plus-circle icon-extra-small tz-icon-color"></i>

                                <span class="tz-text">
                                    Add
                                </span>

                            </a>
                            
                        </h5>
                        <hr>

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

                                @forelse($notes as $index => $note)

                                    <tr>

                                        <td>{{ $serialNumbers++ }}</td>
                                        <td>{{ decrypt($note->title) }}</td>
                                        <td>{{ $note->hits }}</td>
                                        <td>{{date('d-m-Y h:i a', strtotime(strip_tags($note->created_at)))}}</td>
                                        <td width="200">

                                            <a href="{{ route('boarded.note.show', $note->id) }}" class = "btn btn-sm btn-success">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="{{ route('boarded.note.edit', $note->id) }}" class = "btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>


                                            <div style="display: inline-block;">
                                                <form action="{{ route('boarded.note.delete', ['note' => $note->id]) }}" style="border:none" method="POST" id="deleteForm{{ $note->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" onclick="confirmDelete(event, 'deleteForm{{ $note->id }}')">
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

                        {{ $notes->appends(request()->except('page'))->links('pagination::bootstrap-4') }}


                    </div>

                </div>

                

            </div>
        </div>
    </section> 

    <script>
        function confirmDelete(event, formId) {
            event.preventDefault(); // Prevent form submission
    
            // Display confirmation box
            if (confirm('Are you sure you want to delete this note?')) {
                document.getElementById(formId).submit(); // Submit the form
            } else {
                // Do nothing
            }
        }
    </script>


</x-main>