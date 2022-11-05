<?php
/* Smarty version 4.0.3, created on 2022-09-01 16:52:28
  from '/var/www/html/vinil/templates/session.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_63110d7c421f72_38841461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '017fbf250f330d5e6b2fa79a56226d79a17f3833' => 
    array (
      0 => '/var/www/html/vinil/templates/session.tpl',
      1 => 1662061222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63110d7c421f72_38841461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo $_smarty_tpl->tpl_vars['msg']->value;?>
 <br>

<div class="container mt-3">
 <h3>Validação de usuários</h3>
  <p>Insira o userid e senha e aperte "Login".</p>
<form method="POST" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Username" name="username">
    </div>
    <div class="col">
      <input type="password" class="form-control" placeholder="Senha" name="passwd">
    </div>
    <div class="col">
    <button type="submit" class="btn btn-primary" name="login" value="Login">Login</button>
    </div>
  </div>
</form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
