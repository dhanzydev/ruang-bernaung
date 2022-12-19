@extends('layout.dashboardlayouts')

@section('username')
{{ $username }}
@endsection

@section('page-content')
    <div class="global-container">
        <div class="card-ruangcerita">
          <div class="card-body">
            <h1 class="card-title text-center">#RuangCerita</h1>
            <p class="fs-6 fst-italic text-center">Adakah yang membuatmu merasa mengganjal?</p>
          </div>
          <div class="card-text">
            @if ($message = Session::get('success'))
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
            <form method="POST" action="{{ route('story.store') }}">
                @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Siapakah Namamu?</label>
                <div class="mb-3 form-check">
                  </div>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" />
                <div class="mb-3 form-check">
                  <input type="checkbox" name="anonymous" class="form-check-input" id="exampleCheck1" />
                  <label class="form-check-label"  for="exampleCheck1">Kirim Secara Anonymous.</label>
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Berceritalah, puan</label>
                <textarea class="form-control" name="story" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="share" id="exampleCheck1" />
                <label class="form-check-label" for="exampleCheck1">Izinkan share ceritamu</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
