<?php

$xml = simplexml_load_file('ej9.xml');

foreach ($xml->libro as $libro) {

    echo "Título: $libro->titulo, Autor: $libro->autor, Editado en: $libro->anio<br>";
}

?>