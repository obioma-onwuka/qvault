<x-main>

    @section('title', decrypt($note->title))

    <section class="padding-110px-tb bg-light-gray builder-bg contact-form-style1 xs-padding-60px-tb" id="contact-section9">
        <div class="container">
            <div class="row">
                
                @include('layouts.aside')
                

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">

                        @if(session()->has('error'))

                            <p class="mb-4" style = "color: rgba(216, 26, 48, 0.858)">{{session('error')}}</p>

                        @endif
                    
                        <h5 class="alt-font display-block tz-text text-center" style = "color: rgb(22, 170, 22);  font-size: 16px">
                            Update: {{ decrypt($note->title) }}

                            
                        </h5>
                        <hr>

                        <form action="{{ route('boarded.note.update', $note->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div>

                                <label for="name">Title:</label>

                                <input type = "text" name = "title" id = "title" placeholder = "Title:" class = "medium-input border-radius-8" autofocus value = "{{ old('title', decrypt($note->title)) }}">

                                @error('title')
                                    <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>
                                @enderror

                            </div>

                            <div>

                                <label for="name">Content:</label>
                                <textarea name="content" id="content" placeholder="Your Note:" class="medium-input border-radius-8" rows="10" cols="30">{{ old('content', decrypt($note->content)) }}</textarea>   

                                @error('content')
                                    <div class="text-danger" role="alert" style = "margin-bottom: 8px">
                                        <small>
                                            {{ $message }}
                                        </small>
                                    </div>
                                @enderror

                            </div>

                            <button class="btn-medium btn-circle btn bg-greenish-blue text-white tz-text" type="submit">
                                Update
                            </button>

                        </form>

                    </div>

                </div>

                

            </div>
        </div>
    </section> 


</x-main>