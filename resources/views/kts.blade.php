@extends('layout.kts')

@section('page-content')
<center>
    <br> <br> <br> 
    <h2><b>#KamuTidakSendiri</b></h2>
    <br> <br>
    </center>
    <div class="row">
        @for ($i = 0; $i <11; $i++)
        <div class="col-lg-4 mt-2">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title font-italic">Anonymous</h5>
                  <p class="card-text">Tunangan aku selingkuh lagi :) entah sampai kapan aku maksa diri buat bertahan. Udah bingung harus ngapain lagi</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn btn-primary">Beri Pelukan</a>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-heart mx-1"></i>
                        <div id="ms-2">1</div>
                    </div>
                  </div>
                  
              </div>
            </div>
        </div>
        @endfor
@endsection