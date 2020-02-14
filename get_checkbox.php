<?php
    $checked = $_GET['options'];
    for($i=0; $i < count($checked); $i++){
        echo "Selected " . $checked[$i] . "<br/>";
    }
?>