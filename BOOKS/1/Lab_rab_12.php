 <HTML>
 <HEAD>
     <META CHARSET=UTF-8>
 <SCRIPT>
 <!--//
 function multi_pulti()
 {
 img_array = new Array()
 for (var i=0; i<4; i++)
 img_array[i] = new Image(50,100)
 img_array[0].src = "e1.jpg"
 img_array[1].src = "e2.jpg"
 img_array[2].src = "e3.jpg"
 img_array[3].src = "e4.jpg"
 var t=new Date()
 p=-1
 }
 function s()
 {
 p=p+1
 document.images[0].src =img_array[p].src
 setTimeout("s()",100)
 if (p==3) p=-1
 }
 //-->
 </SCRIPT>
 </HEAD>
 <BODY onLoad="multi_pulti()">
 <img src="e1.jpg">
 <br>
 <input type="Button" name="But" value="Посмотреть" onClick="s()">
 </BODY>
 </HTML>
 <HTML>
 <META CHARSET=UTF-8>
 <HEAD>
 <TITLE>Бинарный поиск. Таблица промежуточных 
значений</TITLE>
 <script language="JavaScript">
 <!-- //
 var v=new Array (2, 3, 5, 6, 6, 7,10,11, 20, 25)
 function testtab(obj,v,t)
 { var res="i j k v[k] t<= v[k]"+"\r\n"
 var i=0
 var j= v.length-1
 var k
 while ( i < j )
 { k=Math.round( (i+j)/2+0.5)-1
 res = res + i + " "+j+" "+k+" "+"v[" + k + "]=" + v[k] + " " + t + "<=" + 
v[k]+"\r\n"
 if (t <= v[k] )
 j=k
 else
 i=k+l
 }
 res += "v[" + i + "]=" +v[i]+"\r\n"
 obj.resultl.value=res
 if (v[i] == t )
 { return i}
 else return -1
 }
 function test(obj)
 { obj.datal.yalue=v}
 //-->
 </script>
 </HEAD>
 <BODY bgcolor=silver>
 <H4>Реализация алгоритма бинарного поиска</H4>
 <FORM name="forml">
 <pre>
 Массив:<INPUT type="text" size=40 name="datal" ><hr>
 Элемент:<INPUT type="text" size=20 name="data2" ><hr>
 Результат поиска: <INPUT type="text" size=20 name="result" ><hr>
 Таблица промежуточных значений: <BR>
 <textarea cols=50 rows=7 name="result1" > </textarea><hr>
 </PRE>
 <input type="button" value=0пpeдeлить onClick="test(form1); 
forml.result.value=testtab(form1,v,forml.data2.value)">
 <input type="reset" value=Отменить>
 </FORM>
 </BODY>
 </HTML>