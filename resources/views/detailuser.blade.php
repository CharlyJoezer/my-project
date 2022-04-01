@extends('layout.templates')
@section('container')
<h1 class="text-center">{{ $user->name }}</h1>
<br>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="https://source.unsplash.com/300x300/?person" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text">{{ $user->email }}</p>
            <p class="card-text">Jurusan : {{ $user->jurusan }}</p>
            <p class="card-text"><small class="text-muted">{{ $user->created_at->diffForHumans() }}</small></p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <a href="/user" class="btn btn-secondary">Back</a>
    </div>
@endsection