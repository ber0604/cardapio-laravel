@extends('base.index')
@section('container')
<form action='/cardapio/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>

    @include('components.field', ['type'=> 'date', 'name' => 'dtref', 'label' => 'Data da Refeição', 'value' => ""])
    <div class="mb-2">
        <label for="tipo_refeicao" class="form-label">Refeição</label>
        <select class="form-control" name="tipo_refeicao" >
            <option selected>Selecione</option>
            <option value="Café da manhã" >Café da manhã</option>
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
    <a class="btn btn-danger" href="/cardapio">Voltar</a>
    @include('components.button', ['color'=> 'primary', 'label' => 'Inserir', 'type' => 'submit'])
  </form>
@endsection
