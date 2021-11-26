@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Retour</a>
                <h1 class="display-one">{{ ucfirst($post->title) }}</h1>
                <p>{!! $post->content !!}</p>
                <hr>
                <p>
                    @foreach($categories as $category)
                        <p>{{ $category->title }}</p>
                    @endforeach
                    
                </p>
                <a href="/blog/{{ $post->id }}/edit" class="btn btn-primary">Mèttre à jour</a>
                <br><br>
                <form action="" method="POST" id="delete-frm">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@endsection