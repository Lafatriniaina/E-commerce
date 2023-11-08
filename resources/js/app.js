import './bootstrap';
import "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";

document.addEventListener('DOMContentLoaded', function() {
    var checkbox = document.getElementById('themeControlToggle');
    var lightLabel = document.querySelector('.theme-control-toggle-light');
    var darkLabel = document.querySelector('.theme-control-toggle-dark');

    checkbox.addEventListener('change', function() {
        if(checkbox.checked) {
            lightLabel.style.display = 'block';
            darkLabel.style.display = 'none';
        } else {
            lightLabel.style.display = 'none';
            darkLabel.style.display = 'block';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
  var checkbox = document.getElementById('themeControlToggle');
  var lightLabel = document.querySelector('.theme-control-toggle-light');
  var darkLabel = document.querySelector('.theme-control-toggle-dark');

  // Récupérer le thème actuel à partir de localStorage
  var currentTheme = localStorage.getItem('theme');

  // Définir le thème initial selon la valeur récupérée
  if (currentTheme) {
      document.body.classList.remove('light-mode', 'dark-mode');
      document.body.classList.add(currentTheme);

      // Définir l'état du checkbox et les labels en fonction du thème actuel
      if (currentTheme === 'dark-mode') {
          checkbox.checked = false;
          lightLabel.style.display = 'none';
          darkLabel.style.display = 'block';
      } else {
          checkbox.checked = true;
          lightLabel.style.display = 'block';
          darkLabel.style.display = 'none';
      }
  }

  checkbox.addEventListener('change', function() {
      if(checkbox.checked) {
          lightLabel.style.display = 'block';
          darkLabel.style.display = 'none';
          document.body.classList.remove('dark-mode');
          document.body.classList.add('light-mode');
          localStorage.setItem('theme', 'light-mode');
      } else {
          lightLabel.style.display = 'none';
          darkLabel.style.display = 'block';
          document.body.classList.remove('light-mode');
          document.body.classList.add('dark-mode');
          localStorage.setItem('theme', 'dark-mode');
      }
  });
});


var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel)
