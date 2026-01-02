<?php 
    include "../config/database.php";
    include_once "../models/Reservation.php";
    include_once "../models/Review.php";

    $id= 1 ;

    $rented = new Reservation;

    $data = $rented->getReservationReview($id);

?>