@extends('layouts.insite')

@section('conteudo')
    <link rel="stylesheet" href="/css/livro-cadastro.css">
    
<form method="post" action="/livros/cadastrar" id="formCadastroLivro"  enctype="multipart/form-data">
    @csrf
    <input type="text" name="autor" placeholder="Autor" required>
    <input type="text" name="titulo" placeholder="Título" required>
    <input type="file" name="livro"  accept=".pdf" required>
    <button type="submit"> Salvar</button>
</form>
@endsection