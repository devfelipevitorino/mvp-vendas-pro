@extends('layouts.layout')

@section('title', 'Editar Categoria')

@section('content')
<div class="container-fluid my-4">
    <a href="/dashboard" class="btn btn-secondary mb-3">Voltar</a>

    <div class="card p-4 shadow-sm" style="border-radius: 0;">
        <h4 class="mb-4 text-red-primary">Categoria - Editar Cadastro</h4>

        <form action="/category/{{ $category->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <h5 class="text-red-primary border-bottom pb-2">Dados Cadastrais</h5>

                <div class="row g-3 align-items-end">
                    <div class="col-md-2">
                        <label class="form-label fw-bold text-red-primary">Código</label>
                        <input type="text" class="form-control" value="{{ $category->id }}" readonly>
                    </div>

                    <div class="col-md-10">
                        <label class="form-label fw-bold text-red-primary">Nome</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}" required>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-comprar">Editar Categoria</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection