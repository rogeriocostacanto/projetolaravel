@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p> Obrigado pelo interesse em nossa instituição!</p>
                    <p>Neste ambiente você poderá sugerir idéias que serão
                       aproveitadas em Projetos de Conclusão de Curso ou mesmo em projetos de extensão, caso o docente
                       entenda que a proposta se alinhe à finalidade pedagógica da atividade prática definida</p>
                    <p>As idéias sugeridas que forem produzidas serão disponibilizadas com a ressalva de que o Campus Formiga
                    não se responsabiliza por custos adicionais de implantação, funcionamento e manutenção do projeto a ser utilizado.
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
