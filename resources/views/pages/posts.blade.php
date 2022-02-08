@extends('layouts.main-layout')
@section('content')
    <main id="app">
        {{-- sezione utente autenticato  --}}
        @auth
            <div class="container">
                <div class="row mb-5 lead">
                    <a href="{{route('create')}}">Create new Post</a>
                </div>
                @foreach ($posts as $post)
                    <div class="row">
                        <h3>{{$post->title}}</h3>
                        <p class="badge badge-pill badge-primary">{{$post->category->name}}</p>
                    </div>
                    <div class="row">
                        <p class="lead">Likes: {{$post->likes}}</p>
                    </div>
                    <div class="row">
                        <p class="text-muted">{{$post->text}}</p>
                    </div>
                    <hr>
                @endforeach
            </div>
        @endauth
    </main>
@endsection