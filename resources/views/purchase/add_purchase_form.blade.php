@extends('layouts.master')

@section('title')
    <h2>Criar encomenda</h2>
@endsection

@section('content')
    <form method="POST" action="{{ route('purchases.create') }}">
        @csrf

        <div class="container">
            <div class="mb-3">
                <label for="user_id" class="form-label">Cliente</label>
                <select name="user_id" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="product_id" class="form-label">Produto</label>
                <select name="product_id" class="form-control" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantidade</label>
                <input type="number" name="quantity" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Estado</label>
                <select name="status" class="form-control" required>
                    <option value="pending">Pending</option>
                    <option value="close">Close</option>
                </select>
            </div>

            <button class="btn btn-primary" type="submit">Adicionar Compra</button>
        </div>
    </form>
@endsection
