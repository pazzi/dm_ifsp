<?php
/* Smarty version 4.0.3, created on 2022-09-07 16:29:30
  from '/home/carlos/vinil/templates/op_musico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6318f11aa99945_77366194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8a4f1b640f5682f36bc325965d25000d6775ee7' => 
    array (
      0 => '/home/carlos/vinil/templates/op_musico.tpl',
      1 => 1662576374,
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
function content_6318f11aa99945_77366194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid mt-3">
<div class="row">
<div class="col-6">
<h3>Músicos para incluir</h3>
<div class="table-responsive">
<table class="table table-bordered">
<thead><tr>

<th>Músico</th>
</tr></thead>

<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
	<tr>
	        <td><a href='op_musico.php?id_musico=<?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_bolachao=<?php echo $_smarty_tpl->tpl_vars['id_bolachao']->value;?>
&op=1'><?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nome'];?>
</a></td>                     
	</tr>
<?php
}
}
?>
</table>
</div>
</div>
<div class="col-6">
<h3>Músicos para excluir</h3>
<div class="table-responsive">
<table class="table table-bordered">
<thead><tr>
 
<th>Músico</th>
</tr></thead>
<?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dadosja']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
         <tr>
	        <td><a href='op_musico.php?id_musico=<?php echo $_smarty_tpl->tpl_vars['dadosja']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id_musico'];?>
&id_bolachao=<?php echo $_smarty_tpl->tpl_vars['dadosja']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id_bolachao'];?>
&op=2'><?php echo $_smarty_tpl->tpl_vars['dadosja']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nome'];?>
</a></td>                     
         </tr>
<?php
}
}
?>
 
</table>
 </div>
 </div>

</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
