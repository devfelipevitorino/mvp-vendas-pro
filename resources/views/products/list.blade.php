@extends('layouts.layout')

@section('title', 'Listagem de Produtos')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">Produtos</h3>

    <div class="list-group">
        @forelse($products as $product)
        <div class="list-group-item d-flex justify-content-between align-items-center border-bottom border-3 pointer"
            data-bs-toggle="modal" data-bs-target="#Modal{{ $product->id }}">
            <div class="d-flex align-items-center gap-3">
                {{-- Imagem do produto --}}
                @if($product->image)
                <img src="{{ asset('image/products/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="img-thumbnail"
                    style="width: 80px; height: 80px; object-fit: cover;">
                @else
                <img src="{{ asset('image/products/placeholder.svg') }}"
                    alt="Sem imagem"
                    class="img-thumbnail"
                    style="width: 80px; height: 80px; object-fit: cover;">
                @endif

                <div>
                    <h5 class="mb-1">{{ $product->name }}</h5>
                    <p class="mb-1">Preço: R$ {{ number_format($product->price, 2, ',', '.') }}</p>
                    <small>Categoria: {{ $product->category->name ?? 'Sem categoria' }}</small><br>
                    <small>Estoque: {{ $product->stock_quantity }}</small>
                </div>
            </div>
        </div>


        <!-- MODAL -->
        <!-- MODAL -->
        <div class="modal fade" id="Modal{{ $product->id }}" tabindex="-1" aria-labelledby="ModalLabel{{ $product->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 shadow-lg rounded-4">

                    <div class="modal-header bg-light border-0">
                        <h1 class="modal-title fs-5 fw-semibold text-red-primary" id="ModalLabel{{ $product->id }}">
                            Detalhes do Produto
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>

                    <div class="modal-body px-4 py-3">
                        <div class="text-center mb-4">
                            @if($product->image)
                            <img src="{{ asset('image/products/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                class="img-fluid rounded-3 border"
                                style="max-height: 200px; object-fit: cover;">
                            @else
                            <img src="{{ asset('image/products/placeholder.svg') }}"
                                alt="Sem imagem"
                                class="img-fluid rounded-3 border"
                                style="max-height: 200px; object-fit: cover;">
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <p class="mb-1"><strong>Código:</strong> {{ $product->id }}</p>
                                <p class="mb-1"><strong>Nome:</strong> {{ $product->name }}</p>
                                <p class="mb-1"><strong>Preço:</strong> R$ {{ number_format($product->price, 2, ',', '.') }}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p class="mb-1"><strong>Categoria:</strong> {{ $product->category->name ?? 'Sem categoria' }}</p>
                                <p class="mb-1"><strong>Estoque:</strong> {{ $product->stock_quantity }}</p>
                                <p class="mb-1"><strong>Observação:</strong> {{ $product->observation ?? 'Sem descrição' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 d-flex justify-content-between px-4 pb-3">
                        <a href="/product/{{ $product->id }}" class="btn btn-outline-primary px-4">
                            <i class="bi bi-pencil-square me-1"></i> Editar Produto
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
            Nenhum produto cadastrado.
        </div>
        @endforelse
    </div>
</div>
@endsection