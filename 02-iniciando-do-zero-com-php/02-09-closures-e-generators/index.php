<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function ($year){
  $age = date("Y") - $year;
  return "<p>Você tem {$age} anos</p>";
};

echo $myAge(2001);

//Exemplo de função anônima para formatação de preço utilizando uma função nativa do PHP (number_format)
$priceBrl = function ($price){
  return number_format($price, 2,",",".");
};

echo "<p>O projeto custa {$priceBrl(3600)}. Vamos fechar?</p>";

$myCart = [];
$myCart["totalPrice"] = 0;
$carAdd = function ($item, $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$carAdd("HTML5", 1,497);
$carAdd("Jequery",2,497);

var_dump($myCart, $carAdd);
/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$interator = 100;

function showDates($days){
  $saveDate = [];
  for($day = 1; $days; $day++){
      $saveDate[] = date("d/m/y", strtotime("+{$day}days"));
  }
  return $saveDate;
};

echo "<div style='text-align: center'>";
foreach (showDates(0) as $date){
    echo "<small class='tag'>{$date}</small>" .PHP_EOL;
}

echo "</div>";


//Utilizando o generator: que não armazena os valores em váriavel e não aloca espaço no servidor


function generatorDate($days){
    for ($day =1; $day < $days; $day++){
        yield date("d/m/y", strtotime("+{$day}"));
    }
}
echo "<div style='text-align: center'>";
foreach (generatorDate($interator) as $date){
    echo "<small class='tag'>{$date}</small>" .PHP_EOL;
}

echo "</div>";