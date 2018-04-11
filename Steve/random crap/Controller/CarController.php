<?php
require("Model/CarModel.php");
class CarController{

    function CreateCarDropdownList() {
        $carModel = new CarModel();
        $result = $this->CreateOptionValues($carModel->GetCarTypes()) 
                ;

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<li><a href='#'>$value</a></li>";
            
        }

        return $result;
    }
    
    function CreateCarTables($types)
    {    
        $carModel = new CarModel();
        $carArray = $carModel->GetCarByType($types);
        $result = "";
        
        //Generate a coffeeTable for each coffeeEntity in array
        foreach ($carArray as $key => $car) 
        {
            $result = $result .
                    "<table class = 'carTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$car->image' /></th>
                            <th width = '75px' >Name: </th>
                            <td>$car->vin</td>
                        </tr>
                        
                        <tr>
                            <th>Type: </th>
                            <td>$car->price</td>
                        </tr>
                        
                        <tr>
                            <th>Price: </th>
                            <td>$car->type</td>
                        </tr>
                        
                        <tr>
                            <th>Roast: </th>
                            <td>$car->year</td>
                        </tr>
                        
                        <tr>
                            <th>Origin: </th>
                            <td>$car->model</td>
                        </tr>               
                     </table>";
        }        
        return $result;
        
    }

    function GetCarInfo(){
        $carModel = new CarModel();
        $carArray = $carModel->GetCars();
        $result = "";
        foreach ($carArray as $key => $car) 
        {
            $result = $result .
                    "<table class = 'carTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$car->image' /></th>
                            <th width = '75px' >Name: </th>
                            <td>$car->vin</td>
                        </tr>
                        
                        <tr>
                            <th>Type: </th>
                            <td>$car->price</td>
                        </tr>
                        
                        <tr>
                            <th>Price: </th>
                            <td>$car->type</td>
                        </tr>
                        
                        <tr>
                            <th>Roast: </th>
                            <td>$car->year</td>
                        </tr>
                        
                        <tr>
                            <th>Origin: </th>
                            <td>$car->model</td>
                        </tr>               
                     </table>";
        }        
        return $result;
    }

}


?>