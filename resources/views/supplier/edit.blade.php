@extends('layouts.layout')

@section('title', 'Cadastrar Fornecedor')

@section('content')
<div class="container-fluid my-4">
    <a href="/dashboard" class="btn btn-secondary mb-3">Voltar</a>

    <div class="card p-4 shadow-sm" style="border-radius: 0;">
        <h4 class="mb-4 text-red-primary">Fornecedor - Editar Cadastro</h4>

        <form action="/supplier/{{ $supplier->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <h5 class="text-red-primary border-bottom pb-2">Dados Cadastrais</h5>

                <div class="row g-3 align-items-end">
                    <div class="col-md-2">
                        <label class="form-label fw-bold text-red-primary">Código</label>
                        <input type="text" class="form-control" value="{{ $supplier->id }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold text-red-primary">CNPJ</label>
                        <input type="text" class="form-control" name="cnpj" value="{{ $supplier->cnpj }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">Nome</label>
                        <input type="text" class="form-control" name="name" value="{{ $supplier->name }}">
                    </div>
                </div>

                <div class="row g-3 align-items-end mt-2">
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">E-mail</label>
                        <input type="email" class="form-control" name="email" value="{{ $supplier->email }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">Telefone</label>
                        <input type="number" class="form-control" name="phone" value="{{ $supplier->phone }}">
                    </div>
                </div>

                <h5 class="text-red-primary border-bottom pb-2 mt-4">Endereço</h5>
                <div class="row g-3 align-items-end">
                    <div class="col-md-8">
                        <label class="form-label fw-bold text-red-primary">Logradouro</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $supplier->address }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold text-red-primary">Número</label>
                        <input type="text" class="form-control" name="number" value="{{ $supplier->number_address }}">
                    </div>
                </div>

                <div class="row g-3 align-items-end mt-2">
                    <div class="col-md-5">
                        <label class="form-label fw-bold text-red-primary">Bairro</label>
                        <input type="text" class="form-control" id="neighborhood" name="neighborhood" value="{{ $supplier->neighborhood }}">
                    </div>
                    <div class="col-md-5">
                        <label class="form-label fw-bold text-red-primary">Cidade</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ $supplier->city }}">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label fw-bold text-red-primary">UF</label>
                        <input type="text" class="form-control" id="uf" name="uf" maxlength="2" value="{{ $supplier->uf }}">
                    </div>
                </div>


                <div class="row g-3 align-items-end mt-2">
                    <div class="col-md-3">
                        <label class="form-label fw-bold text-red-primary">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" value="{{ $supplier->cep }}">
                    </div>

                    <div class="col-md-2">
                        <button type="button" class="btn btn-comprar w-90" onclick="buscarCep()">Buscar CEP</button>
                    </div>
                </div>


                <div class="mt-4">
                    <button type="submit" class="btn btn-comprar">Editar Fornecedor</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('js/cep.js') }}"></script>
@endsection