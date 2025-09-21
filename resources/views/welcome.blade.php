@extends('layouts.layout')

@section('title', 'VendasPro')

@section('content')
<div class="section-header text-center mb-5">
    <h1 class="fw-bold">Produtos em Destaque</h1>
    <div class="categories d-flex justify-content-center mt-3">
        <button class="btn btn-category active">Todos</button>
        <button class="btn btn-category">Eletrônicos</button>
        <button class="btn btn-category">Roupas</button>
        <button class="btn btn-category">Acessórios</button>
    </div>
</div>

<div class="row g-3">
    @foreach ($products as $product)
    <div class="col-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm p-2">
            @if($product->image)
            <img src="/image/events/{{ $product->image }}"
                class="card-img-top"
                alt="{{ $product->name }}">
            @else
            <img src="https://www.svgrepo.com/show/508699/landscape-placeholder.svg"
                class="card-img-top"
                alt="{{ $product->name }}">
            @endif
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center">{{ $product->name }}</h5>
                <p class="card-description text-truncate mb-2" style="font-size:0.85rem;">
                    {{ $product->description }}
                </p>
                <p class="card-text text-success fw-bold text-center mb-2">
                    R$ {{ $product->price }}
                </p>
                <div class="d-flex gap-2 mt-auto">
                    <a href="#" class="btn btn-comprar flex-grow-1" style="flex: 9;">Comprar</a>
                    <a href="#" class="btn btn-carrinho" style="flex: 1;">
                        <img src="https://cdn-icons-png.flaticon.com/512/4202/4202388.png" alt="carrinho">
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection