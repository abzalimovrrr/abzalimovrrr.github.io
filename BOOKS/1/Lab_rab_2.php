<HTML>
    <META CHARSET=UTF-8>
<HEAD1>
<title>Обработка значений из формы</title>
<script language="JavaScript">
<!--//
function care (a, h)
{
var s=(a*h)/2;
document.write ("Площадь прямоугольного треугольника равна ",s);
return s
}
//-->
</script>
</HEAD1>
<BODY>
<P>Пример сценария со значениями из формы</P>
<FORM name="form1">
Основание: <input type="text" size=5 name="st1"><hr>
Высота: <input type="text" size=5 name="st2"><hr>
<input type="button" value=Вычислить
onClick="care(document.form1.st1.value, document.form1.st2.value)"> /*По
клику мыши на кнопке в функцию care передаются два параметра -
содержимое полей ввода*/
</FORM>
</BODY>
</HTML>
<HTML>
<HEAD>
<title>Обработка события Change - изменение значения элемента</title>
<script>
function srec(obj)
{obj.res.value=obj.num1.value* obj.num1.value}
</script>
</HEAD>
<BODY>
<P>Вычисление площади квадрата</P>
<FORM name="form1">
Сторона: <input type="text" size=7 name="num1"
onChange="srec(form1)">
<hr>
Площадь: <input type="text" size=7 name="res"><hr>
<input type="reset" value=Обновить>
</FORM>
</BODY>
<style>
    body{
          background-image:url("https://cdns-images.dzcdn.net/images/artist/7a66231b65ed2a4040991bf5730c4826/500x500.jpg");
    }
    p {
        border-style: dashed;
        background-color: grey;
    }
    FORM {
   background-color: white;
   border: 3px solid transparent;
  
   border-image-slice: 70 fill;
   background-image: url("https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxR7-Th-SN69Lo9-9llYPfdzw");
  
  }
    }
    
</style>
</HTML