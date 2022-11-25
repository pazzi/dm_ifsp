<?php
require 'config/config.php';
include 'db.php';

if (isset($_POST['submit']))    
{

        try {
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $dbh->prepare("insert into municipios (CODIGO_DO_ENDERECO,ENDERECO,NUMERO_ENDERECO,COMPLEMENTO,BAIRRO,MUNICIPIO,UF) values (?,?,?,?,?,?,?)");
                $stmt->bindParam(1, $_POST['codigo']);
                $stmt->bindParam(2, $_POST['endereco']);
                $stmt->bindParam(3, $_POST['numero']);
                $stmt->bindParam(4, $_POST['complemento']);
                $stmt->bindParam(5, $_POST['bairro']);
                $stmt->bindParam(6, $_POST['municipio']);
                $stmt->bindParam(7, $_POST['uf']);

                if($stmt->execute())
    			header("location:municipios.php");

        } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "Erro no acesso ao BD";
                die();
        }
}

if(isset($_POST['cancel'])){
    header("location:municipios.php");
}

$smarty->display('cad_municipio.tpl');

