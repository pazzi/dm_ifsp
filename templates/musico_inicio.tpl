{include file="header.tpl"}
{include file="nav.tpl"}

Usuário autorizado <br>

<div class="container-fluid mt-3">
<div class="table-responsive">
<a href='musico_cadastro.php'><i class="bi-plus">Novo</i></a>                     
<table class="table table-bordered">
<thead><tr>

<th>Nome</th><th>Sexo</th><th>Nascimento</th><th>lixo</th><th>alter</th>
</tr></thead>

{section name=i loop=$dados}
	<tr><td> {$dados[i].nome} </td><td> {$dados[i].sexo} </td><td> {$dados[i].nascimento} </td>
	        <td><a href='musico_inicio.php?id={$dados[i].id}'><i class="bi-eraser"></i></a></td>                     
        	<td><a href='musico_alterar.php?id={$dados[i].id}'><i class="bi-pen"></i></a></td>  

	</tr>
{/section}
</table>
</div>
</div>

{include file="footer.tpl"}

