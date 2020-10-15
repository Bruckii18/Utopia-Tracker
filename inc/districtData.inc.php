<?php
include('login.inc.php');

$districtID = $_REQUEST['disNo'];

$result = $con->query(" SELECT  ( SELECT COUNT(addressID) FROM address WHERE district =" . $districtID . ") AS 'addCount', 
                                ( SELECT COUNT(ssn) FROM citizen JOIN address ON citizen.addressID = address.addressID WHERE address.district =" . $districtID . ") 
                                
                                AS 'citizen' FROM dual");
$request = "";
$request .= "<h3>District " . $districtID . "</h3>";

$request .= "<table class='table table-dark'>";
$entry = $result->fetch_assoc();
$request .= "<tr><th scope='row'>Gebäude: </th>";
$request .= "<td>" . $entry['addCount'] . "</td>";
$request .= "<tr><th scope='row'>Einwohner: </th>";
$request .= "<td>" . $entry['citizen'] . "</td>";


$request .= "</tbody></table>";

echo $request;
