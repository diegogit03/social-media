@extends('shared.auth')

@section('content')
    <h2 class="mb-3">Entrar</h2>
    <form class="flex flex-col" action="" method="post">
        <input class="form-input rounded mb-3" required placeholder="E-mail" type="email" name="email">
        <input class="form-input rounded mb-3" required placeholder="Senha" type="password" name="password">
        <button class="bg-yellow-400 p-2 text-white font-bold text-lg hover:bg-yellow-500" type="submit">Entrar</button>
    </form>
    <a href="{{ route('auth.forgot') }}">Esqueceu a senha?</a>
    <div class="h-0.5 bg-gray-200 mb-5 mt-3"></div>
    <a style="text-decoration: none" href="{{ route('auth.register') }}" class="bg-orange-400 w-full p-2 text-white font-bold text-lg hover:bg-orange-500">Criar nova conta</a>
@endsection
