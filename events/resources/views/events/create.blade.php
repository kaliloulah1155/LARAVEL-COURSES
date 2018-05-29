@extends('layouts.app')
@section('content')
	<h1>Créer un évènement</h1>
	
	<form action="{{ route('events.store')}}" method="POST">
		{{ csrf_field()}}
		@include('events._form',['submitButtonText'=>"Créer l'évènement"])	
	</form>
	<p><a href="{{ route('home') }}" class="btn btn-default">Annuler</a></p>
@stop

