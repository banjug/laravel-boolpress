@extends('layouts.main-layout')
@section('content')
    <main id="app">
        <div class="container">
            <h2>Create new post</h2>
            <form action="{{route('storePost')}}" method="POST">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea rows="5" name="text" class="form-control" placeholder="Text"></textarea>
                </div>
                
                <input type="submit" value="Save new post" class="btn btn-primary">
            </form>
        </div>
    </main>
@endsection