<?php
    include "../config/database.php";
    include "../models/Vehicles.php";

    $vehicle = new Vehicles;
    
    $result = $vehicle->getVehicle();
    
    echo json_encode($result);
?>