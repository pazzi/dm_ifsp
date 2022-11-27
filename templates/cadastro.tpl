{include file="header.tpl"}

<div class="container mt-3">

<h2>Cursos de graduação - novo</h2>

<form method="POST" enctype="multipart/form-data" action="cadastro.php">
<div class="mb-3 mt-3">
Nome do curso:
<input type="text"  class="form-control" name="nome">
</div>

<div class="mb-3 mt-3">
    Município:
    <select class="form-select" name="cod_endereco">
    {section name=j loop=$municipios}
             <option value="{$municipios[j].CODIGO_DO_ENDERECO}" > {$municipios[j].MUNICIPIO} - {$municipios[j].ENDERECO} </option>
    {/section}
    </select>
</div>

<div class="mb-3 mt-3">
    Rótulo do curso:
    <select class="form-select" name="cod_curso">
    {section name=k loop=$cursos}
            <option value="{$cursos[k].rotulo}" > {$cursos[k].nome} </option>
    {/section}
    </select>
</div>

<div class="mb-3 mt-3">
Grau:
<input type="text"  class="form-control" name="grau">
</div>

<div class="mb-3 mt-3">
Modalidade:
<input type="text"  class="form-control" name="modalidade">
</div>

<div class="mb-3 mt-3">
Situação:
<input type="text"  class="form-control" name="situacao">
</div>

<div class="mb-3 mt-3">
Vagas autorizadas:
<input type="text"  class="form-control" name="vagas">
</div>

<div class="mb-3 mt-3">
Carga Horária:
<input type="text"  class="form-control" name="carga">
</div>

<div class="mb-3 mt-3">
Periodicidade:
<input type="text"  class="form-control" name="periodicidade">
</div>

<div class="mb-3 mt-3">
Quantidade de vagas integral:
<input type="text"  class="form-control" name="vagas_integral">
</div>

<div class="mb-3 mt-3">
Quantidade de vagas matutino:
<input type="text"  class="form-control" name="vagas_matutino">
</div>

<div class="mb-3 mt-3">
Quantidade de vagas vespertino:
<input type="text"  class="form-control" name="vagas_vespertino">
</div>

<div class="mb-3 mt-3">
Quantidade de vagas noturno:
<input type="text"  class="form-control" name="vagas_noturno">
</div>

<div class="mb-3 mt-3">
Carga Horária do TCC:
<input type="text"  class="form-control" name="carga_tcc">
</div>


<input type="submit" class="btn btn-primary" name="submit" value="submit">
<a class="btn btn-warning" href="./inicio.php" role="button">Voltar</a>

</form> 

</div>
{include file="footer.tpl"}

