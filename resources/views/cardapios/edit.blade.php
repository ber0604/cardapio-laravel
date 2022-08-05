@extends('base.index')

@section('container')
<form action='/cardapio/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{ $cardapio->id }}" name="id"/>

    @include('components.field', ['type' => 'date', 'name' => 'dtref', 'label' => 'Data de Refeição', 'value' => $cardapio->dtref])
    <div class="mb-2">
        <label for="tipo_refeicao" class="form-label">Tipo da Refeição</label>
        <select class="form-control" name="tipo_refeicao" >
            <option selected >Selecione</option>
            <option value="Café da manhã">Café da manhã</option>
            <option value="Almoço" >Almoço</option>
            <option value="Janta" >Janta</option>
        </select>
    </div>    
    <div class="mb-2">
        <label for="refeicao_id" class="form-label">Refeição</label>
        <select class="form-control" name="refeicao_id" >
        @foreach($refeicoes as $refeicao)
            <option value="{{$refeicao->id}}">{{$refeicao->nome}}</option>
        @endforeach
        </select>
    </div> 
      <a class="btn btn-danger" href="/cardapios">Voltar</a>
    @include('components.button', ['type' => 'submit', 'color' => 'primary', 'label' => 'Alterar'])
</form>
@endsection
