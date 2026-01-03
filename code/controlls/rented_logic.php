<?php 
    include "../config/database.php";
    include_once "../models/Reservation.php";
    include_once "../models/Review.php";

    $rented = new Reservation;
    $review = new Review;

    $data = $rented->getReservationReview($_SESSION['userid']);

    $error = "";
    

    if(isset($_POST['subreview'])){

        $review->user_id = $_SESSION['userid'];
        $review->vehicle_id = $_POST['vehiid'];
        $review->rating = $_POST['rating'];
        $review->reviews_comment = $_POST['review'];

        echo $review->vehicle_id;

        $result = $review->addReview();

        if($result){
            $error = "Review is Added";
            header("Location: ./rented.php");
            exit;
        }else $error = "Review is not added";

    }
    echo $error;

?>