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
    ?>