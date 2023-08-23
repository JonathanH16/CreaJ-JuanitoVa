<?php

include("database.php");

if(isset($_POST["iD"])) {

    $id = $_POST["iD"];

    $query = "SELECT * FROM productos WHERE iD = {$id} ";
    $result = mysqli_query($connecction, $query);

    if(!$result) {
        die("Hubo un error en la consulta". mysqli_error($connecction));
    }

    $json = array();

    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            "id"=>$row["iD"],
            "name"=>$row["name"],
            "description"=>$row["description"]
        );
    }
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}