<?php
    require('database.php');
    $sql = "SELECT * FROM kontakt";
    $tabell = mysqli_query($connection, $sql) 
        or die(mysqli_error($connection));
    
    if($tabell->num_rows) : // Visa en tabell om det finns minst en rad
    echo "<table class='table'>";
    echo "<tr>
            <th>Namn</th> <th>Telefon</th> <th>Ta bort</th> <th>Ändra</th>
         </tr>";
    while($rad = $tabell->fetch_assoc()){
        echo "<tr>
                <td>".$rad['namn']."</td>
                <td>".$rad['telefon']."</td>
                <td>
                    <a href='delete.php?telefon=".$rad['telefon']."' 
                    class='btn btn-outline-danger'>Ta bort</a>
                </td>
                <td>
                    <a href='update.php?telefon=".$rad['telefon']."' 
                    class='btn btn-outline-info'>Ändra</a>
                </td>
                </tr>";      
    }
    echo "</table>";
    endif;
?>