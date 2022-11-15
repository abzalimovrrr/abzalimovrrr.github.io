<HTML>
 <HEAD>
     <META CHARSET=UTF-8>
 <TITLE>Простая фреймовая структура</TITLE>
 </HEAD>
 <frameset cols="25%,75%">
 <frame src=contents0.htm name=left>
 <frame src= ch.htm name=right>
 </frameset>
 </HTML>
  <HTML>
 <HEAD>
 <TITLE>Простая фреймовая структура</TITLE>
 </HEAD> <frameset cols="30%,70%">
 <frame src=contents.htm name=left>
 <frame src=empty.htm name=right>
 </frameset>
 </HTML>
 <HTML>
 <HEAD>
 <TITLE>Пустой документ</TITLE>
 </HEAD>
 <BODY>
 </BODY>
 </HTML>
  <HTML>
 <HEAD>
 <TITLE>Оглавление</TITLE>
 </HEAD>
 <BODY background="decor.gif" bgcolor=silver>
 <base target=right>
 <h3>Оглавление</h3>
 <OL>
 <LI><A href="ch1.htm">Ocновы языка HTML </A>
 <LI><A href="ch2.htm">Графика </A>
 <LI><A href="ch3.htm">Изoбpaжeниe-кapтa </A>
 <LI><A href="ch4.htm">Списки </A>
 <LI><A href="сh5.htm">Таблицы </А>
 <LI><A href="ch6.htm">Фpeймы </A>
 </OL>
 </BODY>
 </HTML>
  <HTML>
      <META CHARSET=UTF-8>
 <HEAD>
 <TITLE>Три фрейма с кнопкой для обмена</TITLE>
 </HEAD>
 <frameset rows="*,50">
 <frameset cols="55%,45%">
 <frame src=lpict.htm name=left>
 <frame src=rtext.htm name=right>
 </frameset>
 <frame src=but1.htm name=butt>
 </frameset>
 </HTML>
 <HTML>
 <HEAD>
 <TITLE>Кнопка для смены содержимого фреймов</TITLE>
 <script>
 <!--//
 function chframe()
 { var l=top.left.location
 top.left.location=top.right.location
 top.right.location=l
 }
 //-->
 </script>
 </HEAD>
 <BODY background="decor.gif" bgcolor=silver>
 <CENTER>
 <FORM name=form1>
 <input type="button" value=Обмен onclick="chframe()">
 </FORM>
 </CENTER>
 </BODY>
 </HTML>