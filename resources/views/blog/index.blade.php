@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Blog</h1>                </div>
                        <p>blabla blabla</p>
                    </div>
                    <div class="col-4">
                        <p>Créer un billet</p>
                        <a href="/blog/create/post" class="btn btn-secondary btn-sm">Ecrire un billet</a>
                    </div>
            </div>
            @forelse($posts as $post)
                <ul>
                    <li>
                        <a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a>
                    </li>
                </ul>
            @empty
                <p class="text-warning">No post</p>
            @endforelse
            </div>
        </div>
    </div>
@endsection