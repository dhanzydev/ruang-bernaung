<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://kit.fontawesome.com/a264ba0814.js" crossorigin="anonymous"></script>
    <title>Ruang Bernaung</title>
    <style>
        nav {
          background-color: #e7b1bc;
        }

    </style>

  </head>
  <body id="kts-body">
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <a class="navbar-brand" href="#">RUANG BERNAUNG</a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    {{-- <div class="container-fluid p-0"> --}}
      <div class="row no-gutter mt-5 min-vh-100">
          <div class="col-md-2 bg-light bg-dark mt-2 pr-2 pt-4">
              <ul class="nav flex-column ml-3 mb-5">
                  <li class="nav-item">
                    <a class="nav-link active text-white" href="/dashboard">Ruang Cerita</a> <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="/kts">#KamuTidakSendiri</a> <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="/katamereka">Kata Mereka</a> <hr class="bg-secondary">
                    </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="/ourteam">Our Team</a> <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="/ulasan">Beri Ulasan</a> <hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="/"><b>LOGOUT</b></a> <hr class="bg-secondary">
                    </li>
                </ul>
          </div>
          <div class="col-md-10"> 
              @yield('page-content')
          </div>
        </div>
      </div>
      <footer class="bg-danger.bg-gradient fw-bold text-center pb-3 shadow-lg mt-1">
        <br>
        <p>You can find us at our <i class="bi bi-instagram"></i> <a href="https://www.instagram.com/mirahwidyaa/" class="text-black fw-bold">Social Media</a></p>
      </footer>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script type="text/javascript" src="dashboard.js"></script>
  </body>
</html>
