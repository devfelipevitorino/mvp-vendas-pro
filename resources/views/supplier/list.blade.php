@extends('layouts.layout')

@section('title', 'Listagem de Fornecedores')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">Fornecedores</h3>

    <div class="list-group">
        @forelse($suppliers as $supplier)
        <div class="list-group-item d-flex justify-content-between align-items-center border-bottom border-3 pointer"
            data-bs-toggle="modal" data-bs-target="#Modal{{ $supplier->id }}">

            <div class="d-flex align-items-center gap-3">
                <div>
                    <h5 class="mb-1">{{ $supplier->name }}</h5>
                    <p class="mb-1">Email: {{ $supplier->email ?? 'Não informado' }}</p>
                    <p class="mb-1">Telefone: {{ $supplier->phone ?? 'Não informado' }}</p>
                    <small>Endereço: {{ $supplier->address ?? 'Não informado' }}</small>
                </div>
            </div>
        </div>

        <!-- MODAL -->
        <div class="modal fade" id="Modal{{ $supplier->id }}" tabindex="-1" aria-labelledby="ModalLabel{{ $supplier->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-lg rounded-4">
                    <div class="modal-header bg-light border-0">
                        <h1 class="modal-title fs-5 fw-semibold" id="ModalLabel{{ $supplier->id }}">
                            Detalhes do Fornecedor
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body px-4 py-3">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <p class="mb-1"><strong>Código:</strong> {{ $supplier->id }}</p>
                                <p class="mb-1"><strong>Nome:</strong> {{ $supplier->name }}</p>
                                <p class="mb-1"><strong>Email:</strong> {{ $supplier->email ?? 'Não informado' }}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p class="mb-1"><strong>Telefone:</strong> {{ $supplier->phone ?? 'Não informado' }}</p>
                                <p class="mb-1"><strong>Endereço:</strong> {{ $supplier->address ?? 'Não informado' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-end px-4 pb-3">
                        <a href="/supplier/{{ $supplier->id }}" class="btn btn-outline-primary px-4 me-2">
                            <i class="bi bi-pencil-square me-1"></i> Editar Fornecedor
                        </a>
                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">
                            Fechar
                        </button>
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