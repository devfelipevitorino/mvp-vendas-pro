@extends('layouts.layout')

@section('title', 'Listagem de Categorias')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">Clientes</h3>

    <div class="list-group">
        @forelse($clients as $client)
        <div class="list-group-item d-flex justify-content-between align-items-center border-bottom border-3">
            <div>
                <h5 class="mb-1">{{ $client->name }}</h5>
            </div>
        </div>
        @empty
        <div class="list-group-item">
            Nenhum cliente cadastrado.
        </div>
        @endforelse
    </div>
</div>
@endsection