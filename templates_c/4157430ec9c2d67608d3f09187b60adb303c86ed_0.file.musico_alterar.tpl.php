<?php
/* Smarty version 4.0.3, created on 2022-09-06 19:28:56
  from '/var/www/html/vinil/templates/musico_alterar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6317c9a8baa948_98227959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4157430ec9c2d67608d3f09187b60adb303c86ed' => 
    array (
      0 => '/var/www/html/vinil/templates/musico_alterar.tpl',
      1 => 1662402971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6317c9a8baa948_98227959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-3">
<h4>Editar - Musico</h4>

<form method="POST" action="musico_alterar.php">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value[0]['id'];?>
">

<div class="mb-3 mt-3">
  <input type="text" class="form-control" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value[0]['nome'];?>
">
</div>

<div class="mb-3 mt-3">
<?php if ($_smarty_tpl->tpl_vars['dados']->value[0]['sexo'] == "m") {?>
	  <input type="radio" id="m" name="sexo" value="m" checked>
	  <label for="m">Masc</label><br>
	  <input type="radio" id="f" name="sexo" value="f">
	  <label for="f">Fem</label><br>
  <?php } else { ?>
	  <input type="radio" id="m" name="sexo" value="m">
	  <label for="m">Masc</label><br>
	  <input type="radio" id="f" name="sexo" value="f" checked>
	  <label for="f">Fem</label><br>
  <?php }?>
</div>

<div class="mb-3 mt-3">
  <input type="text" class="form-control" name="nascimento" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value[0]['nascimento'];?>
">
</div>

  <input type="submit" class="btn btn-primary" name="submit" value="Salvar">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">
  <a href="musico_inicio.php"><input type="button" class="btn btn-info" value="Voltar"></a>

</form> 
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
