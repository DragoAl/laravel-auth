@extends('layouts.main-layout')
@section('content')
    @auth 
        <h1>ciao {{Auth::user() -> name}}</h1>
        <a href="{{route('logout')}}">Logout</a>
    @else

        <h3>Ti devi loggare</h3>
        
    @endauth
    
    <div>
        <h2>Register</h2>
        <form action="{{route('register')}}" method="POST">
            @method("POST")
            @csrf

            <label for="name">Nome</label>
            <input type="text" name="name"> <br>
            <label for="email">Email</label>
            <input type="text" name="email"> <br>
            <label for="password">Password</label>
            <input type="password" name="password"> <br>
            <label for="password_confirmation">Password Confirm</label>
            <input type="password" name="password_confirmation"> <br>
            <input type="submit" value="Registrati">
            
        </form>

    </div>
    <div>
        <h2>Login</h2>
        <form action="{{route('login')}}" method="POST">
            @method("POST")
            @csrf

            
            <label for="email">Email</label>
            <input type="text" name="email"> <br>
            <label for="password">Password</label>
            <input type="password" name="password"> <br>
            
            <input type="submit" value="Login">
            
        </form>

    </div>




@endsection