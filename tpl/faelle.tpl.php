<h2>Aktuelle Fallzahlen</h2>

<div class="container">

<?php

echo '<div class="fallform">';
echo '<form  method="post">';

echo '<select name="geschlecht">';
echo' <option value="" disabled selected>Geschlecht</option>';
foreach($data as $spalte){
    echo '<option value="'.$spalte['Geschlecht'].'">'.$spalte['Geschlecht'].'</option>';
}
echo '</select>';

echo '<select name="verlauf">';
echo' <option value="" disabled selected>Verlauf</option>';
foreach($data as $spalte){
    echo '<option value="'.$spalte['Verlauf der Erkrankung'].'">'.$spalte['Verlauf der Erkrankung'].'</option>';
}
echo '</select>';

echo '<select name="alter">';
echo' <option value="" disabled selected>Altersgruppe</option>';
foreach($data as $spalte){
    echo '<option value="'.$spalte['Altersgruppe'].'">'.$spalte['Altersgruppe'].'</option>';
}
echo '</select>';

echo '<select name="kommune">';
echo' <option value="" disabled selected>Kommune</option>';
foreach($data as $spalte){
    echo '<option value="'.$spalte['Kommune'].'">'.$spalte['Kommune'].'</option>';
}
echo '</select>';

echo '<select name="plz">';
echo' <option value="" disabled selected>Postleitzahl</option>';
foreach($data as $spalte){
    echo '<option value="'.$spalte['Postleitzahl'].'">'.$spalte['Postleitzahl'].'</option>';
}
echo '</select>';
echo '</div>';
echo '<div class="fallbtn">';
echo '<button class="fallbtn tagessubmit" type="submit" name="button">Anzeigen</button>';
echo '</div>';


echo '</form>';

// if(isset($_POST['geschlecht']) && ($_POST['verlauf']) && ($_POST['alter']) && ($_POST['kommune']) && ($_POST['plz'])){
//     $a1 = $_POST['geschlecht'];
//     $a2 = $_POST['verlauf'];
//     $a3 = $_POST['alter'];
//     $a4 = $_POST['kommune'];
//     $a5 = $_POST['plz'];

//     echo $a1, $a2, $a3, $a4, $a5; 
    
// }

    // if(isset($_POST['geschlecht']) && !empty($_POST['geschlecht'])){  
    //     $selected = $_POST['geschlecht'];
    //     echo $selected;
    // }
    // if(isset($_POST['verlauf']) && !empty($_POST['verlauf'])){  
    //     $selected = $_POST['verlauf'];
    //     echo $selected;
    // }
    // if(isset($_POST['alter']) && !empty($_POST['alter'])){  
    //     $selected = $_POST['alter'];
    //     echo $selected;
    // }
    // if(isset($_POST['kommune']) && !empty($_POST['kommune'])){  
    //     $selected = $_POST['kommune'];
    //     echo $selected;
    // }
    // if(isset($_POST['plz']) && !empty($_POST['plz'])){  
    //     $selected = $_POST['plz'];
    //     echo $selected;
    // }



?>

</div>
