{include file="header.tpl"}
{include file="nav.tpl"}

Usuário autorizado <br>

<div class="container mt-3">
<div>
<a href='cadastro.php'><i class="bi-plus">Novo </i></a>                     
</div>
<div class="table-responsive">
<table class="table">
<thead><tr>
<th>Nome</th><th>Grau</th><th>Município</th><th>Excluir</th><th>Alterar</th>
</tr></thead>

{section name=i loop=$dados}
	<tr>
		<td> {$dados[i].NOME_DO_CURSO}</td>
		<td> {$dados[i].GRAU}</td>
		<td> {$dados[i].MUNICIPIO}</td>
	        <td><a href='inicio.php?id={$dados[i].id}'><i class="bi-eraser"></i></a></td>                     
        	<td><a href='alterar.php?id={$dados[i].id}'><i class="bi-pen"></i></a></td>  
	</tr>
{/section}
</table>
</div>
</div>

{include file="footer.tpl"}

