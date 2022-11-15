for (let li of list.querySelectorAll("li")) {
  let span = document.createElement("span");
  span.classList.add("show");
  li.prepend(span);
  span.append(span.nextSibling);
}

list.onclick = function (event) {
  if (event.target.tagName != "SPAN") return;

  let childrenList = event.target.parentNode.querySelector("ul");
  if (!childrenList) return;
  childrenList.hidden = !childrenList.hidden;

  if (childrenList.hidden) {
    event.target.classList.add("hide");
    event.target.classList.remove("show");
  } else {
    event.target.classList.add("show");
    event.target.classList.remove("hide");
  }
};

/* Код для скрытия sidebar */
function my_func() {
  $(".sidebar .list").not($(this).next());
  $(this).next().toggleClass("active");
}
/* Код для скрытия sidebar */

/* Вызов функции дописан в файле ready.js */
