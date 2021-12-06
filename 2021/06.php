<?php

$inputs = file_get_contents('./inputs/06');
$generation = array_count_values(explode(',', $inputs));
krsort($generation);

for ($day = 1; 256 > $day; $day++) {
    foreach ($generation as $life => $amount) {
        if ($life > 0) {
            $next_generation[$life - 1] = $amount;
        } else {
            $next_generation[6] += $amount;
            $next_generation[8] += $amount;
        }
    }
    krsort($next_generation);
    $generation = $next_generation;
    $next_generation = [0, 0, 0, 0, 0, 0, 0, 0, 0];

    if ($day == 80) {
        $day80 = $generation;
    }
}

print_r([
    80 => array_sum($day80),
    256 => array_sum($generation)
]);
