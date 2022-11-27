<?php
require 'config/config.php';
include("db.php");
$msg="";
if(isset($_GET['id']))
{
try {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $dbh->prepare("select * from cadastro where id = ? ");
    $stmt->bindParam(1, $id);
    $id = $_GET['id'];
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    #print_r($res[0]);
    #exit();

} catch (PDOException $e) {
      $msg="Error!: " . $e->getMessage() . "Erro no acesso ao BD";
      header("location:inicio.php");
}

try {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $dbh->prepare("select * from municipios");
    $stmt->execute();
    $municipios = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
      $msg="Error!: " . $e->getMessage() . "Erro no acesso ao BD";
      header("location:inicio.php");
}

try {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $dbh->prepare("select * from cursos");
    $stmt->execute();
    $cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
      $msg="Error!: " . $e->getMessage() . "Erro no acesso ao BD";
      header("location:inicio.php");
}
}
$smarty->assign('msg', $msg);
$smarty->assign('pagina', $_SERVER['PHP_SELF']);
$smarty->assign('nav', '0');
$smarty->assign('usuario', 'admin');
$smarty->assign('dados',$res);
$smarty->assign('municipios', $municipios);
$smarty->assign('cursos', $cursos);
$smarty->display('alterar_curso.tpl');
