@extends('layouts.master')

@section('title')
    <h2>Alterar Detalhes do Utilizador</h2>
@endsection

@section('content')
    <form method="POST" action="{{ route('user.create') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $ourUser->id }}" id="">

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" value="{{ $ourUser->name }}" class="form-control" id="name" placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Telefone</label>
            <input type="number" name="phone" value="{{ $ourUser->phone }}" class="form-control" id="phone" placeholder="Telefone" required>
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input disabled type="email" name="email" value="{{ $ourUser->email }}" class="form-control" id="email" placeholder="name@example.com" required>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Submeter</button>
    </form>
@endsection
