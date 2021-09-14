@extends('layouts.insite')

@section('conteudo')
<link rel="stylesheet" href="/css/home.css">

    <?php foreach ($livros as $livro) { ?>
        <div class="boxLivro">
            <span class="txtAutor"><?php echo $livro->autor ?></span>
            <span class="txtTitulo"><?php echo $livro->titulo ?></span>
        </div>
    <?php } ?>

@endsection