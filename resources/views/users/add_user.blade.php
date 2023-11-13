@extends('layouts.master')

@section('title')
    <h2>Adicionar Cliente</h2>
@endsection

@section('content')
    <form method="POST" action="{{ route('user.create') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="name@example.com" required>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirmar Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="confirm_password" placeholder="Confirmar Password" required>
            @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Telefone</label>
            <input type="number" name="phone" value="{{ old('phone') }}" class="form-control" id="phone" placeholder="Telefone" required>
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Submeter</button>
    </form>

    <script>
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("As passwords não coincidem");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
@endsection
