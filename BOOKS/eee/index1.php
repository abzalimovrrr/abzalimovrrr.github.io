<?php 

    require_once "connect.php";
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8" />
<title>КТК ФГБОУ ВО КНИТУ</title>

<meta name="description" content="Введение в C# и общий обзор языка программирования, роль платформы .NET Core, интегрированная среда Visual Studio">
<meta name="viewport" content="width=device-width">
<link href='style30.css' rel='stylesheet' type='text/css'>
</head>
<body>
    
<div id="container">

<div id="header">
<div id="logo">
<a class="logoTitle" href="/" title="На главную">КТК ФГБОУ ВО КНИТУ</a>
<div class="logoDefinition">Развитие</div> 
</div>

<div class="socialbtns">
    
<ul>
    <li><?php  if (isset($_SESSION['username'])) : ?>
       <p>Добро пожаловать, &nbsp <strong><?php echo $_SESSION['username']; ?></strong>
        <a href="index.php?logout='1'" >Выйти</a> </p>
   <?php endif ?></li>
<li><a href="https://t.me/Rishat35907" title="Телеграмм" class="fa fa-lg fa-tel"></a></li>
</ul>
</div>

<div id="search" class="transp">
<form action="https://www.google.ru" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-3716042175333627:1096498938" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" />
    <input type="submit" name="sa" value="Найти" />
  </div>
</form>
</div>
<div class="icon-vk"></div>
<div id="magnifying-glass"></div>

<div class="menuButton" id="menuButton">
	<span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</div>

<div id="menu" class="menu">
<ul class="mainmenu">
<li><a href="//metanit.com/news/">Новости</a></li>
   <li><a href="//metanit.com/sharp/">C#/.NET</a></li>
   <li><a href="//metanit.com/java/">Java</a></li>
   <li><a href="//metanit.com/web/">WEB</a></li>
   <li><a href="//metanit.com/python/">Python</a></li>
   <li><a href="//metanit.com/cpp/">C/C++</a></li>
   <li><a href="//metanit.com/sql/">SQL</a></li>
   <li><a href="//metanit.com/nosql/mongodb/">MongoDB</a></li>
   <li><a href="//metanit.com/go/">Go</a></li>
   <li><a href="//metanit.com/visualbasic/tutorial/">VB.NET</a></li>
   <li><a href="//metanit.com/swift/tutorial/">Swift</a></li>
   <li><a href="//metanit.com/kotlin/tutorial/">Kotlin</a></li>
   <li><a href="//metanit.com/dart/">Dart</a></li>
  
<div class="socialbtns">
</ul>
</div>
</div>
<div id="content_right"> 
<div id="content_right_inner"> 
<div id="content_center"> 
<div id="menC" class="menC">
<div class="articleText" id="articleText">
<h1>Первые шаги</h1>
<h2>Вторые шаги</h2>
<div class="date">Последнее обновление: 18.10.2020</div>



<div style="margin-top:23px;margin-left:5px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
.footer-adaptive { width: 320px; height: 100px; }
@media(min-width: 480px) { .footer-adaptive { width: 468px; height: 60px; } }
@media(min-width: 760px) { .footer-adaptive { width: 728px; height: 90px;  } }
@media(min-width: 1000px) { .footer-adaptive { width: 468px; height: 60px;  } }
@media(min-width: 1122px) { .footer-adaptive{ width: 728px; height: 90px;} }
@media(min-width: 1400px) { .footer-adaptive { width: 970px; height: 90px;} }
</style>
<!-- footer_adaptive -->
<ins class="adsbygoogle footer-adaptive"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="9659512088"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<p>На сегодняшний момент язык программирования C# один из самых мощных, быстро развивающихся и востребованных языков в ИТ-отрасли. В настоящий момент 
на нем пишутся самые различные приложения: от небольших десктопных программок до крупных веб-порталов и веб-сервисов, обслуживающих ежедневно миллионы пользователей.</p>

