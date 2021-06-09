@extends('Layout')
@section('Content')

<style>
    body {
        background-image: url("https://image.shutterstock.com/image-photo/fitness-gym-background-260nw-796287874.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/bright-red-gym-advert-facebook-cover-design-template-1286420e6b529cf2eb4e984209754399_screen.jpg?ts=1561437001"
                        class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://eldigitaldesalamanca.com/sites/default/files/styles/escala-730/public/fotos/portada-anuncio.jpg?itok=Sc3NA7iJ"
                        class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2wGj8kaFVTMCC00iOIL8kwH10X6MHf8fN5CwqVTwyLfR_n6eAd6C3nWVZgvKyWdy8P78&usqp=CAU"
                        class="d-block w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <br>
    <br>
@endsection