<?php
error_reporting(0);
session_start();
require 'config/config.php';
include("db.php");

if(isset($_POST['submit']))
{
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('SELECT * FROM municipios where municipio like ? ORDER BY municipio');
	$sth->bindParam(1, $nome);
	$nome = "%".$_POST["nome"]."%";
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
}
else{
	try {
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sth = $dbh->prepare('SELECT * FROM municipios ORDER BY MUNICIPIO');
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
		die();
	}
}

$smarty->assign('dados', $result);
$smarty->assign('user', "user");
$smarty->assign('page',$_SERVER['PHP_SELF']);
$smarty->display('index_cidade.tpl');

