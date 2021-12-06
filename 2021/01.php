<?PHP

$inputs = file_get_contents('./inputs/01_p1');

$incr = 0;
$prev = false;

foreach (explode(PHP_EOL, $inputs) as $input) {
    if ($prev && $prev < $input) {
        $incr++;
    }
    $prev = $input;
}

echo $incr;
