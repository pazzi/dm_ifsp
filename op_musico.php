<?php
error_reporting(0);
session_start();
require 'config/config.php';
include("db.php");

if(isset($_GET['id_musico'])){
	try {
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			if($_GET['op'] == 1)
			{
				$stmt = $dbh->prepare("insert into musico_bolachao (id_musico, id_bolachao) values (?,?)");
			}elseif($_GET['op'] == 2)
			{
				$stmt = $dbh->prepare("delete from musico_bolachao where id_musico=? and id_bolachao=?");
			}
			$stmt->bindParam(1, $id_musico);
			$stmt->bindParam(2, $id_bolachao);

			$id_musico = $_GET["id_musico"];
			$id_bolachao = $_GET["id_bolachao"];

			if($stmt->execute())
			header("location:inicio.php");

	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
		die();
	}
}

if(isset($_GET['id'])){
try {
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('SELECT id, nome FROM musico ORDER BY nome');
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);

	$sth1 = $dbh->prepare("SELECT m.nome, mb.id, mb.id_musico, mb.id_bolachao FROM musico m, musico_bolachao mb, bolachao b where b.id=mb.id_bolachao and m.id=mb.id_musico and mb.id_bolachao=? ORDER BY m.nome");
	$sth1->bindParam(1, $id_musico);
	$id_musico = $_GET['id'];
	$sth1->execute();
	$result1 = $sth1->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
	die();
}
}

$smarty->assign('dados', $result);
$smarty->assign('dadosja', $result1);
$smarty->assign('id_bolachao', $_GET['id']);
$smarty->display('op_musico.tpl');

