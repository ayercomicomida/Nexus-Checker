document.querySelector('.dropdown-button').addEventListener('click', function(event) {
    event.stopPropagation(); // Evita que o evento clique se propague e feche o dropdown
    const dropdownContent = document.querySelector('.dropdown-content');
    dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
});

document.querySelectorAll('.dropdown-content a').forEach(option => {
    option.addEventListener('click', function(event) {
        event.preventDefault(); // Impede o comportamento padrão do link
        const selectedOption = this.getAttribute('data-value');
        const dropdownButton = document.querySelector('.dropdown-button');
        dropdownButton.textContent = selectedOption;
        // Mantenha o dropdown visível após a seleção
        document.querySelector('.dropdown-content').style.display = 'block';
    });
});

window.addEventListener('click', function(event) {
    if (!event.target.matches('.dropdown-button')) {
        const dropdowns = document.querySelectorAll('.dropdown-content');
        dropdowns.forEach(dropdown => {
            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
            }
        });
    }
});
