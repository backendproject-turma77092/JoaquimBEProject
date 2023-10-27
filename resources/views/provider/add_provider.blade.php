@extends('layouts.master')


@section('title')
    <h2>Add Provider</h2>
@endsection

@section('content')



<form method="POST" action="{{ route('provider.create') }}">
    <form method="POST" action="">
        @csrf



        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" name="name" value="" class="form-control" id="exampleFormControlInput1"
                placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger"> Coloque um nome válido</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">phone</label>
            <input type="text" name="phone" value="" class="form-control" id="exampleFormControlInput1"
                placeholder="" >
            @error('phone')
                <div class="alert alert-danger"> Coloque um phone válido</div>
            @enderror
        </div>



        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">description</label>
            <input type="text" name="description" value="" class="form-control" id="exampleFormControlInput1"
                placeholder="password" >
            @error('description')
                <div class="alert alert-danger"> Coloque notas ou apontamentos sobre este provider</div>
            @enderror
        </div>




        <button class="btn btn-primary" type="submit">Submeter</button>
    </form>

@endsection
