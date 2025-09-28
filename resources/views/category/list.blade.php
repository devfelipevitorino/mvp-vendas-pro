@extends('layouts.layout')

@section('title', 'Listagem de Categorias')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">Categorias</h3>

    <div class="list-group">
        @forelse($categories as $category)
        <div class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-1">{{ $category->name }}</h5>
            </div>
        </div>
        @empty
        <div class="list-group-item">
            Nenhuma categoria cadastrada.
        </div>
        @endforelse
    </div>
</div>
@endsection