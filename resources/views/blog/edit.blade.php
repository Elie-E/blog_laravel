@extends('layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Post</h1>
                    <p>Edit and submit this form to update a post</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            
                        <div class="control-group col-12">
                                <label for="key">Post Key</label>
                                <input type="text" id="key" class="form-control" name="key"
                                       placeholder="Enter Post Key" value="{{ $post->key_post }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="lng">Post language</label>
                                <input type="text" id="lng" class="form-control" name="lng"
                                       placeholder="Enter Post language" value="{{ $post->lng }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="title">Post Title</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Post Title" value="{{ $post->title }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Post Content</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Enter Post Content"
                                          rows="" required>{{ $post->content }}</textarea>
                            </div>

                            <p>Catégorie(s) :</p>
                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">

                            @foreach($categories as $category)
                                <input type="checkbox" name="categ_box[]" class="btn-check" id="{{ $category->title }}" value="{{ $category->id }}" autocomplete="off" >
                                <label class="btn btn-outline-primary" for="{{ $category->title }}">{{ $category->title }}</label>
                            @endforeach

                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection