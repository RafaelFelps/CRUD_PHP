<?php

// include 'classConexao.php';

 class classUsuario{
     private $codUsuario;
     private $nome;
     private $dataNascimento;
     private $endereco;
     private $rg;
     private $telefone;
     
     function getCodUsuario(){
         return $this ->codUsuario;
     }
     function getNome(){
         return $this ->nome;
     }
     function getDataNascimento(){
         return $this ->dataNascimento;
     }
     function getEndereco(){
         return $this ->endereco;
     }
     function getRg(){
         return $this ->rg;
     }
     function getTelefone(){
         return $this ->telefone;
     }
     function setCodUsuario($codUsuario){
         $this->codUsuario = $codUsuario;
     }
     function setNome($nome){
         $this->nome = $nome; 
     }
     function setDataNascimento($dataNascimento){
         $this ->dataNascimento = $dataNascimento;
     }
     function setEndereco($endereco){
         $this ->endereco = $endereco;
     }
     function setRg($rg){
         $this ->rg = $rg;
     }
     function setTelefone($telefone){
         $this ->telefone = $telefone;
     }
     
     // CRUD
     
     //Exibir
     public function retUsuario() {
        require_once('class/classConexao.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbCrud");
        $tableUsuario = $objConexao->selecionarDados("SELECT * FROM usuario");

        return $tableUsuario;
        
    }

    // Inserir
    public function inserirUsuario($objUsuario) {
        require_once('class/classConexao.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbCrud");

        $codUsuario = $objUsuario->getCodUsuario();
        $nome = $objUsuario->getNome();
        $dataNascimento = $objUsuario->getDataNascimento();
        $endereco = $objUsuario->getEndereco();
        $rg = $objUsuario->getRg();
        $telefone = $objUsuario->getTelefone();
                
        $objConexao->exercutarComandoSQL("INSERT INTO usuario (nome,dataNascimento,endereco,rg,telefone) "
                . "VALUES ('$nome','$dataNascimento','$endereco','$rg','$telefone')");

        return true;
    }
    
    

    //Editar
    public function editarUsuario($objUsuario) {
        require_once('class/classConexao.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbCrud");

        $codUsuario = $objUsuario->getCodUsuario();
        $nome = $objUsuario->getNome();
        $dataNascimento = $objUsuario->getDataNascimento();
        $endereco = $objUsuario->getEndereco();
        $rg = $objUsuario->getRg();
        $telefone = $objUsuario->getTelefone();
        
        $objConexao->exercutarComandoSQL("UPDATE usuario SET nome = '$nome',dataNascimento = '$dataNascimento',endereco = '$endereco',rg = '$rg', telefone = '$telefone' WHERE codUsuario = $codUsuario");

        return true;
    }

    //Excluir
    public function excluirUsuario($objUsuario) {
        require_once('class/classConexao.php');
        $objConexao = new ConexaoClass("localhost", "root", "", "dbCrud");

        $codUsuario = $objUsuario->getCodUsuario();

        $objConexao->exercutarComandoSQL("DELETE FROM usuario WHERE codUsuario = '$codUsuario'");

        return true;
    }
     
 }
