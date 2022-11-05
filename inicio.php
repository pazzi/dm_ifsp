<?php
error_reporting(0);
session_start();
require 'config/config.php';
include("db.php");
$uploaddir = './fotos/';

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
		$stmt = $dbh->prepare("select caminho_foto from bolachao where id = ?");
    		$stmt->bindParam(1, $id);
    		$id=$_GET["id"];
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		unlink($uploaddir.$result[0]["caminho_foto"]);

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
	$sth = $dbh->prepare('SELECT * FROM bolachao where nome like ? ORDER BY id');
	$sth->bindParam(1, $nome);
	$nome = "%".$_POST["nome"]."%";
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
}
else{
	try {
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sth = $dbh->prepare('SELECT * FROM bolachao ORDER BY NOME');
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);

		$sth1 = $dbh->prepare('SELECT musico.nome, musico_bolachao.id_musico, musico_bolachao.id_bolachao, bolachao.nome as nome_disco FROM musico, bolachao, musico_bolachao WHERE musico_bolachao.id_musico=musico.id and bolachao.id=musico_bolachao.id_bolachao');
		$sth1->execute();
		$result1 = $sth1->fetchAll(PDO::FETCH_ASSOC);

	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
		die();
	}
}
$smarty->assign('dados', $result);
$smarty->assign('det', $result1);
$smarty->assign('uploaddir', $uploaddir);
$smarty->display('inicio.tpl');

