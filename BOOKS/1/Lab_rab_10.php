<HTML>
    <META CHARSET=UTF-8>
 <HEAD>
 <TITLE>Определение времени</TITLE>
 <script language="JavaScript">
 <!-- //
 function c1()
 { var d=document
 var t=new Date()
 var h=t.getHours()
 var m=t.getMinutes()
 var s=t.getseconds()
 var res=""
 if (h < 10)
 res += "0" + h
 else res += h
 if (m < 10) res += ":0"+m
 else res += ":"+m
 if (s < 10) res += ":0"+s
 else res += ":"+s
 d.form1.rest.value = res
 }
 //-->
 </script>
 </HEAD>
 <BODY bgcolor="#FFFFCC">
 <CENTER>
 <IMG src=alarmWHT.gif><br>
 При нажатии кнопки <В>Время</В>, Вы узнаете, который час
 <FORM name="form1">
 <input type="button" value=Время onClick="c1()">
 <input type="text" size=10 narae="rest"><br>
 </FORM>
 </BODY>
 </HTML>
 <HTML>
     <META CHARSET=UTF-8>
 <HEAD>
 <TITLE>B какие месяцы года 13 число попадает на 
пятницу?</TITLE>
 <script language="JavaScript">
 <!-- //
 function def13(obj)
 { var t= new Date()
 var c=""
 var y=Number(obj.fye.value)
 for (var 1=0; i <=11; i++)
 { t.setYear(y)
 t.setMonth(i)
 t.setDate(13)
 if ( (t.getDay())==5)
 с = c+ fmon(i)+ "\r\n"
 }
 obj.res.value = с
 }
 function fmon(mont)
 {
 var s
 switch (mont)
 { case 0 s="январь"; break;
 case 1 s="февраль"; break;
 case 2 s="март"; break;
 case 3 s="апрель"; break;
 case 4 s="май"; break;
 case 5 s="июнь"; break;
 case 6 s="июль"; break;
 case 7 s="август"; break;
 case 8 s="сентябрь"; break;
 case 9 s="октябрь"; break;
 case 10: s="ноябрь"; break;
 case 11: s="декабрь"; break;
 }
 return s
 }
 //-->
 </script>
 </HEAD>
 <BODY bgcolor="#FFFFCC">
 <H4>B какие месяцы заданного года число 13 попадает на 
пятницу?</h4>
 <FORM name="form1">
 Введите год: <input type="text" size=8 name="fye" >
 <input type="button" value=Haйти onClick="def13 (form1)"><br>
 <textarea Cols=30 rows=4 name=res></textarea><br>
 <input type="reset" value=Отменить>
 </FORM>
 </BODY>
 </HTML>