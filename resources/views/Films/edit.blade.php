@extends('layouts.app')
@section('content')
<form action="/Films/update/{{ $f->id }}" method="POST">
	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <input value="{{ $f->name }}" name="name" type="text" placeholder="Name" required>
    <input value="{{ $f->year }}" name="year" type="number" placeholder="Year" required>
	<input value="{{ $f->budget }}" name="budget" type="number" placeholder="Budget" required>
    <input value="{{ $f->info }}" name="info" type="text" placeholder="Information" required>
    <input value="{{ $f->genre }}" name="genre" type="text" placeholder="Genre" required>
	<button type="submit">Edit</button>
</form>
@endsection
