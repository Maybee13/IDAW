<?php
    $conn= mysqli_connect("localhost", "root", "", "testIDAW");
    $sql="SELECT * FROM utilisateurstp4";
    $result=$conn->query($sql);

    $nom="anonymous";
    $prenom="anonymous";
    $datenaiss="";
    $aimecours="false";
    $remarques="";
    $errorText="";

    
?>