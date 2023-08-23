<?php
include("database.php");

if(isset($_POST["id"])) {
    $task_id = $_POST["id"];
    $task_name = $_POST["name"];
    $task_description = $_POST["description"];

    $query = "UPDATE productos SET name = '$task_name', description = '$task_description' WHERE ID = '$task_id'";
    $result = mysqli_query($connecction, $query);

    if(!$result){
        die("Hubo un error en la consulta" . mysqli_error($connecction));
    }

    echo "El producto ha sido actualizada";
}