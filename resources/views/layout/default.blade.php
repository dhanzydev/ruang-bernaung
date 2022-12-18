<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
  
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <!--Boostrap Icon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- My CSS -->
        <link rel="stylesheet" href="css/style.css" />
  
        <title>Bernaung Bersamaku</title>
        <style>
          nav {
            background-color: #ba6375;
          }
        </style>
      </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow p fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/">Ruang Bernaung</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#confession">#ConfessionRoom</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login"><b>Login</b></a>
              </li>
            </ul>
          </div>
        </div> 
    </nav>
      @yield('page-content')
    <footer class="bg-danger.bg-gradient fw-bold text-center pb-5 shadow-lg">
        <br>
        <p>You can find us at our <i class="bi bi-instagram"></i> <a href="https://www.instagram.com/mirahwidyaa/" class="text-black fw-bold">Social Media</a></p>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>