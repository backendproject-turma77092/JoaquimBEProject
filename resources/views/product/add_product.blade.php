@extends('layouts.master')

@section('content')
    <h2>Add Product</h2>
    <form method="POST" action="{{ route('product.create') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="type" placeholder="Type">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Price">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantity">
        </div>

        <div class="mb-3">
            <label for="note" class="form-label">Note</label>
            <input type="text" name="note" class="form-control" id="note" placeholder="Note">
        </div>








        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
