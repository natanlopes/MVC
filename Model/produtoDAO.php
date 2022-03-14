<?php
class ProdutoDAO{

public function insert(produtoVO $value){
$SQL ="INSERT INTO produtos (nome, marca, preco) VALUES ("
$SQL.="?,?,?)";

$DB = new DB();
$DB -> getConnection();
$pstm = $DB-> execSQL($SQL);

$pstm -> bind_param("s", $value->getNome());
$pstm -> bind_param("s", $value->getMarca());
$pstm -> bind_param("s", $value->getPreco());

if ($pstm ->execute()) 
    return true;
    # code...
    else
    return false;

}


}




?>
