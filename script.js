// Select the theme toggle checkbox
const themeToggle = document.getElementById('theme-toggle');
const body = document.body;
const resultBox = document.getElementById('result');

// Check localStorage for theme preference
const currentTheme = localStorage.getItem('theme') || 'dark';
if (currentTheme === 'light') {
    body.classList.remove('dark');
    body.classList.add('light');
    themeToggle.checked = true;
}

// Toggle between dark and light modes
themeToggle.addEventListener('change', function() {
    if (this.checked) {
        body.classList.remove('dark');
        body.classList.add('light');
        localStorage.setItem('theme', 'light');
    } else {
        body.classList.remove('light');
        body.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    }
});

// Show result with animation
document.addEventListener('DOMContentLoaded', function () {
    if (resultBox.innerHTML.trim() !== "") {
        resultBox.style.opacity = 1;
    }
});
