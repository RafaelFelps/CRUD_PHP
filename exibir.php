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
        
        
    </head>
    <body>
        <?php
        require_once('class/classUsuario.php');
        $objUsuario = new classUsuario();
        
         $tableUsuario = $objUsuario->retUsuario();
        $max = sizeof($tableUsuario);

        echo '<hr/>';
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
    </body>
</html>
