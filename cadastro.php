<?php
require 'config/config.php';
include 'db.php';

if (isset($_POST['submit']))    
{
        try {
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $dbh->prepare("insert into cadastro (NOME_DO_CURSO,GRAU,MODALIDADE,SITUACAO_DO_CURSO,QT_VAGAS_AUTORIZADAS,CARGA_HORARIA,CARGA_HORARIA_TCC,TIPO_DE_PERIODICIDADE,QUANT_DE_VAGAS_INTEGRAL, QUANT_DE_VAGAS_MATUTINO,QUANT_DE_VAGAS_VESPERTINO,QUANT_DE_VAGAS_NOTURNO) values (?,?,?,?,?,?,?,?,?,?,?,?)");
                $stmt->bindParam(1, $_POST['nome']);
                $stmt->bindParam(2, $_POST['grau']);
                $stmt->bindParam(3, $_POST['modalidade']);
                $stmt->bindParam(4, $_POST['situacao']);
                $stmt->bindParam(5, $_POST['vagas']);
                $stmt->bindParam(6, $_POST['carga']);
                $stmt->bindParam(7, $_POST['carga_tcc']);
                $stmt->bindParam(8, $_POST['periodicidade']);
                $stmt->bindParam(9, $_POST['vagas_integral']);
                $stmt->bindParam(10, $_POST['vagas_matutino']);
                $stmt->bindParam(11, $_POST['vagas_vespertino']);
                $stmt->bindParam(12, $_POST['vagas_noturno']);

                if($stmt->execute())
    			header("location:inicio.php");

        } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "Erro no acesso ao BD";
                die();
        }
}
else{
        try {
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $dbh->prepare("select * from municipios order by MUNICIPIO");
                $stmt->execute();
                $municipios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            } catch (PDOException $e) {
                  $msg="Error!: " . $e->getMessage() . "Erro no acesso ao BD";
                  header("location:inicio.php");
            }
            
            try {
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $dbh->prepare("select * from cursos order by nome");
                $stmt->execute();
                $cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            } catch (PDOException $e) {
                  $msg="Error!: " . $e->getMessage() . "Erro no acesso ao BD";
                  header("location:inicio.php");
            }
   
}

$smarty->assign('municipios',$municipios);
$smarty->assign('cursos', $cursos);
$smarty->display('cadastro.tpl');
