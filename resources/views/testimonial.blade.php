@extends('layouts.main')

@section('content')
<section class="testimonial-section">
    <div class="section-header">
        <h2 class="section-title">Apa Kata Mereka?</h2>
        <p class="section-subtitle">Beberapa ulasan dari pelanggan setia SEA Catering.</p>
    </div>

    {{-- Carousel --}}
    <div class="testimonial-carousel" id="testimonial-carousel">
        <div class="testimonial-item active">
            <p class="message">"Makanannya enak dan pengirimannya selalu tepat waktu!"</p>
            <p class="name">– Rina, Jakarta</p>
            <div class="stars">⭐⭐⭐⭐⭐</div>
        </div>
        <div class="testimonial-item">
            <p class="message">"Porsinya pas, sehat, dan gampang diatur sesuai jadwal."</p>
            <p class="name">– Andi, Bandung</p>
            <div class="stars">⭐⭐⭐⭐</div>
        </div>
        <div class="testimonial-item">
            <p class="message">"Suka banget sama pilihan menunya! Gak bosenin."</p>
            <p class="name">– Clara, Surabaya</p>
            <div class="stars">⭐⭐⭐⭐⭐</div>
        </div>
    </div>

    {{-- Form Testimoni --}}
    <div class="testimonial-form">
        <h3>Kirim Testimoni Kamu</h3>
        <form>
            <input type="text" name="name" placeholder="Nama Kamu" required>
            <textarea name="message" placeholder="Tulis pesanmu di sini..." rows="3" required></textarea>
            <select name="rating" required>
                <option value="">Beri rating</option>
                <option value="5">⭐⭐⭐⭐⭐ (5)</option>
                <option value="4">⭐⭐⭐⭐ (4)</option>
                <option value="3">⭐⭐⭐ (3)</option>
                <option value="2">⭐⭐ (2)</option>
                <option value="1">⭐ (1)</option>
            </select>
            <button type="submit">Kirim Testimoni</button>
        </form>
    </div>
</section>
@endsection

@push('styles')
    @vite(['resources/css/pages/testimonial.css'])
@endpush

@push('scripts')
    <script src="{{ asset('js/testimonial.js') }}"></script>
@endpush
