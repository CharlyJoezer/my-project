@extends('layout.templates')

@section('container')

    <div style="margin-top: 0px;" class=" mb-4 d-flex justify-content-center">
        <marquee scrollamount="20" style="border: 1px solid black" width="60%" direction="left" height="auto">
        <span style="font-size: 30px">{{ date("l jS \of F Y h:i:s A") }}</span></marquee>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://source.unsplash.com/1920x1080/?city" height="300px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1920x1080/?chill" height="300px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1920x1080/?news" height="300px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1920x1080/?toy" height="300px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1920x1080/?person" height="300px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1920x1080/?night" height="300px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1920x1080/?coffee" height="300px" class="d-block w-100" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <div class="text-center">
        <h1>Selamat Datang di Halaman Home</h1>
    </div>
@endsection