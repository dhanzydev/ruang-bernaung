@extends('layout.dashboardlayouts')
@section('page-content')
<div class="global-container">
    <div class="card-ruangcerita">
      <div class="card-body">
        <h1 class="card-title text-center">Ulasan</h1>
        <p class="fs-6 fst-italic text-center">Berikanlah kritik dan saran agar kami semakin mengembangkan kualitas Bernaung Bersamaku.</p>
      </div>
      <div class="card-text">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Siapakah Namamu?</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Kirik</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Saran</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection