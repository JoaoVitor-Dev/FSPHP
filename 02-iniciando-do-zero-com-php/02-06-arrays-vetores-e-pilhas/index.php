<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1,2,3);
$arrA = [0,1,2,3];
var_dump($arrA);


$arrayIndex = [
    "Brian",
    "Angus",
    "Malcon"
];

$arrayIndex[] = "CLiff";
$arrayIndex[] = "Phill";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcon",
    "base_guitar" => "Cliff"
];

$arrayAssoc["drums"] = "Phil";
$arrayAssoc["rock_band"] = "AC/DC";

var_dump($arrayAssoc);
/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["Brian", "Mic"];
$angus = ["name" => "Angus", "intrument" => "Guitar"];
$instruments = [
    $brian,
    $angus
];

var_dump($instruments);

var_dump([
    "brian" => $brian,
    "angus" => $angus
]);
/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    "band" => "AC/DC",
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcon",
    "base_guitar" => "Cliff",
    "drums" => "Phil"
];


echo "<p>O vocal da banda AC/DC é {$acdc["vocal"]}, e junto com {$acdc["solo_guitar"]} fazem um ótimo show de rock</p>";

$pearl = [
    "band" => "Pearl_Jam",
    "vocal" => "Eddie",
    "solo_guitar" => "Mike",
    "base_guitar" => "Stone",
    "base_guitar" => "Jeff",
    "drums" => "Jack"
];

$rockBands = [
    "acdc" => $acdc,
    "pearl_jam" => $pearl
];

var_dump($rockBands);

echo "<p>{$rockBands["pearl_jam"] ["vocal"]}</p>";

foreach ($acdc as $item) {
    echo "<p>{$item}</p>";
}

foreach ($acdc as $key => $value) {
    echo "<p>{$value} is a {$key} of band!</p>";
}

foreach ($rockBands as $rockBand) {
    var_dump($rockBand);
    $art = "<article><h1>Nome da banda<p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></h1></article>";
    vprintf($art, $rockBand);
}