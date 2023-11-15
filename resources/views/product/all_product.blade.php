@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Todos os produtos</h1>


    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>

    @endif

    <form action="{{ route('product.search') }}" method="GET" class="mb-4">
        <div class="form-group">
            <label for="search">Procura por produto:</label>
            <input type="text" name="search" id="search" class="form-control" placeholder="Coloque o nome do produto">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">preço</th>
                    <th scope="col">tipo</th>
                    <th scope="col">quantidade</th>
                    <th scope="col">nota</th>
                    <th scope="col">Fornecedor</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->type }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->note }}</td>
                        <td>
                            @foreach($product->providers as $provider)
                            {{ $provider->name }}
                        @endforeach
                        </td>
                        <td><a href="{{ route('product.get', $product->id) }}" class="btn btn-info">Editar</a></td>
                        <td><a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger">Apagar</a></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection




