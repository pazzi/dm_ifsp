{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container mt-3">
    {section name=i loop=$dados}
            <div class="row">{$dados[i].NOME_DO_CURSO} - {$dados[i].MUNICIPIO}</div>
            <div class="row">{$dados[i].GRAU} - {$dados[i].TIPO_DE_PERIODICIDADE} - {$dados[i].MODALIDADE}</div>
            <div class="row">{$dados[i].CARGA_HORARIA} - {$dados[i].TIPO_DE_PERIODICIDADE} - {$dados[i].ANO_CC}</div>
            <hr>
    {/section}
</div>

{include file="footer.tpl"}

