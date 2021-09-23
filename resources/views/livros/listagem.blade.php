@extends('layouts.insite')
@section('conteudo')

<link rel="stylesheet" href="/css/listagem.css">

<a class="btn" href="/livros/cadastro" style="margin-bottom: 27px;">Cadastrar Livro</a>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Autor</th>
            <th>Açoes</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($livros as $livro) {?>
            <tr>
                <td> <?php echo $livro->titulo;?> </td>
                <td> <?php echo $livro->autor;?> </td>
                <td>
                    <a href="<?php echo $livro->pdf;?>" download=" <?php echo $livro->titulo;?>">Download</a>
                    <a href="/livros/cadastro?id=<?php echo $livro->id; ?>">Editar</a>
                    <a href="/livros/excluir?id=<?php echo $livro->id; ?>">Excluir</a>
                </td>
            </tr>

        <?php } ?>

    </tbody>
</table>
@endsection