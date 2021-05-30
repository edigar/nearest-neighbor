<?php

function positionsGenerate(array $surface, int $quantity): array {
    $positions = [];
    for ($i = 0; $i < $quantity; $i++) {
        $positions[] = [random_int(0, $surface[0]), random_int(0, $surface[1])];
    }
    
    return $positions;
}