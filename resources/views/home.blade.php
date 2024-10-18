@extends('templates.app')

@section('content-dinamis')

<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-4 fw-bold mb-4">Warung Jawa</h1>
        <p class="lead mb-4">Nikmati kelezatan autentik Jawa dengan sentuhan makanan dan minuman.</p>
        <a href="{{ route('item.homeshop') }}" class="btn btn-light btn-lg px-5 py-3">Lihat Menu</a>
    </div>
</section>

<!-- About Section -->
<section class="py-5" id="tentang">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-6 fw-bold mb-4">25 Tahun Menghadirkan Cita Rasa Khas Jawa</h2>
                <p class="lead text-muted mb-4">Perjalanan kami dimulai dari sebuah warung kecil, kini menjadi destinasi kuliner modern dengan tetap mempertahankan keaslian resep leluhur.</p>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            <span>100% Bumbu Alami</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            <span>Chef Berpengalaman</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            <span>Suasana Modern</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            <span>Bahan Berkualitas</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <div class="position-absolute bottom-0 end-0 bg-primary text-white p-4 rounded-3 mb-n4 me-n4">
                        <h3 class="h2 mb-0">25+</h3>
                        <p class="mb-0">Tahun Pengalaman</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menu Preview Section -->
<section class="bg-light py-5" id="menu">
    <div class="container py-5">
        <h2 class="text-center display-6 fw-bold mb-5">Menu Favorit</h2>
        <div class="row g-4">
            @foreach($featuredItems as $item)
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('assets/images/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                            <p class="card-text text-muted">{{ $item->deskripsi }}</p>
                            <h6 class="fw-bold text-primary mt-auto">Rp {{ number_format($item->price, 0, ',', '.') }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="py-5" id="testimoni">
    <div class="container py-5">
        <h2 class="text-center display-6 fw-bold mb-5">Apa Kata Mereka</h2>
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card testimonial-card h-100 shadow-sm">
                    <div class="card-body text-center p-4">
                        <img src="{{ asset('assets/images/tb.jpg') }}" alt="Customer" class="rounded-circle" style="width: 150px; height: 150px;">
                        <h5 class="card-title">Tubagus</h5>
                        <p class="text-muted mb-3">Food Blogger</p>
                        <p class="card-text">"Mie Goreng Jawa terenak yang pernah saya coba. Rasa yang tak pernah bisa dilupakan!!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card testimonial-card h-100 shadow-sm">
                    <div class="card-body text-center p-4">
                        <img src="{{ asset('assets/images/IMG_20241012_072807_270.jpg') }}" alt="Customer" class="rounded-circle" style="width: 150px; height: 150px;">
                        <h5 class="card-title">Ferdiansyah</h5>
                        <p class="text-muted mb-3">Food Blogger</p>
                        <p class="card-text">"Gudek Koyok adalah makanan terenak yang pernah saya coba.Dengan rasa bumbu alami yang tak pernah bisa dilupakan!!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card testimonial-card h-100 shadow-sm">
                    <div class="card-body text-center p-4">
                        <img src="{{ asset('assets/images/IMG_20241012_074432_485.jpg') }}" alt="Customer" class="rounded-circle" style="width: 150px; height: 150px;">

                        <h5 class="card-title">Alif Razabi</h5>
                        <p class="text-muted mb-3">Food Blogger</p>
                        <p class="card-text">"Es Buto Ijo adalah minuman yang sangat enak yang pernah saya coba. Dengan berbagai sumber rasa!!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat for other testimonials -->
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="bg-light py-5" id="kontak">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-6 fw-bold mb-4">Hubungi Kami</h2>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control form-control-lg" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control form-control-lg" rows="4" placeholder="Pesan" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100">Kirim Pesan</button>
                </form>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-4">Informasi Kontak</h5>
                        <div class="d-flex mb-3">
                            <div class="feature-icon me-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold">Alamat</h6>
                                <p class="text-muted">Jl. Jawa Barat No. 123, Bandung</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="feature-icon me-3">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold">Telepon</h6>
                                <p class="text-muted">08344836264</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="feature-icon me-3">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold">Jam Buka</h6>
                                <p class="text-muted">Setiap hari: 10:00 - 22:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Floating Action Button -->
<a href="#" class="btn btn-primary btn-lg rounded-circle btn-floating shadow">
    <i class="fas fa-arrow-up"></i>
</a>

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>
@endpush

@endsection
