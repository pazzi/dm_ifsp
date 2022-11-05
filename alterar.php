<?php
require 'config/config.php';
include("db.php");
$uploaddir='./fotos/';

try {

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $dbh->prepare("select * from bolachao where id = ? " );
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
                $stmt = $dbh->prepare("update bolachao set nome=?, selo=?, ano=? where id = ?");
                $stmt->bindParam(1, $nome);
                $stmt->bindParam(2, $selo);
                $stmt->bindParam(3, $ano);
                $stmt->bindParam(4, $id);

                $id = $_POST["id"];
                $nome = $_POST["nome"];
                $selo = $_POST["selo"];
                $ano = $_POST["ano"];

                if($stmt->execute())
		{
			header("location:inicio.php");
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
$smarty->assign('uploaddir', $uploaddir);
$smarty->display('alterar.tpl');


