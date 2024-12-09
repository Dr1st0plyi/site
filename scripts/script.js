const galleryContainer = document.querySelector('.gallery');
const galleryItem = document.querySelector('.gallery-item')
const nextButton = document.querySelector('.next-button');
const prevButton = document.querySelector('.prev-button');

nextButton.addEventListener('click', () => {
    galleryContainer.scrollBy({ left: galleryItem.offsetWidth, behavior: 'smooth' });
});

prevButton.addEventListener('click', () => {
    galleryContainer.scrollBy({ left: -galleryItem.offsetWidth, behavior: 'smooth' });
});

window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    if (window.scrollY > 100) {
        header.classList.add('scrolled'); // Добавляем класс, если скролл больше 0
    } else {
        header.classList.remove('scrolled'); // Убираем класс, если скролл на верх
    }
});


document.querySelectorAll('.gallery-item').forEach(item => {
    item.addEventListener('click', () => {
        item.classList.toggle('show'); // Переключаем класс show на элементе gallery-item
    });
});

// window.addEventListener('scroll', function() {
//     const containers = document.querySelectorAll('.container');
    
//     containers.forEach(container => {
//         const scrollPosition = window.scrollY;
//         const parallaxElements = container.querySelectorAll('.container > *');
        
//         parallaxElements.forEach((img, index) => {
//             const speed = index; // Скорость параллакса, можно настроить
//             const yOffset = scrollPosition / speed;
//             img.style.transform = `translateY(${yOffset}px)`;
//         });
//     });
// });