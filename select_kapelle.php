<?php

    $sql = "SELECT voornaam, tussenvoegsel, achternaam, rating FROM player WHERE vereniging ='kapelle' ORDER BY rating DESC";
    
    $data = $conn->query($sql);  

    foreach ($data as $row)
    {   
        $htmlOutput  = "";
        $htmlOutput .= '<tr>';
        $htmlOutput .= '<td>' . $row['voornaam'] . '</td>';
        $htmlOutput .= '<td>' . $row['tussenvoegsel'] . $row['achternaam'] . '</td>';
        $htmlOutput .= '<td>' . $row['rating'];
        $htmlOutput .= '</td></tr>';
        echo $htmlOutput;
    }  
  
?>