<?php

/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
 */

# Product
class Product
{
    protected $name;
    protected $desc;
    protected $price;
    protected $make;

    public function __construct(string $name, string $desc, float $price, string $make)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->make = $make;
    }
}
$personalComputer = new Product('Vivo Mini PC', 'Computer per uso personale', 499.99, 'Asus');
var_dump($personalComputer);

# iProduct extends Product
class iProduct extends Product
{
    protected $technology;
    protected $type;
    protected $size;
    protected $resolution;
    protected $features;

    function __construct(string $technology, string $type, float $size, string $resolution, string $features){
        $this->technology = $technology;
        $this->type = $type;
        $this->size = $size;
        $this->resolution = $resolution;
        $this->features = $features;
    }
}
$iMac = new iProduct('Core i5', ' 2.3 (Mid-2017)', 21.5, '1920x1080', 'LED-backlit 16:9 widescreen');
var_dump($iMac);

# User
class User
{
    protected $name;
    protected $lastname;
    protected $age;
    protected $mail;
    protected $password;

    public function __construct(string $name, string $lastname, string $age, string $mail, string $password)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mail = $mail;
        $this->password = $password;
    }
}
/* $cliente = new User;
var_dump($cliente); */

# CreditCard extends User
class CreditCard extends User
{
    protected $serialNumber;
    protected $code;
    protected $expiryDate;
    protected $company;

    public function __construct(string $serialNumber, int $code, string $expiryDate, string $company)
    {
        $this->serialNumber = $serialNumber;
        $this->code = $code;
        $this->expiryDate = $expiryDate;
        $this->company = $company;
    }
}
/* $clientePremium = new CreditCard;
var_dump($clientePremium); */

?>