@extends('layouts.master')

@section('content')
<div class="container">
    <h1>All users</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td><a href="{{ route('user.get', $item->id) }}" class="btn btn-info">Ver</a></td>
            <td><a href="" class="btn btn-danger">Delete</a></td>
            </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection

