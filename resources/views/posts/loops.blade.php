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


	<h2> Forelse loop with empty, break, continue example </h2>
	{{-- @each('posts.partials.post', $posts, 'post') --}}
	@forelse($posts as $key => $loop)
		{{-- @break($key == 2) --}}	{{-- break at second element and display all previous element--}}
		@continue($key == 1){{-- skip first element and display other all element--}}
			<div>{{$key}}.<?php echo $posts[$key]['title'] ?></div>
	@empty
		No Post Found!!
	@endforelse

	<h2> Forelse loop with $loop-> example </h2>
	@forelse($posts as $key => $loops)
		@if($loop->even)
			<div>{{$key}}.<?php echo $posts[$key]['title'] ?></div>
		@else
			<div style="background: silver;">{{$key}}.<?php echo $posts[$key]['title'] ?></div>
		@endif
	@empty
		No Post Found!!
	@endforelse


	<h2> For loop example </h2>
	@for($i=0;$i<10;$i++)
		<div>The current value is {{$i}}</div>
	@endfor

	<h2> While example with include file from another folder(Partial Template = ) </h2>
	@include('posts.partials.post')
	{{-- @include('posts.partials.post',[$data])  -- here example for if you want to pass any data to file --}}
	
@endsection


