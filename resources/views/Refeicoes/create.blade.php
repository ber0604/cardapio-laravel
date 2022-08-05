@extends('base.index')
@section('container')
<form action='/refeicao/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>

    @include('components.field', ['type'=> 'text', 'name' => 'nome', 'label' => 'Nome', 'value' => ""])
    <div class="mb-2">
        <label for="ingrediente_id" class="form-label">Ingrediente</label>
        <select class="form-control" name="ingrediente_id" >
        @foreach($ingredientes as $ingrediente)
            <option value="{{$ingrediente->id}}">{{$ingrediente->nome}}</option>
        @endforeach
        </select>
    </div>
    <a class="btn btn-danger" href="/refeicao">Voltar</a>
    @include('components.button', ['color'=> 'primary', 'label' => 'Inserir', 'type' => 'submit'])
  </form>
@endsection
