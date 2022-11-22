<?php
error_reporting(0);
session_start();
require 'config/config.php';
include("db.php");

if(empty($_SESSION['username']) AND empty($_SESSION['passwd'])){

    header ("Location:session.php");

}else{

	if($_GET['act'] == 'logout')
	{
		session_destroy();
		header ("Location:session.php");
	}

}

if(isset($_GET['id'])){
	 try {
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $dbh->prepare("delete from bolachao where id = ?");
                $stmt->bindParam(1, $id);
                $id = $_GET["id"];

                if($stmt->execute())
    			header("location:inicio.php");

        } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
                die();
        }
    header("location:inicio.php");
}


if(isset($_POST['submit']))
{
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('SELECT * FROM cadastro where id like ? ORDER BY id');
	$sth->bindParam(1, $nome);
	$nome = "%".$_POST["nome"]."%";
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
}
else{
	try {
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sth = $dbh->prepare('SELECT * FROM cadastro ORDER BY NOME_DO_CURSO');
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);


	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
		die();
	}
}
$smarty->assign('dados', $result);
$smarty->display('inicio.tpl');

