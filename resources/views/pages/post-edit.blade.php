@extends('layouts.main-layout')
@section('content')
    <main id="app">
        <div class="container">
            <h2>Edit post</h2>
            <form action="#" method="POST">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}"
                                @if ($category->id==$post->category->id)
                                    selected
                                @endif    
                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea rows="5" name="text" class="form-control">{{$post->text}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Tags</label><br>
                    @foreach ($tags as $tag)                        
                        <input type="checkbox" name="tags[]" value="{{$tag->id}}"><span>{{$tag->name}}</span>
                    @endforeach
                </div>
                
                <input type="submit" value="Save new post" class="btn btn-primary">
            </form>
        </div>
    </main>
@endsection