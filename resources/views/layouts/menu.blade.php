<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Toko Bismillah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('kategori') }}">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('kontak') }}">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('about') }}">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>


          </li>
          <li class="nav-item">
            <a class="nav-link disabled"></a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
