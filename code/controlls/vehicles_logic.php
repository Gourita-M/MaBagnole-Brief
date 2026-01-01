<?php

    include "../config/database.php";
    include_once "../models/Review.php";

    $review = new Review;

    $data = $review->getByVehicleid($_GET['id']);

?>