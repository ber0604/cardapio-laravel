@extends('base.index')

@section('container')
<form action='/ingrediente/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>

    @include('components.field', ['type'=> 'text', 'name' => 'nome', 'label' => 'Nome', 'value' => ""])
    @include('components.field', ['type'=> 'text', 'name' => 'calorias', 'label' => 'calorias', 'value' => ""])
    <a class="btn btn-danger" href="/ingrediente">Voltar</a>
    @include('components.button', ['color'=> 'primary', 'label' => 'Inserir', 'type' => 'submit'])
  </form>
@endsection
