{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container-mt3">
<div class="table-responsive">
<table class="table">
<thead><tr>
        <th>Cidades</th>
        </tr>
    <form method="post" action="mostra_cidades.php">
    {section name=i loop=$dados}
        <tr>
            <td><a href='.\mostra_cidade.php?cod={$dados[i].CODIGO_DO_ENDERECO}' class="text-decoration-none link-dark">{$dados[i].MUNICIPIO} - {$dados[i].ENDERECO} - {$dados[i].NUMERO_ENDERECO} - {$dados[i].COMPLEMENTO} - {$dados[i].BAIRRO}</a></td>
        </tr>
    {/section}
    </form>
</table>
</div>
</div>

{include file="footer.tpl"}

