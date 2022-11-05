<?php
/* Smarty version 4.0.3, created on 2022-09-06 16:38:52
  from '/var/www/html/vinil/templates/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_6317a1cc9c4f18_97386012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a45f9afea826078429141c7e785ced371ee7a810' => 
    array (
      0 => '/var/www/html/vinil/templates/nav.tpl',
      1 => 1662492948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6317a1cc9c4f18_97386012 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="inicio.php">BOLACHÃO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="inicio.php">Bolachão</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="musico_inicio.php">Músico</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="busca.php">Bol_Musico</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inicio.php">Busca</a>
        </li>
      </ul>
      <form class="d-flex" method="POST" action="inicio.php">
        <input class="form-control me-2" type="text" placeholder="Search" name="nome">
	<button type="submit" class="btn btn-primary" name="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<?php }
}
