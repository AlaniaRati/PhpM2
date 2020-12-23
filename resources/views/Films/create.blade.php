@extends('layouts.app')
@section('content')
<form action="/Films/store" method="POST">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <input name="name" type="text" placeholder="Name" required>
    <input name="budget" type="number" placeholder="Budget" required>
    <input name="info" type="text" placeholder="Information" required>
    <input name="year" type="number" placeholder="Year" required>
    <input name="genre" type="number" placeholder="genre" required>
    <button type="submit">Add</button>
</form>
@endsection
