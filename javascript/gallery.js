let largeImage = document.querySelector("#gallery-large");

const smallImages = document.querySelectorAll(
  ".gallery-grid img:not(#gallery-large)"
);

for (let index = 0; index < smallImages.length; index++) {
  smallImages[index].addEventListener("click", (e) => {
    largeImage.src = e.target.src;
  });
}
