<?php

include("database.php");

$query = "SELECT * FROM productos";
$result = mysqli_query($connecction, $query);

if(!$result) {
    die("Hubo un error en la consulta". mysqli_error($connecction));
}

$json = array();

while($row = mysqli_fetch_array($result)){
    $json[] = array(
        "id"=>$row["ID"],
        "name"=>$row["name"],
        "description"=>$row["description"]
    );
}

$jsonstring = json_encode($json);
echo $jsonstring;