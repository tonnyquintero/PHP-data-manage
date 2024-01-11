<?php

// Alterar
$text = "<h1>PHP es un LENGUAJE, año 2020, programación</h1> <br>";
echo strtolower($text);
echo strtoupper($text);
echo ucfirst($text);
echo lcfirst($text);

// Reemplazar 
$slug = str_replace(' ', '-', $text);
$slang = str_replace('PHP', 'Javascript', $text);
echo strtolower($slug);
echo $slang;

// Modificacion
$code = 39;
echo str_pad($code, 8, '#', STR_PAD_LEFT);
echo strip_tags($text); // nos quita las etiquetas HTML

echo strtoupper($text); // monobyte
echo mb_strtolower($text); // multibyte

