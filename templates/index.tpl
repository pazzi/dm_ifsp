{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container-mt3">
<div class="table-responsive">
<table class="table">
<thead><tr>
        <th>Curso</th>
        </tr>
    <form method="post" action="mostra_cursos.php">
    {section name=i loop=$dados}
        <tr>
            <td><a href='.\mostra_cursos.php?rotulo={$dados[i].rotulo}' class="text-decoration-none link-dark">{$dados[i].nome}</a></td>
        </tr>
    {/section}
    </form>
</table>
</div>
</div>

{include file="footer.tpl"}

