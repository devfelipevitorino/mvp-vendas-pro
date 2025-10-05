@extends('layouts.layout')

@section('title', 'Listagem de Clientes')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">Clientes</h3>

    <div class="list-group">
        @forelse($clients as $client)
        <div class="list-group-item d-flex justify-content-between align-items-center border-bottom border-3 pointer"
            data-bs-toggle="modal" data-bs-target="#Modal{{ $client->id }}">
            <div>
                <h5 class="mb-1">{{ $client->name }}</h5>
                <small>Email: {{ $client->email ?? 'Não informado' }}</small><br>
                <small>Telefone: {{ $client->phone ?? 'Não informado' }}</small>
            </div>
        </div>

        <!-- MODAL -->
        <div class="modal fade" id="Modal{{ $client->id }}" tabindex="-1" aria-labelledby="ModalLabel{{ $client->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLabel{{ $client->id }}">Detalhes do Cliente</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Código:</strong> {{ $client->id }}</p>
                        <p><strong>Nome:</strong> {{ $client->name }}</p>
                        <p><strong>Email:</strong> {{ $client->email ?? 'Não informado' }}</p>
                        <p><strong>Telefone:</strong> {{ $client->phone ?? 'Não informado' }}</p>
                        <p><strong>Endereço:</strong> {{ $client->address ?? 'Não informado' }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
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