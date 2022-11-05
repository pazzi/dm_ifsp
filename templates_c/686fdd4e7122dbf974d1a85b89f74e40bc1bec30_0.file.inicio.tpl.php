<?php
/* Smarty version 4.0.3, created on 2022-09-07 15:32:01
  from '/home/carlos/vinil/templates/inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6318e3a185d721_47492944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '686fdd4e7122dbf974d1a85b89f74e40bc1bec30' => 
    array (
      0 => '/home/carlos/vinil/templates/inicio.tpl',
      1 => 1662575488,
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
function content_6318e3a185d721_47492944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

Usuário autorizado <br>

<div class="container mt-3">
<div>
<a href='cadastro.php'><i class="bi-plus">Novo </i></a>                     
</div>
<div class="table-responsive">
<table class="table">
<thead><tr>
<th>Nome</th><th>Selo</th><th>Ano</th><th>Capa</th><th>Excluir</th><th>Alterar</th>
</tr></thead>

<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dados']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
	<tr>
		<td> <?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nome'];?>

		<div>
		<a href='op_musico.php?id=<?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
'><i class="bi-person">Incluir / Eliminar Músico</i></a>                     
		</div>
		Músicos: <?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['det']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
			<?php if ($_smarty_tpl->tpl_vars['det']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id_bolachao'] == $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']) {?>
				<br><?php echo $_smarty_tpl->tpl_vars['det']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nome'];?>

			<?php }?>
		<?php
}
}
?>
		</td>
		<td> <?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['selo'];?>
</td>
		<td> <?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ano'];?>
</td>
		<td><img src='<?php echo $_smarty_tpl->tpl_vars['uploaddir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['caminho_foto'];?>
' width='100px'></td>
	        <td><a href='inicio.php?id=<?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
'><i class="bi-eraser"></i></a></td>                     
        	<td><a href='alterar.php?id=<?php echo $_smarty_tpl->tpl_vars['dados']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
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
