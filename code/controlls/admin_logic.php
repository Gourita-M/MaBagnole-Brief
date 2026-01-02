<?php
    include "../config/database.php";
    include_once "../models/Reservation.php";
    include_once "../models/Review.php";
    include_once "../models/Vehicles.php";
    include_once "../models/Category.php";

$reservation = new Reservation;
$review = new Review;
$Vehicles = new Vehicles;
$category = new Category;

$vehicledata = $Vehicles->getVehicle();
$categorydata = $category->getCategories();
$reserdata = $reservation->getReservationByVehicle();

$revidate = $review->getReviewsWithVehicles();


?>