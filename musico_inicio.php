<?php
error_reporting(0);
session_start();
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
 */

if(isset($_GET['id'])){
	 try {
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $dbh->prepare("delete from musico where id = ?");
                $stmt->bindParam(1, $id);
                $id = $_GET["id"];

                if($stmt->execute())
    			header("location:musico_inicio.php");

        } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/><br><a href='musico_inicio.php'>voltar</a>";
                die();
        }

/*
    $sql="delete from musico where id='".$_GET['id']."' ";
    sql("vinil", $sql);
 */
	header("location:musico_inicio.php");
}

try {
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth = $dbh->prepare('SELECT * FROM musico ORDER BY nome');
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "Erro ao acessar o BD";
	die();
}

$smarty->assign('dados', $result);
$smarty->display('musico_inicio.tpl');

