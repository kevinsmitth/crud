@extends('layout')
@section('title', 'Página Home')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="text-center">
        <h1 class="text-azul">Bem Vindo(a)!</h1>
        <p class="text-capitalize">
            @if($user)
                Olá, {{ $user->name }}!
            @endif
        </p>
    </div>
</div>

@endsection

@section('js')

@endsection
