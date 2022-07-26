<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);


$userFirstName = "Robson";
$userLastName = "Leite";
echo "<h3>{$userFirstName} {$userLastName}</h3>";

$user_first_name = "Robson";
$user_last_name = "Leite";
echo "<h3>{$user_first_name} {$user_last_name}</h3>";

$userAge = "32";
echo "<p>{$userFirstName} {$userLastName} <span class='tag'>tem {$userAge}</span></p>";

$userEmail = "<p>curso@upinside</p>";
echo $userEmail;

$calcA = 10;
$calcB = 20;
//$calcB = $calcA;
$calcB = &$calcA;
$calcB = 50;
var_dump([
    "a" => $calcA,
    "b" => $calcB,
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump($true, $false);

$bestAge = ($userAge < 50);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump($a, $b, $c, $d, $e);

if($a || $b || $c || $d || $e){
    var_dump(true);
} else {
    var_dump(false);
}
/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article>Um Call User Function!<h1></h1>";
$codeClear = call_user_func("strip_tags", $code);
var_dump($code, $codeClear);

$codeMore = function ($code){
    var_dump($code);
};

$codeMore("#BoraProgramar!");
 /**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá mundo";
$array = [$string];
$object = new StdClass();
$object ->hello = $string;
$null = null;
$int = 1232;
$float = 1.232213;

var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);