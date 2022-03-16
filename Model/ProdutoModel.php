<?php

class ProdutoModel{
public function insert(produtoVO $value){
    $prod = new ProdutoDAO();
    if($value-> getPreco()== "0"){

     $value->getPreco("10.90");
    }
return $prod-> insert ($value);

}
public function delete(produtoVO $value){
    $prod = new ProdutoDAO();
    
return $prod-> delete ($value);

}
public function update(produtoVO $value){
    $prod = new ProdutoDAO();
    
return $prod-> update ($value);

}
public function getById($id){
    $prod = new ProdutoDAO();
$vo = $prod -> getById($id);

//regra de negocio
    $value-> setPreco ("RS".number_format($vo->getPreco(),2,',','.'));




return $vo;

}
public function getALL(){
    $prod = new ProdutoDAO();
    return $prod -> getALL();

    }
}


?>