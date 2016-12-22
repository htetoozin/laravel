@extends('layouts.master')
@section('title')
<title>The Admin Page</title>
@endsection
@section('content')
@if(Auth::user()->isAdmin())
<li><a href="/admin">Admin</a></li>
@endif
@include('admin.grid')
@endsection