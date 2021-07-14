<h2>7 Tages Inzidenz</h2>
<div class="container">
<?php


echo '<div class="graph1"><img src="graph.php?x=90&y=200"></div>';


echo '<form class="form" method="post">';
echo '<p class="tageswoche">Woche - Jahr</p>';
echo '<select class="tagesselect" name="woche">';

echo' <option value="" disabled selected>Woche - Jahr</option>';
foreach ($data as $spalte){
    $datum = strtotime($spalte['Datum']);
    $dtdatum = date("W - Y", $datum);
    $inzidenz = $spalte['7 Tages Inzidenz'];
    $ar_datum = $spalte['Datum'];
    
    echo '<option value="'.$ar_datum.', '.$inzidenz.'">'.$dtdatum.'</option>';
    

}

echo '</select>';
echo '<input type="submit" class="tagessubmit" value="Anzeigen" />';
echo '</form>';

if(isset($_POST['woche']) && !empty($_POST['woche'])){  
        $selected = $_POST['woche'];

        $selectarray = explode(',', $selected);
        $datum = strtotime($selectarray[0]);
        $week = date("W - Y", $datum);
        
        
        echo '<div class="tagesinfo">In der Woche ', $week, ' lag die Inzidenz bei: ',$selectarray[1],'</div>';
    } else {
        echo '<div class="tagesinfo">Bitte Auswahl treffen.</div>';
    }


?>

</div>