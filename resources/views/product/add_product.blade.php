@extends('layouts.master')

@section('content')
    <h2>Adicionar Producto</h2>
    <form method="POST" action="{{ route('product.create') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" name="type" class="form-control" id="type" placeholder="Type">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Preço</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Price">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantidade</label>
            <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Quantity">
        </div>

        <div class="mb-3">
            <label for="note" class="form-label">Nota</label>
            <input type="text" name="note" class="form-control" id="note" placeholder="Note">
        </div>


        @if(isset($providers) && !empty($providers))
        <div class="mb-3">
            <label for="provider_id" class="form-label">Provider</label>
            <select name="provider_id" class="form-control" id="provider_id">
                @foreach($providers as $provider)
                    <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                @endforeach
            </select>
        </div>
    @endif




        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
