@extends('layouts.master')

@section('title')
<title>Edit Widget</title>
@endsection

@section('content')
<ol class="breadcrumb">
	<li><a href="/">Home</a></li>
	<li><a href="/widget">Widgets</a></li>
	<li>
	<a href="/widget/{{ $widget->id }}">{{ $widget->name }}</a>
	</li>
	<li class="active">Edit</li>
</ol>
<h1>Edit Widget</h1>
<hr />

<form class="form" role="form" method="POST" action="{{ url('widget/' . $widget->id)}}">

	<input type="hidden" name="_method" value="patch">

	{{csrf_field()}}
	
	<!-- name Form Input -->

	<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}"></div>

	<label class="form-group{{$errors->has('name') ? 'has-error' : ''}}"></label>	
	<label class="control-label">Widget Name</label>

	<input type="text" class="form-control" name="name" value="{{ $widget->name}}">

	@if( $errors->has('name'))

	<span class="help-block">
		<strong>{{ $errors->first('name')}}</strong>
	</span>
	@endif

	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-lg">
			Edit
		</button>
	</div>	
</form>

@endsection