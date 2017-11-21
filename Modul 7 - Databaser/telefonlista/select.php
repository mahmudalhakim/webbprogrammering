<?php
    require('database.php');
    $sql = "SELECT * FROM kontakt";
    $tabell = mysqli_query($connection, $sql) 
        or die(mysqli_error($connection));
    echo "<table class='table'>";
    echo "<tr>
            <th>Namn</th> <th>Telefon</th> <th>Ta bort</th>
            </tr>";
    while($rad = $tabell->fetch_assoc()){
        echo "<tr>
                <td>".$rad['namn']."</td>
                <td>".$rad['telefon']."</td>
                <td>
                    <a href='delete.php?telefon=".$rad['telefon']."' 
                    class='btn btn-outline-danger'>Ta bort</a>
                </td>
                </tr>";      
    }
    echo "</table>";
?>