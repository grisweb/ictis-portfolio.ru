<?php
require_once('./source/functions.php');

$content = renderTemplate('Main');
$layout_content = renderTemplate('layout', ['content' => $content]);

print($layout_content);

