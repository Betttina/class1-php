<?php

namespace mittprojekt\minasidor;
require_once "minasidor/customer.php";
use \mysqli;


// skapa anslutning till databasen
function getConnection(){
$host = "localhost";
$port = 3306;
$database = "databas1";
$username = "root";
$password = "";

// create connection to database
$connection = new mysqli($host, $username, $password, $database, $port);
return $connection;
}

$connection = getConnection();

// check connection
if($connection->connect_error != null){
    die("Anslutningen misslyckades: " . $connection->connect_error);
}else{
    echo "Anslutningen lyckades.";
}



// Visa kund-info

$customer = new Customer(1, "Namn Efternamn", '0764032977', 'namn1@gmail.com', '2013-11-10', TRUE);

//medlemsvariabel
//$userInfo = $customer->getCustomerName();
$customer->print();
//echo $userInfo . "<br>"; 


// stäng anslutningen till databasen
$connection->close();
    
?>

</body>
</html>