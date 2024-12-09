document.getElementById('menu-burger-checkbox').addEventListener('change', function() {
    const navMenu = document.querySelector('.nav_menu');
  
    if (this.checked) {
        navMenu.classList.remove('inactive');
        navMenu.classList.add('active'); // Показываем навигационное меню
    } else {
        navMenu.classList.remove('active'); // Скрываем навигационное меню
        navMenu.classList.add('inactive');
    }
  });