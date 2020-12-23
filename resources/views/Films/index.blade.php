@extends('layouts.app')
@section('content')
<div>
    <a class="btn btn-info" href="/Films/create">add</a>
</div>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Budget</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody id ="tbody">
        @foreach ($films as $f)
            <tr>
                <th>{{ $f->id }}</th>
                <th>{{ $f->name }}</th>
                <td>{{ $f->budget }}</td>
                <td>
                    <a class="btn btn-info" href="/Films/edit/{{ $f->id }}"> Edit </a>
                    <a class="btn btn-danger" href="/Films/destroy/{{ $f->id }}"> Delete </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{-- <script type="application/javascript" defer>
    var load = false;
    function del(url) {
        fetch(url).then(x => {reload()});
    }
    function reload() {
        if(load) return;
        load = true;
        const  = document.getElementById('tbody');
        .innerHTML = "";
        fetch('/all')
            .then(res => res.json())
            .then(data => {
                data.forEach((e) => {
                    _.innerHTML +=
                    console.log(data);
                    `<tr>
                <th>${ $f->id }}</th>
                <th>${ $f->name }}</th>
                <td>${ $f->budget }}</td>
                <td>
                    <a class="btn btn-info" href="/Films/edit/{{ $f->id }}"> Edit </a>
                    <a class="btn btn-danger" href="/Films/destroy/{{ $f->id }}"> Delete </a>
                </td>
            </tr>
                        <tr><th>${e.id}</th><th>${e.name}</th><th>${e.budget}</th>
                        <td><a class="btn btn-info" href="/Films/edit/${e.id}"> Edit </a>
                            <a onclick="del('/Films/destroy/${e.id}')" class="btn btn-danger"> Delete </a>
                        </td></tr>;`
                });
                load = false;
            });
    }
    reload();
</script> --}}
@endsection
