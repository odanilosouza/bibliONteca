@extends('layouts.insite')

@section('conteudo')
<form method="post" action="/livros/cadastrar">
    <input type="text" name="autor" placeholder="Autor">
    <input type="text" name="titulo" placeholder="Título">
    <input type="file" name="pdf">
    <button type="submit"></button>
</form>
@endsection