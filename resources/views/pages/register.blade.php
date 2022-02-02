@extends('layouts.main-layout')
@section('content')
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
    
@endsection