@extends('layouts.layout')

@section('title', 'Cadastrar Fornecedor')

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
        <h4 class="mb-4 text-red-primary">Fornecedor - Novo Cadastro</h4>

        <form action="/suppliers" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <h5 class="text-red-primary">Dados Cadastrais</h5>
                <div class="row g-3 align-items-end">
                    <div class="col-md-2">
                        <label class="form-label fw-bold text-red-primary">Código</label>
                        <input type="text" class="form-control" value="{{ $nextId }}" readonly>
                    </div>
                </div>

                <div class="row g-3 align-items-end mt-2">

                    <div class="col-md-8">
                        <label class="form-label fw-bold text-red-primary">Nome</label>
                        <input type="text" class="form-control" name="name" placeholder="Informe o nome do fornecedor" required>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-comprar">Cadastrar Fornecedor</button>
                    </div>
        </form>
    </div>
</div>

@endsection