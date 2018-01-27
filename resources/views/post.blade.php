@extends('Centaur::layout')

@section('title')
{{ $post->title }}
@endsection

@section('content')
<div class="btn-toolbar">
	<a href="{{ route('index') }}" class="btn btn-primary">
		Go back
	</a>
</div>
<div class="page-header">
	<h1>{{ $post->title }}</h1>
	<small>
		<span class="glyphicon glyphicon-user"></span> Author: {{ $post->user->email }}
		<br>
		<span class="glyphicon glyphicon-time"></span> Posted: {{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}
	</small
</div>
<div class="row">
	<div class="col-sm-12">
		{!! $post->content !!}
	</div>
</div>
@stop