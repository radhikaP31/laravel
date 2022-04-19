@php $done = false @endphp
@while(!$done)
	<div>I am not done</div>
	@php 
		if($done == false ) $done = true
	@endphp
	<div>After my value change. I am done</div>
@endwhile
{{-- <div>{{$key}}.{{$posts[$key]['title']}}</div> --}}