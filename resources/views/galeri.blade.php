@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Eksplorasi Wisata Indonesia</h1>
        <p class="text-center mb-5">Nikmati keindahan alam Indonesia melalui koleksi foto-foto menakjubkan dari Pulau Bali, Gunung Rinjani, dan Hutan Indonesia.</p>

        <!-- Galeri Foto -->
        <section>
            <div class="row">
                <!-- Foto Pulau Bali -->
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <a href="{{ asset('images/wisata1.png') }}" data-bs-toggle="lightbox" data-bs-target="#gallery" class="text-decoration-none">
                            <img src="{{ asset('images/wisata1.png') }}" class="img-fluid rounded shadow-lg gallery-img" alt="Pulau Bali">
                        </a>
                        <p class="text-center mt-2">Pesona Pulau Bali</p>
                    </div>
                </div>

                <!-- Foto Gunung Rinjani -->
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <a href="{{ asset('images/wisata2.png') }}" data-bs-toggle="lightbox" data-bs-target="#gallery" class="text-decoration-none">
                            <img src="{{ asset('images/wisata2.png') }}" class="img-fluid rounded shadow-lg gallery-img" alt="Gunung Rinjani">
                        </a>
                        <p class="text-center mt-2">Keindahan Gunung Rinjani</p>
                    </div>
                </div>

                <!-- Foto Hutan Indonesia -->
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <a href="{{ asset('images/wisata3.png') }}" data-bs-toggle="lightbox" data-bs-target="#gallery" class="text-decoration-none">
                            <img src="{{ asset('images/wisata3.png') }}" class="img-fluid rounded shadow-lg gallery-img" alt="Hutan Indonesia">
                        </a>
                        <p class="text-center mt-2">Keajaiban Hutan Indonesia</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Lightbox Script (Bootstrap 5) -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="lightbox" id="gallery" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Carousel Item Pulau Bali -->
                    <div class="carousel-item active">
                        <img src="{{ asset('images/wisata1.png') }}" class="d-block w-100" alt="Pesona Pulau Bali">
                    </div>
                    <!-- Carousel Item Gunung Rinjani -->
                    <div class="carousel-item">
                        <img src="{{ asset('images/wisata2.png') }}" class="d-block w-100" alt="Keindahan Gunung Rinjani">
                    </div>
                    <!-- Carousel Item Hutan Indonesia -->
                    <div class="carousel-item">
                        <img src="{{ asset('images/wisata3.png') }}" class="d-block w-100" alt="Keajaiban Hutan Indonesia">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('styles')
    <style>
        /* Galeri Foto Layout */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .gallery-img {
            transition: transform 0.3s ease, opacity 0.3s ease;
            border-radius: 10px;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.05); /* Zoom effect */
            opacity: 0.9;
        }

        .gallery-item:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Hover shadow effect */
            transform: scale(1.05);
        }

        .carousel-inner img {
            border-radius: 10px;
        }
    </style>
@endsection
