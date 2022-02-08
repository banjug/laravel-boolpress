@extends('layouts.main-layout')
@section('content')
    <main id="app">        
            <div class="container">
                @guest
                    <div class="row mb-5 lead">
                        <a href="{{route('home')}}">Login or Register</a>
                    </div>
                @else
                    <div class="row mb-5 lead">
                        <a class="btn btn-primary" href="{{route('createPost')}}">Create new Post</a>
                    </div>
                @endguest
                @foreach ($posts as $post)
                    <div class="row">
                        <p class="lead text-capitalize">{{$post->category->name}}</p>
                    </div>
                    <div class="row">
                        <h3>{{$post->title}}</h3>
                        @foreach ($post->tags as $tag)
                            <p class="badge badge-pill badge-secondary ml-3">{{$tag->name}}</p>
                        @endforeach
                    </div>
                    <div class="row">
                        <p class="text-muted">{{$post->created_at->format('d-m-Y H:m')}}</p>
                    </div>
                    <div class="row">
                        <p class="text-muted">{{$post->text}}</p>
                    </div>
                    <div class="row">
                        <p class="lead">Likes: {{$post->likes}}</p>
                    </div>
                    <hr>
                @endforeach
            </div>
    </main>
@endsection