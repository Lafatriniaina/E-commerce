document.addEventListener('DOMContentLoaded', function() {
    var leftArrow = document.getElementById('leftArrow');
    var rightArrow = document.getElementById('rightArrow');
   
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
 
    leftArrow.addEventListener('click', function() {
        var scrollAmount = scrollContainer.scrollLeft;
        if(scrollAmount > 0) {
            scrollContainer.scrollTo({
                left: scrollAmount - 200,
                behavior: 'smooth'
            });
        }
    });
 });
 