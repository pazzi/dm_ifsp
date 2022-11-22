{include file="header.tpl"}

<div class="container mt-3">

<h2>Cursos de graduação - novo</h2>

<form method="POST" enctype="multipart/form-data" action="cadastro.php">
<div class="mb-3 mt-3">

  Nome:
  <input type="text"  class="form-control" name="nome">
<div class="mb-3 mt-3">
  Selo:
  <input type="text"  class="form-control" name="grau">
</div>

<div class="mb-3 mt-3">
   Ano:
  <input type="text"  class="form-control" name="ano">
</div>

  <input type="submit" class="btn btn-primary" name="submit" value="submit">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">

</form> 

</div>
{include file="footer.tpl"}
