<html>
    <META CHARSET=UTF-8>
<head>
<script language="JavaScript">
<!-- Скрыть 
function test1(form) {
 if (form.text1.value == "")
 alert("Пожалуйста, введите строку!")
 else { 
 alert("Hi "+form.text1.value+"! Форма заполнена корректно!");
 }
}
function test2(form) {
 if (form.text2.value == "" || 
 form.text2.value.indexOf('@', 0) == -1) 
 alert("Неверно введен адрес e-mail!");
 else alert("OK!");
}
// -->
</script>
</head>
<body>
<form name="first">
Введите Ваше имя:<br>
<input type="text" name="text1">
<input type="button" name="button1" value="Проверка"
onClick="test1(this.form)">
<P>
Введите Ваш адрес e-mail:<br>
<input type="text" name="text2">
<input type="button" name="button2" value="Проверка"
nClick="test2(this.form)">
</body>
</html>
<html>
<head>
<script language="JavaScript">
<!-- hide
function check(input) {
 var ok = true;
 for (var i = 0; i < input.length; i++) {
 var chr = input.charAt(i);
 var found = false;
 for (var j = 1; j < check.length; j++) {
 if (chr == check[j]) found = true;
 }
 if (!found) ok = false;
 }
 return ok;
}
function test(input) {
 if (!check(input, "1", "2", "3", "4",
 "5", "6", "7", "8", "9", "0", "/", "-", " ")) {
 alert("Input not ok.");
 }
 else {
 alert("Input ok!");
 }
}
// -->
</script>
</head>
<body>
<form>
Telephone:
<input type="text" name="telephone" value="">
<input type="button" value="Check"
 onClick="test(this.form.telephone.value)"> 
</form>
</body>
</html>