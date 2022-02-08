<header>
    <div class="container p-5">
        @auth                
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <a href="{{route('logout')}}" class="btn btn-outline-secondary">LOGOUT</a>
                </div>
            </div>
        @endauth

        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1>
                    <a class="text-dark" href="{{route('home')}}">BOOLPRESS</a>
                </h1>
            </div>
        </div>
        @auth
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h3>Welcome {{Auth::user()->name}}!</h3>
            </div>
        </div>
        @endauth
    </div>
</header>