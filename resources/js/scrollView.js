document.addEventListener('DOMContentLoaded', function() {
    var leftArrow = document.getElementById('leftArrow');
    var rightArrow = document.getElementById('rightArrow');
   
    var products = document.querySelectorAll('.border.border-1.rounded-3.border-grey');
   
    products.forEach(function(product, index) {
        product.addEventListener('mouseover', function() {
            if(index === 0) {
                rightArrow.style.display = 'block';
            }
            else if(index === products.length - 1) {
                leftArrow.style.display = 'block';
            }
        });
    
        product.addEventListener('mouseout', function() {
            leftArrow.style.display = 'none';
            rightArrow.style.display = 'none';
        });
    });
   
    var scrollContainer = document.querySelector('.d-flex.overflow-x-auto');
   
    rightArrow.addEventListener('click', function() {
        var scrollAmount = scrollContainer.scrollLeft;
        var maxScroll = scrollContainer.scrollWidth - scrollContainer.clientWidth;
            if(scrollAmount < maxScroll) {
                scrollContainer.scrollTo({
                    left: scrollAmount + 200,
                    behavior: 'smooth'
                });
            }
        });
   });
   
  
   
  