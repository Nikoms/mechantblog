<?php
include '../../autoload.php';


$soleilVisitor = new \Comportement\Visitor\Voiture\Meteo\SoleilVisitor();
$pluieVisitor = new \Comportement\Visitor\Voiture\Meteo\PluieVisitor();

$pneu1 = new \Comportement\Visitor\Voiture\Pneu\Pneu1();
$pneu2 = new \Comportement\Visitor\Voiture\Pneu\Pneu2();


echo $pneu1->accept($soleilVisitor) . ' VS ' . $pneu1->accept($pluieVisitor);
echo '<hr />';
echo $pneu2->accept($soleilVisitor) . ' VS ' . $pneu2->accept($pluieVisitor);


/**
 * Exemple : poid d'un moteur = nombre de litre dans le reservoir + getPoid + getWeight + getPoids
 *
 * Quand on voit un instance of, ca peut peut-être se résoudre par un visiteur.
 *
 * DOnne moi tous les roux gros du public: Public recoit un visiteur qui va demander à chaque visiteur s'il est gros et roux... Et rajoute dans le tableau et après le client peut faire visiteur->getList()
 * Double hierarchies completement distinctes
 *
 * Rajoute desoperations sans toucher à la structure
 * Bien si on change pas toujours l'interface, sinon difficile à maintenir
 *
 * Le visiteur fait son job... Avec les méthodes publiques du visité.... Du coup ceetaines méthodes vont peut etre devoir passer en public pour que votre visiteur fonctionne pleinement :(
 */