<div style="margin-top:25px;clear:both;">
<style>
.metanit-rect { width: 300px; height: 250px; }
@media(min-width: 500px) { .metanit-rect { width: 336px; height: 280px; } }
@media(min-width: 760px) { .metanit-rect { width: 728px; height: 90px;  } }
@media(min-width: 1000px) { .metanit-rect { width: 336px; height: 280px;  } }
@media(min-width: 1122px) { .metanit-rect{ width: 728px; height: 90px;} }
@media(min-width: 1400px) { .metanit-rect{ width: 970px; height: 90px;} }
</style>
<!-- metanit_rect -->
<ins class="adsbygoogle metanit-rect"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="3119477283"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>


</div>


<style>
.commentABl { margin: 25px 0px 15px 0px;}
@media(min-width: 860px) { .commentABl { margin: 35px 10px 15px 15px;  } }
</style>
<div class="commentABl" style="clear:both;">
<div id="yandex_rtb_R-A-201190-3" style="display:inline-block;width:320px;vertical-align:top; margin-right:12px;"></div>
<div id="yandex_rtb_R-A-201190-2" style="display:inline-block;width:320px;vertical-align:top;"></div>
</div>

<div id="disqus_thread" style="margin-left:8px;margin-right:8px;clear:both;"></div>

</div>
</div> 
<div id="menR" class="menR">
<style>
.meta-vert { width: 300px; height: 250px; }
@media(min-width: 500px) { .meta-vert { width: 336px; height: 280px; } }
@media(min-width: 1000px) { .meta-vert { width: 160px; height: 600px; } }
</style>
<!-- meta_vert -->
<ins class="adsbygoogle meta-vert"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="4596210485"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<style>
.dn {font-size:12.5px;margin:3px;}
.dh{font-weight:bold;margin-left:2px;}
</style>
<div class="dn">
<div class="dh">1</div>
<div class="dh">2</div>
<ul>
<li>3</li>
<li>4</li>
</ul>
<div class="dh">5</div>
<ul>
<li>6</li>
</ul>
<div class="dh">7</div>
<ul>
<li>8</li>
</ul>
</div>

</div>
</div>
</div> 



