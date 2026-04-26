// ── Theme Color ──
const picker = document.getElementById('theme-color');

// Gespeicherte Farbe auf allen Seiten wiederherstellen
const saved = localStorage.getItem('accent-color');
if (saved) document.documentElement.style.setProperty('--accent', saved);

// Nur auf Setting-Seite – picker existiert nicht auf anderen Seiten
if (picker) {
    picker.value = saved || '#c8a96e';

    picker.addEventListener('input', function(){
        document.documentElement.style.setProperty('--accent', this.value);
        localStorage.setItem('accent-color', this.value);
    });
}

function resetColor(){
    const defaultColor = '#c8a96e';
    document.documentElement.style.setProperty('--accent', defaultColor);
    localStorage.setItem('accent-color', defaultColor);
    if (picker) picker.value = defaultColor;
}