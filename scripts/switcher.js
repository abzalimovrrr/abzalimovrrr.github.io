$(function () {
  $(".switch").click(function () {
    if ($(this).hasClass("switch-on")) {
      $(this).removeClass("switch-on");
      localStorage.setItem("theme", "light");
      $(".navigation").removeClass("active");
      $("body").removeClass("scroll_color");
    } else if (!$(this).hasClass("switch-on")) {
      $(this).addClass("switch-on");
      localStorage.setItem("theme", "dark");
      $(".navigation").addClass("active");
      $("body").addClass("scroll_color");
    }
  });
});

$(function () {
  $("#hww").click(function () {
    if ($(".navigation").hasClass("lalala")) {
      $(".navigation").removeClass("lalala");
      $(".navigation").find(".container").css("display", "flex");
      $(".navigation").find(".title").css("display", "flex");
    } else {
      $(".navigation").addClass("lalala");
      $(".navigation").find(".container").css("display", "none");
      $(".navigation").find(".title").css("display", "none");
    }
  });
});
