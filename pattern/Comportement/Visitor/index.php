<?php
include '../../autoload.php';


$soleilVisitor = new \Comportement\Visitor\Voiture\Meteo\SoleilVisitor();
$pluieVisitor = new \Comportement\Visitor\Voiture\Meteo\PluieVisitor();

$pneu1 = new \Comportement\Visitor\Voiture\Pneu\Pneu1();
$pneu2 = new \Comportement\Visitor\Voiture\Pneu\Pneu2();


echo $pneu1->accept($soleilVisitor) . ' VS ' . $pneu1->accept($pluieVisitor);
echo '<hr />';
echo $pneu2->accept($soleilVisitor) . ' VS ' . $pneu2->accept($pluieVisitor);
