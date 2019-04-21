@extends('layouts.app')

@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1>HackerPair Helps You Build Stuff Faster.</h1>
            <h2>Learn, teach, hack, and make friends with developers in your city.</h2>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col mh-100">
            <p>
                @auth
                Welcome {{ Auth::user()->name }} to hackerPair. This is where a list of upcoming events will eventually go.
                @else
                Hello stranger ! <a href="{{ route('login') }}">Login</a>
                or <a href="{{route('register')}}">Register</a> or 
                <a href="/auth/github">Login with GitHub</a>
                @endauth
            </p>
        </div>
    </div>

@endsection
