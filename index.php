<?php

/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
*/

class Product {
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

$c = new CreditCard(); 
$user->insertCreditCard($c);

class User {
    protected $name;
    protected $lastname;
    protected $age;
    protected $mail;
    protected $password;

    function __construct(string $name, string $lastname, string $age, string $mail, string $password){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mail = $mail;
        $this->password = $password;
    }
}

?>