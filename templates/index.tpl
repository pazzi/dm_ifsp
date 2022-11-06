{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container mt-3">
    <div class="row row-cols-2">
        <div class="col">Curso</div>
        <div class="col">Tipo</div>
    </div>
    <form method="post" action="mostra_cursos.php">
    {section name=i loop=$dados}
        <div class="row row-cols-2">
            <div class="col"><button type="submit" class="btn btn-light" name="linha" value="{$dados[i].rotulo}">{$dados[i].nome}</button></div>
            <div class="col"> {$dados[i].grau}</div>
        </div>
    {/section}
    </form>
</div>

{include file="footer.tpl"}

