<html>
    <META CHARSET=UTF-8>
<head>
<script language="JavaScript">
<!-- hide
 // ok, у нас браузер с поддержкой JavaScript 
 var browserOK = false;
 var pics;
// -->
</script>
<script language="JavaScript1.1">
<!-- hide
 // браузер с поддержкой JavaScript 1.1!
 browserOK = true;
 pics = new Array();
// -->
</script>
<script language="JavaScript">
<!-- hide
var objCount = 0; // количество изображений на web-странице 
function preload(name, first, second) { 
 // предварительна\я загрузка изображений и размещение их в массиве 
 if (browserOK) { 
 pics[objCount] = new Array(3);
 pics[objCount][0] = new Image();
 pics[objCount][0].src = first;
 pics[objCount][1] = new Image();
 pics[objCount][1].src = second;
 pics[objCount][2] = name;
 objCount++;
 }
}
function on(name){
 if (browserOK) {
 for (i = 0; i < objCount; i++) {
 if (document.images[pics[i][2]] != null)
 if (name != pics[i][2]) { 
 // вернуть в исходное систо\яние все другие изображени\я 
 document.images[pics[i][2]].src = pics[i][0].src;
 } else {
 // показывать вторую картинку, поскольку курсор пересекает 
данное изображение 
 document.images[pics[i][2]].src = pics[i][1].src;
 }
 }
 }
}
function off(){
 if (browserOK) {
 for (i = 0; i < objCount; i++) {
 // вернуть в исходное систо\яние все изображени\я 
 if (document.images[pics[i][2]] != null) 
 document.images[pics[i][2]].src = pics[i][0].src;
 }
 }
}
// заранее загружаемые изображения - Вы должны здесь указать 
// изображения, которые нужно загрузить заранее, а также объект 
Image,
// к которому они относятся (первый аргумент). Именно эту часть 
// нужно корректировать, если Вы хотите использовать скрипт 
// применительно к другим изображениям (конечно это не освобождает
// Вас от обязанности подредактировать в документе также и раздел 
body)
preload("link1", "img1f.gif", "img1t.gif");
preload("link2", "img2f.gif", "img2t.gif");
preload("link3", "img3f.gif", "img3t.gif");
// -->
</script>
<head>
<body>
<a href="link1.htm" onMouseOver="on('link1')" 
 onMouseOut="off()">
<img name="link1" src="link1f.gif" 
 width="140" height="50" border="0"></a>
<a href="link2.htm" onMouseOver="on('link2')" 
 onMouseOut="off()">
<img name="link2" src="link2f.gif" 
 width="140" height="50" border="0"></a>
<a href="link3.htm" onMouseOver="on('link3')" 
 onMouseOut="off()">
<img name="link3" src="link3f.gif" 
 width="140" height="50" border="0"></a>
</body>
</html