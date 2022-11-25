<?php
require 'config/config.php';
include("db.php");

try {

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $dbh->prepare("select * from municipios where id = ? " );
$stmt->bindParam(1, $id);

$id = $_GET["id"];

$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
  $msg="Error!: " . $e->getMessage() . "Erro no acesso ao BD";
  header("location:inicio.php");
}


if(isset($_POST['submit'])){

try {
        include("conexao.php");
        
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $dbh->prepare("update municipios set CODIGO_DO_ENDERECO=?, ENDERECO=?, NUMERO_ENDERECO=?, COMPLEMENTO=?, BAIRRO=?, MUNICIPIO=?, UF=? where id = ?");
                $stmt->bindParam(1, $_POST['codigo']);
                $stmt->bindParam(2, $_POST['endereco']);
                $stmt->bindParam(3, $_POST['numero']);
                $stmt->bindParam(4, $_POST['complemento']);
                $stmt->bindParam(5, $_POST['bairro']);
                $stmt->bindParam(6, $_POST['municipio']);
                $stmt->bindParam(7, $_POST['uf']);
                $stmt->bindParam(8, $_POST['id']);

                if($stmt->execute())
		{
			header("location:municipios.php");
                        $msg= "Alterado com Sucesso!";
		}

        } catch (PDOException $e) {
                $msg= "Error!: " . $e->getMessage() . "Erro no acesso ao BD";
    		header("location:municipios.php");
        }
}

if(isset($_POST['cancel'])){
    		header("location:municipios.php");
}

$smarty->assign('msg',$msg);
$smarty->assign('dados',$res);
$smarty->display('alterar_municipio.tpl');


