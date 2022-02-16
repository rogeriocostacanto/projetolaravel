@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header" style="background-color: #dec6dc;" >Acervo de projetos</div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Area</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Aluno</th>
                            <th scope="col">data</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> <a href="#">Editar</td>
                                <td> <a href="#">Excluir</td>
                                <td>
                            </tr>
                            
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
