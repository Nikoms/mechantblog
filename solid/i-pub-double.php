<?php
namespace Mechant\Solid\InterfaceSegregation;

interface Smsable
{
    public function getPhoneNumber();

    public function getFirstName();
}

interface Emailable
{
    public function getEmail();
}

class Contact implements Smsable, Emailable
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

class PubSender1
{
    public function send(Contact $contact)
    {
        $this->sendByMail($contact);
        $this->sendBySms($contact);
    }


    private function sendByMail(Emailable $emailable)
    {
        //...
    }

    private function sendBySms(Smsable $smsable)
    {
        //...
    }
}

$contact1 = new Contact();
$send1 = new PubSender1();
$send1->send($contact1);



abstract class Contactable implements Emailable, Smsable{

}


class Contact2 extends Contactable{
    public function getPhoneNumber()
    {
        //...
    }

    public function getFirstName()
    {
        //...
    }

    public function getEmail()
    {
        //...
    }

}

class PubSender2
{
    public function send(Contactable $contactable)
    {
        $this->sendByMail($contactable);
        $this->sendBySms($contactable);
    }


    private function sendByMail(Emailable $emailable)
    {
        //...
    }

    private function sendBySms(Smsable $smsable)
    {
        //...
    }
}


$contact2 = new Contact2();
$send1 = new PubSender2();
$send1->send($contact2);


class PubSender3
{
    public function send(Emailable $emailable, Smsable $smsable)
    {
        $this->sendByMail($emailable);
        $this->sendBySms($smsable);
    }


    private function sendByMail(Emailable $emailable)
    {
        //...
    }

    private function sendBySms(Smsable $smsable)
    {
        //...
    }
}


$contact3 = new Contact();
$send1 = new PubSender3();
$send1->send($contact3, $contact3);