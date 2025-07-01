document.addEventListener('DOMContentLoaded', function () {
    setupSubscriptionForm();
});

function setupSubscriptionForm() {
    const mealPlans = [
        { id: 'diet', name: 'Diet Plan', price: 30000 },
        { id: 'protein', name: 'Protein Plan', price: 40000 },
        { id: 'royal', name: 'Royal Plan', price: 60000 }
    ];

    const mealTypes = [
        { id: 'breakfast', name: 'Breakfast' },
        { id: 'lunch', name: 'Lunch' },
        { id: 'dinner', name: 'Dinner' }
    ];

    const deliveryDays = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

    const planContainer = document.getElementById('plan-selection');
    const mealTypeContainer = document.getElementById('meal-type-selection');
    const dayContainer = document.getElementById('delivery-day-selection');
    const form = document.getElementById('subscription-form');
    const totalPriceEl = document.getElementById('total-price');

    if (!form) return;

    // Render Plan options
    planContainer.innerHTML = '';
    mealPlans.forEach(plan => {
        planContainer.innerHTML += `
            <div>
                <input type="radio" name="plan" id="${plan.id}" value="${plan.price}" class="hidden peer">
                <label for="${plan.id}" class="block p-4 border border-gray-300 rounded-lg cursor-pointer peer-checked:border-[#5E3023] peer-checked:ring-2 peer-checked:ring-[#5E3023]">
                    <span class="font-bold">${plan.name}</span>
                    <span class="block text-sm text-gray-500">Rp${plan.price.toLocaleString('id-ID')}</span>
                </label>
            </div>`;
    });

    // Render Meal Types
    mealTypeContainer.innerHTML = '';
    mealTypes.forEach(type => {
        mealTypeContainer.innerHTML += `
            <div>
                <input type="checkbox" name="mealType" id="${type.id}" class="hidden peer">
                <label for="${type.id}" class="block p-4 border border-gray-300 rounded-lg cursor-pointer peer-checked:border-[#5E3023] peer-checked:ring-2 peer-checked:ring-[#5E3023]">
                    <span class="font-medium">${type.name}</span>
                </label>
            </div>`;
    });

    // Render Delivery Days
    dayContainer.innerHTML = '';
    deliveryDays.forEach(day => {
        const dayId = day.toLowerCase();
        dayContainer.innerHTML += `
            <div>
                <input type="checkbox" name="deliveryDay" id="${dayId}" class="hidden peer">
                <label for="${dayId}" class="block p-3 text-sm text-center border border-gray-300 rounded-lg cursor-pointer peer-checked:border-[#5E3023] peer-checked:ring-2 peer-checked:ring-[#5E3023]">
                    ${day}
                </label>
            </div>`;
    });

    // Price Calculation
    function calculateTotal() {
        const planPrice = parseFloat(form.querySelector('input[name="plan"]:checked')?.value || 0);
        const numMealTypes = form.querySelectorAll('input[name="mealType"]:checked').length;
        const numDeliveryDays = form.querySelectorAll('input[name="deliveryDay"]:checked').length;

        if (!planPrice || numMealTypes === 0 || numDeliveryDays === 0) {
            totalPriceEl.textContent = 'Rp0';
            return;
        }

        const totalPrice = planPrice * numMealTypes * numDeliveryDays * 4.3;
        totalPriceEl.textContent = `Rp${totalPrice.toLocaleString('id-ID')}`;
    }

    // Event Binding
    form.addEventListener('change', calculateTotal);

    // Validation + Scroll
    form.addEventListener('submit', e => {
        e.preventDefault();

        const name = form.querySelector('#name');
        const phone = form.querySelector('#phone');
        const plan = form.querySelector('input[name="plan"]:checked');
        const mealTypesChecked = form.querySelectorAll('input[name="mealType"]:checked');
        const deliveryDaysChecked = form.querySelectorAll('input[name="deliveryDay"]:checked');

        let firstInvalid = null;

        if (!name.value.trim()) firstInvalid = name;
        else if (!phone.value.trim()) firstInvalid = phone;
        else if (!plan) firstInvalid = form.querySelector('input[name="plan"]');
        else if (mealTypesChecked.length === 0) firstInvalid = form.querySelector('input[name="mealType"]');
        else if (deliveryDaysChecked.length === 0) firstInvalid = form.querySelector('input[name="deliveryDay"]');

        if (firstInvalid) {
            alert("Harap lengkapi semua bagian yang diperlukan.");
            firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
            firstInvalid.focus();
            return;
        }

        // Simulasi submit
        alert('Formulir langganan berhasil dikirim! (Ini adalah simulasi)');
        // Reset
        form.querySelectorAll('input[type="radio"], input[type="checkbox"]').forEach(input => input.checked = false);
        name.value = '';
        phone.value = '';
        form.querySelector('#allergies').value = '';
        calculateTotal();
    });
}
