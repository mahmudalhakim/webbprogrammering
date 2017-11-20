<?php
    require('database.php');
    $sql = "SELECT * FROM kontakt";
    $tabell = mysqli_query($connection, $sql) 
        or die(mysqli_error($connection));
    echo "<table class='table'>";
    echo "<tr>
            <th>Namn</th> <th>Telefon</th>
            </tr>";
    while($rad = $tabell->fetch_assoc()){
        echo "<tr>
                <td>".$rad['namn']."</td>
                <td>".$rad['telefon']."</td>
                </tr>";      
    }
    echo "</table>";
?>