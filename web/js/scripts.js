document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Блокуємо стандартну поведінку форми

    const query = document.getElementById('searchInput').value.toLowerCase();
    const sections = document.querySelectorAll('.section');  // Вибираємо всі секції
    let results = '';

    sections.forEach(function(section) {
        const sectionText = section.textContent.toLowerCase();  // Отримуємо текст секції
        const sectionHeading = section.querySelector('h3'); // Знаходимо елемент h3

        // Якщо знайдено h3, перевіряємо чи містить текст запит
        if (sectionText.includes(query) && sectionHeading) {
            results += `<p>Знайдено в секції: ${sectionHeading.textContent}</p>`;
        }
    });

    if (results) {
        document.getElementById('searchResults').innerHTML = results;
    } else {
        document.getElementById('searchResults').innerHTML = 'Нічого не знайдено за вашим запитом.';
    }
});
