<HTML>
<HEAD>
    <META CHARSET=UTF-8>
 <TITLE>Реакция на событие Change в теге select</TITLE>
 <script language="JavaScript">
 <!-- //
 var s=""
 var sum=0
 function gr(obj,m)
 { var r=100*(Number(((obj.elements[0])[m]).value)+1)
 s+=((obj.elements[0])[m]).text+"\r\n"
 obj.restext.value=s
 sum+=r
 obj.res.value=r
 }
 //-->
 </script>
 </HEAD>
 <BODY>
 <FORM name="form1">
 <H3>Анкета переводчика</H3>
 <TABLE border=3 bgcolor=silver>
 <TR><TH>Выбранный язык</TH><TH>Результат</TH></TR>
 <TR>
 <TD valign=top>
 <select name="data" size=3 onChange="gr(form1,form1.data.value)">
 <option value=0>русский
 <option value=1>английский
 <option value=2>французский
 </select><P>
 <input type="text" name="res" size=15>
 </TD>
 <TD><TEXTAREA name="restext" cols=15 rows=6>
</TEXTAREA><P>
 <input type="button" value=Сумма onClick="form1.resgr.value=sum">
 <input type="text" name="resgr" size=10>
 </TD></TR></TABLE><p>
 <input type="reset" value="Отменить" onClick="sum=0; s=''">
 </FORM>
 </BODY>
 </HTML>
  <HTML>
      <META CHARSET=UTF-8>
 <HEAD>
 <TITLE>Города и памятники.</TITLE>
 <script>
 <!--
 var sum=0
 var q
 var a
 function eq()
 { q=test.question.value
 a=test.answer.value;
 if (a==q) sum +=1
 }
 function result()
 { document.test.res.value=sum}
 //-->
 </script>
 <BODY background="fon3.gif">
 <h3 align=center>Города и памятники</hЗ>
 <FORM name="test">
 <TABLE border=3 align=center cellpadding=5
 cellspacing=6 bgcolor= silver>
 <TR><TH>Памятник</TH><TH>Находится в городе</ТН>
 <TR><TD>
 <select size =7 name="question"
 onChange="q=test.question.value">
 <option value="mad">Музей Прадо<br>
 <option value="ber" >Рейхстаг<br>
 <option value="mil">Оперный театр Ла Скала<br>
 <option value="ier">Стена Плача<br>
 <option value="mek">Священный камень Кааб<br>
 <option value="spb">Медный Всадник<br>
 <option value="mos">Третьяковская галерея<br>
 <option value="par">Триумфальная Арка<br>
 <option value="new">Статуя Свободы<br>
 <option value="lon">Tayэp<br>
 </select>
 </TD>
 <TD>
 <select size=7 name="answer" onChange="eq()">
 <option value="spb">Caнкт-петербург<br>
 <option value="mos">Mocква<br>
 <option value="mek">Meккa<br>
 <option value="ier">Иepycaлим<br>
 <option value="mil">Милан<br>
 <option value="par">Пapиж<br>
 <option value="mad">Мадрид<br>
 <option value="lon">Лoндoн<br>
 <option value="new">Нью-Йорк<br>
 <option value="ber">Бepлин<br>
 </select>
 </TD></TR>
 </TABLE>
 <CENTER><P>
 <input type="button" value="Результат" onclick="result()"><br>
 Количество правильных ответов
 <input type="text" name="res" size="5"><P>
 <input type="reset" value= "Обновить" onclick="sum=0">
 </FORM>
 </BODY>
 </HTML>