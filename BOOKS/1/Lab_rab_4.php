<HTML>
 <HEAD>
     <META CHARSET=UTF-8>
 <TITLE>Перестановка изображений</TITLE>
 <script>
 function chan(obj)
 { var r1=Number(obj.a1.value)
 var r2=Number(obj.a2.value)
 if ((r1<1)||(r1>3)||(r2<1)||(r2>3))
 alert ("Неверно заданы номера рисунков!")
 else
 { var z=document.images[r1-1].src
 document.images[r1-1].src=document.images[r2-1].src;
 document.images[r2-1].src=z
 } }
 </script>
 </HEAD>
 <BODY>
 <CENTER>
 <H4>Галерея рисунков</H4><br>
 <IMG src="p1.gif" width="90" name="pic1">
 <IMG src="p2.gif" width="90" name="pic2">
 <IMG src="p3.gif" width="90" name="pic3"> <br>
 <FORM name=form1>
 Рисунки с номерами<br>
 <input type="text" name="a1" size=1> и
 <input type="text" name="a2" size=1><P>
 <input type="button" value="Поменять местами" onClick="chan(form1)">
 </FORM>
 </CENTER>
 </BODY>
 </HTML
 <HTML>
 <HEAD>
 <TITLE>Простое вертикальное меню</TITLE>
 <script language="JavaScript">
 function img(n, action)
 {if (action)
 {document.images[n-1].src="wpch"+n+".gif"}
 else
 {document.images[n-1].src="pch"+n+".gif"}
 }
 </script>
 </HEAD>
 <BODY background="fon1.jpg">
 <H2><FONT соlоr="#0000ff">Содержание</FONT></H2>
 <A href="tch1.htm" onmouseover="img(1,1)" onmouseout="img(1,0)">
 <IMG src="pch1.gif" аlt="форматирование текста" border="0" width="103" 
height="35"></A><br>
 <A href="tch2.htm" onmouseover="img(2,1)" onmouseout="img(2,0)">
 <IMG src="pch2.gif" аlt="форматирование текста" border="0" width="103" 
height="35"></A><br>
 <A href="tch3.htm" onmouseover="img(3,1)" onmouseout="img(3,0)">
 <IMG src="pch3.gif" аlt="форматирование текста" border="0" width="103" 
height="35"></A><br>
 </BODY>
 </HTML