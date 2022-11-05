<?php
/* Smarty version 4.0.3, created on 2022-09-05 14:53:14
  from '/var/www/html/vinil/templates/musico_inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6316378a23a917_75601248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd8237510400f6e4db74b274eb32e79ea843a4b9' => 
    array (
      0 => '/var/www/html/vinil/templates/musico_inicio.tpl',
      1 => 1662065891,
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
function content_6316378a23a917_75601248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

Usuário autorizado <br>

<div class="container-fluid mt-3">
<div class="table-responsive">
<a href='musico_cadastro.php'><i class="bi-plus">Novo</i></a>                     
<table class="table table-bordered">
<thead><tr>

<th>Nome</th><th>Sexo</th><th>Nascimento</th><th>lixo</th><th>alter</th>
</tr></thead>

<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
	<tr><td> <?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nome'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['sexo'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nascimento'];?>
 </td>
	        <td><a href='musico_inicio.php?id=<?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
'><i class="bi-eraser"></i></a></td>                     
        	<td><a href='musico_alterar.php?id=<?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
'><i class="bi-pen"></i></a></td>  

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
