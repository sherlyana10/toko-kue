@extends('layouts.public')
@section('title', 'Fluffy Bite — Home')

@section('content')
<style>
/* 🌸 Style hero section */
.hero-section {
    background: linear-gradient(135deg, #fff7f5 0%, #ffe9f0 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 60px 10%;
    position: relative;
    overflow: hidden;
}

/* kiri */
.hero-text {
    max-width: 45%;
}

.hero-text h1 {
    font-size: 3rem;
    font-weight: 800;
    color: #d87c6e;
}

.hero-text p {
    margin-top: 15px;
    font-size: 1.1rem;
    color: #555;
    line-height: 1.7;
}

.hero-text .btn-primary {
    background-color: #d87c6e;
    border: none;
    padding: 12px 28px;
    border-radius: 50px;
    margin-top: 25px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.hero-text .btn-primary:hover {
    background-color: #c26a5f;
}

/* kanan */
.hero-image {
    position: relative;
    max-width: 45%;
}

.hero-image img {
    width: 100%;
    border-radius: 30px;
    box-shadow: 0 15px 40px rgba(216, 124, 110, 0.3);
    animation: float 3s ease-in-out infinite;
}

/* animasi gambar */
@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-12px); }
    100% { transform: translateY(0px); }
}

/* responsif */
@media (max-width: 992px) {
    .hero-section {
        flex-direction: column;
        text-align: center;
    }
    .hero-text, .hero-image {
        max-width: 100%;
    }
    .hero-text h1 {
        font-size: 2.5rem;
    }
}
</style>

<section class="hero-section">
    <div class="hero-text">
        <h1>Fluffy Bite</h1>
        <p>Manisnya setiap gigitan yang bikin harimu lebih bahagia.  
        Kue lembut, segar, dan dibuat dengan cinta — langsung dari oven kami untukmu 🍓</p>
        <a href="/produk" class="btn btn-primary">Lihat Produk</a>
    </div>

    <div class="hero-image">
        <img src="https://images.unsplash.com/photo-1607478900766-efe13248b125" alt="Cupcake cantik">
    </div>
</section>
@endsection
