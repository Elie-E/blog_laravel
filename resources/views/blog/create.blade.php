@extends('layout.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
            <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-4">Create a New Post</h1>
                <p>Fill and submit this form to create a post</p>

                <hr>
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="key">Post Key</label>
                            <input type="text" id="key" class="form-control" name="key" placeholder="Enter Post Key" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="lng">Post language</label>
                            <input type="text" id="lng" class="form-control" name="lng" placeholder="Enter Post language" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="title">Post Title</label>
                            <input type="text" id="title" class="form-control" name="title" placeholder="Enter Post Title" required>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="body">Post Content</label>
                            <textarea id="body" class="form-control" name="body" placeholder="Enter Post Content" rows="" required></textarea>
                        </div>

                        <p>Catégorie(s) :</p>
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">

                            @foreach($categories as $category)
                            <input type="checkbox" name="categ_box[]" class="btn-check" id="{{ $category->title }}" value="{{ $category->id }}" autocomplete="off">
                            <label class="btn btn-outline-primary" for="{{ $category->title }}">{{ $category->title }}</label>
                            @endforeach

                        </div>

                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Create Post
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection