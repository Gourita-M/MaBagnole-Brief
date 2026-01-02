<?php
    include "../config/database.php";
    include_once "../models/Reservation.php";
    include_once "../models/Vehicles.php";

    $vehicle = new Vehicles;
    $reservetion = new Reservation;

    $datavehicle = $vehicle->findVehicleById($_GET['id']);
 
    if(isset($_POST['reserve'])){
        
        $reservetion->vehicleid = $_GET['id'];
        $reservetion->start_date = $_POST['pickup'];
        $reservetion->end_date = $_POST['back'];
        $reservetion->location = $_POST['picklocation'];

        $result = $reservetion->createReservation($_SESSION['userid']);

        if($result){
            header("Location: ../View/rented.php");
            exit();
        }

    }
    
?>