const colorElements = document.querySelectorAll('.nav-links li');

colorElements.forEach(colorElement => {
  colorElement.addEventListener('mouseover', () => {
    colorElement.style.height = '129px';
    colorElement.style.marginTop = '0';
  });

  colorElement.addEventListener('mouseout', () => {
    colorElement.style.height = '95px';
    colorElement.style.marginTop = '34px';
    
  });
});

/*Image slider*/
