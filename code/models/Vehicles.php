<?php 
    include "../config/database.php";

class Vehicles
{
    private $model;
    private $price_day;
    private $vehicle_status;
    private $category_id;
    private $Vehicle_image;

    public function __set($name , $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

//addVehicle

    public function addVehicle():void
    {
        $sql = "INSERT INTO vehicles(model, price_day, vehicle_status, category_id, Vehicle_image)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = DataBase::Connect()->prepare($sql);
        $stmt->execute([
            $this->model,
            $this->price_day,
            $this->vehicle_status,
            $this->category_id,
            $this->Vehicle_image
        ]);
    }

//editVehicle

    public function editVehicle($id):void
    {
        $sql = "UPDATE FROM vehicles SET
                model = ?,
                price_day = ?, 
                vehicle_status = ?, 
                category_id = ?, 
                Vehicle_image = ?
                WHERE vehicle_id = ?
                ";
        $stmt = DataBase::Connect()->prepare($sql);
        $stmt->execute([
            $this->model,
            $this->price_day,
            $this->vehicle_status,
            $this->category_id,
            $this->Vehicle_image,
            $id
        ]);
    }

//deleteVehicle

    public function deleteVehicle($id):void
    {
        $sql = "DELETE FROM vehicles
                WHERE vehicle_id = ? ";
        $stmt = DataBase::Connect()->prepare($sql);
        $stmt->execute([
            $id
        ]);
    }

//getVehicle 

    public function getVehicle():array
    {
        $sql = "SELECT * FROM vehicles";
        $stmt = DataBase::Connect()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

//findVehicleById

    public function findVehicleById($id):array
    {
        $sql = "SELECT * vehicles
                WHERE vehicle_id = ? ";

        $stmt = DataBase::Connect()->prepare($sql);
        $stmt->execute([
            $id
        ]);
        return $stmt->fetchAll();
    }

//vehicleStatus


}

?>