@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #dec6dc;" >Editar </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('projeto.update', ['projeto'=> $projeto->id]) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                            <label class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo" value="{{ $projeto->titulo }}">
                            </div>
                            <div class="mb-3">
                            <label  class="form-label">Autor</label>
                            <input type="text" class="form-control" name="autor" value="{{ $projeto->autor }}">
                            </div>
                            <div class="mb-3">
                            <label  class="form-label">Data do documento</label>
                            <input type="text" class="form-control" name="data_documento" value="{{ $projeto->data_documento }}">
                            </div>
                            <div class="mb-3">
                            <label  class="form-label">Curso</label>
                            <input type="text" class="form-control" name="curso" value="{{ $projeto->curso }}">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Descricao</label>
                            <textarea class="form-control" rows="8" name="descricao" value="{{ $projeto->descricao }}"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Atualizar</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
