<php
  if (!$link = mysql_connect('https://free28.beget.com/phpMyAdmin/index.php?db=n96898nz_gogogo', 'n96898nz_gogogo', '123456AaAa')) {
    echo 'Ошибка подключения к базе данных';
    exit;
  }

  //перенаправление подключения в русскую кодировку 
  @mysql_query("SET NAMES 'cp1251'", $link);

  mysql_select_db('n96898nz_gogogo', $link);


  $sql = "INSERT INTO `users` (`UID`, `UName`, `UPSW`, `SName`, `Name`, `SecName`) 
                        VALUES (1, 'KOOLER', 'OBAMA','Большаков', 'Андрій', 'Михайлович')";

  $result = mysql_Query($sql, $link);

  $sql = "INSERT INTO `themes` (`ThemID`, `ThemUID`, `ThemDate`, `ThemContent`) 
                        VALUES (1, 1, '2010-04-29','Это текст новой темы')";

  $result = mysql_Query($sql, $link);

  $sql = "INSERT INTO `messages` (`MSGID`, `MSGTID`, `MSGUID`, `MSGDate`, `MSGContent`) 
                        VALUES (1, 1, 1,'2010-04-29','Это текст сообщения к теме 1')";

  $result = mysql_Query($sql, $link);
>