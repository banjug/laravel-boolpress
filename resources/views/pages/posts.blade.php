@extends('layouts.main-layout')
@section('content')
    <main id="app">        
            <div class="container">
                @guest
                    <div class="row mb-5 lead">
                        <a href="{{route('home')}}">Login or Register</a>
                    </div>
                @endguest
                <div class="row mb-5 lead">
                    <a href="{{route('create')}}">Create new Post</a>
                </div>
                @foreach ($posts as $post)
                    <div class="row">
                        <h3>{{$post->title}}</h3>
                        <p class="badge badge-pill badge-primary">{{$post->category->name}}</p>
                    </div>
                    <div class="row">
                        <p class="text-muted">{{$post->created_at}}</p>
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