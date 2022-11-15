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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>D_Z</title>
</head>
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

header {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: #eee;
    display: flex;
    height: 120px;
    background-color: rgb(31, 31, 31);

}

.head {
    padding-left: 20px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    font-size: 55px;
    width: 60%;
}
#db {
    font-size: 20px;
}

.login {
    font-size: 25px;
    width: 40%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    
    
}
.button {
    border-radius: 10px;
    padding: 20% 30%;
    background-color: rgb(58, 58, 58) ;
    color: #eee;
    text-decoration: none;
    font-size: 20px;
    cursor: pointer;
}
.button:hover {
    background-color: #eee;
    color: rgb(58, 58, 58) ;
    transform: scale(1.2, 1.2);
    transition: 1s;
}

container {
    padding-top: 20px ; 
    display: flex;
    justify-content: center;
}
.gl {
    padding: 5% 5% 0 5% ;
   
    background-image: url("Горы.gif");
    height: 600px;
    width: 850px;
}
.pr {
	
    
    color: #eee;
    margin-right: 5px;
    width: 290px;
	 position: inherit;
    display: block;
   
	justify-content: center;
    background-color: rgb(0, 0, 0, 0.5);
    
    
}
.a {
    display: block;
    color: #eee;
    text-decoration: underline;
    padding: 15px 10px 15px 10px;
    margin-bottom: 10px;
}

.text_text {
    padding: 10px 10px;
    text-align: center;
    font-size: 20px;
}
.pr_pr {
    margin-bottom: 10px;
    color: #eee;
    margin-right: 5px;
    width: 290px;
    display: block;
    justify-content: center;
    background-color: black;
    background-color: rgb(0, 0, 0, 0.5);

}
.flex {
    display: flex;
}
</style>
<header>
    <div class="head">Домашняя работа
        
    </div>
    <div class="login">
        <?php  if (isset($_SESSION['username'])) : ?>
       <p>Добро пожаловать, &nbsp <strong><?php echo $_SESSION['username']; ?></strong></p>
       <p> <a href="index.php?logout='1'" class="button">Выйти</a> </p>
   <?php endif ?>
        
    </div> 
</header>
<body>
    <section>   
         <container>
            <div class="gl">
                <div class="flex">
                    <div class="pr_pr">
                        <div class="text_text text">МДК 02.01
                            Разработка и внедрение ПО</div>
                        
                    </div>
                    <div class="pr_pr">
                        <div class="text_text text">МДК 03.01
                            Сопровождение и продвижение ПО</div>
                        
                    </div>
                    <div class="pr_pr">
                        <div class="text_text text">МДК 04.01
                            Обеспечение проектной деятельности</div>
                        
                    </div>
                </div>
                    <div class="flex">
                        <div class="pr">
                            <a href="АНАЛИЗ ВЫБОРА МЕТОДОВ ДЛЯ ВЫЯВЛЕНИЯ ПРОБЛЕМ СОВМЕСТИМОСТИ ПО.docx" class="a">1.Реферат. Анализ выбора методов для выяления проблем совместимости ПО    </a>
                            <a href="ASP.NET.docx" class="a">2. Реферат. ASP.NET</a>
                            <a href="PlanProekt.docx" class="a">3. Доклад. Основы планирования проекта</a>
                            <a href="#" class="a">4</a>
                        </div>
                        <div class="pr">
                            <a href="Antivirus.docx" class="a">1. Лабораторная работа №1. Antivirus</a>
                            <a href="#" class="a">2</a>
                            <a href="#" class="a">3</a>
                            <a href="#" class="a">4</a>
                        </div>
                        <div class="pr">
                            <a href="#" class="a">1</a>
                            <a href="#" class="a">2</a>
                            <a href="#" class="a">3</a>
                            <a href="#" class="a">4</a>
                        </div>
                     </div>
            </div>
        </container>
    </section>


</body>
</html>


  <!--     notification message
  <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
            </h3>
        </div>
  <?php endif ?> -->

  
   
   
		
