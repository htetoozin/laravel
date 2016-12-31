
@extends('layouts.master')
	@section('title')
		<title>Widgets</title>
	@endsection
@section('content')
	<ol class='breadcrumb'>
		<li><a href='/'>Home</a></li>
		<li class='active'>Widgets</li>
	</ol>
	<h2>Widgets</h2>
	<hr/>
	<widget-grid></widget-grid>
	<div> <a href="/widget/create">
		<button type="button" class="btn btn-lg btn-primary">
			Create New
		</button></a>
	</div>
@endsection
