@extends('layouts.layout')

@section('title', 'Listagem de Categorias')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">Categorias</h3>

    <div class="list-group">
        @forelse($categories as $category)
        <div class="list-group-item d-flex justify-content-between align-items-center border-bottom border-3 pointer"
            data-bs-toggle="modal" data-bs-target="#Modal{{ $category->id }}">

            <div>
                <h5 class="mb-1">{{ $category->name }}</h5>
            </div>
        </div>

        <!-- MODAL -->
        <div class="modal fade" id="Modal{{ $category->id }}" tabindex="-1" aria-labelledby="ModalLabel{{ $category->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-lg rounded-4">
                    <div class="modal-header bg-light border-0">
                        <h1 class="modal-title fs-5 fw-semibold" id="ModalLabel{{ $category->id }}">
                            Detalhes da Categoria
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>

                    <div class="modal-body px-4 py-3">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <p class="mb-1"><strong>Código:</strong> {{ $category->id }}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p class="mb-1"><strong>Nome:</strong> {{ $category->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-end px-4 pb-3">
                        <a href="/category/{{ $category->id }}" class="btn btn-outline-primary px-4 me-2">
                            <i class="bi bi-pencil-square me-1"></i> Editar Categoria
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
            Nenhuma categoria cadastrada.
        </div>
        @endforelse
    </div>
</div>
@endsection