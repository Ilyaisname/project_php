<?php // Задачи на выбор типов данных

  $a = 'семь'; // два числа
  $b = 'четыре'; // два числа

  $aNum;
  $bNum;
    // переводим числа из строковой записи в числовую и записываем результат в новую переменную
    switch ($a) {
      case 'ноль':
        $aNum = 0;
      break;
      case 'один':
        $aNum = 1;
      break;
      case 'два':
        $aNum = 2;
      break;
      case 'три':
        $aNum = 3;
      break;
      case 'четыре':
        $aNum = 4;
      break;
      case 'пять':
        $aNum = 5;
      break;
      case 'шесть':
        $aNum = 6;
      break;
      case 'семь':
        $aNum = 7;
      break;
      case 'восемь':
        $aNum = 8;
      break;
      case 'девять':
        $aNum = 9;
      break;
    }

    switch ($b) {
      case 'ноль':
        $bNum = 0;
      break;
      case 'один':
        $bNum = 1;
      break;
      case 'два':
        $bNum = 2;
      break;
      case 'три':
        $bNum = 3;
      break;
      case 'четыре':
        $bNum = 4;
      break;
      case 'пять':
        $bNum = 5;
      break;
      case 'шесть':
        $bNum = 6;
      break;
      case 'семь':
        $bNum = 7;
      break;
      case 'восемь':
        $bNum = 8;
      break;
      case 'девять':
        $bNum = 9;
      break;
    }
    //--
    $sum = $aNum + $bNum; // складываем полученные числа

    if ($sum > 9) {  // проверяем на разрядность
      echo "<br/> $sum - Большое число <hr/> ";
    } else {
      echo "<br/> $sum - Маленькое число <hr/>";
    }

    //===========================

    $price = 10050; //начальнаяя запись цены
    $bigPrice = ($price * 0.13) + $price; // увеличиваем цену на 13%

    $rub = (int) floor($bigPrice / 100); // отбрасываем две последние цифры
    $kop = (int) $bigPrice % 100;        // получаем последние две цифры
    $priceMod = round($bigPrice / 100, 2); // превращаем в дробное число с двумя знаками после запятой

    echo "$rub руб $kop коп<br/>"; // выводим результат
    echo "$priceMod руб <br/>"; // выводим результат

    // ===========================

    $ip = "192.168.1.1";
    $one = (int) substr($ip, 0, 3);
    $two = (int) substr($ip, 4, 3);
    $three = (int) substr($ip, 8, 1);
    $four = (int) substr($ip, 10, 1);
    $ipNumber = ($one * 256 ** 3) + ($two * 256 ** 2) + ($three * 256 ** 1) + ($four * 256 ** 0);
    
    echo $ipNumber;
    // Если написать так то можго из любого ip сделать число

    // $ipArray = explode(".", $ip);
    // [$one, $two, $three, $four] = $ipArray;
    
    // ==--==//

    // рабочий вариант

    $ip = "192.168.255.196";

    if (gettype($ip) === 'string') {
      $ipArray = explode(".", $ip);
      [$one, $two, $three, $four] = $ipArray;
      $ipNumber = ($one * 256 ** 3) + ($two * 256 ** 2) + ($three * 256 ** 1) + ($four * 256 ** 0);
      
      echo "Число из ip = $ipNumber";

    } elseif (gettype($ip) === 'integer') {
      
      $one = (int) ($ip / 256 / 256 / 256);
      $two = (int) ( ($ip - $one * 256 ** 3) / 256 / 256);
      $three = (int) ( ($ip - $one * 256 ** 3 - $two * 256 ** 2 ) / 256);
      $four = (int) $ip - $one * 256 ** 3 - $two * 256 ** 2 - $three * 256;
      
      $ipStr = $one.".".$two.".".$three.".".$four;
      
      echo "Ip = $ipStr";
    } else {
      echo "Error";
    }
    ?>