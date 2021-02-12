<?php
require '../bootstrap.php';

$uri = basename($_SERVER['REQUEST_URI']);
if ($uri == '') { 
require 'plant_index.html';

} else if ($uri == "pregunta") { 
   
    require 'plant_pregunta.html';
   
} else if ($uri == "puntuacion") { 
    
    require 'plant_puntuacion.html';


} else {
    header('Status:404 Not Found');
    echo '<html><body>Página No Encontrada</body></html>';
}

?>