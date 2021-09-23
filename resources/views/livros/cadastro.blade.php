@extends('layouts.insite')

@section('conteudo')
    <link rel="stylesheet" href="/css/livro-cadastro.css">

    <?php
    
    if(@$_REQUEST['id']){
        $action = "/livros/editar";
        $required = "";
    } else {
        $action = "/livros/cadastrar";
        $required = "required";
    }
    
    ?>
         
<form method="post" action="<?php echo $action;?>" id="formCadastroLivro"  enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="<?php echo @$livro->id; ?>">
    <input type="text" name="autor" placeholder="Autor" value="<?php echo @$livro->autor;?>" required>
    <input type="text" name="titulo" placeholder="Título" value="<?php echo @$livro->titulo;?>" required>
    <input type="file" name="livro"  accept=".pdf" <?php echo $required;?>>     
    <button type="submit"> Salvar</button> 
</form>
@endsection