<?php

Class Review
{
    private $user_id;
    private $vehicle_id;
    private $rating;
    private $reviews_comment;
    private $deleted_at = NULL;
    
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

//softDelete
//addReview

    public function addReview()
    {
        try{
        $sql = "INSERT INTO reviews(user_id, vehicle_id, rating, reviews_comment, deleted_at)
                VALUES(?, ?, ?, ?, ?)";

        $stmt = DataBase::Connect()->prepare($sql);

        $stmt->execute([
            $this->user_id,
            $this->vehicle_id,
            $this->rating,
            $this->reviews_comment,
            $this->deleted_at
        ]);
            return true;
        } catch(PDOException $e){
            
            return $e;
        }
    }

//editReview



//getByVehicleid

    public function getByVehicleid($id)
    {
        try{
            $sql = "SELECT 
                    v.model, 
                    v.price_day, 
                    v.vehicle_status,
                    v.Vehicle_image,
                    r.reviews_comment,
                    u.user_name
                    FROM vehicles v
                    LEFT JOIN reviews r 
                    ON v.vehicle_id = r.vehicle_id
                    LEFT JOIN users u
                    ON r.user_id = u.user_id
                    WHERE v.vehicle_id = ? ";

            $stmt = DataBase::Connect()->prepare($sql);

            $stmt->execute([
                $id
            ]);

            return $stmt->fetchAll();

        }catch(pdoexception $e){
            return $e;
        }
    }

//getReviewsWithVehicles

    public function getReviewsWithVehicles()
    {
        try{
            $sql = "SELECT 
                    v.model, 
                    v.price_day, 
                    v.vehicle_status,
                    v.Vehicle_image,
                    r.reviews_comment,
                    u.user_name
                    FROM vehicles v
                    LEFT JOIN reviews r 
                    ON v.vehicle_id = r.vehicle_id
                    LEFT JOIN users u
                    ON r.user_id = u.user_id ";

            $stmt = DataBase::Connect()->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();

        }catch(pdoexception $e){
            return $e;
        }
    }
}
?>