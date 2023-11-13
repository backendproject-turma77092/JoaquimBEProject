<!-- resources/views/purchase/edit_purchase_form.blade.php -->
@extends('layouts.master')

@section('title')
    <h2>Edit Purchase</h2>
@endsection

@section('content')
    <form method="POST" action="{{ route('purchases.update', ['id' => $purchase->id]) }}">
        @csrf
        @method('PUT')

        <div class="container">
            <div class="mb-3">
                <label for="user_id" class="form-label">Cliente</label>
                <select name="user_id" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id == $purchase->user_id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="product_id" class="form-label">Produto</label>
                <select name="product_id" class="form-control" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $product->id == $purchase->product_id ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantidade</label>
                <input type="number" name="quantity" value="{{ $purchase->quantity }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Estado</label>
                <select name="status" class="form-control" required>
                    <option value="pending" @if($purchase->status == 'pending') selected @endif>Pending</option>
                    <option value="close" @if($purchase->status == 'close') selected @endif>Close</option>
                </select>
            </div>

            <button class="btn btn-primary" type="submit">Atualizar Compra</button>
        </div>
    </form>
@endsection
