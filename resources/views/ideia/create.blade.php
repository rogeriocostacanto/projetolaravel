@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sugerir ideia para um projeto</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ideia.store')}}">
                            @csrf

                            <div class="mb-3">
                            <label class="form-label">Nome do Projeto</label>
                            <input type="text" class="form-control" name="nome">
                            </div>
                            <div class="mb-3">
                            <label  class="form-label">Tipo de Projeto</label>
                            <input type="text" class="form-control" name="tipo">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Descrição do projeto</label>
                            <textarea class="form-control" rows="8" name="descricao"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Cadastrar</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
