<?php

namespace App\Factory;

use App\Entity\VehicleInterface;
use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;

class VehicleFactory
{
    public function create(string $type): VehicleInterface
    {
        return match (strtolower($type)) {
            'bicycle' => new Bicycle(0.05, 'none'),
            'car'     => new Car(0.15, 'gasoline'),
            'truck'   => new Truck(0.40, 'diesel'),
            default   => throw new \InvalidArgumentException("Type de véhicule inconnu : $type"),
        };
    }

    public function createForTrip(int $distance, int $weight): VehicleInterface
    {
        if ($weight > 200) {
            return $this->create('truck');
        }

        if ($weight > 20) {
            return $this->create('car');
        }

        if ($distance < 20) {
            return $this->create('bicycle');
        }

        return $this->create('car');
    }
}
