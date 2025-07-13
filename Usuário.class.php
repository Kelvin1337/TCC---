<?php

class Usuário{

    public function login($RA, $password){
        global $pdo;

        $sql = "SELECT RA, senha, nome FROM cadastro_aluno WHERE RA = :RA AND senha = :password";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("RA", $RA);
        $sql->bindValue("password", $password);
        $sql->execute();

        // Pega o resultado
        //$resultado = $sql->fetch(PDO::FETCH_ASSOC);

        // Verifica se encontrou algum registro
        //if ($resultado) {
        //    echo "RA: " . $resultado['RA'] . "<br>";
        //    echo "Nome: " . $resultado['nome'] . "<br>";
        //} else {
        //    echo "RA ou senha incorretos.";
        //}

        if($sql->rowCount()> 0){
            $dado = $sql->fetch(PDO::FETCH_ASSOC);

           if ($dado && isset($dado['RA'])) {

            $_SESSION['RA'] = $dado['RA'];

            return true;
        } else {
                echo "Erro: dado vazio ou RA não encontrado.";
            return false;
}
            //$_SESSION['RA'] = $dado['RA'];
            
            return true;
        }else{
            return false;

    }
}


}


?>