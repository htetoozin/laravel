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
@if($widgets->count() > 0)
<table class="table table-hover table-bordered table-striped">
	<thead>
		<th>Id</th>
		<th>Name</th>
		<th>Date Created</th>
	</thead>
	<tbody>
		@foreach($widgets as $widget)
		<tr>
			<td>{{ $widget->id }}</td>
			<td><a href="/widget/{{ $widget->id }}-{{ $widget->slug }}">
				{{ $widget->name }}
				</a>
			</td>
			<td>{{ $widget->created_at }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
Sorry, no Widgets
@endif
{{ $widgets->links() }}
<div>
	<a href="/widget/create">
		<button type="button" class="btn btn-lg btn-primary">Create New</button>
	</a>
</div>

@endsection