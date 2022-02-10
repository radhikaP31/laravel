@extends('layouts.app')

@section('title',$post['title'])

@section('content')

@if($post['is_new'])
	<div>A new blog post! Using if</div>
@elseif(!$post['is_new'])
	<div>A blog post is old! Using elseif</div>
@else
	<div>A blog post is old! Using else</div>
@endif

@unless($post['is_new'])
	<div>It is an old post using Unless</div>
@endunless

<h1>{{ $post['title']}} </h1>
<p>{{ $post['content']}}</p>

@isset($post['has_comments'])
	<div>Check is the post have Comments using isset</div>
@endisset


@endsection