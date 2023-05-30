<style>
  .nav-link-btn {
    background-color: white;
    color: black;
    border: none;
    padding: 0.5rem 1rem;
    margin-right: 10px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }
  .nav-link-btn:hover {
    background-color: #f1f1f1;
  }
</style>
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="<?= base_url('logo.png') ?>" style="width:100px" />
    </a>
    <!-- Navbar brand yo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <button class="nav-link-btn" onclick="location.href='/user/home'">Home</button>
        </li>
        <li class="nav-item">
          <button class="nav-link-btn" onclick="location.href='/user/kalori'">Hitung Kalori</button>
        </li>
        <li class="nav-item">
          <button class="nav-link-btn" onclick="location.href='/user/histori-kalori'">Track Kalori</button>
        </li>
        <li class="nav-item">
          <button class="nav-link-btn" onclick="location.href='/logout'">Logout</button>
        </li>
      </ul>
    </div>
  </nav>
</header>