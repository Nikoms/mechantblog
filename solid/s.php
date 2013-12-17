<?php

class JolieAdresse
{

}

class AddresseNormalizer
{
    public function __construct($rue, $numero, $codePostal, $ville, $pays)
    {
        $this->rue = $rue;
        $this->numero = $numero;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->pays = $pays;
    }

    public function getJolieAdresse()
    {
        $json = $this->getGoogleJson();
        $jolieAdresse = new JolieAdresse();
        $jolieAdresse->latitude = $json['results'][0]['geometry']['location']['lat'];
        $jolieAdresse->longitude = $json['results'][0]['geometry']['location']['lng'];
        $jolieAdresse->numero = $json['results'][0]['address_components'][0]['long_name'];
        $jolieAdresse->rue = $json['results'][0]['address_components'][1]['long_name'];
        $jolieAdresse->ville = $json['results'][0]['address_components'][2]['long_name'];
        $jolieAdresse->pays = $json['results'][0]['address_components'][4]['long_name'];
        $jolieAdresse->codePostal = $json['results'][0]['address_components'][5]['long_name'];

        return $jolieAdresse;
    }

    private function getGoogleJson()
    {
        $addresse = $this->rue . ' ' . $this->numero . ', ' . $this->codePostal . ' ' . $this->ville . ', ' . $this->pays;
        $googleUrl = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode(
            $addresse
        ) . '&sensor=false';

        return json_decode(file_get_contents($googleUrl), true);
    }
}

$normalizer = new AddresseNormalizer('Avn Louise', '46', '1000', 'Bxl', 'Be');

$jolieAdresse = $normalizer->getJolieAdresse();

var_dump($jolieAdresse);