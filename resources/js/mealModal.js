function openModal(btn) {
    const card = btn.closest('.menu-card');
    document.getElementById('modal-title').innerText = card.dataset.name;
    document.getElementById('modal-price').innerText = `Rp${parseInt(card.dataset.price).toLocaleString('id-ID')} / meal`;
    document.getElementById('modal-description').innerText = card.dataset.description;
    document.getElementById('modal-image').src = `/images/meal/${card.dataset.image}`;
    document.getElementById('mealModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('mealModal').style.display = 'none';
}

window.addEventListener('click', (e) => {
    if (e.target.id === 'mealModal') {
        closeModal();
    }
});
