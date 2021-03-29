<?php
    $conn= mysqli_connect("localhost", "root", "", "testidaw");
    
    if($conn == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if(isset($_POST['nom'] )){
        $nom = $_POST['nom'];
    }

    $sql = "DELETE FROM utilisateurstp4 WHERE nom='${nom}'";
    if(mysqli_query($conn, $sql)){
        echo "Records deleted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
?>