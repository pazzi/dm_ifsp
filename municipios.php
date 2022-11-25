<?php
error_reporting(0);
session_start();
require 'config/config.php';
include("db.php");

if(isset($_GET['id']))
{
    try{
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $dbh->prepare('DELETE FROM municipios where id=?');
        $sth->bindParam(1, $_GET['id']);
        $sth->execute();
    } catch (PDOException $e)
    {
       $msg="Error!: ". $e->getMessage() . "Erro ao acessar o BD"; 
    }
}

if(isset($_POST['submit']))
{
	$nome = "%".$_POST["nome"]."%";
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('SELECT * FROM municipios where municipio like ? ORDER BY municipio');
	$sth->bindParam(1, $nome);
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
}
else{
	try {
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sth = $dbh->prepare('SELECT * FROM municipios ORDER BY municipio');
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
		die();
	}
}

$smarty->assign('dados', $result);
$smarty->assign('user', "user");
$smarty->assign('msg',$msg);
$smarty->display('municipios.tpl');

