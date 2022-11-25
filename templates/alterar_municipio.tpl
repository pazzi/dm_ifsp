{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container mt-3">
<h4>Editar - Municípios</h4>

<form method="POST" action="alterar_municipio.php">
<input type="hidden" name="id" value="{$dados[0].id}">

<div class="mb-3 mt-3">
  Código do Município:
  <input type="text" class="form-control" name="codigo" value="{$dados[0].CODIGO_DO_ENDERECO}">
</div>

<div class="mb-3 mt-3">
  Município:
  <input type="text" class="form-control" name="municipio" value="{$dados[0].MUNICIPIO}">
</div>

<div class="mb-3 mt-3">
  Endereço:
  <input type="text" class="form-control" name="endereco" value="{$dados[0].ENDERECO}">
</div>

<div class="mb-3 mt-3">
  Número:
  <input type="text" class="form-control" name="numero" value="{$dados[0].NUMERO_ENDERECO}">
</div>

<div class="mb-3 mt-3">
  Complemento:
  <input type="text" class="form-control" name="complemento" value="{$dados[0].COMPLEMENTO}">
</div>

<div class="mb-3 mt-3">
  Bairro:
  <input type="text" class="form-control" name="bairro" value="{$dados[0].BAIRRO}">
</div>

<div class="mb-3 mt-3">
  <input type="hidden" class="form-control" name="uf" value="SP">
</div>

  <input type="submit" class="btn btn-primary" name="submit" value="Salvar">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">
</form> 
</div>

{include file="footer.tpl"}

