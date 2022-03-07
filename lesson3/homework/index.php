<?php


// task 1
[$d, $i, $n] = [3, 0, 100];

while ($i <= $n) {
   echo $i % $d ? null : $i . PHP_EOL;
   $i++;
}


// task 2
[$i, $n] = [0, 10];
$zero = ' – ноль.';
$even = ' – четное число.';
$odd = ' – нечетное число.';
do{
    echo $i;
    if (!$i) {
        echo $zero;
    } else {
        echo $i % 2 ? $odd : $even;
    }
    echo PHP_EOL;

    $i++;
} while ($i <= $n);


// task 3
$selection_cities = [];

$file = file_get_contents('https://raw.githubusercontent.com/epogrebnyak/ru-cities/main/assets/towns.csv');
$array = explode("\n", $file);
unset($array[0]);

// заполнение массива
foreach($array as $key => $value)
{
    $splitted_row = explode(",", $value);
    $city =  $splitted_row[0];
    $region =  $splitted_row[4];

    if (array_key_exists($region, $selection_cities)) {
        $selection_cities[$region][] = $city;
        continue;
    }
    $selection_cities[$region] = [$city];
}

array_pop($selection_cities);

foreach($selection_cities as $key => $value)
{
    echo $key . ':' . PHP_EOL;
    echo implode(', ', $value) . '.' . PHP_EOL;
}


// task 4
$letters = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
    'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
    'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
    'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
    'ш' => 'sh', 'щ' => 'csh', 'ъ' => '', 'ы' => 'y', 'ь' => '',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];

$upper_letters = mb_strtoupper(implode(' ', array_keys($letters)));
$lower_letters = implode(' ', array_keys($letters));
$all_letters = $upper_letters . ' ' . $lower_letters;
$permitted_chars = explode(' ', $all_letters);
$permitted_chars[] = ' ';
$random_string = random_string(100, $permitted_chars);
echo 'Исходная строка: ' . implode('', array_values(explode('-', $random_string))) . PHP_EOL;

function random_string ($str_length, $str_characters)
{
    if (!is_int($str_length) || $str_length < 0)
    {
        return false;
    }

    $characters_length = count($str_characters) - 1;
    $string = '';

    for ($i = $str_length; $i > 0; $i--)
    {
        $string .= $str_characters[mt_rand(0, $characters_length)];
        $string .= '-';
    }

    return $string;
}

$translit_string = translit_string(explode('-', $random_string), $letters);
echo 'Полученная строка: ' . $translit_string . PHP_EOL;

function translit_string($string_list, $letters)
{
    $new_string = '';
    foreach($string_list as $key => $value)
    {
        $lower_value = mb_strtolower($value);
        if (array_key_exists($lower_value, $letters)) {
            if ($value === mb_strtoupper($value, 'UTF-8')) {
                $value_letters = $letters[$lower_value];

                $first = mb_substr($value_letters, 0, 1, 'UTF-8');
                $last = mb_substr($value_letters, 1);
                $first = mb_strtoupper($first, 'UTF-8');
                
                $new_string .= $first;
                $new_string .= $last;
            } else {
                $new_string .= $letters[$lower_value];
            }
        } else {
            $new_string .= $value;
        }
    }
    return $new_string;
}


// task 5
$str = 'ff  аа jj Z я  ';
$translated_str = translateSpacesToUnderline($str);
echo $translated_str . PHP_EOL;

function translateSpacesToUnderline($str)
{
    return str_replace(' ', '_', $str);
}


// task 6
// в папке renderTamplates


// task 7
for ($i = 0; $i <= 9; print $i . PHP_EOL, $i++) { }


// task 8

foreach($selection_cities as $key => $value)
{
    echo $key . ':' . PHP_EOL;
    $cities_K = [];

    foreach($value as $index => $city) 
    {
        mb_substr($city, 0, 1, 'UTF-8') === 'К' ? $cities_K[] = $city : null;
    }
    if (count($cities_K)) {
        echo implode(', ', $cities_K) . '.';
    } else {
        echo '-';
    }
    echo PHP_EOL;
}

