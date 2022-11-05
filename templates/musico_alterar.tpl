{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container mt-3">
<h4>Editar - Musico</h4>

<form method="POST" action="musico_alterar.php">
<input type="hidden" name="id" value="{$dados[0].id}">

<div class="mb-3 mt-3">
  <input type="text" class="form-control" name="nome" value="{$dados[0].nome}">
</div>

<div class="mb-3 mt-3">
{if $dados[0].sexo == "m"}
	  <input type="radio" id="m" name="sexo" value="m" checked>
	  <label for="m">Masc</label><br>
	  <input type="radio" id="f" name="sexo" value="f">
	  <label for="f">Fem</label><br>
  {else}
	  <input type="radio" id="m" name="sexo" value="m">
	  <label for="m">Masc</label><br>
	  <input type="radio" id="f" name="sexo" value="f" checked>
	  <label for="f">Fem</label><br>
  {/if}
</div>

<div class="mb-3 mt-3">
  <input type="text" class="form-control" name="nascimento" value="{$dados[0].nascimento}">
</div>

  <input type="submit" class="btn btn-primary" name="submit" value="Salvar">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">
  <a href="musico_inicio.php"><input type="button" class="btn btn-info" value="Voltar"></a>

</form> 
</div>

{include file="footer.tpl"}

