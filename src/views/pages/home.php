<?php $render('header'); ?>



<a href="<?=$base;?>/novo">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>E-MAIL</td>
        <td>EDITAR</td>
        <td>EXCLUIR</td>
    </tr>
    <?php foreach($usuarios as $usuario): ?>

        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">Editar</a>
            </td>
            <td>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir">Excluir</a>
            </td>
            
        </tr>

    <?php endforeach?>
</table>


<?php $render('Footer'); ?>