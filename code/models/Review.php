<?php
    include "../config/database.php";

Class Review
{
    private $reviews_id;
    private $user_id;
    private $vehicle_id;
    private $rating;
    private $reviews_comment;
    private $deleted_at;
    
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

    public function addReview():bool
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
            
            return false;
        }
    }

//editReview



//getByVehicleid

}
?>