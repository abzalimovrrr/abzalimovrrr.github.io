<HTML>
 <HEAD>
     <META CHARSET=UTF-8>
 <TITLE>Данные из формы типа "переключатель". Событие Click 
</TITLE>
 <script language="JavaScript">
 <!--//
 function test (k)
 { var a= form1.data.value
 if (a !="" )
 form1.res.value= k*Math.pow(a,2)
 else alert ("Введите значение")
 }
 //-->
 </script>
 </HEAD>
 <BODY>
 <FORM name="form1">
 Введите значение
 <input type="text" name="data" size=10>
 <hr>
 Укажите форму <br>
 <input type="radio" name="fv" value=1
 onClick="test(form1.elements[1].value)">квадрат<br>
 <input type="radio" name="fv" value=3.14
 onClick="test(form1.elements[2].value)">круг<br>
 <input type="radio" name="fv" value=0.42
 onClick="test(form1.elements[3].value)">треугольник<hr>
 <input type="reset" value="0тменить"><hr>
 Площадь: <input type="text" name="res" size=10>
 </FORM>
 </BODY>
 </HTML>
  <HTML>
 <HEAD>
 <TITLE>Изображение и текст. Обтекание</TITLE>
 <script>
 <!--
 function chpict(obj)
 {
 if ((obj.elements[0]).checked)
 document.mypict.align="Left"
 else
 document.mypict.align="Right"
 }
 function rset(obj)
 {document.mypict.align="Left"}
 //-->
 </script>
 </HEAD>
 <BODY>
 <CENTER>
 <H4>Изображение и текст.
 Обтекание изображения текстом</H4>
 </CENTER>
 <FORM name="form1">
Выберите значение параметра выравнивания нажмите кнопку 
<В>Просмотр</В>.<br>
 <PRE>
 <input type="radio" name="alg" checked value=ld>(left) изображение 
выравнивается по левому краю
 <input type="radio" name="alg" value=rd>(right) изображение выравнивается 
по правому краю
 </PRE>
 <input type="button" value= "Просмотр" onclick="chpict(form1)">
 <input type="reset" value="Отменить" onclick="rset(form1)"> </FORM>
 <TABLE bgcolor="F8F8FF">
 <TR><TD>Иван Иванович Шишкин является одним из основоположников
 русского национального пейзажа.
 <IMG src=pl.jpg name=mypict align=left border=3 width=310>
 В полотне "Рожь" Шишкин создал образ большой эпической силы
 и подлинно монументального звучания. Могучая, полная
 богатырских сил природа, богатый, привольный край. (Т. Юрова)
 </TD></TR>
 </TABLE>
 </BODY>
 </HTML>