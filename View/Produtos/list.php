<script>
    function apagar(id){
        if(window.confirm("Deseja realmente excluir?")){
            var url = 'http://localhost:50/MVC/?Controller=Produto&Action=delete&id=' + id;
            window.location = url;
        }
    }
</script>
<table width="100%">
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Marca</td>
        <td>Preço</td>
        <td>APAGAR</td>
        <td>ATUALIZAR</td>
    </tr>
    <?php
        $retorno = $_SESSION["data"];
        foreach($retorno as $value){
    ?>
    <tr>
        <td><?php echo $value[0];?></td>
        <td><?php echo $value[1];?></td>
        <td><?php echo $value[2];?></td>
        <td><?php echo $value[3];?></td>
        <td><a href="#" onclick="apagar('<?php echo $value[0];?>');">[OK]</a></td>
        <td><a href="http://localhost:50/MVC/produto/editar/<?php echo $value[0];?>">[OK]</a></td>
    </tr>
     <?php } ?>
</table>
