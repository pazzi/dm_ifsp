{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container-mt3">
<div class="table-responsive">
<table class="table">
<thead><tr>
        <th>Curso</th>
        <th>Tipo</th>
    <form method="post" action="mostra_cursos.php">
    {section name=i loop=$dados}
        <tr>
            <td><button type="submit" class="btn btn-light" name="linha" value="{$dados[i].rotulo}">{$dados[i].nome}</button></td>
            <td> {$dados[i].grau}</td>
        </tr>
    {/section}
    </form>
</table>
</div>
</div>

{include file="footer.tpl"}

