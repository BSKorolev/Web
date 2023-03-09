<?php
//1

$very_bad_unclear_name = "15 chicken wings";
$order =& $very_bad_unclear_name;
$order .= " and fries";
echo "\nYour order is: $very_bad_unclear_name.";

//2
$num1 = 10;
echo $num1;
echo "\n";
$num2 = 3.14;
echo $num2;
echo "\n" . (10 + 2);
$last_month = 1187.23;
$this_month = 1089.98;
echo "\nLast month's expenses were $" . ($last_month - $this_month) . " more than this month's expenses.";

//11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;

//12
echo 8 ** 2;

//13
$my_num = 5;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

//14
//%
$a = 10;
$b = 3;
echo "a % b = ", $a % $b, "\n";
if ($a % $b == 0) {
    echo "Делится: " . $a / $b;
} else {
    echo "Делится с остатком: " . $a % $b;
}
//sqrt,pow
$st = pow(2,10);
echo $st;
echo sqrt(245);
$array = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($array as $number) {
    $sum += $number ** 2;
}
echo sqrt($sum);
//round, ceil, floor
echo "\n", round (sqrt(379),);
echo "\n", round (sqrt(379), 1);
echo "\n", round (sqrt(379),2), "\n";
$arr = Array('floor' => floor(sqrt(379)), 'ceil' =>ceil(sqrt(587)));
foreach ($arr as $value) {
    echo "\n", $value, " " ; }
//min, max
$arr = array(4, -2, 5, 19, -130, 0, 10);
echo "\n", min($arr), " ", max($arr);
//random
echo "Random number from 1 to 100: ", rand(1,100), "\n";
$mas = range(1,10);
for ($n=1; $n<11; $n++)
{
    $mas[$n] = rand(1,100);
    echo "mas[$n] = ", $mas[$n], "\t";
    if($n == 10)
    {
        echo "\n";
    }
}
//absolute
$a = rand(1,100);
$b = rand(1,100);
echo "|a-b| = ", abs($a-$b), "\n";

$mas = Array(1,2,-1,-2,3,-3);
for($n=0; $n < sizeof($mas); $n++)
{
    if($mas[$n] < 0)
    {
        $mas[$n] *= -1;
    }
    echo "mas[$n] = ", $mas[$n], "\t";
    if($n == sizeof($mas)-1)
    {
        echo "\n";
    }
}
//main
$number = rand(1, 100);
$div = 2;
$mas_div = array(1);
while ($div <= $a)
{
    if ($a % $div == 0)
    {
        $mas_div[] = $div;
    }
    $div += 1;
}
echo "\n" , $a;
echo "\n";
foreach ($mas_div as $value)
{
    echo  $value, " " ;
}
echo "\n";
$some_arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$counter = 0;
foreach ($some_arr as $value)
{
    $sum += $value;
    $counter++;
    if ($sum > 10) {
        $counter--;
        break;
    }
}
echo "<br>Количество элементов: {$counter}";

//15
function printStringReturnNumber()
{
    echo "string\n";
    return 107;
}
$my_num = printStringReturnNumber();
echo "my_num = ", $my_num, "\n";

//16
function increaseEnthusiasm($str)
{
    return ($str."!");
}
echo increaseEnthusiasm("i don`t know what to say"), "\n";

function repeatThreeTimes($str)
{
    return ($str.$str.$str);
}
echo repeatThreeTimes("Повторение - мать учения! "), "\n";

echo increaseEnthusiasm(repeatThreeTimes("I`m tired of this lab")), "\n";

function cut($str, $num, $p2=10)
{
    return mb_substr($str, 0, $num);
}

function my_next($arr, $i)
{
    if($i < sizeof($arr))
    {
        echo "arr[$i] = ", $arr[$i], "\t";
        my_next($arr, $i+1);
    }
    if($i == 0)
    {
        echo "\n";
    }
    return 0;
}
$arr = range(1,10);
my_next($arr, 0);

