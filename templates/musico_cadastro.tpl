{include file="header.tpl"}

<div class="container mt-3">

<h2>Músicos - novo</h2>

<form method="POST" action="musico_cadastro.php">
<div class="mb-3 mt-3">
  <input type="text"  class="form-control" name="nome" placeholder="Nome">
  </div>
<div class="mb-3 mt-3">
  <input type="radio" id="m" name="sexo" value="m">
  <label for="m">Masc</label><br>
  <input type="radio" id="f" name="sexo" value="f">
  <label for="f">Fem</label><br>
</div>

<div class="mb-3 mt-3">
  <input type="date"  class="form-control" name="nascimento" placeholder="dd-mm-aaaa" required>
</div>

  <input type="submit" class="btn btn-primary" name="submit" value="submit">
  <input type="reset" class="btn btn-warning" name="cancel" value="Cancelar">
  <a href="musico_inicio.php"><input type="button" class="btn btn-info" value="Voltar"></a>


</form> 

</div>
{include file="footer.tpl"}
