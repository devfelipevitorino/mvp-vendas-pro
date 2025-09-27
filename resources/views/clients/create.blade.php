@extends('layouts.layout')

@section('title', 'Cadastrar Cliente')

@section('content')
<div class="container-fluid my-4">
    <a href="/dashboard" class=" btn btn-secondary mb-3">Voltar</a>

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
                </div>

                <div class="row g-3 align-items-end mt-2">
                    <div class="col-md-8">
                        <label class="form-label fw-bold text-red-primary">Nome</label>
                        <input type="text" class="form-control" name="name" placeholder="Informe o nome do cliente" required>
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