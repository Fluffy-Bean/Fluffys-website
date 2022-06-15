document.querySelectorAll(".gallery img").forEach(image =>{
  image.onclick = () =>{
    document.querySelector(".gallery-image").src = image.getAttribute("src");
  }
});

const slider = document.querySelector(".gallery");
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener("mousedown", (e) => {
  isDown = true;
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener("mouseleave", () => {
  isDown = false;
});
slider.addEventListener("mouseup", () => {
  isDown = false;
});
slider.addEventListener("mousemove", (e) => {
  if (!isDown) return;
  const x = e.pageX - slider.offsetLeft;
  const walk = x - startX;
  slider.scrollLeft = scrollLeft - walk;
});
