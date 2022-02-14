@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #ffcb6b;" >{{ $ideia->tipo }}</div>

                <div class="card-body">
                    <fieldset disabled>
                        <div class="mb-3">
                            <label class="form-label">Nome do Projeto</label>
                            <input type="text" class="form-control" value="{{ $ideia->nome }}">
                        </div>
                    </fieldset>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
