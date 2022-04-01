@extends('layout.templates')
@section('container')

<h1 class="text-center">List User</h1>
    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-lg"></i> Tambah User</button>
    <div class="row">
    <table class="table table-bordered border-secondary">
        <thead  class="bg-dark text-white">
          <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col" class="text-center">Nama</th>
            <th scope="col" class="text-center">Email</th>
            <th scope="col" class="text-center">Skill</th>
            <th scope="col" class="text-center">Control</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($user as $users)
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->jurusan }}</td>
                <td class="justify-content-right">
                  <a href="/detail/{{ $users->username }}" class="btn btn-primary">Detail</a>
                  <a href="/edit/{{ $users->username }}" class="btn btn-warning">Edit</a>
                  <a href="/delete/{{ $users->username }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    


@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="/user" method="post">
            @csrf
              <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="nama" placeholder="Nama" required>
                <label for="nama">Nama</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                <label for="username">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="jurusan" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan/Skill" required>
                <label for="jurusan">Jurusan</label>
              </div>

              {{-- BUTTON --}}
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Tambah</button>
              </div>
          </form>

        </div>

      </div>
    </div>
  </div>