@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Clientes</h1>


    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>

    @endif


<table class="table">
    <thead>
      <tr></tr>
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
            <td><a href="{{ route('user.get', $item->id) }}" class="btn btn-info">Editar</a></td>
            <td><a href="{{ route('user.delete', $item->id) }}" class="btn btn-danger">Apagar</a></td>
            </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection

