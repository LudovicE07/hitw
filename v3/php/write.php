<?php

if(isset($_POST)){
    switch($_POST['type']){
        case "writeVolunteers":
            $fp = fopen('../data/volunteers.json', 'w');
            fwrite($fp, $_POST['json']);
            fclose($fp);
            break;
    }
}

?>