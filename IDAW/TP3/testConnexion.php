<?php
    $conn= mysqli_connect("localhost", "root", "", "testIDAW");
    $sql="SELECT * FROM testtp3";
    $result = $conn->query($sql);
    
    echo "<table>";
    while ($data=mysqli_fetch_array($result)){
        echo"<tr><td>".$data['id']."</td><td>".$data['login']."</td><td>".$data['password']."</td></tr>";
    }
    echo"</table>"
?>