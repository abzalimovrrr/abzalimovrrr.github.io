 <HTML>
     <META CHARSET=UTF-8>
 <HEAD>
 <TITLE>Анкета читателя</TITLE>
 <script>
 <!--
 var s="Bac привлекает: \r\n"
 function set(vch)
 { s=s+vch + "\r\n"; document.form1.area.value=s }
 //-->
 </script>
 </HEAD>
 <BODY bgcolor="F8F8FF">
 <CENTER>
 <H3 align="center">Анкета читателя</НЗ>
 <FORM name="form0">
 <H4>Введите название любимого журнала или газеты</H4>
 <input type="text" name="n1" size=45><br>
 </FORM>
 <FORM name="form1">
 <H4>Что Вас привлекает в издании?</H4>
 <TABLE border=3 align=center> <TR>
 <TD><img src="purpsm.gif" align="center"></TD>
 <TD><input type="checkbox" name="m1" value="Стиль подачи материала" 
onClick="set(form1.elements[0].value)">
 Стиль подачи материала<br>
 <input type="checkbox" name="m2" value="Достоверность информации" 
onClick="set(form1.elements[1].value)">
 Достоверность информации<br>
 <input type="checkbox" name="m3" value="Дизайн и оформление" 
onClick="set(form1.elements[2].value)">
 Дизайн и оформление<br>
 </TD></TR></TABLE>
 <textarea name="area" cols=35 rows=7> </textarea><br>
 <input type="reset" value="Отмена"
 onclick= "s='Bac привлекает: \r\n'">
 </FORM>
 </BODY>
 </HTML>
  <HTML>
      <META CHARSET=UTF-8>
 <HEAD>
 <TITLE>Данные, представленные флажком. Анкета переводчика</TITLE>
 <script language="JavaScript">
 <!-- //
 function grant()
 { var d= document
 var k=0;
 if ((d.form1.elements[0]).checked)
 k=k+Number(d.form1.elements[0].value)
 if ((d.form1.elements[1]).checked)
 k=k+Number(d.form1.elements[1].value)
 if ((d.form1.elements[2]).checked)
 k=k+Number(d.form1.elements[2].value)
 form1.ww.value="Вам полагается вознаграждение "+k+" y.e."
 }
 //-->
 </script>
 </HEAD>
 <BODY>
 <H3>Анкета для переводчиков</H3>
 Укажите те языки, которыми Вы владеете в совершенстве: <br>
 <FORM name="form1">
 <input type="checkbox" name="lan" value=100>pyccкий<br>
 <input type="checkbox" name="lan" value=200>английский<br>
 <input type="checkbox" name="lan" value=300>французский<br>
 <input type="button" value=Вознаграждениие onClick="grant()"> <hr>
 <input type="Text" size=50 name="ww" value=""><br>
 <input type="reset" value="Отменить">
 </FORM><hr>
 </BODY>
 </HTML>
