<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
</head>
<body >
<?php
// Время работать
$name= "Максим";
$age= 28;
echo  "Меня зовут:" . " " . $name . "<br>";
echo  "Мне " . $age . " лет" . "<br>";
if   ( $age >=18 and $age <= 59 ) {
  echo "Вам еще работать и работать" . "<br>";
} elseif ($age >= 59) {
  echo "Вам пора на пенсию" . "<br>";
} elseif ($age <= 18) {
  echo  "Вам еще рано работать" . "<br>";
} else {
  echo  "Неизвестный возраст" . "<br>";
}
// День недели
$day = 6;
switch ($day){
  case ($day>=1 and $day<=5):
    echo  "Это рабочий день" . "<br>";
    break;
  case ($day == 6 OR $day == 7 ):
    echo  "Это выходной день" . "<br>";
    break;
  default:
    echo "Неизвестный день". "<br>";
    break;
};
// скорость автомобиля
$s=60;
$t=20;
$vKmHour=$s/$t;
echo "скорость автомобиля " . $vKmHour . " км/час" . "<br>";
$vMetrSek=($s/1000)/($t/60);
echo "скорость автомобиля " . $vMetrSek . " м/сек" . "<br>";
//переменная переменных
$foo = 'bar';
$bar = 10;
echo $$foo ."<br>";
?>
<form method="POST" action=''>
  <p></>первое число<input TYPE="text" name="a"/></p>
  <p>второе число<input TYPE="text" name="b"/></p>
  <p> <input TYPE="radio" name="operation" checked value='+'/>сложение</p>
  <p><input TYPE="radio" name="operation" value='-'/>разность</p>
  <p><input TYPE="radio" name="operation" value='*'/>произведение</p>
  <p><input TYPE="radio" name="operation" value='/'/>деление  </p>
  <p><input TYPE="radio" name="operation" value='%'/>остаток  </p>
  <p> <input type="submit" name="result" value="Вычислить"> </p>

</form>
<?php
// калькулятор

$a = $_POST["a"];
$b = $_POST["b"];
$radio=$_POST["operation"];

if ($_POST["result"]){
  if ($radio=='+'){
    $c = $a + $b; echo "сумма=" . $c .'<br>';
  }else if ($radio=='-'){
    $d = $a - $b; echo "разность=" . $d . '<br>';
  } elseif ($radio=='*'){
    $e = $a *$b;  echo  "произведение=" . $e. '<br';
  }elseif ($radio=='/'){
    if($b=="0"){ echo "error" . '<br>';
    }else{
      $f = $a / $b; echo "деление=" . $f . '<br>';}
  }elseif ($radio== '%'){
    $g = $a % $b; echo "остаток=" . $g .'<br>';
  }else {
    echo "error" . '<br>';}
};


//16
$a=75;
$b=83;
echo max ( $a , $b) . "<br>" ;
//17-19
$a = '78';
$b = 78;
if ($a==$b) {
  echo "равны" . "<br>";
} else {
  echo "не равны" . "<br>";
};
if ($a===$b) {
  echo "эквивалентны" . "<br>";
} else {
  echo "не эквивалентны" . "<br>";
};
$result=var_dump($a==$b);
echo $result . "<br>";

//20-22
$bool1 = var_dump((bool)20); // ненулевое число выводит true
echo $bool1 . "<br>";
$bool2 = var_dump((bool)0); // 0 воспринимается как false,0 не отображается браузером
echo $bool2 . "<br>";
$bool3 = var_dump((bool)(-20)); //ненулевое число выводит true
echo $bool3. "<br>";
//23
echo "text" . "<br>";
print "text2" . "<br>";
printf ("text3" . "<br>");
//24
//comment1
/*comment2*/
#comment3

//25


//26
define("DAYS_COUNT", 7);
const MONTH_COUNT = 12;
echo DAYS_COUNT  . "</br>";
echo MONTH_COUNT . "</br>"
?>
</body>
</html>
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>
Something is wrong with the XAMPP installation :-(
