{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container mt-3">
<h4>Editar - Cursos de graduação</h4>

<form method="POST" action="alterar.php">
{section name=i loop=$dados}
<input type="hidden" name="id" value="{$dados[i].id}">

<div class="mb-3 mt-3">
Nome do curso:
<input type="text"  class="form-control" name="nome" value="{$dados[i].NOME_DO_CURSO}">
</div>

<div class="mb-3 mt-3">
    Município:
    <select class="form-select" name="cod_endereco">
    {section name=j loop=$municipios}
        {if ($dados[i].CODIGO_DO_ENDERECO eq $municipios[j].CODIGO_DO_ENDERECO) }
            <option value="{$municipios[j].CODIGO_DO_ENDERECO}" SELECTED > {$municipios[j].MUNICIPIO} - {$municipios[j].ENDERECO} </option>
        {else}
            <option value="{$municipios[j].CODIGO_DO_ENDERECO}" > {$municipios[j].MUNICIPIO} - {$municipios[j].ENDERECO} </option>
        {/if}
    {/section}
    </select>
</div>

<div class="mb-3 mt-3">
    Rótulo do curso:
    <select class="form-select" name="cod_curso">
    {section name=k loop=$cursos}
        {if ($dados[i].CODIGO_CINE_ROTULO eq $cursos[k].rotulo) }
            <option value="{$cursos[k].rotulo}" SELECTED > {$cursos[k].nome} </option>
        {else}
            <option value="{$cursos[k].rotulo}" > {$cursos[k].nome} </option>
        {/if}
    {/section}
    </select>
</div>

<div class="mb-3 mt-3">
Grau:
<input type="text"  class="form-control" name="grau" value="{$dados[i].GRAU}">
</div>

<div class="mb-3 mt-3">
Modalidade:
<input type="text"  class="form-control" name="modalidade" value="{$dados[i].MODALIDADE}">
</div>

<div class="mb-3 mt-3">
Situação do curso:
<input type="text"  class="form-control" name="situacao" value="{$dados[i].SITUACAO_DO_CURSO}">
</div>

<div class="mb-3 mt-3">
Vagas autorizadas:
<input type="text"  class="form-control" name="vagas" value="{$dados[i].QT_VAGAS_AUTORIZADAS}">
</div>

<div class="mb-3 mt-3">
Carga horária:
<input type="text"  class="form-control" name="carga" value="{$dados[i].CARGA_HORARIA}">
</div>

<div class="mb-3 mt-3">
Carga horária do TCC:
<input type="text"  class="form-control" name="carga_tcc" value="{$dados[i].CARGA_HORARIA_TCC}">
</div>

<div class="mb-3 mt-3">
Periodicidade:
<input type="text"  class="form-control" name="periodicidade" value="{$dados[i].TIPO_DE_PERIODICIDADE}">
</div>

<div class="mb-3 mt-3">
Vagas no integral:
<input type="text"  class="form-control" name="vagas_integral" value="{$dados[i].QUANT_DE_VAGAS_INTEGRAL}">
</div>

<div class="mb-3 mt-3">
Vagas no matutino:
<input type="text"  class="form-control" name="vagas_matutino" value="{$dados[i].QUANT_DE_VAGAS_MATUTINO}">
</div>

<div class="mb-3 mt-3">
Vagas no vespertino:
<input type="text"  class="form-control" name="vagas_vespertino" value="{$dados[i].QUANT_DE_VAGAS_VESPERTINO}">
</div>


<div class="mb-3 mt-3">
Vagas no noturno:
<input type="text"  class="form-control" name="vagas_noturno" value="{$dados[i].QUANT_DE_VAGAS_NOTURNO}">
</div>
{/section}

<input type="submit" class="btn btn-primary" name="submit" value="submit">
<a class="btn btn-warning" href="./inicio.php" role="button">Voltar</a>
</form> 
</div>

{include file="footer.tpl"}