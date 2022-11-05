<?php
/* Smarty version 4.0.3, created on 2022-09-07 16:21:10
  from '/home/carlos/vinil/templates/musico_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6318ef267d0245_27353654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c855b51e1701ca0097130e4c33cf9e7919f2b931' => 
    array (
      0 => '/home/carlos/vinil/templates/musico_cadastro.tpl',
      1 => 1662402511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6318ef267d0245_27353654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-3">

<h2>Músicos - novo</h2>

<form method="POST" action="musico_cadastro.php">
<div class="mb-3 mt-3">
  <input type="text"  class="form-control" name="nome" placeholder="Nome">
  </div>
<div class="mb-3 mt-3">
  <input type="radio" id="m" name="sexo" value="m">
  <label for="m">Masc</label><br>
  <input type="radio" id="f" name="sexo" value="f">
  <label for="f">Fem</label><br>
</div>

<div class="mb-3 mt-3">
  <input type="date"  class="form-control" name="nascimento" placeholder="dd-mm-aaaa" required>
</div>

  <input type="submit" class="btn btn-primary" name="submit" value="submit">
  <input type="reset" class="btn btn-warning" name="cancel" value="Cancelar">
  <a href="musico_inicio.php"><input type="button" class="btn btn-info" value="Voltar"></a>


</form> 

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
