@extends('layouts.app')

@section('title','Example of loop')

<div>Example of loop</div>

@section('content')
	<h2> If with foreach loop example </h2>
	@if(count($posts))
		@foreach($posts as $key => $loop)
			<div>{{$key}}.<?php echo $posts[$key]['title'] ?></div>
		@endforeach
	@else
		No Post Found!!
	@endif


	<h2> Forelse loop with empty example </h2>
	<!-- forelse is a combination of foreach and if -->
	@forelse($posts as $key => $loop)
		<div>{{$key}}.<?php echo $posts[$key]['title'] ?></div>
	@empty
		No Post Found!!
	@endforelse
	
@endsection