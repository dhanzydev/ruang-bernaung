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
    <title>Ruang Bernaung</title>
    <style>
        nav {
          background-color: #e7b1bc;
        }

    </style>

  </head>
  <body id="dashboard-body">
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top d-flex justify-content-between">
      <a class="navbar-brand" href="#">RUANG BERNAUNG</a>
      <h4 class="">@yield('username')</h4>
    </nav>
    <!-- Akhir Navbar -->

    <div class="row no-gutter mt-5 min-height">
        <div class="col-md-2 bg-light bg-dark mt-2 pr-2 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                  <a class="nav-link active text-white" href="{{ route('dashboard') }}">Ruang Cerita</a> <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{ route('kts') }}">#KamuTidakSendiri</a> <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/katamereka">Kata Mereka</a> <hr class="bg-secondary">
                  </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="/ourteam">Our Team</a> <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('ulasan') }}">Beri Ulasan</a> <hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('logout') }}"><b>LOGOUT</b></a> <hr class="bg-secondary">
                  </li>
              </ul>
        </div>
        <div class="col-md-10">
            @yield('page-content')
        </div>
    </div>
  </div>
  <footer class="bg-danger.bg-gradient fw-bold text-center pb-3 shadow-lg">
    <br>
    <p>You can find us at our <i class="bi bi-instagram"></i> <a href="https://www.instagram.com/mirahwidyaa/" class="text-black fw-bold">Social Media</a></p>
  </footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="dashboard.js"></script>
    <script>

    </script>
  </body>
</html>
