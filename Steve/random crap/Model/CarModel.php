<?php

require("Entities/CarEntity.php");

class CarModel{

    function GetCarTypes(){
        require("Credentials.php");
        // Create connection
        //Open Connection and select Database
        $conn = new mysqli($host, $user, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        //echo "Connected successfully";

        
        $query = "SELECT DISTINCT ethnicity FROM car";
        $result = $conn->query($query);
        
        $types = array();

        while($row = $result->fetch_assoc()){
            array_push($types, $row[0]);
        }

        $conn->close();
        return $types;
    }

    function GetCarByType($type) {
        require 'Credentials.php';
        
        // Create connection
        //Open Connection and select Database
        $conn = new mysqli($host, $user, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        //echo "Connected successfully";

        $query = "SELECT * FROM car WHERE type LIKE '$ethnicity'";
        $result = $conn->query($query);
        $carArray = array();

        //Get data from database.
        while ($row = $result->fetch_assoc()) {
            $model = $row[1];
            $price = $row[2];
            $transmission = $row[3];
            $engine = $row[4];
            $year = $row[5];
            $manufacturer = $row[6];
            $ethnicity = $row[7];
            $bodytype = $row[8];
            $stock = $row[9];
            $image = $row[10];
            $desc = $row[11];

            //Create coffee objects and store them in an array.
            $car = new CarEntity($model, $price, $transmission, $engine, $year, $manufacturer, $ethnicity, $bodytype, $stock, $image, $desc);
            array_push($carArray, $car);
        }
        //Close connection and return result
        $conn->close();
        return $carArray;
    }

    function GetCars(){
        require("Credentials.php");
        // Create connection
        //Open Connection and select Database
        $conn = new mysqli($host, $user, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        //echo "Connected successfully";

        
        $query = "SELECT * FROM car WHERE model LIKE 'Nissan GTR'";
        $result = $conn->query($query);
        $carArray = array();

        //Get data from database.
        while ($row = $result->fetch_assoc()) {
            $model = $row[1];
            $price = $row[2];
            $transmission = $row[3];
            $engine = $row[4];
            $year = $row[5];
            $manufacturer = $row[6];
            $ethnicity = $row[7];
            $bodytype = $row[8];
            $stock = $row[9];
            $image = $row[10];
            $desc = $row[11];

            //Create coffee objects and store them in an array.
            $car = new CarEntity($model, $price, $transmission, $engine, $year, $manufacturer, $ethnicity, $bodytype, $stock, $image, $desc);
            array_push($carArray, $car);
        }
        //Close connection and return result
        $conn->close();
        return $carArray;
    }
}

?>