@extends('layout.main')
@section('content')
<img src="{{$dBaner}}" class="img-fluid mt-5" alt="...">

<div class="row mt-5 mb-5">
  @foreach($dHijab as $row)
  <div class="col-md-3">
    <div class="card">
      <img src="{{$row[1]}}" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">{{$row[0]}}</h5>
        <button class="btn btn-outline-primary">{{$row[2]}}</button>
      </div>
    </div>
  </div>
  @endforeach
</div>
<!-- 
<section class="my-4">
  <div class="container">
      <div class="row">
          <div class="col-md-8 offset-md-2">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Selamat datang!</h4>
                      <p class="card-text">Silahkan login terlebih dahulu <a href="login">Login</a>.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section> -->
@endsection
