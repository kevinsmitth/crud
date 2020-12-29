@extends('layout')

@section('title', 'Página Home')

@section('content')
<div class="container">
    <div class="text-center">
        <h1 class="text-azul">Bem Vindo(a)!</h1>
        <p>tamo ai na atividade.</p>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
