document.getElementById('searchForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Блокуємо стандартну поведінку форми

    const query = document.getElementById('searchInput').value.trim(); // Отримуємо запит
    if (!query) return; // Якщо запит порожній, нічого не робимо

    removeHighlights(); // Очищуємо попередні виділення

    // Знаходимо всі елементи, в яких може бути текст
    const textNodes = getTextNodesIn(document.body);

    let matchFound = false;

    textNodes.forEach(node => {
        const regex = new RegExp(`(${query})`, 'gi'); // Регулярний вираз для пошуку
        if (regex.test(node.textContent)) {
            matchFound = true;

            // Створюємо новий span для виділення
            const highlightedText = node.textContent.replace(regex, '<span class="highlight">$1</span>');
            const span = document.createElement('span');
            span.innerHTML = highlightedText;
            node.replaceWith(span);
        }
    });

    if (matchFound) {
        // Прокручуємо до першого знайденого результату
        const firstMatch = document.querySelector('.highlight');
        if (firstMatch) {
            firstMatch.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        // Видаляємо жовтий колір через 3 секунди
        setTimeout(removeHighlights, 3000);
    } else {
        alert('Нічого не знайдено за вашим запитом.');
    }
});

// Функція для отримання всіх текстових вузлів на сторінці
function getTextNodesIn(node) {
    let textNodes = [];
    for (let child of node.childNodes) {
        if (child.nodeType === Node.TEXT_NODE) {
            textNodes.push(child);
        } else {
            textNodes = textNodes.concat(getTextNodesIn(child));
        }
    }
    return textNodes;
}

// Функція для видалення всіх виділених частин
function removeHighlights() {
    const highlights = document.querySelectorAll('.highlight');
    highlights.forEach(span => {
        const textNode = document.createTextNode(span.textContent); // Створюємо новий текстовий вузол
        span.replaceWith(textNode); // Заміняємо span на чистий текст
    });
}
