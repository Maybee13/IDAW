<?php
    $conn= mysqli_connect("localhost", "root", "", "testidaw");
    
    if($conn == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if(isset($_POST['nom'] )){
        $nom = $_POST['nom'];
    }
    if(isset($_POST['prenom'] )){
        $prenom = $_POST['prenom'];
    }
    if(isset($_POST['datenaiss'] )){
        $datenaiss = $_POST['datenaiss'];
    }
    if(isset($_POST['remarque'] )){
        $remarque = $_POST['remarque'];
    }
    if($_POST['crud']=='ajout'){
        $sql = "INSERT INTO utilisateurstp4 (nom,prenom,date_de_naissance,remarques) VALUES ('${nom}','${prenom}','${datenaiss}','${remarque}')";
    }
    if($_POST['crud']=='modif'){
        $sql = "UPDATE utilisateurstp4 SET nom='${nom}',prenom='${prenom}',date_de_naissance='${datenaiss}',remarques='${remarque}' WHERE nom='${nom}'";
    }
    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    
?>