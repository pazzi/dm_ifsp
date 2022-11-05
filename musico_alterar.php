<?php
require 'config/config.php';
include("db.php");

try {

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $dbh->prepare("select * from musico where id = ? " );
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
                $stmt = $dbh->prepare("update musico set nome=?, sexo=?, nascimento=? where id = ?");
                $stmt->bindParam(1, $nome);
                $stmt->bindParam(2, $sexo);
                $stmt->bindParam(3, $nascimento);
                $stmt->bindParam(4, $id);

                $id = $_POST["id"];
                $nome = $_POST["nome"];
                $sexo = $_POST["sexo"];
                $nascimento = $_POST["nascimento"];

                if($stmt->execute())
		{
			header("location:musico_inicio.php");
                        $msg= "Alterado com Sucesso!";
		}

        } catch (PDOException $e) {
                $msg= "Error!: " . $e->getMessage() . "Erro no acesso ao BD";
    		header("location:inicio.php");
        }
}

if(isset($_POST['cancel'])){
    		header("location:inicio.php");
}

$smarty->assign('msg',$msg);
$smarty->assign('dados',$res);
$smarty->display('musico_alterar.tpl');

