<?php
/* Smarty version 4.0.3, created on 2022-09-07 17:32:37
  from '/home/carlos/vinil/templates/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6318ffe58c69b2_66034598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d9e86a9d51deda300ff24781bacc14c4d97da6' => 
    array (
      0 => '/home/carlos/vinil/templates/nav.tpl',
      1 => 1662582375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6318ffe58c69b2_66034598 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">BOLACHÃO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      <?php if ($_smarty_tpl->tpl_vars['user']->value != "user") {?>
        <li class="nav-item">
          <a class="nav-link" href="inicio.php">Bolachão</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="musico_inicio.php">Músico</a>
        </li>
	<?php }?>
        <li class="nav-item">
          <a class="nav-link" href="session.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inicio.php">Busca</a>
        </li>
      </ul>
      <?php if ($_smarty_tpl->tpl_vars['user']->value != "user") {?>
      <form class="d-flex" method="POST" action="inicio.php">
      <?php } else { ?>
      <form class="d-flex" method="POST" action="index.php">
      <?php }?>
        <input class="form-control me-2" type="text" placeholder="Search" name="nome">
	<button type="submit" class="btn btn-primary" name="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<?php }
}
