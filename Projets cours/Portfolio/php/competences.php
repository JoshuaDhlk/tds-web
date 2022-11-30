<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences</title>
</head>
<body>
    <div class="services container">
        <div class="service-top">
            <h1 class="section-title">Compé<span>ten</span>ces</h1>
        </div>
            <div class="all-projects">
                <div class="project-item">
                    <div class="project-info">
                        <h1>Compétences</h1>
                        <?php
                        $data=yaml_parse_file("./yaml/competences.yaml");
                        foreach($data AS $domaine => $tab){
                            echo '<h1>'.$domaine.'</h1>';
                            foreach($tab AS $nom => $niveau){
                                echo '<p>'.$nom.' : '.$niveau.'</p>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>