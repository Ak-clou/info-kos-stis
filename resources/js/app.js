import './bootstrap';

document.getElementById('filterBtn').addEventListener('click', function() {
    document.getElementById('filterPopup').classList.toggle('hidden');
});

document.getElementById('closePopup').addEventListener('click', function() {
    document.getElementById('filterPopup').classList.add('hidden');
});
