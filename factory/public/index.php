<?php
require('../vendor/autoload.php');

use App\Factory\VehicleFactory;

$factory = new VehicleFactory();

$bicycle = $factory->create('bicycle');
$car     = $factory->create('car');
$truck   = $factory->create('truck');

echo "=== create() ===\n";
echo "Bicycle  — coût/km : {$bicycle->getCostPerKm()} €, carburant : {$bicycle->getFuelType()}\n";
echo "Car      — coût/km : {$car->getCostPerKm()} €, carburant : {$car->getFuelType()}\n";
echo "Truck    — coût/km : {$truck->getCostPerKm()} €, carburant : {$truck->getFuelType()}\n\n";

echo "=== createForTrip() ===\n";
$cases = [
    ['distance' => 10, 'weight' =>   5, 'label' => '10 km,   5 kg'],
    ['distance' => 50, 'weight' =>   5, 'label' => '50 km,   5 kg'],
    ['distance' => 50, 'weight' =>  50, 'label' => '50 km,  50 kg'],
    ['distance' => 50, 'weight' => 250, 'label' => '50 km, 250 kg'],
];

foreach ($cases as $case) {
    $vehicle = $factory->createForTrip($case['distance'], $case['weight']);
    echo "{$case['label']} → " . get_class($vehicle) . "\n";
}
