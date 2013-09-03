<?php
/**
 * @author Nicolas De Boose
 */

namespace Structure\Proxy\Voiture;


class ProxyVoiture implements IVoiture
{

    private $voiture;
    private $isAdmin;

    public function __construct($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }


    private function getVoiture()
    {
        //Proxy virtuel: créer un objet de au moment approprié
        if ($this->voiture === null) {
            $this->voiture = new Voiture('Voiture proxified');
        }
        return $this->voiture;
    }

    public function accelere()
    {
        ob_start();
        //Proxy remote: On appelle un service distant, et on fait comme s'il était local (SoapClient?!)
        $this->getVoiture()->accelere();
        $affichage = ob_get_clean();
        preg_match("#(.*?) '(.*?)' (.*?)#", $affichage, $matches);
        echo json_encode(
            array(
                'name' => $matches[2],
                'action' => 'accelere',
            )
        );
    }

    public function freine()
    {
        //Proxy de protection: Pas d'appel si on a pas les droits
        if ($this->isAdmin) {
            ob_start();
            $this->getVoiture()->freine();
            $affichage = ob_get_clean();
            preg_match("#(.*?) '(.*?)' (.*?)#", $affichage, $matches);
            echo json_encode(
                array(
                    'name' => $matches[2],
                    'action' => 'freine',
                )
            );
        } else {
            echo json_encode(
                array(
                    'action' => 'ne rien faire',
                )
            );
        }
    }
}