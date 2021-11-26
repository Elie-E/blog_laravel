@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint voluptates modi delectus magni enim velit libero accusantium! Sint modi distinctio praesentium commodi placeat doloremque? Consequuntur odio asperiores dolorum porro rem.</p>
                <a href="/blog" class="btn btn-outline-primary">Blog</a>
            </div>
        </div>
    </div>
@endsection