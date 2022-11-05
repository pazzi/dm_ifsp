{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container mt-3">
<h4>Editar - Bolachão</h4>

<img class="rounded img-fluid" width="150px" src="{$uploaddir}/{$dados[0].caminho_foto}"></img>
<form method="POST" action="alterar.php">
<input type="hidden" name="id" value="{$dados[0].id}">

<div class="mb-3 mt-3">
  Nome:
  <input type="text" class="form-control" name="nome" value="{$dados[0].nome}">
</div>

<div class="mb-3 mt-3">
  Selo:
  <input type="text" class="form-control" name="selo" value="{$dados[0].selo}">
</div>

<div class="mb-3 mt-3">
  Ano:
  <input type="text" class="form-control" name="ano" value="{$dados[0].ano}">
</div>

  <input type="submit" class="btn btn-primary" name="submit" value="Salvar">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">
</form> 
</div>

{include file="footer.tpl"}

