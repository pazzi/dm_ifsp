<?php
error_reporting(0);
#session_start();
require 'config/config.php';
include("db.php");

/*
if(empty($_SESSION['username']) AND empty($_SESSION['passwd'])){

    header ("Location:session.php");

}else{

	if($_GET['act'] == 'logout')
	{
		session_destroy();
		header ("Location:session.php");
	}

}
*/

if(isset($_GET['id'])){
	 try {
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $dbh->prepare("delete from cadastro where id = ?");
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
	$nome = "%".$_POST["nome"]."%";
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $dbh->prepare('SELECT c.id, c.NOME_DO_CURSO,c.GRAU, m.MUNICIPIO
                                FROM cadastro c, municipios m 
                                WHERE c.NOME_DO_CURSO LIKE ? 
                                AND c.CODIGO_DO_ENDERECO=m.CODIGO_DO_ENDERECO 
                                ORDER BY c.NOME_DO_CURSO');
	$sth->bindParam(1, $nome);
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
}
else{
	try {
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $dbh->prepare('SELECT c.id, c.NOME_DO_CURSO,c.GRAU, m.MUNICIPIO
                                FROM cadastro c, municipios m 
                                WHERE c.CODIGO_DO_ENDERECO=m.CODIGO_DO_ENDERECO 
                                ORDER BY c.NOME_DO_CURSO');
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);


	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
		die();
	}
}
$smarty->assign('dados', $result);
$smarty->assign('pagina', $_SERVER['PHP_SELF']);
$smarty->display('inicio.tpl');

