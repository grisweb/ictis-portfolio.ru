<?php

function renderTemplate($path, $array=[])
{
    ob_start();
    extract($array);
    require 'source/' . $path . '.php';
    return ob_get_clean();
}