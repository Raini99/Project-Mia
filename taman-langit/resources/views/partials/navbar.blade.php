
<!-- Image and text -->
{{-- <nav class="navbar navbar-light bg-light">
  <div class="container"> 
    <a class="navbar-brand" href="#">
    <img src="img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <span style="font-size: 50px; font-weight: bold; color: rgb(49, 201, 168)">Wisata</span>Taman Langit
  </a>

  <div class="row">
    <div class="col">
      <i class="bi bi-telephone-fill" style="font-size:30px; color:green;"></i>
    </div>
    <div class="col">
      <ul>
        <li>081XXXXXXXXX</li>
        <li>081XXXXXXXXX</li>
      </ul>
    </div>
    <div class="col">
      <i class="bi bi-stopwatch-fill" style="font-size:30px; color:green;"></i>
    </div>
    <div class="col-md-auto">
      <ul>
        <li>senin-jum'at 08.00 - 20.00</li>
        <li>Saptu - minggu 10.00 - 16.00</li>
      </ul>
    </div>
  </div>
</nav> --}}

<div class="container">
<div class="row">
  <div class="col-8">
    <a class="navbar-brand" href="#">
      <img src="img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
      <span style="font-size: 50px; font-weight: bold; color: rgb(49, 201, 168)">Wisata</span>Taman Langit
    </a>
  </div>
  <div class="col">
    <i class="bi bi-telephone-fill" style="font-size:30px; color:green;"></i>
    <ul>
        <li>081XXXXXXXXX</li>
        <li>081XXXXXXXXX</li>
      </ul>
  </div>
  <div class="col">
    <i class="bi bi-stopwatch-fill display-inline" style="font-size:30px; color:green;"></i>
    <ul>
      <li>senin-jum'at 08.00 - 20.00</li>
      <li>Saptu - minggu 10.00 - 16.00</li>
    </ul>
  </div>
</div>
</div>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "paket-makanan") ? 'active' : '' }}" href="paket-makanan">PAKET MAKANAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "galeri-wisata") ? 'active' : '' }}" href="galeri-wisata">GALERI WISATA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "boking") ? 'active' : '' }}" href="boking">BOKING TEMPAT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Blog") ? 'active' : '' }}" href="/post">BLOG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TESTIMONI</a>
        </li>
      </ul>
    </div>
</div>
</nav>

{{-- <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
  <div class="container">
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> --}}

