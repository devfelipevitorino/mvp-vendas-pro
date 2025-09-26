@extends('layouts.layout')

@section('title', 'Dashboard - VendasPro')

@section('content')

<div class="section-header text-center mb-5">
    <h1 class="fw-bold">Olá, {{ Auth::user()->name }}</h1>
    <p class="text-muted">Bem-vindo ao seu painel de controle</p>

    <a href="products/create" class="btn btn-comprar mt-3">
        Cadastrar Novo Produto
    </a>
</div>

<h2 class="fw-bold mb-3">Produtos Recentes</h2>

@if($products->count())
<div class="row g-3">
    @foreach($products as $product)
    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm p-2">
            @if($product->image)
            <img src="/image/products/{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
            @else
            <img src="https://www.svgrepo.com/show/508699/landscape-placeholder.svg" class="card-img-top" alt="{{ $product->name }}">
            @endif
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center">{{ $product->name }}</h5>
                <p class="card-description text-truncate mb-2" style="font-size:0.85rem;">
                    {{ $product->description }}
                </p>
                <p class="card-text text-success fw-bold text-center mb-2">
                    R$ {{ number_format($product->price, 2, ',', '.') }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@else
<div class="text-center my-5">
    <h3>Você ainda não possui produtos cadastrados.</h3>
</div>
@endif

@endsection