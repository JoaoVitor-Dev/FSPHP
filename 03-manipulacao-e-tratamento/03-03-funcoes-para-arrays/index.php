<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
  "AC/DC",
  "Nirvana",
  "Alter Bridge",
];

$assoc = [
  "band_1" => "AC/DC",
  "band_2" => "Nirvada",
  "band_3" => "Alter Bridge"
];

//Adicionar novos itens ao começo de um Array
array_unshift($index, "","Pearl Jam");
$assoc = ["band_4" => "Pearl Jam", "band_5" => "" ] + $assoc;

//Adicionar novos itens ao final de um Array
array_push($index, "");
$assoc = $assoc + ["band_6" => ""];

//Remover o primeiro item de um Array
array_shift($index);
array_shift($assoc);

//Remover o ultimo item de um Array
array_pop($index);
array_pop($assoc);

array_unshift($index, "");

$index = array_filter($index); //Eliminando itens que não possue valores no Array
$assoc = array_filter($assoc);

var_dump(
    $index,
    $assoc
);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$index = array_reverse($index);  //inverter os itens do Array
$assoc = array_reverse($assoc); //inverter os itens do Array

asort($index); //realiza ordenação no Array
asort($assoc);

ksort($index); //realiza ordenação do Array pelas chaves
krsort($assoc);

sort($index);
rsort($index);

var_dump(
    $index,
    $assoc
);
/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump(
    [
        array_keys($assoc),
        array_values($assoc)
    ]
);

//exemplo de verificação se um valor existe no Array
if (in_array("AC/DC", $assoc)){
    echo "<p>Cause I'm back!</p>";
}

$arrToString = implode(", ", $assoc);
echo "<p>Eu curto {$arrToString} e muitas outras!</p>";
echo "<p>{$arrToString}</p>";

var_dump(explode(", ", $arrToString));
/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
  "name" => "Robson",
  "company" => "UpInside",
  "mail" => "curso@upinside.com.br"
];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}<br>
        <a href="mailto:{{mail}}" title="Enviar e-mail para {{name}}">Enviar E-mail</a></p>
    </article>
TPL;

echo $template;

echo str_replace(
  array_keys($profile), array_values($profile), $template
);

$replaces = "{{".implode("}}&{{", array_keys($profile)). "}}";

var_dump(explode("&", $replaces));

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);