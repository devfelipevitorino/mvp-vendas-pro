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
    <div class="card p-4" style="border-radius: 0; box-shadow: 0 4px 12px rgba(0,0,0,.05);">
        <h4 class="mb-4 text-red-primary">Produto - Novo Cadastro</h4>

        <form action="/products" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <h5 class="text-red-primary">Dados Cadastrais</h5>
                <div class="row g-3 align-items-end">

                    <div class="col-md-2">
                        <label class="form-label fw-bold text-red-primary">Código</label>
                        <input type="text" class="form-control" value="{{ $nextId }}" readonly>
                    </div>


                    <div class="col-md-4">
                        <label class="form-label fw-bold text-red-primary">Referência</label>
                        <input type="text" class="form-control" name="reference" placeholder="Ex: 900000000004" required>
                    </div>


                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">Código de Barras</label>
                        <input type="number" class="form-control" name="barcode" required>
                    </div>
                </div>

                <div class="row g-3 align-items-end mt-2">

                    <div class="col-md-8">
                        <label class="form-label fw-bold text-red-primary">Descrição</label>
                        <input type="text" class="form-control" name="name" placeholder="Ex: BOTA PRETA DE COURO" required>
                    </div>


                    <div class="col-md-4">
                        <label class="form-label fw-bold text-red-primary">Categoria</label>
                        <select class="form-select" name="category" required>
                            <option value="">Selecione</option>
                            <option value="calcados">Calçados</option>
                            <option value="eletronicos">Eletrônicos</option>
                            <option value="moveis">Móveis</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3 align-items-end mt-2">
                    <div class="col-md-3">
                        <label class="form-label fw-bold text-red-primary">Preço (R$)</label>
                        <input type="number" class="form-control" step="0.01" name="price" placeholder="Ex: 199,99" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-bold text-red-primary">Quantidade em Estoque</label>
                        <input type="number" class="form-control" name="stock" placeholder="Ex: 10" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">Fabricante</label>
                        <input type="text" class="form-control" name="manufacturer" placeholder="Fabricante" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Imagem do Evento</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">Observação</label>
                        <textarea class="form-control" name="observation"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">Informações Adicionais</label>
                        <textarea class="form-control" name="add_info"></textarea>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-comprar">Salvar Produto</button>
            </div>
        </form>
    </div>
</div>

@endsection