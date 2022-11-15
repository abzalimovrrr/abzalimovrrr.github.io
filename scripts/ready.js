$(document).ready(function () {
  /* Код для изменения темы */
  if (!localStorage.getItem("theme")) {
    localStorage.setItem("theme", "light");
  }

  const theme = localStorage.getItem("theme");

  if (theme === "dark") {
    $(".switch").addClass("switch-on");
    $(".navigation").addClass("active");
    $("body").addClass("scroll_color");
  }
  /* Код для изменения темы */

  /* Код для скрытия sidebar  */
  $(".sidebar .header").on("click", my_func);
});
