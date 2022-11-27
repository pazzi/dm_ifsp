<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">IFSP - Cursos de graduação</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      {if $usuario != "user"}
        <li class="nav-item">
          <a class="nav-link" href="index.php">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index_cidade.php">Cidades</a>
        </li>
      {/if}

        <li class="nav-item">
          <a class="nav-link" href="session.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Busca</a>
        </li>
      </ul>

      {if $nav != "0"}
        <form class="d-flex" method="POST" action="{$pagina}">
          <input class="form-control me-2" type="text" placeholder="Search" name="nome">
	        <button type="submit" class="btn btn-primary" name="submit">Buscar</button>
        </form>
	{/if}

    </div>
  </div>
</nav>

