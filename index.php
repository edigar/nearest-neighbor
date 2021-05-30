<?php

require 'generator.php';

function nearestNeighbor(array $clientPosition, array $storesPosition, int $quantity = 3): array {
    $distanceStores = [];
    foreach($storesPosition as $storePosition) {
        $distanceStores += [
            sqrt((($clientPosition[0] - $storePosition[0]) ** 2) + (($clientPosition[1] - $storePosition[1]) ** 2)) => $storePosition,
        ];
    }
    ksort($distanceStores);

    return array_slice($distanceStores, 0, $quantity);
}

$clientPosition = [20, 32];
$surface = [100, 100];
$storesPositions = positionsGenerate($surface, 1000);

$result = nearestNeighbor($clientPosition, $storesPositions);

print_r($result);
