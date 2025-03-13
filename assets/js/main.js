const scrollContainer = document.querySelector('.scroll-container');
   const scrollLeft = document.getElementById('scroll-left');
   const scrollRight = document.getElementById('scroll-right');

   let currentIndex = 0;
   const totalItems = document.querySelectorAll('.scroll-item').length;

   const autoScroll = () => {
    currentIndex = (currentIndex + 1) % totalItems;
    scrollContainer.scrollTo({ left: currentIndex * window.innerWidth, behavior: 'smooth' });
   };

   let autoScrollInterval = setInterval(autoScroll, 3000);

   scrollContainer.addEventListener('scroll', () => {
    clearInterval(autoScrollInterval);
    autoScrollInterval = setInterval(autoScroll, 3000);
   });

   scrollLeft.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
    scrollContainer.scrollTo({ left: currentIndex * window.innerWidth, behavior: 'smooth' });
   });

   scrollRight.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalItems;
    scrollContainer.scrollTo({ left: currentIndex * window.innerWidth, behavior: 'smooth' });
   });