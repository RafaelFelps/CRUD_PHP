<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script
        <script type="text/javascript" src="app.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  
        <title>CRUD</title>

        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-card w3-black">             
                <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Inserir novo cadastro</a>
                <a href="editar.php" class="w3-bar-item w3-button w3-padding-large">Editar cadastro</a>
                <a href="excluir.php" class="w3-bar-item w3-button w3-padding-large">Excluir cadastro</a>
                <a href="exibir.php" class="w3-bar-item w3-button w3-padding-large">Exibir cadastros</a> 
                <link href="css/style.css" rel="stylesheet" type="text/css"/>
                </div>
            </div>
        </div>

        
        
            <br/>
            <br/>
            <h2 id="former" align="left" class="title" style="margin-left:130px;margin-top:15px;">Cadastro</h2>
            <form action="" method="post">
                
                <div class="form-group">
                    <label for="lblcodUsuario" id="title" class="lbl">Código do usuário:</label><br>
                    <input type="text" class="form-control 
                           iptCodUsuario textbox" id="iptCodUsuario" 
                           name="iptCodUsuario" style="width:440px;" placeholder="Insira o código do usuário a ser editado"<br><br>
                </div>
                <div class="form-group">
                    <label for="lblnome" id="title" class="lbl">Nome:</label><br>
                    <input type="text" class="form-control 
                           iptNome textbox" id="iptNome" 
                           name="iptNome" style="width:440px;" placeholder="Insira seu nome"<br><br>
                </div>
                <div class="form-group">
                    <label for="lblDataNascimento" id="title" class="lbl">Data de Nascimento:</label><br>
                    <input type="text" class="form-control 
                           iptDataNascimento textbox" id="iptDataNascimento" 
                           name="iptDataNascimento" style="width:440px;" placeholder="DD/MM/AAAA"><br/>
                </div>
                <div class="form-group">
                    <label for="lblEndereco" id="title" class="lbl">Endereço:</label><br>
                    <input type="text" class="form-control 
                           iptEndereco textbox" id="iptEndereco" 
                           name="iptEndereco" style="width:440px;" placeholder="Insira seu endereço"><br>
                </div>
                <div class="form-group">
                    <label for="lblRg" id="title" class="lbl">Rg:</label><br>
                    <input type="text" class="form-control 
                           iptRg lbl textbox" id="iptRg" 
                           name="iptRg" style="width:440px;" placeholder="Insira seu RG"><br>
                </div>
                <div class="form-group">
                    <label for="lblTelefone" id="title" class="lbl">Telefone:</label>
                    <input type="text" class="form-control 
                           iptTelefone textbox" id="iptTelefone" 
                           name="iptTelefone" style="width:440px;" placeholder="(99)999999999"><br><br>
                </div>
                <div class="form-group">
                    <button type="submit" id="enviar" class="btn btn-primary" name="enviar"  style="margin-left: 130px;">Enviar </button>

                </div>
            

    </head>
        
        <script>
            $(".iptRg").mask("00.000.000");
            $(".iptDataNascimento").mask("00/00/0000");
            $(".iptTelefone").mask("(00)000000000");
              
        </script>
<?php
require_once('class/classUsuario.php');
        $objUsuario = new classUsuario();

        if (isset($_POST['enviar'])) {    
            
            $objUsuario->setCodUsuario($_POST['iptCodUsuario']);
            $objUsuario->setNome($_POST['iptNome']);
            $objUsuario->setDataNascimento($_POST['iptDataNascimento']);
            $objUsuario->setEndereco($_POST['iptEndereco']);
            $objUsuario->setRg($_POST['iptRg']);
            $objUsuario->setTelefone($_POST['iptTelefone']);
            
            $objUsuario->editarUsuario($objUsuario);
        }
        $tableUsuario = $objUsuario->retUsuario();
        $max = sizeof($tableUsuario);

        echo '<hr/>';
        for ($i = 0; $i < $max; $i++) {
            echo "Código do usuário: " . $tableUsuario[$i]["codUsuario"];
            echo "<br/> Nome: " . $tableUsuario[$i]["nome"];
            echo "<br/> Data de nascimento: " . $tableUsuario[$i]["dataNascimento"];      
            echo "<br/> RG: " . $tableUsuario[$i]["rg"];
            echo "<br/> Telefone: " . $tableUsuario[$i]["telefone"];
            echo "<br/> Endereço: " . $tableUsuario[$i]["endereco"];
            echo '<hr/>';
        }
?>  

        
        
</html>
        
        


