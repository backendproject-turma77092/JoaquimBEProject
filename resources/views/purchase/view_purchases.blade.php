@extends('layouts.master')

@section('title')

    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif

@endsection

@section('content')
    <div class="container">
        <h1>Todas as encomendas</h1>

        <form action="{{ route('purchases.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Pesquisar pelo nome do cliente" name="search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Utilizador</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Dia da encomenda</th>
                    <th scope="col">Quantidade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($purchases as $purchase)
                    <tr>
                        <th scope="row">{{ $purchase->id }}</th>
                        <td>{{ $purchase->user->name }}</td>
                        <td>{{ $purchase->product->name }}</td>
                        <td>{{ $purchase->status }}</td>
                        <td>{{ $purchase->created_at }}</td>
                        <td>{{ $purchase->quantity }}</td>

                        <td>
                            <a href="{{ route('purchases.edit', ['id' => $purchase->id]) }}" class="btn btn-primary">Editar</a>
                        </td>

                        <td>
                            <form method="POST" action="{{ route('purchases.delete', ['id' => $purchase->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
