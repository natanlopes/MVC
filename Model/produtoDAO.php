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
    
    else
    return false;

}

public function update(produtoVO $value){
    $SQL ="UPDATE  produtos SET nome = ?, marca = ?, preco = ? WHERE id = ?";
    
    
    $DB = new DB();
    $DB -> getConnection();
    $pstm = $DB-> execSQL($SQL);
    
    $pstm -> bind_param("s", $value->getNome());
    $pstm -> bind_param("s", $value->getMarca());
    $pstm -> bind_param("s", $value->getPreco());
    $pstm -> bind_param("i", $value->getId());
    if ($pstm ->execute()) 
        return true;
        
        else
        return false;
    
    }

    public function update(produtoVO $value){
        $SQL ="DELETE  FROM produtos WHERE Id=?";
        
        
        $DB = new DB();
        $DB -> getConnection();
        $pstm = $DB-> execSQL($SQL);
        
        $pstm -> bind_param("i", $value->getId());
        if ($pstm ->execute()) 
            return true;
            
            else
            return false;
        
        }
        public function getById($id){
            $SQL ="SELECT * FROM produtos WHERE id =".addslashes($id);
            
            
            $DB = new DB();
            $DB -> getConnection();
            $query = $DB-> execReader($SQL);
            
        while ($reg = $query -> fetch_array(MYSSQLI_ASSOC)) {
            $vo -> setId($reg["id"]);
            $vo -> setNome($reg["nome"]);
            $vo -> setMarca($reg["marca"]);
            $vo -> setPreco($reg["preco"]);
        }
           return $vo; 
            }
            
}





?>
