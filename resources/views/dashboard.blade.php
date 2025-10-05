@extends('layouts.layout')

@section('title', 'Dashboard - VendasPro')

@section('content')

<div class="container my-4">

    {{-- Cabeçalho de Boas-vindas --}}
    <div class="section-header text-center mb-5">
        <h1 class="fw-bold">Olá, {{ Auth::user()->name }}</h1>
        <p class="text-muted">Bem-vindo ao seu painel de controle</p>
    </div>

    {{-- KPIs / Resumos --}}
    <div class="row mb-5">
        <div class="col-md-3 col-6">
            <div class="card shadow-sm border-0 rounded-3 p-3 text-center">
                <h6 class="text-muted">Produtos</h6>
                <a style="text-decoration: none; color: black;" href="products/list">
                    <h3 class="fw-bold">{{ $products->count() }}</h3>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card shadow-sm border-0 rounded-3 p-3 text-center">
                <h6 class="text-muted">Vendas</h6>
                <h3 class="fw-bold">0</h3>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card shadow-sm border-0 rounded-3 p-3 text-center">
                <h6 class="text-muted">Clientes</h6>
                <a style="text-decoration: none; color: black;" href="clients/list">
                    <h3 class="fw-bold">{{ $clientsCount }}</h3>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card shadow-sm border-0 rounded-3 p-3 text-center">
                <h6 class="text-muted">Receita</h6>
                <h3 class="fw-bold">R$ 0,00</h3>
            </div>
        </div>
    </div>

    {{-- Produtos Recentes --}}
    <div class="mb-5">
        <h2 class="fw-bold mb-3 text-center">Produtos Recentes</h2>

        @if($products->count())
        <div class="row g-3">
            @foreach($products as $product)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                    @if($product->image)
                    <img src="/image/products/{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                    @else
                    <img src="https://www.svgrepo.com/show/508699/landscape-placeholder.svg" class="card-img-top" alt="{{ $product->name }}">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center mb-2">{{ $product->name }}</h5>
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
            <h5 class="text-muted">Você ainda não possui produtos cadastrados.</h5>
            <a href="products/create" class="btn btn-category">Cadastrar Produto</a>
        </div>
        @endif
    </div>

    {{-- Espaço para Relatórios ou Gráficos futuros --}}
    <div class="mb-5">
        <h2 class="fw-bold mb-3 text-center">Relatórios</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm border-0 p-3 text-center">
                    <h6 class="text-muted mb-2">Vendas por Mês</h6>
                    <div class="p-5 text-muted"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm border-0 p-3 text-center">
                    <h6 class="text-muted mb-2">Produtos mais Vendidos</h6>
                    <div class="p-5 text-muted"></div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection