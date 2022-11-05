<?php
/* Smarty version 4.0.3, created on 2022-02-10 14:39:42
  from '/home/carlos/projetos/smarty/templates/inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_62054dde7e02a3_63799371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f98533215effa5f00409c1148de24f5329b31bad' => 
    array (
      0 => '/home/carlos/projetos/smarty/templates/inicio.tpl',
      1 => 1644514778,
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
function content_62054dde7e02a3_63799371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

Usuário autorizado <br>
<ul>
<li> <a href="inicio.php?act=logout">Logout</a> </li>
<li><a href="curso_view.php">Cursos</a></li>
<li><a href="view.php">Campus</a></li>
<li><a href="campus_curso.php">Vincular curso a Campus</a></li>

</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
