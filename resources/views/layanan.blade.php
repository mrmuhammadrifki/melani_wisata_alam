@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Layanan Wisata Alam</h1>
        <p class="text-center mb-5">Halaman ini menyediakan informasi tentang layanan yang disediakan untuk pengunjung, seperti pendaftaran wisata, paket tur, dan lainnya.</p>

        <!-- Layanan Wisata Alam -->
        <section>
            <div class="row">
                <!-- Layanan Pendaftaran Wisata -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-success">
                        <div class="card-header bg-success text-white text-center">
                            <i class="bi bi-person-plus" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Pendaftaran Wisata</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Daftarkan diri Anda untuk menikmati wisata alam di Bali, Gunung Rinjani, dan hutan Indonesia. Nikmati pengalaman yang tak terlupakan!</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-success">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Paket Tur -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-info">
                        <div class="card-header bg-info text-white text-center">
                            <i class="bi bi-card-list" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Paket Tur Wisata</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Pilih paket tur untuk mengunjungi lokasi-lokasi wisata terpopuler seperti Pulau Bali dan Gunung Rinjani. Tersedia paket untuk semua kalangan!</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-info">Lihat Paket</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Panduan Wisata -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-warning">
                        <div class="card-header bg-warning text-white text-center">
                            <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Panduan Wisata</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Dapatkan panduan lengkap dari pemandu lokal yang akan memandu Anda menjelajahi keindahan Pulau Bali, Gunung Rinjani, dan hutan Indonesia.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-warning">Dapatkan Panduan</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Layanan Akomodasi Wisata -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-danger">
                        <div class="card-header bg-danger text-white text-center">
                            <i class="bi bi-house-door" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Akomodasi Wisata</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Nikmati fasilitas penginapan terbaik di Pulau Bali, Gunung Rinjani, dan kawasan hutan Indonesia yang menawarkan pengalaman alam yang nyaman.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-danger">Pilih Akomodasi</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Transportasi Wisata -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-primary">
                        <div class="card-header bg-primary text-white text-center">
                            <i class="bi bi-car-front" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Transportasi Wisata</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Kami menyediakan layanan transportasi wisata yang nyaman, termasuk kendaraan pribadi, bus, dan tur sepeda motor untuk menjelajahi berbagai destinasi alam.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-primary">Pesan Transportasi</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Pusat Informasi Wisata -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-secondary">
                        <div class="card-header bg-secondary text-white text-center">
                            <i class="bi bi-info-circle" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Pusat Informasi Wisata</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Temukan informasi lengkap tentang destinasi wisata, fasilitas, dan kegiatan yang dapat Anda nikmati selama berkunjung ke Pulau Bali dan destinasi wisata lainnya.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-secondary">Lihat Informasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