<div class="menT" id="menT"><ul id="browser" class="filetree"> 


	<li class="closed"><span class="folder">Лицей_1523</span>
		<ul>
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>Группа_9П1</b></a></span></li>
		<li><span class="file"><a href="Licey/index.html" target="_blank"><b>Группа_9П2</b></a></span></li>	
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>Группа_9О1</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>Группа_9О2</b></a></span></li>			
    	</ul>
	</li>

	<li class="closed"><span class="folder">Группа №892</span>
		<ul>
		<li><span class="file"><a href="eee892/index.html" target="_blank">Выполнение группой ДЗ</a></span></li>	
		
    	</ul>
	</li>


	<li class="closed"><span class="folder">Группа №871 090205</span>
		<ul>
		<li><span class="file"><a href="eee/index.html" target="_blank">Выполнение группой ДЗ</a></span></li>	
		</ul>
	</li>
	<li class="closed"><span class="folder">Группа №872 090205</span>
		<ul>
		<li><span class="file"><a href="eee1/index.html" target="_blank">Выполнение группой ДЗ</a></span></li>	
		</ul>
	</li>



	<li class="closed"><span class="folder">PYTHON</span>
		<ul>
		<li><span class="file"><a href="DZ/index.html" target="_blank">Домашнее задание</a></span></li>	    
		<li><span class="file"><a href="https://bootstrap-4.ru/docs/4.0/content/tables/" target="_blank">PYTHON</a></span></li>	
		<li><span class="file"><a href="Interest/index.html" target="_blank">Интересные</a></span></li>	
		<li><span class="file"><a href="http://w95106oy.beget.tech/index.html" target="_blank">Дементьев</a></span></li>	
		
		</ul>
	</li>



	<li class="closed"><span class="folder">Группа №891</span>
		<ul>
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ОП.06 - Основы теории информации</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="tutorial/1.2.php" target="_blank">Выполнение группой ДЗ</a></span></li>	
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ОП.10 - Основы алгоритмизации программирования</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="tutorial/1.2.php" target="_blank">Выполнение группой ДЗ</a></span></li>	
    	</ul>
	</li>
	<li class="closed"><span class="folder">Группа №892</span>
		<ul>
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ОП.06 - Основы теории информации</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="eee892/index.html" target="_blank">Выполнение группой ДЗ</a></span></li>	
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ОП.10 - Основы алгоритмизации программирования</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="tutorial/1.2.php" target="_blank">Выполнение группой ДЗ</a></span></li>	
    	</ul>
	</li>
	<li class="closed"><span class="folder">Группа №881</span>
		<ul>
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ОП.11 - Языки и методы программирования</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="tutorial/1.2.php" target="_blank">Выполнение группой ДЗ</a></span></li>			
		
			</ul>
	</li>
	<li class="closed"><span class="folder">Группа №471</span>
		<ul>
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ОП.09 - Информационные технологии в профессиональной деятельности</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="tutorial/1.2.php" target="_blank">Выполнение группой ДЗ</a></span></li>		</ul>
	</li>
	<li class="closed"><span class="folder">Группа №571 180207</span>
		<ul>
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ОП.08 - Информационные технологии в профессиональной деятельности</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="tutorial/1.2.php" target="_blank">Выполнение группой ДЗ</a></span></li>		</ul>
	</li>
	<li class="closed"><span class="folder">Группа №871 090205</span>
		<ul>
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ПМ.02/МДК.02.01 - Разработка внедрения и адаптация</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="eee/index.html" target="_blank">Выполнение группой ДЗ</a></span></li>	
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ПМ.03/МДК.03.01 -Cопровождение и продвижение программного обеспечения отраслевой направленности группа</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="tutorial/1.2.php" target="_blank">Выполнение группой ДЗ</a></span></li>	
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ПМ.04/МДК.04.01 -Обеспечение проектной деятельности группа</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="tutorial/1.2.php" target="_blank">Выполнение группой ДЗ</a></span></li>	
		</ul>
	</li>
	<li class="closed"><span class="folder">Группа №872 090205</span>
		<ul>
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ПМ.02/МДК.02.01 - Разработка внедрения и адаптация</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="eee1/index.html" target="_blank">Выполнение группой ДЗ</a></span></li>	
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ПМ.03/МДК.03.01 -Cопровождение и продвижение программного обеспечения отраслевой направленности группа</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="tutorial/1.2.php" target="_blank">Выполнение группой ДЗ</a></span></li>	
		<li><span class="file"><a href="tutorial/1.1.php" target="_blank"><b>ПМ.04/МДК.04.01 -Обеспечение проектной деятельности группа</b></a></span></li>
		<li><span class="file"><a href="tutorial/1.3.php" target="_blank">Задания</a></span></li>
		<li><span class="file"><a href="tutorial/1.2.php" target="_blank">Выполнение группой ДЗ</a></span></li>	
		</ul>
	</li>
</ul></div>
<div id="footer">


