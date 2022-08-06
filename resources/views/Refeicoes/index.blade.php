@extends('base.index')

@section('container')
<a class="btn btn-success mb-2" href="/refeicao/create">Nova Refeição</a>
<a class="btn btn-primary mb-2" href="/ingrediente">Adicionar Ingrediente</a>
<a class="btn btn-primary mb-2" href="/cardapio">Ver Cardápio</a>


<table class="table table-dark">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Ingrediente</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($refeicoes as $refeicao)
            <tr>
                <td>{{$refeicao->nome}}</td>
                <td>{{$refeicao->nome_ingrediente}}</td>
                <td>
                    <a class="btn btn-warning" href="/refeicao/{{$refeicao->id}}/edit">Editar</a>
                    <a class="btn btn-info" href="/refeicao/{{$refeicao->id}}/show">Ver</a>
                    <a class="btn btn-danger" href="/refeicao/{{$refeicao->id}}/destroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
