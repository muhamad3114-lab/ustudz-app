<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">USTUDZ APP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('tanah.index') }}">Tanah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('bangunan.index') }}">Bangunan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ruangan.index') }}">Ruangan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('kategori.index') }}">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('barang.index') }}">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>