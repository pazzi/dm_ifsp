<?php
/* Smarty version 4.0.3, created on 2022-09-07 16:17:08
  from '/home/carlos/vinil/templates/cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6318ee347d81a8_00169112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3b01b03aaa0ebedc21e212b8902403625dc1658' => 
    array (
      0 => '/home/carlos/vinil/templates/cadastro.tpl',
      1 => 1662403332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6318ee347d81a8_00169112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-3">

<h2>Bolachão - novo</h2>

<?php echo '<script'; ?>
>

    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }

<?php echo '</script'; ?>
>

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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
