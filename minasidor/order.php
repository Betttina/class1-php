<?php

// en hel rad i orders-tabellen, instans av klassen Order
class Order extends Customer {


private $customer_id;


function __construct($customer_id)
{
    $this->customer_id = $customer_id; 
   
   // $this->print();
}    

public function getCustomerId(){

    //$data = array();
    //$data['order_id'] = $this->orders;
    
    return $this->customer_id;
}

public function setCustomer($customer){
    $this->customer = $customer;
}

public function getCustomer(){
    return $this->customer;
}

function print(){
    echo "Denna användare är medlem: " . $this->customer . "<br>";
}

}

?>