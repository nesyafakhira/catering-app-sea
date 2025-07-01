@extends('layouts.main')

@section('content')
<section class="subscription-section">
  <div class="section-header">
    <h2 class="section-title">Formulir Langganan</h2>
    <p class="section-subtitle">Siap memulai perjalanan sehat Anda? Isi formulir ini dan dapatkan makanan sehat langsung ke depan pintu Anda.</p>
  </div>

  <div class="subscription-card">
    <form id="subscription-form" action="{{ route('subscribe.store') }}" method="POST" class="subscription-form" novalidate>
        @csrf
        <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" required>
      </div>

      <div class="form-group">
        <label for="phone">Nomor Telepon Aktif</label>
        <input type="tel" id="phone" required>
      </div>

      <div class="form-group">
        <label>Pilih Rencana Diet</label>
        <div id="plan-selection" class="form-options grid-3"></div>
      </div>

      <div class="form-group">
        <label>Pilih Jenis Makanan</label>
        <div id="meal-type-selection" class="form-options grid-3"></div>
      </div>

      <div class="form-group">
        <label>Pilih Hari Pengiriman</label>
        <div id="delivery-day-selection" class="form-options grid-7"></div>
      </div>

      <div class="form-group">
        <label for="allergies">Alergi atau Pantangan</label>
        <textarea id="allergies" rows="3" placeholder="Tulis jika ada..."></textarea>
      </div>

      <div class="form-summary">
        <div class="summary-label">Total Harga Per Bulan:</div>
        <div id="total-price" class="summary-value">Rp0</div>
        <small class="summary-note">Total dihitung: (Harga Paket) × (Jml Tipe Makanan) × (Jml Hari) × 4.3</small>
      </div>

      <button type="submit" class="cta-btn">Kirim Langganan</button>
    </form>
  </div>
</section>

@endsection
