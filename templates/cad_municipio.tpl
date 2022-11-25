{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container mt-3">
<h4>Editar - Municípios</h4>

<form method="POST" action="cad_municipio.php">

<div class="mb-3 mt-3">
  Código do Município:
  <input type="text" class="form-control" name="codigo" >
</div>

<div class="mb-3 mt-3">
  Município:
  <input type="text" class="form-control" name="municipio" >
</div>

<div class="mb-3 mt-3">
  Endereço:
  <input type="text" class="form-control" name="endereco">
</div>

<div class="mb-3 mt-3">
  Número:
  <input type="text" class="form-control" name="numero">
</div>

<div class="mb-3 mt-3">
  Complemento:
  <input type="text" class="form-control" name="complemento">
</div>

<div class="mb-3 mt-3">
  Bairro:
  <input type="text" class="form-control" name="bairro">
</div>

<div class="mb-3 mt-3">
  <input type="hidden" class="form-control" name="uf" value="SP">
</div>

  <input type="submit" class="btn btn-primary" name="submit" value="Salvar">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">
</form> 
</div>

{include file="footer.tpl"}

