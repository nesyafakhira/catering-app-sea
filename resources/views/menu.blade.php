@extends('layouts.main')

@push('styles')
    @vite([
        'resources/css/pages/menu.css',
    ])
@endpush

@push('scripts')
    @vite('resources/js/mealModal.js')
@endpush

@section('content')
<section class="menu-section">
    <div class="section-header">
        <h2 class="section-title">Pilih Rencana Makanmu</h2>
        <p class="section-subtitle">Eksplorasi berbagai pilihan meal plan yang fleksibel dan sesuai kebutuhanmu.</p>
    </div>

    @php
        $mealPlans = [
            [ 'name' => 'Diet Plan', 'price' => 30000, 'description' => 'Menu seimbang untuk diet sehat.', 'image' => 'diet.png' ],
            [ 'name' => 'Protein Plan', 'price' => 40000, 'description' => 'Tinggi protein untuk olahraga dan otot.', 'image' => 'protein.png' ],
            [ 'name' => 'Royal Plan', 'price' => 60000, 'description' => 'Paket lengkap dengan kualitas premium.', 'image' => 'royal.png' ],
        ];
    @endphp

    <div class="menu-grid">
    @foreach ($mealPlans as $plan)
        <div class="menu-card"
             data-name="{{ $plan['name'] }}"
             data-price="{{ $plan['price'] }}"
             data-description="{{ $plan['description'] }}"
             data-image="{{ $plan['image'] }}">

            <img src="{{ asset('images/meal/' . $plan['image']) }}" alt="{{ $plan['name'] }}" class="menu-image">
            <h4>{{ $plan['name'] }}</h4>
            <p>Rp{{ number_format($plan['price'], 0, ',', '.') }} / meal</p>
            <button class="detail-btn" onclick="openModal(this)">See More Details</button>
        </div>
    @endforeach
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
<div id="mealModal" class="modal-overlay" style="display: none;">
    <div class="modal-content">
        <span class="close-modal" onclick="closeModal()">&times;</span>
        <img id="modal-image" src="" alt="" class="modal-img">
        <h3 id="modal-name"></h3>
        <p id="modal-price"></p>
        <p id="modal-description"></p>
    </div>
</div>

@endsection

<script>
    function openModal(button) {
        const name = button.parentElement.dataset.name;
        const price = button.parentElement.dataset.price;
        const description = button.parentElement.dataset.description;
        const image = button.parentElement.dataset.image;

        document.getElementById("modal-name").textContent = name;
        document.getElementById("modal-price").textContent = "Rp" + parseInt(price).toLocaleString('id-ID') + " / meal";
        document.getElementById("modal-description").textContent = description;
        document.getElementById("modal-image").src = "/images/meal/" + image;

        document.getElementById("mealModal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("mealModal").style.display = "none";
    }
</script>
