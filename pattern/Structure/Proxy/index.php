<?php
include '../../autoload.php';

echo '<pre>';

$proxy = new \Structure\Proxy\Voiture\ProxyVoiture(false);
$proxy->accelere();

$proxy->freine();

echo '</pre>';
