@extends('shared.auth')

@section('content')
    <h2 class="mb-3">Recuperar Senha</h2>
    <form class="flex flex-col" action="" method="post">
        <input class="form-input rounded mb-3" required placeholder="E-mail" type="email" name="email">
        <button class="bg-yellow-400 p-2 text-white font-bold text-lg hover:bg-yellow-500" type="submit">Enviar</button>
    </form>
@endsection
