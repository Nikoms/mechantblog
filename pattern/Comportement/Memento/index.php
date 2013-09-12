<?php
/**
 * @author Nicolas De Boose
 *
 *
 *
 * Memento stocke un "state" interne d'un AUTRE objet. He oui, c'est pas très sain à la base,...
 *
 * Originator instancie le memento avec les différentes infos de son état actuel.
 * Seul l'originator peut sauver et restaurer les données.
 * Le memento est opaque aux autres objets
 *
 * Utilise si on veut backuper un état "interne" pour y revenir ET que l'interface pour avoir l'état interne violerait les lois de l'encapsulation de l'objet
 *
 *
 * Memento:
 *  stocke l'état de l'originator.
 *  possède deux interface: Une pour l'originator (full) et une autre (restreinte) pour le caretaker
 * Originator
 *  crée le memento contenant le snapshot de son état courant
 *  utilise le memento pour reprendre son étant backupé
 * CareTaker
 *   responsable de garder le memento sécurisé
 *   ne correspond jamais (get ou set) avec le contenu du memento
 *
 * aCareTaker: originator->createMemento()
 *                          return new Memento()->setState($this->getState());
 * ....
 *
 * aCareTaker: originator->restoreFromMemento(aMemento)
 *                          $this->setState(aMemento->getState());
 *
 *
 * Originator garde la version en cours que le client a demandé.
 * Le client demande possède une version simplifiée de l'originator. Et quand il en a fini, vu que l'originator garde une version simplifiée au temps t, le client ne doit pas dire "j'ai fini de te modifier"
 * Memento peut couter cher en mémoire si les originator sont trop gros. La meilleur solution est peut-être alors de faire de l'incrémental (seulement les modifs)
 * Ca peut etre difficile dans certains languages que seule l'originator ai accès à l'état du memento
 * CareTaker, qui garde tous les mementos est responsable de les supprimer, mais vu qu'il ne peut pas les lire, c'est pas toujours simple.
 *
 *
 *
 *
 * Memento est utilisé pour les parcours d'iterator (current, next). Il est le pointeur. Personne n'y a accès sauf l'array lui-meme
 * Memento est utilisé par le pattern command, pour pouvoir faire undo
 *
 *
 *     ConstraintSolver cs;
Memento *memento;

cs.addGraphic(new Graphic("A", 1, 1));
cs.addGraphic(new Graphic("B", 2, 2));
cs.addGraphic(new Graphic("C", 3, 3));
cs.solve();

memento = cs.createMemento();
cs.move("A", 100, 100);
cs.move("B", 200, 200);
cs.solve();

cs.setMemento(memento);
cs.solve();

delete memento;
return 0;
 *
 *
 */