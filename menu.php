<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:#9AC791">
  <div class="container-fluid" >

    <a class="navbar-brand" href="index.php">
      Loja
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Principal</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="usuarioCadastrar.php">Cadastrar usuário</a></li>
            <li><a class="dropdown-item" href="produtoCadastrar.php">Cadastrar produto</a></li>
            <li><a class="dropdown-item" href="produtocategoriaCadastrar.php">Cadastrar categoria de produto</a></li>
            <li><a class="dropdown-item" href="clienteCadastrar.php">Cadastrar cliente</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Listas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="usuarioListar.php">Listar usuários</a></li>
            <li><a class="dropdown-item" href="produtoListar.php">Listar produtos</a></li>
            <li><a class="dropdown-item" href="produtocategoriaListar.php">Listar categorias de produto</a></li>
            <li><a class="dropdown-item" href="clienteListar.php">Listar clientes</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="sair.php" class="nav-link">Sair</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>

