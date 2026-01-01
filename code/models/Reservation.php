<?php

Class Reservation
{
    private $vehicleid;
    private $start_date;
    private $end_date;
    private $location;

    public function __set($prop , $value)
    {
        $this->$prop = $value;
    }

    public function __get($pro)
    {
        return $this->$pro;
    }

//createReservation

    public function createReservation($userid):bool
    {
        try{
        $sql = "INSERT INTO reservations
                (user_id, vehicle_id, start_date, end_date, pickup_location)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = DataBase::Connect()->prepare($sql);

        $stmt->execute([
            $userid,
            $this->vehicleid,
            $this->start_date,
            $this->end_date,
            $this->location
        ]);
            return true;

        }catch(pdoexception $e){
            return false;
        }
    }

//aditReservation

    public function aditReservation($id):bool
    {
        try{
        $sql = "UPDATE reservations SET
                vehicle_id = ?,
                'start_date' = ?, 
                end_date = ?, 
                pickup_location = ?
                WHERE reservation_id = ?";

        $stmt = DataBase::Connect()->prepare($sql);

        $stmt->execute([
            $this->vehicleid,
            $this->start_date,
            $this->end_date,
            $this->location,
            $id
        ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

//abortReservation



//getReservation

    public function getReservation():array
    {
        $sql = "SELECT * FROM reservations";
        $stmt = DataBase::Connect()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

//findReservationById
}
?>