@extends('base.index')

@section('container')
<form action='/ingrediente/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{ $ingrediente->id }}" name="id"/>

    @include('components.field', ['type' => 'text', 'name' => 'nome', 'label' => 'Nome', 'value' => $ingrediente->nome])
    @include('components.field', ['type' => 'text', 'name' => 'calorias', 'label' => 'calorias', 'value' => $ingrediente->calorias])
    <a class="btn btn-danger" href="/ingrediente">Voltar</a>
    @include('components.button', ['type' => 'submit', 'color' => 'primary', 'label' => 'Alterar'])
</form>
@endsection
