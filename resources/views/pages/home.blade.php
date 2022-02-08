@extends('layouts.main-layout')
@section('content')
    <main id="app">
        {{-- sezione guest  --}}
        @guest

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="container">
                <form action="{{route('register')}}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                    </div>
                    <input type="submit" value="Registrati" class="btn btn-primary">
                </form>
            </div>
            <hr class="m-5">
            <div class="container">
                <form action="{{route('login')}}" method="POST">
                    @method('POST')
                    @csrf                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" class="btn btn-outline-primary">
                </form>
            </div>
        @endguest

        @auth
            <div class="container">
                <p class="lead text-center">Go to <a href="{{route('posts')}}">Posts</a></p>
            </div>
        @endauth
    </main>
@endsection