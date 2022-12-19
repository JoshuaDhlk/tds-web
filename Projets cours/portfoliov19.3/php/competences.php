<?php
    $data=yaml_parse_file("./yaml/competences.yaml");
    foreach($data AS $domaine => $tab){
        echo '<h1>'.$domaine.'</h1>';
        foreach($tab AS $nom => $niveau){
            echo '<p>'.$nom.' : '.$niveau.'</p>';
        }
    }
?>