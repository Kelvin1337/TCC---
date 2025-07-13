<?php
    include("config.php");

    $nome=$_POST['nome'];
    $RA=$_POST['RA'];
    $email=$_POST['email'];
    $senha=$_POST['password'];
    $cor=$_POST['cor'];
    $modelo=$_POST['modelo'];
    $placa=$_POST['placa'];

    $sql="INSERT INTO  cadastro_aluno(nome, RA, email, senha, cor_carro, modelo_carro, placa_carro) 
        VALUES ('$nome', '$RA', '$email', '$senha', '$cor', '$modelo', '$placa')";

    if(mysqli_query($conexao, $sql)){
        echo "usuário cadastrado";
    }
    else{
        echo "Erro";
    }
    mysqli_close($conexao);
?>