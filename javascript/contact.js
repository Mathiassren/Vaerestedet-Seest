// Contact button selection
const heroBtn = document.getElementById("HeroBtn-contact");
const contactSection = document.getElementById("map-background-color");
heroBtn.addEventListener("click", () => {
  contactSection.scrollIntoView({ behavior: "smooth" });
});
