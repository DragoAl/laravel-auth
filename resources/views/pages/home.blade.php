@extends('layouts.main-layout')
@section('content')
    @auth 
        <h1>Teams </h1>
        <ul>
            @foreach ($teams as $team)
                <li>
                    <a href="">{{$team -> team_name}}</a>
                    - {{$team -> sport}}
                </li>

            @endforeach
        </ul>

        
    @else

        <h3>Ciao per visualizzare i nostri contenuti Registrati o effettua il Login</h3>
        
    @endauth
    
    
@endsection