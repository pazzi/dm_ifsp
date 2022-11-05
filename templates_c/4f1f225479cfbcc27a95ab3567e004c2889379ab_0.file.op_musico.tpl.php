<?php
/* Smarty version 4.0.3, created on 2022-09-06 21:10:32
  from '/var/www/html/vinil/templates/op_musico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6317e1786e49f8_94405856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f1f225479cfbcc27a95ab3567e004c2889379ab' => 
    array (
      0 => '/var/www/html/vinil/templates/op_musico.tpl',
      1 => 1662509426,
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
function content_6317e1786e49f8_94405856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid mt-3">
<div class="table-responsive">
<table class="table table-bordered">
<thead><tr>

<th>Nome</th><th>Incluir</th>
</tr></thead>

<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
	<tr><td> <?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nome'];?>
 </td>
	        <td><a href='op_musico.php?id_musico=<?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_bolachao=<?php echo $_smarty_tpl->tpl_vars['id_bolachao']->value;?>
&op=1'><i class="bi-check"></i></a></td>                     
	</tr>
<?php
}
}
?>
</table>
</div>

<div class="table-responsive">
<table class="table table-bordered">
<thead><tr>

<th>Nome</th><th>Excluir</th>
</tr></thead>

<?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dados_s']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
	<tr><td> <?php echo $_smarty_tpl->tpl_vars['dados_s']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nome'];?>
 </td>
	        <td><a href='inicio.php?id=<?php echo $_smarty_tpl->tpl_vars['dados_s']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_bolachao=<?php echo $_smarty_tpl->tpl_vars['id_bolachao']->value;?>
'><i class="bi-eraser"></i></a></td>                     
	</tr>
<?php
}
}
?>

</table>
</div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
