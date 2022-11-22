{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container mt-3">
<h4>Editar - Cursos</h4>

<form method="POST" action="alterar.php">
<input type="hidden" name="id" value="{$dados[0].id}">

<div class="mb-3 mt-3">
  Curso:
  <input type="text" class="form-control" name="nome" value="{$dados[0].NOME_DO_CURSO}">
</div>

<div class="mb-3 mt-3">
  Grau:
  <input type="text" class="form-control" name="grau" value="{$dados[0].GRAU}">
</div>

<div class="mb-3 mt-3">
  Município:
  <input type="text" class="form-control" name="municipio" value="{$dados[0].MUNICIPIO}">
</div>

  <input type="submit" class="btn btn-primary" name="submit" value="Salvar">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">
</form> 
</div>

{include file="footer.tpl"}

