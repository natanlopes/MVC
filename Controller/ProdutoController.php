<?php
class ProdutoController{

    public function ProdutoController(){

    }
    public function salvar(){
$model = new ProdutoModel();
$vo = new ProdutoVo();
$vo-> setNome($_POST["txtNome"]);
$vo-> setMarca($_POST["txtMarca"]);
$vo-> setPreco($_POST["txtPreco"]);

if($model->insert ($vo)){
    $_SESSION["msg"] ="Produto cadastro com sucesso.";
}else {
    $_SESSION["msg"] ="ERRO ao cadastrar produto.";
}
header ("Location: View/produtos/retorno.php");  
}
public function update(){
    $model = new ProdutoModel();
    $vo = new ProdutoVo();
    $vo-> setId($_POST["txtId"]);
    $vo-> setNome($_POST["txtNome"]);
    $vo-> setMarca($_POST["txtMarca"]);
    $vo-> setPreco($_POST["txtPreco"]);
    
    if($model->update ($vo)){
        $_SESSION["msg"] ="Produto atualizado  com sucesso.";
    }else {
        $_SESSION["msg"] ="ERRO ao Atualizar produto.";
    }
    header ("Location: View/produtos/retorno.php");  
    }
public function novo(){

    header ("Location: View/produtos/Insert.php");

}
public function editar(){
    $model = new ProdutoModel();

    $vo = $model-> getById($_GET["id"]);

    $_SESSION["id"] = $vo-> getId();
    $_SESSION["nome"] = $vo-> getNome();
    $_SESSION["marca"] = $vo-> getMarca();
    $_SESSION["preco"] = $vo-> getPreco();

    header ("Location: View/produtos/edit.php");

}
}


?>