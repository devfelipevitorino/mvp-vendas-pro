@extends('layouts.layout')

@section('title', 'Cadastrar Cliente')

@section('content')
<div class="container-fluid my-4">
    <a href="/dashboard" class="btn btn-secondary mb-3">Voltar</a>

    <div class="card p-4 shadow-sm" style="border-radius: 0;">
        <h4 class="mb-4 text-red-primary">Cliente - Novo Cadastro</h4>

        <form action="/clients" method="POST">
            @csrf

            <div class="mb-4">
                <h5 class="text-red-primary border-bottom pb-2">Dados Cadastrais</h5>

                <div class="row g-3 align-items-end">
                    <div class="col-md-2">
                        <label class="form-label fw-bold text-red-primary">Código</label>
                        <input type="text" class="form-control" value="{{ $nextId }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold text-red-primary">CPF/CNPJ</label>
                        <input type="text" class="form-control" name="document" placeholder="Digite CPF ou CNPJ" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">Nome</label>
                        <input type="text" class="form-control" name="name" placeholder="Informe o nome do cliente" required>
                    </div>
                </div>

                <div class="row g-3 align-items-end mt-2">
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="cliente@email.com">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-red-primary">Telefone</label>
                        <input type="text" class="form-control" name="phone" placeholder="(00) 00000-0000">
                    </div>
                </div>

                <h5 class="text-red-primary border-bottom pb-2 mt-4">Endereço</h5>
                <div class="row g-3 align-items-end">
                    <div class="col-md-8">
                        <label class="form-label fw-bold text-red-primary">Logradouro</label>
                        <input type="text" class="form-control" name="address" placeholder="Rua, Avenida, etc.">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold text-red-primary">Número</label>
                        <input type="text" class="form-control" name="number" placeholder="Nº">
                    </div>
                </div>

                <div class="row g-3 align-items-end mt-2">
                    <div class="col-md-5">
                        <label class="form-label fw-bold text-red-primary">Bairro</label>
                        <input type="text" class="form-control" name="district" placeholder="Informe o bairro">
                    </div>
                    <div class="col-md-5">
                        <label class="form-label fw-bold text-red-primary">Cidade</label>
                        <input type="text" class="form-control" name="city" placeholder="Informe a cidade">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label fw-bold text-red-primary">UF</label>
                        <input type="text" class="form-control" name="state" maxlength="2" placeholder="UF">
                    </div>
                </div>

                <div class="row g-3 align-items-end mt-2">
                    <div class="col-md-3">
                        <label class="form-label fw-bold text-red-primary">CEP</label>
                        <input type="text" class="form-control" name="cep" placeholder="00000-000">
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-comprar">Cadastrar Cliente</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection