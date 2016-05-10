<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//$conn = new mysqli("myServer", "myUser", "myPassword", "Northwind");

//$result = $conn->query("SELECT CompanyName, City, Country FROM Customers");

$outp = "[";
//while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
//    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"Name":"Bobs Company",';
    $outp .= '"City":"Timbuktu",';
    $outp .= '"Country":"France"}';
//}
$outp .="]";

//$conn->close();

echo($outp);
?>
