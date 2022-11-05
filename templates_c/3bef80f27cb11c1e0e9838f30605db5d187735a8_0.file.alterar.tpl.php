<?php
/* Smarty version 4.0.3, created on 2022-09-07 16:42:26
  from '/home/carlos/vinil/templates/alterar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6318f422710341_08058578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bef80f27cb11c1e0e9838f30605db5d187735a8' => 
    array (
      0 => '/home/carlos/vinil/templates/alterar.tpl',
      1 => 1662408100,
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
function content_6318f422710341_08058578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-3">
<h4>Editar - Bolachão</h4>

<img class="rounded img-fluid" width="150px" src="<?php echo $_smarty_tpl->tpl_vars['uploaddir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dados']->value[0]['caminho_foto'];?>
"></img>
<form method="POST" action="alterar.php">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value[0]['id'];?>
">

<div class="mb-3 mt-3">
  Nome:
  <input type="text" class="form-control" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value[0]['nome'];?>
">
</div>

<div class="mb-3 mt-3">
  Selo:
  <input type="text" class="form-control" name="selo" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value[0]['selo'];?>
">
</div>

<div class="mb-3 mt-3">
  Ano:
  <input type="text" class="form-control" name="ano" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value[0]['ano'];?>
">
</div>

  <input type="submit" class="btn btn-primary" name="submit" value="Salvar">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">
</form> 
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
