@extends('layouts.layout')

@section('title', 'Listagem de Fornecedores')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">Fornecedores</h3>

    <div class="list-group">
        @forelse($suppliers as $supplier)
        <div class="list-group-item d-flex justify-content-between align-items-center border-bottom border-3 pointer"
            data-bs-toggle="modal" data-bs-target="#Modal{{ $supplier->id }}">
            <div>
                <h5 class="mb-1">{{ $supplier->name }}</h5>
                <small>Email: {{ $supplier->email ?? 'Não informado' }}</small><br>
                <small>Telefone: {{ $supplier->phone ?? 'Não informado' }}</small>
            </div>
        </div>

        <!-- MODAL -->
        <div class="modal fade" id="Modal{{ $supplier->id }}" tabindex="-1" aria-labelledby="ModalLabel{{ $supplier->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLabel{{ $supplier->id }}">Detalhes do Fornecedor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Código:</strong> {{ $supplier->id }}</p>
                        <p><strong>Nome:</strong> {{ $supplier->name }}</p>
                        <p><strong>Email:</strong> {{ $supplier->email ?? 'Não informado' }}</p>
                        <p><strong>Telefone:</strong> {{ $supplier->phone ?? 'Não informado' }}</p>
                        <p><strong>Endereço:</strong> {{ $supplier->address ?? 'Não informado' }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="list-group-item">
            Nenhum fornecedor cadastrado.
        </div>
        @endforelse
    </div>
</div>
@endsection