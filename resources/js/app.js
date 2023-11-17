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

document.querySelectorAll('.increment').forEach(function(button) {
    button.addEventListener('click', function() {
        var quantity = this.previousElementSibling.value;
        this.previousElementSibling.value = Number(quantity) + 1;
    });
  });
  
  document.querySelectorAll('.decrement').forEach(function(button) {
    button.addEventListener('click', function() {
        var quantity = this.nextElementSibling.value;
        if (Number(quantity) > 0) {
            this.nextElementSibling.value = Number(quantity) - 1;
        }
    });
  });

// afficher cacher carts 
document.querySelector('.nav-link.icon-indicator.icon-indicator-primary').addEventListener('click', function() {
    document.querySelector('.cart').classList.toggle('show');
 });
 
 document.querySelector(".close-cart").addEventListener("click", function() {
    document.querySelector(".cart").classList.remove('show');
 });
 