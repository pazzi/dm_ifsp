<?php
require 'config/config.php';
include 'db.php';

if (isset($_POST['submit']))    
{

        try {
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $dbh->prepare("insert into cadastro (nome,selo,ano) values (?,?,?)");
                $stmt->bindParam(1, $nome);
                $stmt->bindParam(2, $selo);
                $stmt->bindParam(3, $ano);

                $nome = $_POST["nome"];
                $selo = $_POST["selo"];
                $ano = $_POST["ano"];
                $caminho_foto = $filename;

                if($stmt->execute())
    			header("location:inicio.php");

        } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "Erro no acesso ao BD";
                die();
        }
}

if(isset($_POST['cancel'])){
    header("location:inicio.php");
}

$smarty->display('cadastro.tpl');

