@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #dec6dc;" >Adicionar projeto</div>

                <div class="card-body">
                    <form action="{{ route('projeto.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Título</label>
                                <input type="text" class="form-control" name="titulo">
                            </div>                            
                            <div class="mb-3">
                                <label  class="form-label">Autor</label>
                                <input type="text" class="form-control" name="autor">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Data do documento</label>
                                <input type="text" class="form-control" name="data_documento">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Curso</label>
                                <input type="text" class="form-control" name="curso">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Descrição do projeto</label>
                                <textarea class="form-control" rows="8" name="descricao"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Arquivo</label>
                                <input type="file" class="form-control"  name="arquivo">
                            </div>

                            <button type="submit" class="btn btn-secondary">Cadastrar</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
