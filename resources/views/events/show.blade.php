@extends('layouts.app')


@section('jumbotron')
    <div class="jumbotron">
        <div class="container">
            <h1>Events.</h1>
            <h2>Find an event that interests you.</h2>
        </div>
    </div>
@endsection

@section('content')

<h1>{{	$event->name }}</h1>

<p>
	City: {{ $event->city }} <br>
	Venue: {{$event->venue}}
</p>

<h2>Description</h2>
<p>
	{{$event->description}}
</p>

@endsection