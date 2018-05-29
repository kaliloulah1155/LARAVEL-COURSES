@extends('layouts.app')
@section('content')
	<h1>Editer l'évènement</h1>
	<form action="{{ route('events.update',$event)}}" method="POST">
		{{ csrf_field()}}
		{{method_field('PUT')}}
        @include('events._form',['submitButtonText'=>"Modifier l'évènement"])	
	</form>
	<p><a href="{{ route('home') }}" class="btn btn-default">Annuler</a></p>
@stop
