<?php 
    include "../config/database.php";

class Vehicles
{
    private $model;
    private $price_day;
    private $vehicle_status;
    private $creat_time;

    public function __set($name , $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

//addVehicle

    public function addVehicle()
    {
        $sql = "INSERT INTO vehicles()
                VALUES ()";
    }

//editVehicle

//deleteVehicle

//getVehicle 

    public function getVehicle()
    {
        $sql = "SELECT * FROM vehicles";
        $stmt = DataBase::Connect()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

//findVehicleById

//vehicleStatus


}

?>