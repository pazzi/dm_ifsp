{include file="header.tpl"}

<div class="container mt-3">

<h2>Bolachão - novo</h2>

<script>
{literal}
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
{/literal}
</script>

<form method="POST" enctype="multipart/form-data" action="cadastro.php">
<div class="mb-3 mt-3">

  Nome:
  <input type="text"  class="form-control" name="nome">
<div class="mb-3 mt-3">
  Selo:
  <input type="text"  class="form-control" name="selo">
</div>

<div class="mb-3 mt-3">
   Ano:
  <input type="text"  class="form-control" name="ano">
</div>

<div class="mb-3 mt-3">
    Imagem:
    <input class="form-control" type="file" id="fileToUpload" name="fileToUpload" onchange="preview()">
</div> 

  <input type="submit" class="btn btn-primary" name="submit" value="submit">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">

</form> 

</div>
{include file="footer.tpl"}
