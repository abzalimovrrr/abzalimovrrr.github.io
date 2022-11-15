let button_top = $("#button_top");

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    button_top.addClass("show");
  } else {
    button_top.removeClass("show");
  }
});

button_top.on("click", function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, "300");
});
