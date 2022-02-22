@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header" style="background-color: #ffcb6b;" >Acervo de projetos academicos<a href="{{ route('projeto.create')}}" class="position-absolute end-0 m-1 pb-2" ><i class="fa fa-file"></i> Novo</a></div>

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
                                
                            @endforeach
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
