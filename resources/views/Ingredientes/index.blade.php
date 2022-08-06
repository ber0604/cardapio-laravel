@extends('base.index')

@section('container')
<a class="btn btn-success mb-2" href="/ingrediente/create">Novo ingrediente</a>
<a class="btn btn-primary mb-2" href="/cardapio">Ver Cardápio</a>
<a class="btn btn-primary mb-2" href="/refeicao">Adicionar Refeição</a>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Nome</th>
            <th>calorias</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ingredientes as $ingrediente)
            <tr>
                <td>{{$ingrediente->nome}}</td>
                <td>{{$ingrediente->calorias}}</td>
                <td>
                    <a class="btn btn-warning" href="/ingrediente/{{$ingrediente->id}}/edit">Editar</a>
                    <a class="btn btn-info" href="/ingrediente/{{$ingrediente->id}}/show">Ver</a>
                    <a class="btn btn-danger" href="/ingrediente/{{$ingrediente->id}}/destroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
