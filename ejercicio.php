<?php

    $fichero = fopen("document.doc","r");

    $directorio = date("d-m-Y h:i:s A");

    $crearDir = mkdir ($directorio, 0777, true);

    $nuevoFichero = fopen ("$directorio/document.doc" . ".modificado", "w");

?>