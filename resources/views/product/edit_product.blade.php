@extends('layouts.master')

@section('title')
    <h2>Editar Producto</h2>
@endsection

@section('content')
    <form method="POST" action="{{ route('product.update', ['id' => $ourProduct->id]) }}">
        @csrf
        @method('PUT')

        <div class="container">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" name="name" value="{{ $ourProduct->name }}" class="form-control" placeholder="Nome" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">tipo</label>
                <input type="text" name="type" value="{{ $ourProduct->type }}" class="form-control" placeholder="type" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">preço</label>
                <input type="text" name="price" value="{{ $ourProduct->price }}" class="form-control" placeholder="price" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">quantity</label>
                <input type="text" name="quantity" value="{{ $ourProduct->quantity }}" class="form-control" placeholder="Quantity" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nota</label>
                <input type="text" name="note" value="{{ $ourProduct->note }}" class="form-control" placeholder="Note" required>
            </div>

            <div class="mb-3">
                <label for="provider_id" class="form-label">Fornecedor</label>
                <select name="provider_id" class="form-control" id="provider_id">
                    @foreach($providers as $provider)
                        <option value="{{ $provider->id }}" {{ $ourProduct->provider_id == $provider->id ? 'selected' : '' }}>
                            {{ $provider->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Atualizar</button>
        </div>
    </form>
@endsection
