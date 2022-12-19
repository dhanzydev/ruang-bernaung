@extends('layout.kts')

@section('page-content')
<center>
    <br> <br> <br>
    <h2><b>#KamuTidakSendiri</b></h2>
    <br> <br>
    </center>
    <div class="row">
        @foreach ($data as $row)
        <div class="col-lg-4 mt-2">
            <div class="card">
                <div class="card-body">
                    @if ($row->anonymous == 0)
                      <h5 class="card-title font-italic">Anonymous</h5>
                    @else
                        <h5 class="card-title font-italic">{{ $row->name }}</h5>
                    @endif
                  <p class="card-text">{!! $row->story !!}</p>
                  <div class="d-flex justify-content-between align-items-center">
                      <a href="{{ route('react', $row->id) }}" class="btn btn-primary" id="react">Beri Pelukan</a>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-heart mx-1"></i>
                        <div id="ms-2">{{ $row->hug }}</div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        @endforeach
@endsection
