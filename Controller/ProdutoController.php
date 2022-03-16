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
}
    
}
public function novo(){

    header ("Location: View/produtos/insert.php");

}

}


?>