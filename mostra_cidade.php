<?php
error_reporting(0);
session_start();
require 'config/config.php';
include("db.php");

if(isset($_GET['cod']))
{
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('SELECT * FROM cadastro c, municipios m where c.CODIGO_DO_ENDERECO=? and c.CODIGO_DO_ENDERECO=m.CODIGO_DO_ENDERECO  ORDER BY m.ENDERECO');
	$sth->bindParam(1, $_GET['cod']);
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
}
/*
if(isset($_GET['grau']))
{
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('SELECT * FROM cadastro where CODIGO_CINE_ROTULO=? ORDER BY MUNICIPIO');
	$sth->bindParam(1, $_GET['grau']);
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
}
*/

$smarty->assign('dados', $result);
$smarty->assign('pagina', $_SERVER['PHP_SELF']);
$smarty->assign('nav', 0);
$smarty->display('mostra_cidade.tpl');

