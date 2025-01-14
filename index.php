<?php

include 'src/Enterprise.php';
include 'src/Driver.php';
include 'src/Vehicle.php';

try {
    $enterprise = new Enterprise();

    $driver = new Driver("driver1@example.com");

    $vehicle = new Vehicle("123ABC");

    $enterprise->assignVehicleToDriver($vehicle->getChassisNumber(), $driver->getEmailAddress());

    echo "Vehicle assigned successfully!";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
