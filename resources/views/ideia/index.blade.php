@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header" style="background-color: #ffcb6b;" >Propostas para projetos<a href="{{ route('ideia.create')}}" class="position-absolute end-0 m-1 pb-2" ><i class="fa fa-file"></i> Novo</a></div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">data da proposta</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($ideias as $key => $i )
                            <tr>
                                <th scope="row">{{ $i['id']}}</th>
                                <td>{{ $i['nome']}}</td>
                                <td>{{ $i['tipo']}}</td>
                                <td>{{ date('d/m/Y', strtotime($i['updated_at'])) }}</td>
                                <td> <a href="{{ route('ideia.edit', $i['id']) }}">Editar</td>
                                <td>
                                  <form id="form_{{$i['id']}}" method="post" action="{{ route('ideia.destroy', [$i['id'] ]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <a href="#" onclick="document.getElementById('form_{{$i['id'] }}').submit()">Excluir</a>
                                  </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <nav>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="{{ $ideias->previousPageUrl() }}">Voltar</a></li>

                            @for($j = 1; $j <= $ideias->lastPage(); $j++)
                                <li class="page-item {{ $ideias->currentPage() == $j ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $ideias->url($j) }}">{{ $j }}</a>
                                </li>
                            @endfor

                            <li class="page-item"><a class="page-link" href="{{ $ideias->nextPageUrl() }}">Avançar</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
