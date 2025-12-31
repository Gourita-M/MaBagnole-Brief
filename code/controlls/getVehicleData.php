<?php
    include "../models/Vehicles.php";

    $vehicle = new Vehicles;

    // $vehicle->model = 'toyotaaa';
    // echo $vehicle->model;
    
    $result = $vehicle->getVehicle();
    
    echo json_encode($result);
?>