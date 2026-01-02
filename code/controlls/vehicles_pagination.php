<?php 

    include "../config/database.php";
    include_once "../models/Vehicles.php";

    $vehicle = new Vehicles;
    $vehicles = $vehicle->getVehicleCategory();

?>