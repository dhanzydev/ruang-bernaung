@extends('layout.dashboardlayouts')
@section('page-content')
    <!-- Awal KataMereka -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slider1.png" class="d-block w-100" width="100px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/slider2.png" class="d-block w-100" width="100px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/slider3.png" class="d-block w-100" width="100px" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
      <!-- Akhir Kata Mereka -->

        <div class="untukcard card-deck">
            <div class="card" style="width: 18rem;">
              <br><br>
                <img src="img/LOGO BERNAUNG.png" class="rounded mx-auto d-block" width="400px" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Ruang Bernaung</h5>
                  <p class="card-text text-center">Yuk curhat! Untuk kamu yang lagi punya masalah, butuh dukungan, atau sekedar ingin menulis apapun, Sobat Bersama siap mendengarkan kisahmu.</p>
                  <a href="/dashboard" class="btn btn-primary btn-lg btn-block">Yuk Curhat!</a>
                </div>
              </div>
          </div>
@endsection