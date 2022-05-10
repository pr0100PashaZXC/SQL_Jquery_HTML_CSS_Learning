<?php
$myCar = "OtvalnayaCar";
echo $myCar . "<br>";

$myOtvalnyTeam = array("Alan", "Anal", "Komol");
echo $myOtvalnyTeam[2]. "<br>";

echo "ВНИМАНИЕ!!! УКРАДЕН ЩИТОК ГРАЖДАНИНА " . $myOtvalnyTeam[2] . ". неважно. <br> " ;

$author = "Chmo";
echo <<<_END
Debugging is twise as hard as writing the code in the first place.  <br>
therefore, if you write the code as cleverlyas possible, you are,   <br>
    by definition, not smart enough to debug it.                    <br>
 
    -$author.
_END;

$a = 1;
$b = 0;
echo ($a AND $b) . "<br>";
echo ($a OR $b) . "<br>";
echo ($a XOR $b). "<br>";
 
$bankBalance = 175;
$savings = 0;
if($bankBalance < 100){
    $money = 1000;
    $bankBalance += $money;
    echo "Сумма банковского счета:" . $bankBalance . "<br>";
}
    elseif($bankBalance > 200){
        $savings += 100;
        $bankBalance -= 100;
        echo "Сумма банковского счета:" . $bankBalance . "<br>";
        echo "Сумма сбережений:" . $savings . "<br>";
    }
    else{
        $savings +=50; 
        $bankBalance -=50;
        echo "Сумма банковского счета:" . $bankBalance . "<br>";
        echo "Сумма сбережений:" . $savings . "<br>";
    }

for($count = 1; $count <= 12; ++$count){
    echo "число " . $count . ", умноженное на 12, равно" . $count * 12 . "<br>";
    }
$surname1 ="sAM ";
$surname2 ="hEnrY ";
$surname3 ="Churchill ";

function fixNames(&$name1, &$name2, $name3){
    $name1 = ucfirst(strtolower($name1));
    $name2 = ucfirst(strtolower($name2));
    $name3 = ucfirst(strtolower($name3));
}

echo $surname1, $surname2, $surname3 . "<br>";
fixNames($surname1, $surname2, $surname3);
echo $surname1, $surname2, $surname3 . "<br>";

class Dad{
    function test(){
        echo "[Class Dad] я твой отец. <br>";
    }
}

class Son extends Dad{
    function test(){
        echo "[Class Son] я Люк. <br>";
    }

    function test2(){
        parent::test();
    }
}

$object = new Son;
$object -> test();
$object -> test2();  

if (file_exists("testfile.txt")) echo "Файл существует"

?>