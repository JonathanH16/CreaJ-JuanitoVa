<?php

include("database.php");

if(isset($_POST["name"])){
    $task_name = $_POST["name"];
    $task_description = $_POST["description"];

    $query = "INSERT into productos (name, description) VALUES ('$task_name', '$task_description')";
    $result = mysqli_query($connecction, $query);

    if(!$result) {
        die("Hubo un error en la consulta". mysqli_error($connecction));
    }

    echo "Producto agregada!";
}