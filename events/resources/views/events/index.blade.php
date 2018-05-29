@extends('../layouts.app')
@section('content')
	<h1>({{$events->count()}}) {{ str_plural('Evènement',$events->count())}} </h1>
	{{--<a href="{{ route('events.create') }}">Créez un évenement</a>--}}
	@if(!$events->isEmpty())
		<ul>
			@foreach($events as $event)
			 <li><a href="{{ route('events.show',$event) }}">{{$event->title}}</a></li>
			@endforeach
		</ul>
		{{$events->links()}}
		<h3>Vous avez <span class="badge badge-info">{{$events->total()}} </span>{{ str_plural('évènement',$events->count())}} en cours </h3>

	@else
      <p>Aucun evenement pour le moment.</p>
	@endif
	
@stop