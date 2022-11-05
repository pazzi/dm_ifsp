{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container mt-3">
<div class="table-responsive">
<table class="table">
<thead><tr>
<th>Curso</th><th>Selo</th><th>Ano</th><th>Capa</th>
</tr></thead>

{section name=i loop=$dados}
	<tr>
		<td> {$dados[i].id}<br>
		</td>
		<td> {$dados[i].nome}</td>
		<td> {$dados[i].grau}</td>
		<td><img src='{$uploaddir}/{$dados[i].caminho_foto}' width='100px'></td>
	</tr>
{/section}
</table>
</div>
</div>

{include file="footer.tpl"}

