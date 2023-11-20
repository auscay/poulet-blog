
<x-edit-layout>

    @include('partials._edit-hero')


    <!-- Section -->
    <section id="section-2" class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="my-0 fs-1 fw-medium text-primary text-uppercase">Only authenticated bloggers</h3>
                    <h2 class="mb-5 fw-medium text-secondary text-uppercase">Edit Posts</h2>
                    <p class="mb-6 fs--1">Edit: {{$post->title}}</p>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-6 bg-blue-light overflow-hidden">
                    <div class="row h-100 align-items-center">
                        <form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data" class="col px-5 px-lg-8 py-6 py-lg-0">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" value="{{$post->title}}">
                                @error('title')
                                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" id="author" name="author" placeholder="Author" value="{{$post->author}}">
                                @error('author')
                                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Post Slug" value="{{$post->slug}}">
                                @error('slug')
                                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" id="pretext" name="pretext" placeholder="Pretext/Excerpt" value="{{$post->pretext}}">
                                @error('pretext')
                                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" id="tags" name="tags" placeholder="Tags (separated by comma)" value="{{$post->tags}}">
                                @error('tags')
                                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" id="location" name="location" placeholder="Target Audience Location" value="{{$post->location}}">
                                @error('location')
                                    <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <input type="file" class="form-control" id="photo" name="photo" placeholder="Attach Photo">
                                <img src="{{$post->photo ? asset('storage/' . $post->photo) : asset('img/no-image.png')}}" class="pt-2 figure-img img-fluid w-100" alt="" />
                                @error('photo')
                                    <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <textarea class="form-control" rows="8" id="content" name="content" placeholder="Content">{{$post->content}}</textarea>
                                @error('content')
                                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary w-100">Update<i class="zmdi zmdi-mail-send ms-2"></i></button>
                        </form>
                        <div class="form-group mb-4">
                        <form method="POST" action="/posts/{{$post->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn mt-3 mx-auto btn-primary w-100 delete-btn">Delete<i class="zmdi zmdi-delete ms-2"></i></button>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="py-15">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Section -->
    </x-edit-layout>