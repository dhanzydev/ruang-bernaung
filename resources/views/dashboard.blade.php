@extends('layout.dashboardlayouts')

@section('page-content')
    <div class="global-container">
        <div class="card-ruangcerita">
          <div class="card-body">
            <h1 class="card-title text-center">#RuangCerita</h1>
            <p class="fs-6 fst-italic text-center">Adakah yang membuatmu merasa mengganjal?</p>
          </div>
          <div class="card-text">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Siapakah Namamu?</label>
                <div class="mb-3 form-check">
                  </div>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                  <label class="form-check-label" for="exampleCheck1">Kirim Secara Anonymous.</label>
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Berceritalah, puan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label" for="exampleCheck1">Izinkan share ceritamu</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection