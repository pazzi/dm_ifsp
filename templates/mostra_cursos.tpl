{include file="header.tpl"}
{include file="nav.tpl"}
<div class="container mt-3">
<h4>Dados do curso de {$dados[0].NOME_DO_CURSO}</h4>
    {section name=i loop=$dados}
            <div class="row">Município: {$dados[i].MUNICIPIO}</div>
            <div class="row">Endereço: {$dados[i].ENDERECO} - Número: {$dados[i].NUMERO_ENDERECO}</div>
            <div class="row">Grau: {$dados[i].GRAU} - Periodicidade: {$dados[i].TIPO_DE_PERIODICIDADE} - Modalidade: {$dados[i].MODALIDADE}</div>
            <div class="row">Carga horária: {$dados[i].CARGA_HORARIA} - Ano: {$dados[i].ANO_CC}</div>
            <div class="row">Vagas autorizadas: {$dados[i].QT_VAGAS_AUTORIZADAS}</div>
            <div class="row">Vagas integral: {$dados[i].QUANT_DE_VAGAS_INTEGRAL}</div>
            <div class="row">Vagas matutino: {$dados[i].QUANT_DE_VAGAS_MATUTINO}</div>
            <div class="row">Vagas vespertino: {$dados[i].QUANT_DE_VAGAS_VESPERTNO}</div>
            <div class="row">Vagas noturno: {$dados[i].QUANT_DE_VAGAS_NOTURNO}</div>
            <hr style="width:50%; text-align:left; margin-left:0">
    {/section}
</div>

{include file="footer.tpl"}

