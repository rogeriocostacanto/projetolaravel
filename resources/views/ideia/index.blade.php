@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Propostas para projetos</div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">data da proposta</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($ideias as $key => $i )
                            <tr>
                                <th scope="row">{{ $i['id']}}</th>
                                <td>{{ $i['nome']}}</td>
                                <td>{{ $i['tipo']}}</td>
                                <td>{{ date('d/m/Y', strtotime($i['updated_at'])) }}</td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
