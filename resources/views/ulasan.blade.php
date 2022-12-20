@extends('layout.dashboardlayouts')
@section('page-content')
<div class="global-container">
    <div class="card-ruangcerita">
        <div class="card-body">
            <h1 class="card-title text-center">Ulasan</h1>
            <p class="fs-6 fst-italic text-center">Berikanlah kritik dan saran agar kami semakin mengembangkan kualitas
                Bernaung Bersamaku.</p>
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
            <form method="POST" action="{{ route('ulasan.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Siapakah Namamu?</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Kirik</label>
                    <textarea class="form-control" name="kritik" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Saran</label>
                    <textarea class="form-control" name="saran" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