<p>Copyright &copy; metanit.com, 2012-2020. Все права защищены.</p>
</div>
</div>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type='text/javascript' src='//metanit.com/js/jquery.treeview.min.js'></script>
<script type='text/javascript' src='//metanit.com/js/syntax9.js'></script>
<script type='text/javascript'>SyntaxHighlighter.all();</script>
<script>
$(function() { 
	$("#menuButton").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $('.mainmenu');
          if (mainmenu.hasClass('open')) { 
            mainmenu.removeClass('open');
          }
          else {
            mainmenu.addClass('open');
          }
        });
	$('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open');
			  $(this).children('span').removeClass('open');
			  $(this).children('span').addClass('close');
            }
            else {
              $(this).siblings('ul').addClass('open');
			  $(this).children('span').removeClass('close');
			  $(this).children('span').addClass('open');
            }
          });
  $("#toggle-theme").on("click", function() {
		if(document.documentElement.hasAttribute("theme")){
			document.documentElement.removeAttribute("theme");
			document.cookie="theme=1;expires=Mon, 19 Feb 2001 12:00:00 UTC;path=/;";
		}
		else{
			document.documentElement.setAttribute("theme", "dark");
			var expire = new Date();
			expire.setHours(expire.getHours() + 7);
			document.cookie="theme=1;expires=" + expire.toUTCString() + ";path=/;";
		}
	});
	$('#magnifying-glass').on('click', function() {
            if ($('#search').hasClass('transp')) {
              $('#search').removeClass('transp').show();
            }
            else {
              $('#search').addClass('transp').hide();
            }
          });
	$('#browser').treeview();$('#navigation').treeview({persist: 'location',collapsed: true, unique: true});
	
	$("li:contains('Глава 1.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 1.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава .')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава .')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
var url = "//metanit.com" + location.pathname;
	$('.file a[href="' + url + '"]').addClass('aMItem').parent().addClass('aMItem').closest('li.collapsable').find('span.folder').addClass('aMItem');
	

	$(".fa-bars").on('click', function() {
		$(".menT").toggleClass("menTOpened");
		$("#content_right_inner").toggleClass("contentRightInnerOpened");
	});
	
	$(".share .fa-vk").attr('onclick','window.open("http://vk.com/share.php?url=' + window.location.href+'","Поделиться в ВКОНТАКТЕ","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-odnoklassniki").attr('onclick','window.open("https://connect.ok.ru/offer?url=' + window.location.href+'","Поделиться в Одноклассниках","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-twitter").attr('onclick','window.open("http://twitter.com/share?url=' + window.location.href+'","Поделиться в Твиттере","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-facebook").attr('onclick','window.open("http://www.facebook.com/sharer.php?u=' + window.location.href +'","Поделиться в Facebook","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
});
</script>
<script>
window.onload= function(){
	setMenC();
};
window.onresize= function(){
	setMenC();
};

function setMenC(){
	if(window.innerWidth >859){
			
		var h = document.getElementById("articleText").clientHeight;
		document.getElementById("menT").style.maxHeight=h + "px";
	}
}
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-35780297-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-35780297-1');
</script>


<script async defer type="text/javascript" src="https://www.google.ru/coop/cse/brand?form=cse-search-box&amp;lang=ru"></script>
<script type="text/javascript">
    (function(w, d, n, s, t) {
        w[n] = w[n] || [];
        w[n].push(function() {
            Ya.Context.AdvManager.render({
                blockId: "R-A-201190-3",
                renderTo: "yandex_rtb_R-A-201190-3",
                horizontalAlign: false,
                async: true
            });
        });
        t = d.getElementsByTagName("script")[0];
        s = d.createElement("script");
        s.type = "text/javascript";
        s.src = "//an.yandex.ru/system/context.js";
        s.async = true;
        t.parentNode.insertBefore(s, t);
    })(this, this.document, "yandexContextAsyncCallbacks");
</script>
<script type="text/javascript">
    (function(w, d, n, s, t) {
        w[n] = w[n] || [];
        w[n].push(function() {
            Ya.Context.AdvManager.render({
                blockId: "R-A-201190-2",
                renderTo: "yandex_rtb_R-A-201190-2",
                async: true
            });
        });
        t = d.getElementsByTagName("script")[0];
        s = d.createElement("script");
        s.type = "text/javascript";
        s.src = "//an.yandex.ru/system/context.js";
        s.async = true;
        t.parentNode.insertBefore(s, t);
    })(this, this.document, "yandexContextAsyncCallbacks");
</script>
    <script src="target_blank.js"></script>
</body>
</html>