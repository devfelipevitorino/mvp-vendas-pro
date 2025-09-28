@extends('layouts.layout')

@section('title', 'Listagem de Categorias')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">Categorias</h3>

    <div class="list-group">
        @forelse($suppliers as $supplier)
        <div class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-1">{{ $supplier->name }}</h5>
            </div>
        </div>
        @empty
        <div class="list-group-item">
            Nenhum fornecedor cadastrado.
        </div>
        @endforelse
    </div>
</div>
@endsection