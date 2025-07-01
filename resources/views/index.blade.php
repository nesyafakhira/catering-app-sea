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

    <section class="testimonials-section">
        <div class="section-header">
            <h2 class="section-title">Apa Kata Mereka?</h2>
            <p class="section-subtitle">Kami bangga telah melayani ribuan pelanggan yang puas. Lihat beberapa cerita mereka di bawah ini.</p>
        </div>

        <div class="slider-master-card">
            <button id="prevBtn" class="slider-nav">‹</button>
            <div class="testimonial-viewport">
                <div id="testimonialTrack">
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-slide">
                            <p>"{{ $testimonial->review }}"</p>
                            <div class="name">{{ $testimonial->name }}</div>
                            <div class="stars">
                                {!! str_repeat('★', $testimonial->rating) !!}
                                {!! str_repeat('☆', 5 - $testimonial->rating) !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <button id="nextBtn" class="slider-nav">›</button>
        </div>

        <div class="testimonial-form-wrapper">
            <h3 class="form-title">Tinggalkan Ulasanmu</h3>
            <form id="testimonialForm" class="testimonial-form" action="{{ route('testimonial.store') }}" method="POST">
                @csrf
                <div class="form-group-row">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" placeholder="Nama kamu" required>
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <select id="rating" name="rating" required>
                            <option value="">Pilih</option>
                            <option value="5">★★★★★ (5)</option>
                            <option value="4">★★★★☆ (4)</option>
                            <option value="3">★★★☆☆ (3)</option>
                            <option value="2">★★☆☆☆ (2)</option>
                            <option value="1">★☆☆☆☆ (1)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="review">Pesan</label>
                    <textarea id="review" name="review" placeholder="Ceritakan pengalamanmu..." rows="3" required></textarea>
                </div>

                <button type="submit" class="cta-btn">Kirim</button>
            </form>
        </div>


    </section>


@endsection

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const track = document.getElementById('testimonialTrack');
            const slides = track.querySelectorAll('.testimonial-slide');
            const viewport = document.querySelector('.testimonial-viewport');
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');

            if (slides.length === 0) return;

            let currentIndex = slides.length; // Mulai dari kloning tengah
            let slideInterval;
            let isTransitioning = false;

            // Clone 2x untuk efek loop
            const originalSlides = [...slides];
            originalSlides.forEach(s => {
                const clone1 = s.cloneNode(true);
                const clone2 = s.cloneNode(true);
                track.appendChild(clone1);
                track.insertBefore(clone2, track.firstChild);
            });

            function updateSliderPosition(animate = true) {
                const allSlides = track.querySelectorAll('.testimonial-slide');
                const slideWidth = allSlides[0].offsetWidth;
                const margin = parseInt(window.getComputedStyle(allSlides[0]).marginRight) * 2;
                const totalSlideWidth = slideWidth + margin;

                const offset = (viewport.offsetWidth / 2) - (totalSlideWidth / 2) - (currentIndex * totalSlideWidth);
                track.style.transition = animate ? 'transform 0.6s ease' : 'none';
                track.style.transform = `translateX(${offset}px)`;

                allSlides.forEach((slide, idx) => {
                    slide.classList.toggle('active', idx === currentIndex);
                });
            }

            function moveToNext() {
                if (isTransitioning) return;
                isTransitioning = true;
                currentIndex++;
                updateSliderPosition();

                const allSlides = track.querySelectorAll('.testimonial-slide');
                if (currentIndex >= allSlides.length - originalSlides.length) {
                    setTimeout(() => {
                        currentIndex = originalSlides.length;
                        updateSliderPosition(false);
                    }, 600);
                }
            }

            function moveToPrev() {
                if (isTransitioning) return;
                isTransitioning = true;
                currentIndex--;
                updateSliderPosition();

                if (currentIndex < originalSlides.length) {
                    setTimeout(() => {
                        currentIndex = allSlides.length - originalSlides.length - 1;
                        updateSliderPosition(false);
                    }, 600);
                }
            }

            track.addEventListener('transitionend', () => isTransitioning = false);
            nextBtn.addEventListener('click', moveToNext);
            prevBtn.addEventListener('click', moveToPrev);

            function startAutoSlide() {
                slideInterval = setInterval(moveToNext, 4000);
            }

            function stopAutoSlide() {
                clearInterval(slideInterval);
            }

            // Inisialisasi posisi tengah
            updateSliderPosition(false);
            startAutoSlide();
            window.addEventListener('resize', () => updateSliderPosition(false));
        });
    </script>


    <script>
    document.getElementById('testimonialForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Terima kasih atas ulasanmu! (Form ini belum tersambung ke backend)');
    });
    </script>


