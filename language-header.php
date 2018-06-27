<?php

$idioma = explode(",", $_SERVER["HTTP_ACCEPT_LANGUAGE"]);

if(file_exists(strtolower($idioma[0]).'.lang'))
{
    $lng = parse_ini_file(strtolower($idioma[0]).'.lang');
}
else
{
    $lng = parse_ini_file('en-us.lang');
}

?>