<HTML>
 <HEAD>
     <META CHARSET=UTF-8>
 <TITLE>Вывод символов строки в "столбик"</TITLE>
 <script language="JavaScript">
 <!-- //
 function ttest(s)
 { var sres="Прочитанный текст:"+" \r\n"+s+"\r\n"+
 'Текст в "столбик":'+"\r\n"
 var cur=""
 for ( var i=0; i <= s.length-1; i += 1)
 {c=s.charAt(i); cur +=c+"\r\n" }
 sres+=cur
 return sres
 }
 //-->
 </script>
 </HEAD>
 <BODY bgcolor="#FFFFCC">
 <H4>Символы текущей строки в столбик</H4>
 <FORM name="form1">
 Введите строку: <input type="text" size=20 name="st1"><hr>
 <input type="button" value=Bыпoлнить
onClick="form1.res.value=ttest(form1.st1.value)">
 <input type="reset" value=Очистить><hr>
 <textarea cols=20 rows=7 name= res></textarea>
 </FORM>
 </BODY>
 </HTML>
 <HTML>
     <META CHARSET=UTF-8>
 <HEAD>
 <TITLE>Количество заданных слов в тексте</TITLE>
 <script language="JavaScript">
 <!-- //
 function numword(obj)
 { var h=obj.data.value
 var s=obj.textin.value
 s=' '+s+' '
 h=' '+h+' '
 var m=h.length
 var res=0
 var i=0
 while (i <= s.length-1)
 { ch=s.substr(i,m)
 if (ch==h) {res+=l; i = i+m-1}
 else
 i++
 }
 obj.result.value=res
 }
 //-->
 </script>
 </HEAD>
 <BODY bgcolor="#FFFFCC">
 <H4>Количество заданных слов в тексте</H4>
 <FORM name="form1">
 Введите текст:<br>
 <textarea name="textin" rows=4 cols=20></textarea><hr>
 Введите слово: <input type="text" name="data" size="8"><hr>
 <input type="button" value="0пpeдeлить" 
onClick="numword(form1)"><hr>
 Количество слов в тексте: <input type="text" name="result" size=8><hr>
 <input type="reset" value="Отменить">
 </FORM>
 </BODY>
 </HTML>