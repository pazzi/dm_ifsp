{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container-fluid mt-3">
<div class="row">
<div class="col-6">
<h3>Músicos para incluir</h3>
<div class="table-responsive">
<table class="table table-bordered">
<thead><tr>

<th>Músico</th>
</tr></thead>

{section name=i loop=$dados}
	<tr>
	        <td><a href='op_musico.php?id_musico={$dados[i].id}&id_bolachao={$id_bolachao}&op=1'>{$dados[i].nome}</a></td>                     
	</tr>
{/section}
</table>
</div>
</div>
<div class="col-6">
<h3>Músicos para excluir</h3>
<div class="table-responsive">
<table class="table table-bordered">
<thead><tr>
 
<th>Músico</th>
</tr></thead>
{section name=j loop=$dadosja}
         <tr>
	        <td><a href='op_musico.php?id_musico={$dadosja[j].id_musico}&id_bolachao={$dadosja[j].id_bolachao}&op=2'>{$dadosja[j].nome}</a></td>                     
         </tr>
{/section}
 
</table>
 </div>
 </div>

</div>
</div>

{include file="footer.tpl"}