function my_add($val)
{

    if($val > 9)
    {
        $result = 0;
        $tmp = $val;

        while($tmp > 0)
        {
            $result += $tmp % 10;
            $tmp = (int)($tmp / 10);
        }
        if($result > 9) {
            $result = my_add($result);
        }
        else
        {
            return $result;
        }
    }
    else
    {
        return $val;
    }
}
echo my_add(107), "\n";

//17
$arr = Array('','','');
for($n = 0; $n < sizeof($arr); $n++)
{
    for($i = $n+1; $i > 0; $i--)
    {
        $arr[$n] .= 'x';
    }
    echo "arr[$n] = ", $arr[$n], "\t";
}
echo "\n";

function arrayFill($val, $len)
{
    if($len > 0)
    {
        $arr = Array($val);
        echo "arr[0] = ", $arr[0], "\t";
        for($n = 1; $n < $len; $n++)
        {
            array_push($arr, $val);
            echo "arr[$n] = ", $arr[$n], "\t";
        }
        echo "\n";
        return $arr;
    }
    else
    {
        return;
    }

}

$arr = arrayFill('x', 5);
for($n = 0; $n < 5; $n++)
{
    echo "arr[$n] = ", $arr[$n], "\t";
}
echo "\n";

$arr = Array(array(1,2,3),
             array(4,5),
             array(6),
            );
echo (array_sum($arr[0]) + array_sum($arr[1]) + array_sum($arr[2])), "\n";

$arr = array();
$iter = 1;
for($n = 0; $n < 3; $n++)
{
    array_push($arr, array());
    for($j = 0; $j < 3; $j++)
    {
        array_push($arr[$n], $iter);
        $iter++;
        echo "arr[$n][$j] = ", $arr[$n][$j], "\t";
    }
}
echo "\n";

$arr = array(2,5,3,9);
$result = $arr[0]*$arr[1] + $arr[2]*$arr[3];
echo "result = ", $result, "\n";

$user = array('name'=>'Varlam', 'surname' => 'Shalamov', 'patronymic' => 'Аlaizovich');
echo $user['name'], " ", $user['surname'], " ", $user['patronymic'], "\n";

$date = array('year' => 2001, 'month' => 09, 'day' => 11);
echo $date['year'], ".", $date['month'], ".", $date['day'], "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "Size of array: ", sizeof($arr), "\n";
echo "Last: ", array_pop($arr), "\tPre-Last: ", array_pop($arr), "\n";

//18
function checkIfMoreTen($a, $b)
{
    return (($a + $b) > 10);
}
echo checkIfMoreTen(4,6) ? 'true' : 'false', "\n";

function Equal($a, $b)
{
    return ($a == $b) ;
}
echo Equal(4,6) ? 'true' : 'false', "\n";

$test = 0;
echo (($test == 0) ? 'верно' : ''), "\n";

$age = 19;
if($age < 10 || $age > 99)
{
    echo "Число меньше 10 или больше 99\n";
}
else
{
    echo (array_sum(str_split($age)) <= 9) ? "Сумма цифр однозначна\n" : "Сумма цифр двузначна\n";
}

$arr = array(107,43,228357241);

function checkQuantity($arr)
{
    return (sizeof($arr)==3);
}
echo (checkQuantity($arr) == 1) ? array_sum($arr) : '';
echo "\n";

//19
for($n = 1; $n <=20; $n++)
{
    for($i = $n; $i >0; $i--)
    {
        echo "x";
    }
    echo "\n";
}

//20
$arr = range(1,10);
echo "Среднее арифметическое = ", (array_sum($arr) / sizeof($arr)), "\n";
echo "Сумма от 1 до 100 = ", (1+100)*100/2, "\n";
$arr = array(1,4,16,196,1225);
$arr = array_map("sqrt", $arr);
for($n=0; $n < sizeof($arr); $n++)
{
    echo "arr[$n] = ", $arr[$n], "\t";
}
echo "\n";

$keys = range('a', 'z');
$values = range(1,26);
$arr = array_combine($keys, $values);
foreach($keys as $n)
{
    echo "arr[$n] = ", $arr[$n], "\t";
}
echo "\n";

$str = '1234567890';
$arr = str_split($str, 2);
$result = array_sum($arr);
echo $result, "\n";
?>