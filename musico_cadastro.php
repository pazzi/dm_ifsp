<?php
require 'config/config.php';
include 'db.php';

/*
$sql="select * from fic order by descricao";
$return=sql("map", $sql);
while($res=mysqli_fetch_array($return))
{
    $fic[]=$res;
}
*/

if (isset($_POST['submit']))    
{

        try {
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $dbh->prepare("insert into musico (nome,sexo,nascimento) values (?,?,?)");
                $stmt->bindParam(1, $nome);
                $stmt->bindParam(2, $sexo);
                $stmt->bindParam(3, $nascimento);

                $nome = $_POST["nome"];
                $sexo = $_POST["sexo"];
                $nascimento = $_POST["nascimento"];

                if($stmt->execute())
    			header("location:musico_inicio.php");

        } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "Erro no acesso ao BD";
                die();
        }
}

if(isset($_POST['cancel'])){
    header("location:musico_inicio.php");
}

$smarty->display('musico_cadastro.tpl');

