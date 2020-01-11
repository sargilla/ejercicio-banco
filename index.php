<?php 
require "vendor/autoload.php";
$faker = Faker\Factory::create();

$clientes = [];
for ($i = 0; $i < 2; $i++) {
    $clientes[] = new Persona(new Classic,$faker->email,$faker->password,$faker->firstName,$faker->lastName,$faker->randomNumber(8),$faker->date('d-m-Y'));
    $clientes[] = new Persona(new Black,$faker->email,$faker->password,$faker->firstName,$faker->lastName,$faker->randomNumber(8),$faker->date('d-m-Y'));
    $clientes[] = new Persona(new Platinum,$faker->email,$faker->password,$faker->firstName,$faker->lastName,$faker->randomNumber(8),$faker->date('d-m-Y'));
    $clientes[] = new Persona(new Gold,$faker->email,$faker->password,$faker->firstName,$faker->lastName,$faker->randomNumber(8),$faker->date('d-m-Y'));
    $clientes[] = new Multinacional(new Gold,$faker->email,$faker->password,$faker->randomNumber(8),$faker->company);
    $clientes[] = new Multinacional(new Classic,$faker->email,$faker->password,$faker->randomNumber(8),$faker->company);
    $clientes[] = new Pyme(new Black,$faker->email,$faker->password,$faker->randomNumber(8),$faker->company);
    $clientes[] = new Pyme(new Platinum,$faker->email,$faker->password,$faker->randomNumber(8),$faker->company);
}
$banco = new Banco($clientes);
print_r($banco);exit;



?>