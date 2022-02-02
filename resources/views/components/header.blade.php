<header>
    @auth 
        <h1>Ciao {{Auth::user() -> name}}</h1>
        <a href="{{route('logout')}}">Logout</a>
    @else

        <a href="{{route('log')}}">Login</a>
        <a href="{{route('record')}}">Register</a>
        
    @endauth
    
</header>