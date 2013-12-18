<?php
namespace Mechant\Solid\InterfaceNoSegregation;

class Contact
{

    private $firstName;
    private $address;
    private $lastName;
    private $phoneNumber;
    private $email;

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}

class PubSender
{
    public function sendByMail(Contact $contact){
        return mail($contact->getEmail(), "Venez acheter", "Cher client, Vous êtes notre 999.999.999 visiteurs, cliquez ici pour gagner beaucoup d'argent");
    }

    public function sendBySms(Contact $contact){
        $this->sendSmsWithwebservice($contact->getPhoneNumber(), 'Salut '.$contact->getFirstName().' Renvoyer "Cool" pour recevoir un milliard de dollars');
    }

    private function sendSmsWithwebservice($phone, $message){
        //Appel à un webservice
    }

}
