<?php
/* Smarty version 4.0.3, created on 2022-09-12 16:39:01
  from '/home/carlos/vinil/templates/sobre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_631f8ad54d27c2_31614935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64de25d46ac246b4b125e1f0c6bc83762e7f0e1f' => 
    array (
      0 => '/home/carlos/vinil/templates/sobre.tpl',
      1 => 1662584714,
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
function content_631f8ad54d27c2_31614935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-3 border border-secondary">
<h3>Bolachão</h3>
<h4>Destina-se aos amantes de disco de vinil que tem necessidade de gerir sua coleção</h4>
<h5>Desenvolvimento</h5>
<p>Linguagem de programação - PHP + Smarty Template - separar o código PHP do HTML</p>
<p>Banco de Dados MySQL</p>
<p>HTML-5 + Bootstrapp</p

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
