

<!-- Navbar bootstrap -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <i class="fa-solid fa-heart"></i>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('products.index')}}">Productos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('clients.index')}}">Lista de clientes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('addresses.index')}}">Direcciones</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('sales.index')}}">Ventas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

