$(function () {
  $("#callback_button").click(function () {
    console.log("Клик!");
  });
});

$(function () {
  $("#callback_button").click(function () {
    $(".modal").addClass("active");
    $(".button_container").addClass("active");
    $("body").addClass("active");
  });

  $(".close_button").click(function () {
    $(".modal").removeClass("active");
    $(".button_container").removeClass("active");
    $("body").removeClass("active");
  });
});
