autoSlider();

let left = 0;

function autoSlider() {
  let timer;

  timer = setTimeout(function () {
    let line = document.getElementById("line");
    left = left - 300;
    if (left < -1500) {
      left = 0;
      clearTimeout(timer);
    }
    line.style.left = left + "px";
    autoSlider();
  }, 3000);
}
