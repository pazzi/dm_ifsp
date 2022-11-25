{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container mt-3">
<div>
<a href='cad_municipio.php'><i class="bi-plus">Novo </i></a>                     
</div>
<div class="table-responsive">
<table class="table">
<thead><tr>
<th>Nome</th><th>Grau</th><th>Município</th><th>Excluir</th><th>Alterar</th>
</tr></thead>

{section name=i loop=$dados}
	<tr>
		<td> {$dados[i].MUNICIPIO}</td>
		<td> {$dados[i].ENDERECO} - {$dados[i].NUMERO_ENDERECO}</td>
		<td> {$dados[i].BAIRRO}</td>
	        <td><a href='municipios.php?id={$dados[i].id}'><i class="bi-eraser"></i></a></td>                     
        	<td><a href='alterar_municipio.php?id={$dados[i].id}'><i class="bi-pen"></i></a></td>  
	</tr>
{/section}
</table>
</div>
</div>

{include file="footer.tpl"}

