@extends('layouts.main')

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Healthy Meals, Anytime, Anywhere</h1>
                <p class="hero-subtitle">
                    Rancang rencana makan sehatmu bersama SEA Catering. Pengiriman cepat, kualitas terbaik!
                </p>
                <a href="#" class="cta-btn">Langganan Sekarang</a>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/hero-catering.png') }}" alt="Healthy Food Delivery">
            </div>
        </div>
    </section>

    {{-- Highlights --}}
    <section class="benefits-section">
        <div class="section-header">
            <h2 class="section-title">Kenapa Pilih SEA Catering?</h2>
            <p class="section-subtitle">Kami berkomitmen menyediakan makanan sehat terbaik dengan harga terjangkau dan layanan unggulan.</p>
        </div>

        <div class="benefit-grid">
            <div class="benefit-item">
                <img src="{{ asset('icons/organic.png') }}" alt="Organic Icon" class="icon" />
                <div class="benefit-content">
                    <h4>Bahan Berkualitas</h4>
                    <p>Kami hanya menggunakan bahan segar, organik, dan halal.</p>
                </div>
            </div>
            <div class="benefit-item">
                <img src="{{ asset('icons/box.png') }}" alt="Box Icon" class="icon" />
                <div class="benefit-content">
                    <h4>Pengiriman Aman</h4>
                    <p>Makanan dikemas dalam box food-grade dan dikirim dalam kondisi hangat.</p>
                </div>
            </div>
            <div class="benefit-item">
                <img src="{{ asset('icons/flexible.png') }}" alt="Flexible Icon" class="icon" />
                <div class="benefit-content">
                    <h4>Fleksibel & Terjangkau</h4>
                    <p>Pilih jadwal makan sesuai kebutuhanmu, mulai dari Rp30.000 saja!</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section --}}
    <section class="features-section">
        <div class="section-header">
            <h2 class="section-title">Fitur Utama</h2>
            <p class="section-subtitle">Nikmati layanan lengkap yang memudahkan gaya hidup sehatmu setiap hari.</p>
        </div>

        <div class="feature-grid">
            <div class="feature-item">
                <img src="{{ asset('icons/customize.png') }}" alt="Customize Icon" class="icon" />
                <div class="feature-content">
                    <h4>Meal Customization</h4>
                    <p>Sesuaikan rencana makan kamu sesuai dengan kebutuhan nutrisi dan preferensi pribadi.</p>
                </div>
            </div>
            <div class="feature-item">
                <img src="{{ asset('icons/delivery.png') }}" alt="Delivery Icon" class="icon" />
                <div class="feature-content">
                    <h4>Nationwide Delivery</h4>
                    <p>Pengiriman tersedia ke seluruh kota besar di Indonesia dengan layanan cepat dan aman.</p>
                </div>
            </div>
            <div class="feature-item">
                <img src="{{ asset('icons/nutrition.png') }}" alt="Nutrition Icon" class="icon" />
                <div class="feature-content">
                    <h4>Nutritional Transparency</h4>
                    <p>Setiap makanan dilengkapi dengan informasi nutrisi lengkap agar kamu bisa makan dengan cerdas.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- CTA + Contact (Inline) --}}
    <section class="cta-contact-section" style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: space-between;">
        {{-- CTA --}}
        <div class="cta-section" style="flex: 1; min-width: 280px;">
            <div class="section-header">
                <h2 class="section-title">Ayo Mulai Hidup Sehat!</h2>
                <p class="section-subtitle">Bergabunglah dengan ribuan pelanggan kami yang telah merasakan manfaatnya.</p>
            </div>
            <img src="{{ asset('images/subs.png') }}" alt="Delivery Box Mockup" class="cta-image">
            <a href="#" class="cta-btn">Mulai Langganan</a>
        </div>

        {{-- Contact --}}
        <div class="contact-section" style="flex: 1; min-width: 280px;" id="contact">
            <h3 class="contact-title">Hubungi Kami</h3>
            <p class="contact-subtitle">Hubungi kami sekarang untuk konsultasi menu  <br> atau pertanyaan seputar layanan SEA Catering!</p>
            <div class="contact-card">
                <p><strong>📞 Manager:</strong> Brian</p>
                <p><strong>📱 Phone:</strong> 08123456789</p>
            </div>
            <p class="contact-subtitle">Tim SEA Catering siap membantu Anda setiap hari kerja.</p>
        </div>
    </section>
@endsection
