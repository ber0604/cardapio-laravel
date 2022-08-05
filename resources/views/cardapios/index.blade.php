@extends('base.index')

@section('container')
<a class="btn btn-success mb-2" href="/cardapio/create">Novo cardapio</a>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Data da Refeição</th>
            <th>Tipo da Refeição</th>
            <th>Refeições</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cardapios as $cardapio)
            <tr>
                <td>{{$cardapio->dtref}}</td>
                <td>{{$cardapio->tipo_refeicao}}</td>
                <td>{{$cardapio->nome_refeicao}}</td>

                <td>
                    <a class="btn btn-warning" href="/cardapio/{{$cardapio->id}}/edit">Editar</a>
                    <a class="btn btn-info" href="/cardapio/{{$cardapio->id}}/show">Ver</a>
                    <a class="btn btn-danger" href="/cardapio/{{$cardapio->id}}/destroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
