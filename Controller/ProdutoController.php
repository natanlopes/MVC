<?php
include("Model/ProdutoModel.php");
include("Model/ProdutoVO.php");
include("Model/ProdutoDAO.php");
include("Model/DB.php");

class ProdutoController{
    
    public function ProdutoController(){
        
    }
    
    public function salvar(){
        $model = new ProdutoModel();
        $vo = new ProdutoVO();
        $vo->setNome($_POST["txtNome"]);
        $vo->setMarca($_POST["txtMarca"]);
        $vo->setPreco($_POST["txtPreco"]);
        
        if($model->insertModel($vo)){
            $_SESSION["msg"] = "Produto cadastro com sucesso.";
        } else {
            $_SESSION["msg"] = "Erro ao cadastrar o produto.";
        }
        
        header("Location: View/produtos/retorno.php");
    }
    
    public function listar(){
        $model = new ProdutoModel();
        
        $_SESSION["data"] = $model->getAllModel();
        include("View/produtos/list.php");
    }
    
    public function update(){
        $model = new ProdutoModel();
        $vo = new ProdutoVO();
        
        $vo->setId($_GET["id"]);
        $vo->setNome($_POST["txtNome"]);
        $vo->setMarca($_POST["txtMarca"]);
        $vo->setPreco($_POST["txtPreco"]);
        
        if($model->updateModel($vo)){
            $_SESSION["msg"] = "Produto atualizado com sucesso.";
        } else {
            $_SESSION["msg"] = "Erro ao atualizar o produto.";
        }

        header("Location: ../../View/produtos/retorno.php");
    }
    
    public function novo(){
        include("View/produtos/insert.php");
    }
    
    public function editar(){
        
        $model = new ProdutoModel();
        
        $vo = $model->getByIdModel($_GET["id"]);
        
        $_SESSION["id"] = $vo->getId();
        $_SESSION["nome"] = $vo->getNome();
        $_SESSION["marca"] = $vo->getMarca();
        $_SESSION["preco"] = $vo->getPreco();
        
        include("View/produtos/editar.php");
    }
    
    public function delete(){
        
        $model = new ProdutoModel();
        
        $vo = $model->getByIdModel($_GET["id"]);
        if ($model->deleteModel($vo)){
             header("Location: http://localhost/MVC/produto/listar");
        } else {
            include("View/produtos/error.php");
        }
    }
}
?>

