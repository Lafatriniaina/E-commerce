document.addEventListener('DOMContentLoaded', function() {
    var leftArrows = document.querySelectorAll('#leftArrow');
    var rightArrows = document.querySelectorAll('#rightArrow');
    var scrollContainers = document.querySelectorAll('.d-flex.overflow-x-auto');
 
    for(let i = 0; i < scrollContainers.length; i++){
        let leftArrow = leftArrows[i];
        let rightArrow = rightArrows[i];
        let scrollContainer = scrollContainers[i];
        
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
    }
 });
 