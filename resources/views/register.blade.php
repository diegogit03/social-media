@extends('shared.auth')

@section('content')
    <h2 class="mb-3">Registrar-se</h2>
    <form class="flex flex-col" action="" method="post">
        <input class="form-input rounded mb-3" required placeholder="Nome" type="text" name="email">
        <input class="form-input rounded mb-3" required placeholder="E-mail" type="email" name="email">
        <input class="form-input rounded mb-3" required placeholder="Senha" type="password" name="password">
        <input class="form-input rounded mb-3" required placeholder="Confirme a Senha" type="password" name="passwordConfirmation">
        <button class="bg-yellow-400 p-2 text-white font-bold text-lg hover:bg-yellow-500" type="submit">Registrar</button>
    </form>
    <a href="{{ route('auth.login') }}">Já tem conta?</a>
@endsection
