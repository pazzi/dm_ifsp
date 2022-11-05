<?php
error_reporting(0);
session_start();
require 'config/config.php';
include("db.php");
#$uploaddir = './fotos/';

if(isset($_POST['submit']))
{
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('SELECT * FROM cursos where nome like ? ORDER BY nome');
	$sth->bindParam(1, $nome);
	$nome = "%".$_POST["nome"]."%";
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
}
else{
	try {
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sth = $dbh->prepare('SELECT * FROM cursos ORDER BY nome');
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
		die();
	}
}

$smarty->assign('dados', $result);
$smarty->assign('uploaddir', $uploaddir);
$smarty->assign('user', "user");
$smarty->display('index.tpl');

