const toggleButton = document.querySelector('.dark-light');

toggleButton.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
});

const allVideos = document.querySelectorAll('.video');

allVideos.forEach(v => {
  v.addEventListener('mouseover', () => {
    const video = v.querySelector('video');
    video.play();
  });
  v.addEventListener('mouseleave', () => {
    const video = v.querySelector('video');
    video.pause();
  });
});

var hamburger = document.querySelector('#hamburger'),
navList = document.querySelector('#navlist');


var toggleNav = function() {
  hamburger.classList.toggle('js-active')
  navList.classList.toggle('js-active')
}
hamburger.addEventListener('click', toggleNav)