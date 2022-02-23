@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #dec6dc;" >{{ "Curso: ".$projeto->curso }}</div>

                <div class="card-body">
                    <fieldset disabled>
                        <div class="mb-3">
                            <label class="form-label"></label>
                            <input type="text" class="form-control" value="{{ $projeto->titulo }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"></label>
                            <input type="text" class="form-control" value="{{ $projeto->autor }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"></label>
                            <input type="text" class="form-control" value="{{ $projeto->data_documento }}">
                        </div>
                    </fieldset>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
