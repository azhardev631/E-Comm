<?php 
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
    $total = ProductController::CartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">E-Comm</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Cart({{ $total }})</a>
          </li>
          @if (Session::has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Session::get('user')['name'] }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a class="dropdown-item" href="/login">Login</a></li>
          @endif
          
        </ul>
        <form class="d-flex" action="search">
          <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>