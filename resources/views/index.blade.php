@extends('layout.default')

@section('page-content')
     <!-- Jumbotron -->
     <section class="jumbotron text-center mt-5">
        <img src="img/LOGO BERNAUNG.png" alt="Bernaung Bersamaku" width="200" class="rounded-circle img-thumbnail" />
        <h1 class="display-4 mt-4">BERNAUNG BERSAMAKU</h1>
        <p class="lead">Bergeraklah dan bangkitlah, dirimu tidak sendiri! Mari saling membersamai para puan.</p>
        <a class="btn btn-danger" href="/signup" role="button">Mari Bernaung</a>
        <br><br><br>
      </section>
      <!-- Akhir Jumbotron -->

      <!-- About -->
      <section id="about">
        <div class="card text-bg-light text-center">
          <img src="img/pic-1.jpeg" class="card-img" alt="">
          <div class="card-img-overlay">
            <br> <br> <br> <br> <br> <br> <br>
            <h5 class="card-title mt-5">"BERNAUNG BERSAMAKU"</h5>
            <p class="card-text">Komunitas yang bergerak dibidang kesehatan mental yang berempati, membangkitkan self-love serta mengapresiasi perbedaan yang ada didalam diri masing-masing orang.
              Komunitas ini mengajak seluruh masyarakat terutama para wanita untuk bebas berekspresi tanpa adanya batasan.
              Bebas berpendapat dan juga bebas berekspresi akan sebuah hal sangat penting untuk kesehatan masing-masing induvidu.
            </p>
            <p class="card-text"><small>Mari membersamai para puan!</small></p>
          </div>
        </div>
      </section>
      <!--Akhir About-->

      <!-- Confession -->
      <section id="confession">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <br> <br> <br> <br> <br> <br> <br>
              <h2>#ConfessionRoom</h2>
              @if ($message = Session::get('berhasil'))
                <div class="alert alert-success alert-dismissible show fade">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible show fade">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form method="POST" action="{{ route('story-index.store') }}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Tuliskan Nama Kamu:</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your message with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Perbuatan Baik Apa Hari Ini?</label>
                  <input type="text" class="form-control" name="story" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" name="anonymous" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Kirim Secara Anonymous</label>
                </div>
                <button type="submit" class="btn btn-secondary">Kirim</button>
                <br><br><br>
              </form>
      </section>
      <!-- Akhir Confession -->

      <!-- Awal Slide -->
      <section class="Slide">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/newslide-1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/newslide-2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/newslide-3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/newslide-4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/newslide-5.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <!-- Akhir Slide -->

      <!--Galery Motivation-->
      <section class="Galery">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/galery/galery-1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/galery/galery-2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/galery/galery-3.jpeg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <!--Akhir Galery Motivation-->

      <!--Contact Us-->
      <section id="contact">
        <div class="container">
          <div class="row text-center">
            <div clas="col">
              <br><br><br>
              <h2>CONTACT US</h2>
              <br><br><br>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible show fade">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
              <form method="POST" action="{{ route('contact-us.store') }}">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" name="name" id="name" aria-describedby="name">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="email">
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" name="messages" id="pesan" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-secondary">Kirim</button>
                <br><br><br>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!--Akhir Contact Us-->
@endsection
