<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="" method="POST" action="http://localhost/MVC/produto/update/<?php echo $_SESSION["id"];?>">
            Nome: <input type="text" name="txtNome" value="<?php echo $_SESSION["nome"];?>"/>
            <br/>
            Marca: <input type="text" name="txtMarca"  value="<?php echo $_SESSION["marca"];?>"/>
            <br/>
            Preço: <input type="text" name="txtPreco" value="<?php echo $_SESSION["preco"];?>"/>
            <br/>
            <input type="submit" value="Salvar"/>
        </form>
    </body>
</html>
