<?php

    $sql = "SELECT voornaam, tussenvoegsel, achternaam, vereniging, rating FROM player ORDER BY rating DESC";
    
    $data = $conn->query($sql);  

    foreach ($data as $row)
    {   
        $htmlOutput  = "";
        $htmlOutput .= '<tr>';
        $htmlOutput .= '<td>' . $row['voornaam'] . '</td>';
        $htmlOutput .= '<td>' . $row['tussenvoegsel'] . $row['achternaam'] . '</td>';
        $htmlOutput .= '<td>' . '<a href="vereniging_' . $row['vereniging'] . '.php">' . $row['vereniging'] . '</a></td>';
        $htmlOutput .= '<td>' . $row['rating'] . '</td>';
        $htmlOutput .= '</td></tr>';
        echo $htmlOutput;
    }  
  
?>