document.addEventListener('DOMContentLoaded', function () {
  const readMoreLinks = document.querySelectorAll('.read-more');

  readMoreLinks.forEach((link) => {
    link.addEventListener('click', function (event) {
      event.preventDefault();
      const fullDescription = this.previousElementSibling;
      if (fullDescription.style.display === 'none') {
        fullDescription.style.display = 'block';
        this.textContent = 'Read less';
      } else {
        fullDescription.style.display = 'none';
        this.textContent = 'Read more';
      }
    });
  });
});
