<?php

$xml = simplexml_load_file('ej9.xml');
$autorElegido == "George Orwell";
$conteo = 0;

foreach ($xml->libro as $libro) {

    if ($libro->autor == "George Orwell") {
        $conteo++;
    }
}

    echo "El autor George Orwell tiene $conteo libros";


?>