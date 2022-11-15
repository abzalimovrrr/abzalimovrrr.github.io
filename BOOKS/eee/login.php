<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="style-lr.css">
</head>
<style>
    body {
    background-image: url("assets/bg-lr.jpg");
    height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
   
}
input {
    
    font-weight: bold;
    font-size: 16px;
    height: 30px;
    padding: 5px;
   
}

input:focus {
    outline: none;

}
.form-control {
    padding-left: 25px;
    border-radius: 10px;
    width: 85%;

}
h2 {
    color: #eee;
    text-align: center;
}
.reg {
    padding-left: 20px;
    border-radius: 10px;
    display: inline-block;
    padding-bottom: 20px;
    width: 400px;
    background-color: rgba(0, 0, 0, 0.5);
    
}

.log {
    display: inline-block;
    padding-left: 20px;
    border-radius: 10px;
    padding-bottom: 20px;
    width: 400px;
    background-color: rgba(0, 0, 0, 0.5);

}

.input {
    
    padding-bottom: 30px;
}

.button {
    cursor: pointer;
    color:rgb(31, 31, 31);
    font-weight: bold;
    font-size: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 15px 0px 15px 0px;
    width: 93.5%;
    border-radius: 10px;
    border-color: none;
    background-color: rgb(68, 68, 68);
}

.button:focus {
    outline: none;
}
.button:hover {
    color: black;
    background-color: #eee;
    transition: 0.5s;

}


.lr {
    color: #eee;
    font-size: 18px;
    display: flex;
    justify-content: space-between;
    margin: 20px 35px 0px 5px;
}

.lr a {
    border-radius: 25px;
    padding: 2px 15px;
    border: #eee 1px solid;
    color: #eee;
    text-decoration: none;
}

.lr a:hover {
    background-color: #eee;
    color: black;
    border: black 1px solid;
    transition: 0.5s;
}

.error {
    color: red;
    font-size: 25px;
    text-align: center;
    padding-top: 10px;
}

</style>
<body>

    <form class="log" method="POST" action="login.php">
        
        <h2>Авторизоваться</h2>
        <div class="input"><input type="text" name="username" class="form-control" placeholder="Имя пользователя" required></div>
        <div class="input"><input type="password" name="password" class="form-control" placeholder="Пароль" required></div>
        <button class="button" name="login_user">Авторизоваться</button>
        <div class="lr">Еще не зарегистрированы?<a href="register.php">Регистрация</a></div>
        <div class="error"><?php include('errors.php'); ?></div>
    </form>
    
</body>
</html>

	 
  