@extends('layout')
@section('content')
<h2>Users Table</h2>
@foreach($users as $user)
<p>{{ $user->name }} , {{ $user->email }}</p>
@endforeach

@stop
