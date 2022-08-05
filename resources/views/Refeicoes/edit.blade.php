@extends('base.index')

@section('container')
<form action='/refeicao/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{ $refeicao->id }}" name="id"/>

    @include('components.field', ['type' => 'text', 'name' => 'nome', 'label' => 'Nome', 'value' => $refeicao->nome])
    <div class="mb-2">
        <label for="ingrediente_id" class="form-label">Ingrediente</label>
        <select class="form-control" name="ingrediente_id" >
        @foreach($ingredientes as $ingrediente)
            <option value="{{$ingrediente->id}}">{{$ingrediente->nome}}</option>
        @endforeach
        </select>
    </div>    <a class="btn btn-danger" href="/refeicao">Voltar</a>
    @include('components.button', ['type' => 'submit', 'color' => 'primary', 'label' => 'Alterar'])
</form>
@endsection
