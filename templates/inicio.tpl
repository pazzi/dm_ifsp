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
<th>Nome</th><th>Selo</th><th>Ano</th><th>Capa</th><th>Excluir</th><th>Alterar</th>
</tr></thead>

{section name=i loop=$dados}
	<tr>
		<td> {$dados[i].nome}
		<div>
		<a href='op_musico.php?id={$dados[i].id}'><i class="bi-person">Incluir / Eliminar Músico</i></a>                     
		</div>
		Músicos: {section name=j loop=$det}
			{if $det[j].id_bolachao == $dados[i].id}
				<br>{$det[j].nome}
			{/if}
		{/section}
		</td>
		<td> {$dados[i].selo}</td>
		<td> {$dados[i].ano}</td>
		<td><img src='{$uploaddir}/{$dados[i].caminho_foto}' width='100px'></td>
	        <td><a href='inicio.php?id={$dados[i].id}'><i class="bi-eraser"></i></a></td>                     
        	<td><a href='alterar.php?id={$dados[i].id}'><i class="bi-pen"></i></a></td>  
	</tr>
{/section}
</table>
</div>
</div>

{include file="footer.tpl"}

