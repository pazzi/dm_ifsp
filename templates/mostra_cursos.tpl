{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container mt-3">
    <div class="row row-cols-2">
        <div class="col">Curso</div>
        <div class="col">Tipo</div>
    </div>
    {section name=i loop=$dados}
        <div class="row row-cols-2">
            <div class="col">{$dados[i].MUNICIPIO}</div>
            <div class="col"> {$dados[i].TIPO_DE_PERIODICIDADE}</div>
        </div>
    {/section}
</div>

{include file="footer.tpl"}

