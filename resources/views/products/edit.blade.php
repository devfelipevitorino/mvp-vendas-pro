@extends('layouts.layout')

@section('title', 'Cadastrar Produto')

@section('content')

<style>
    h4,
    h5 {
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0;
        box-shadow: none;
    }
</style>

<div class="container-fluid my-4">
    <a href="/dashboard" class=" btn btn-secondary mb-3">Voltar</a>
    <div class="card p-4" style="border-radius: 0; box-shadow: 0 4px 12px rgba(0,0,0,.05);">
        <h4 class="mb-4 text-red-primary">Produto - Novo Cadastro</h4>

        <form action="/product/{{ $product-> id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <h5 class="text-red-primary">Dados Cadastrais</h5>
                <div class="row g-3 align-items-end">

                    <div class="col-md-2">
                        <label class="form-label fw-bold text-red-primary">Código</label>
                        <input type="text" class="form-control" value="{{ $product->id }}" readonly>
                    </div>


                    <div class="col-md-4">
                        <label class="form-label fw-bold text-red-primary">Referência</label>
                        <input type="text" class="form-control" name="reference" value="{{ $product->reference }}" required>
                    </div>


                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">Código de Barras</label>
                        <input type="number" class="form-control" name="barcode" value="{{ $product->barcode }}" required>
                    </div>
                </div>

                <div class="row g-3 align-items-end mt-2">

                    <div class="col-md-8">
                        <label class="form-label fw-bold text-red-primary">Descrição</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
                    </div>


                    <div class="col-md-4">
                        <label class="form-label fw-bold text-red-primary">Categoria</label>
                        <select class="form-select" name="category_id" required>
                            <option value="">Selecione uma categoria</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>


                </div>

                <div class="row g-3 align-items-end mt-2">
                    <div class="col-md-3">
                        <label class="form-label fw-bold text-red-primary">Preço (R$)</label>
                        <input type="number" class="form-control" step="0.01" name="price" value="{{ $product->price }}" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-bold text-red-primary">Quantidade em Estoque</label>
                        <input type="number" class="form-control" name="stock" value="{{ $product->stock_quantity }}" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-bold text-red-primary">Fornecedor</label>
                        <select class="form-select" name="supplier_id">
                            @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->id }}"
                                {{ $product->suppliers->contains($supplier->id) ? 'selected' : '' }}>
                                {{ $supplier->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Imagem do Evento</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">Observação</label>
                        <textarea class="form-control" name="observation" value="{{ $product->observation }}"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">Informações Adicionais</label>
                        <textarea class="form-control" name="add_info" value="{{ $product->add_info }}"></textarea>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-comprar">Atualizar Produto</button>
            </div>
        </form>
    </div>
</div>

@endsection