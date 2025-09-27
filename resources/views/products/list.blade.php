@extends('layouts.layout')

@section('title', 'Listagem de Produtos')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">Produtos</h3>

    <div class="list-group">
        @forelse($products as $product)
        <div class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-1">{{ $product->name }}</h5>
                <p class="mb-1">Preço: R$ {{ number_format($product->price, 2, ',', '.') }}</p>
                <small>Estoque: {{ $product->stock_quantity }}</small>
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