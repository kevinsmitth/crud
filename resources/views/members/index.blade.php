@extends('layout')

@section('title', 'Página Membros')

@section('content')
<div class="container">
    <div class="text-center">
        <h1 class="text-azul">Membros</h1>
        <table class="table w-50 mx-auto my-3">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
            @foreach($members as $key => $value)
                <tr>
                <th scope="row">{{ $value->id }}</th>
                <td class="text-capitalize">{{ $value->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
