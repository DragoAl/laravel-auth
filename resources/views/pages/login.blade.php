@extends('layouts.main-layout')
@section('content')
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