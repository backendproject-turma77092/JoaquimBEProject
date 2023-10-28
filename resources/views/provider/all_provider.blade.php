@extends('layouts.master')

@section('content')
<div class="container">
    <h1>All Providers</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">phone</th>
        <th scope="col">description</th>

        @foreach ($provider as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->description }}</td>
            <td><a href="{{ route('provider.get', $item->id) }}" class="btn btn-info">Ver</a></td>
            <td><a href="{{ route('provider.delete', $item->id) }}" class="btn btn-danger">Delete</a></td>

            </tr>
    @endforeach




        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
@endsection

