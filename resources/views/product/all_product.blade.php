@extends('layouts.master')

@section('content')
<div class="container">
    <h1>All Products</h1>



    </form>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">preço</th>
        <th scope="col">type</th>
        <th scope="col">quantity</th>
        <th scope="col">note</th>


        @foreach ($product as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->note }}</td>


            <td><a href="{{ route('product.get', $item->id) }}" class="btn btn-info">Ver</a></td>
            <td><a href="{{ route('product.delete', $item->id) }}" class="btn btn-danger">Delete</a></td>

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

