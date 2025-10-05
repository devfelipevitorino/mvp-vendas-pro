@extends('layouts.layout')

@section('title', 'Listagem de Categorias')

@section('content')
<div class="container my-4">
    <h3 class="mb-4">Categorias</h3>

    <div class="list-group">
        @forelse($categories as $category)
        <div class="list-group-item d-flex justify-content-between align-items-center border-bottom border-3 pointer" data-bs-toggle="modal" data-bs-target="#Modal" data-bs-whatever="@getbootstrap">
            <div>
                <h5 class="mb-1">{{ $category->name }}</h5>
            </div>
        </div>
        <!--MODAL-->
        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLabel">Detalhes</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Código:</label>
                                <h5 class="mb-1">{{ $category->id }}</h5>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nome:</label>
                                <h5 class="mb-1">{{ $category->name }}</h5>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
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