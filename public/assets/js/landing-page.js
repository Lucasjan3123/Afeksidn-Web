let isDown = false;
let startX;
let scrollLeft;
const slider = document.querySelectorAll(".items");
console.log(slider);

for (let i = 0; i < slider.length; i++) {
  const end = () => {
    isDown = false;
    slider[i].classList.remove("active");
  };

  const start = (e) => {
    isDown = true;
    slider[i].classList.add("active");
    startX = e.pageX || e.touches[0].pageX - slider[i].offsetLeft;
    scrollLeft = slider[i].scrollLeft;
  };

  const move = (e) => {
    if (!isDown) return;

    e.preventDefault();
    const x = e.pageX || e.touches[0].pageX - slider[i].offsetLeft;
    const dist = x - startX;
    slider[i].scrollLeft = scrollLeft - dist;
  };

  (() => {
    slider[i].addEventListener("mousedown", start);
    slider[i].addEventListener("touchstart", start);

    slider[i].addEventListener("mousemove", move);
    slider[i].addEventListener("touchmove", move);

    slider[i].addEventListener("mouseleave", end);
    slider[i].addEventListener("mouseup", end);
    slider[i].addEventListener("touchend", end);
  })();
}
