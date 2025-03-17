<?php

$xml = simplexml_load_file('libros.xml');

$librosPosteriores = 0;

foreach ($xml->libro as $libro) {
    $anio = (int)$libro->anio; 

    if ($anio > 2000) {
        $titulo = $libro->titulo;
        $autor = $libro->autor;

        echo "Título: $titulo, Autor: $autor, Editado en: $anio<br>";
        $librosPosteriores++;
    }
}

if ($librosPosteriores == 0) {
    echo "No hay libros editados después del año 2000.";
}else{
    echo "hay " + $librosPosteriores + " libros editados después del año 2000";


}


?>