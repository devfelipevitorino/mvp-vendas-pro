@extends('layouts.layout')

@section('title', 'Listagem de Produtos')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">Produtos</h3>

    <div class="list-group">
        @forelse($products as $product)
        <div class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                {{-- Imagem do produto --}}
                @if($product->image)
                <img src="{{ asset('image/products/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="img-thumbnail"
                    style="width: 80px; height: 80px; object-fit: cover;">
                @else
                <img src="/public/image/products/placeholder.svg"
                    alt="Sem imagem"
                    class="img-thumbnail">
                @endif

                <div>
                    <h5 class="mb-1">{{ $product->name }}</h5>
                    <p class="mb-1">Preço: R$ {{ number_format($product->price, 2, ',', '.') }}</p>
                    <small>Categoria: {{ $product->category->name ?? 'Sem categoria' }}</small><br>
                    <small>Estoque: {{ $product->stock_quantity }}</small>
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