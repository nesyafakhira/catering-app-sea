@extends('layouts.main')

@section('content')
<section class="menu-section">
    <div class="section-header">
        <h2 class="section-title">Pilih Rencana Makanmu</h2>
        <p class="section-subtitle">Eksplorasi berbagai pilihan meal plan yang fleksibel dan sesuai kebutuhanmu.</p>
    </div>

    <div class="menu-grid">
        {{-- @foreach ($mealPlans as $plan)
            <div class="menu-card" data-name="{{ $plan->name }}" data-price="{{ $plan->price }}" data-description="{{ $plan->description }}" data-image="{{ $plan->image }}">
                <img src="{{ asset('images/meal/' . $plan->image) }}" alt="{{ $plan->name }}" class="menu-image">
                <h4>{{ $plan->name }}</h4>
                <p>Rp{{ number_format($plan->price, 0, ',', '.') }} / meal</p>
                <button class="detail-btn" onclick="openModal(this)">See More Details</button>
            </div>
        @endforeach --}}
        @php
            $mealPlans = [
                [ 'name' => 'Diet Plan', 'price' => 30000, 'description' => 'Menu seimbang untuk diet sehat.', 'image' => 'diet.png' ],
                [ 'name' => 'Protein Plan', 'price' => 40000, 'description' => 'Tinggi protein untuk olahraga dan otot.', 'image' => 'protein.png' ],
                [ 'name' => 'Royal Plan', 'price' => 60000, 'description' => 'Paket lengkap dengan kualitas premium.', 'image' => 'royal.png' ],
            ];
        @endphp
    </div>
</section>

{{-- Modal --}}
<div id="mealModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <img id="modal-image" class="modal-img" src="" alt="Meal Image">
        <h3 id="modal-title"></h3>
        <p id="modal-price"></p>
        <p id="modal-description"></p>
    </div>
</div>
@endsection
