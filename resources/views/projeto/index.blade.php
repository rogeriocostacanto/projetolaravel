@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header" style="background-color: #dec6dc;" >Acervo de projetos academicos<a href="{{ route('projeto.create')}}" class="position-absolute end-0 m-1 pb-2" ><i class="fa fa-file"></i> Novo</a></div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Título</th>
                            <th scope="col">Autor</th>
                            <th scope="col">data do documento</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($projetos as $key => $i )
                            <tr>
                                <th scope="row">{{ $i['id'] }}</th>
                                <td>{{ $i['titulo'] }}</td>
                                <td>{{ $i['autor'] }}</td>
                                <td>{{ $i['data_documento'] }}</td>
                                <td> <a href="{{ route('projeto.edit', $i['id']) }}">Editar</td>
                                <td>
                                  <form id="form_{{$i['id']}}" method="post" action="{{ route('projeto.destroy', ['projeto' => $i['id']]) }}">
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
                            <li class="page-item"><a class="page-link" href="{{ $projetos->previousPageUrl() }}">Voltar</a></li>

                            @for($j = 1; $j <= $projetos->lastPage(); $j++)
                                <li class="page-item {{ $projetos->currentPage() == $j ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $projetos->url($j) }}">{{ $j }}</a>
                                </li>
                            @endfor

                            <li class="page-item"><a class="page-link" href="{{ $projetos->nextPageUrl() }}">Avançar</a></li>
                        </ul>
                    </nav>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
