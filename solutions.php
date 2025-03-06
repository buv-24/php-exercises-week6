<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Introduktionsövningar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>PHP OOP Introduktion - Vecka 1</h1>

<div class="grid-container">

<div class="grid-item">
<h2>Övning 1: Skapa en klass</h2>
<?php
// Skapa en enkel klass som heter Animal.
// Lägg till en egenskap $name och en metod showName() som skriver ut djurets namn.

class Animal1 {
    public $name;

    public function showName(){

        return $this->name;
    }
}

$animal = new Animal1;
$animal->name = "Findus";

echo $animal->showName();


?>
</div>
<div class="grid-item">
<h2>Övning 2: Konstruktor</h2>
<?php
// Lägg till en konstruktor i Animal-klassen som tar emot namnet som parameter och sparar det i $name.

class AnimalWithConstructor {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function showName(){

        return $this->name;
    }
}
$newAnimal = new AnimalWithConstructor("Jansson");

echo $newAnimal->showName();


?>
</div>

<div class="grid-item">
<h2>Övning 3: Skapa objekt</h2>
<?php
// Skapa två objekt av Animal-klassen med olika namn och anropa showName().

$animalOne = new Animal1;
$animalOne->name = "Fido";

//$animalOneWithConstr = new Animal1("Fido");


$animalTwo = new Animal1;
$animalTwo->name = "Nils";

echo $animalOne->showName();
echo "<br>";
echo $animalTwo->showName();


?>
</div>

<div class="grid-item">
<h2>Övning 4: Lägg till en ny egenskap</h2>
<?php
// Lägg till en ny egenskap $age i Animal-klassen.
// Uppdatera konstruktorn så att den också sätter åldern.

class AnimalWithNewConstructor {
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;

    }

    public function showName(){

        return $this->name;
    }
}
$newAnimal = new AnimalWithNewConstructor("Jansson", 5);

echo $newAnimal->showName();
echo "<br>";
print_r($newAnimal);


?>
</div>

<div class="grid-item"> 
<h2>Övning 5: Metod för att visa all information</h2>
<?php
// Lägg till en metod showInfo() som skriver ut både namn och ålder.
class AnimalWithNewMethod {
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function showName(){
        return $this->name;
    }

    public function showInfo(){

        return "Namn: $this->name, <br> Ålder: $this->age år";

    }
}

$newAnimal = new AnimalWithNewMethod("Jansson", 5);

echo $newAnimal->showInfo();
echo "<br>";

?>
</div>

<div class="grid-item">
<h2>Övning 6: Private & Public</h2>
<?php
// Ändra $name och $age till private och skapa getter-metoder getName() och getAge() för att hämta värdena.

class Animal {

        private $name;
        private $age;

        public function getName(){
    
            return $this->name;
        }

        public function setName($name){
    
            $this->name = $name;
        }

        public function getAge(){
    
            return $this->age;
        }

        // public function setName($name){
    
        //     $this->name = $name;
        // }
    
    }
    
    $animal = new Animal;
    //$animal->name = "Findus";
    
    $animal->setName("Findus");
    echo $animal->getName();

    echo "<br>";
    echo $animal->getAge();

    
?>
</div>

<div class="grid-item">
<h2>Övning 7: Arv</h2>
<?php
// Skapa en ny klass Dog som ärver från Animal.
// Lägg till en egenskap $breed och en metod showBreed().


class AnimalClass1 {

    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age; 
    } 

    public function showInfo(){

        return "Namn: $this->name, <br> Ålder: $this->age år";

    }
}

class Dog1 extends AnimalClass1 {

    public $breed;

    public function __construct($name, $age, $breed) {
        parent::__construct($name, $age);
        $this->breed = $breed;
    }

    public function showBreed() {
        echo "Ras: $this->breed";
    }

}

$dog = new Dog1("Fido", 10, "Terrier");
$dog->showBreed();
echo $dog->showInfo();

//print_r($dog);



?>
</div>

<div class="grid-item">
<h2>Övning 8: Använda arv</h2>
<?php
// Skapa ett objekt av Dog och anropa både showInfo() och showBreed().
?>
</div>

<div class="grid-item">
<h2>Övning 9: Interface</h2>
<?php
// Skapa ett interface SoundMaker med en metod makeSound().
// Implementera detta i Dog-klassen.


//Kontrakt för att skapa klasser.
//Regler för vad som måste finnas i en klass.
interface SoundMaker {
    public function makeSound();
}

class AnimalClass {

    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age; 
    } 
}


class Dog extends AnimalClass implements Soundmaker {

    public $breed;

    public function __construct($name, $age, $breed) {
        parent::__construct($name, $age);
        $this->breed = $breed;
    }

    public function makeSound(){
        echo "Voff voff";
    }

    public function showBreed() {
        echo "Ras: $this->breed";
    }

    public function showInfo() {
        echo "Namn: $this->name <br>Ålder: $this->age <br>Ras: $this->breed";
    }

    public function filterByBreed($breed) {
        if ($this->breed === $breed) {
            return true;
        } else {
            return false;
        }
    }

}

$dog = new Dog("Fido", 10, "Terrier");
//$dog->showBreed();
$dog->makeSound();


?>
</div>

<div class="grid-item">
<h2>Övning 10: Skapa en lista med objekt</h2>
<?php
// Skapa en array där du lagrar flera Dog-objekt med olika raser och namn.
// Loopa igenom arrayen och anropa showInfo() för varje objekt.

$dogs = [
    new Dog("Max", 4, "Golden Retriever"),
    new Dog("Bella", 2, "Pudel"),
    new Dog("Charlie", 5, "Bulldog"),
    new Dog("Bamse", 2, "Golden Retriever"),

];

foreach ($dogs as $dog) {
    $dog->showInfo();
    echo "<br>";
}

?>
</div>

<div class="grid-item">
<h2>Övning 11: Filtrera objekt i en array</h2>
<?php
// Skapa en metod filterByBreed($breed) som returnerar alla Dog-objekt i arrayen med en viss ras.


// Alternativ 2
// Egen metod i klassen Dog

// public function filterByBreed($breed) {
//     if ($this->breed === $breed) {
//         return true;
//     } else {
//         return false;
//     }
//}

$breedToFind = "Golden Retriever";

foreach ($dogs as $dog) {
    if ($dog->filterByBreed($breedToFind)) {
        $dog->showInfo();
    }
}





?>
</div>

<div class="grid-item">
<h2>Övning 12: Statisk metod</h2>
<?php
// Lägg till en statisk metod getType() i Animal-klassen som returnerar "Djur".
// Anropa den utan att skapa ett objekt.


class StaticMethodAnimal {
    public static function getType() {
        return "Djur";
    }
}

echo StaticMethodAnimal::getType();


?>
</div>

<div class="grid-item">
<h2>Övning 13: Magic Methods</h2>
<?php
// Lägg till __toString() i Animal-klassen så att den returnerar namnet när objektet skrivs ut.

class AnimalToString {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function __toString() {
        return $this->name;
    }
}

$animal = new AnimalToString("Tiger");

echo $animal;

echo "<br>";

echo $animal->name;



?>
</div>

<div class="grid-item">
<h2>Övning 14: Autoload</h2>
<?php
// Använd spl_autoload_register() för att automatiskt ladda klasser från en "classes"-mapp.

//include'admin.php'
//include'person.php'

spl_autoload_register(function ($class) {
    include "classes/" . $class . ".php";
});

$person = new Person();
$admin = new Admin();

$admin->name = "Martin";
echo $admin->name;

?>
</div>

<div class="grid-item">
<h2>Övning 15: Dragon Slayer</h2>
<?php
// Bygg två klasser, en DragonSlayer och en ElderDragon. Bygg OOP-kod för att klasserna ska slåss mot varandra.
// Lägg in valfria properties, metoder och sedan kör en simulerad strid till sista andetag.

//assoc arrayer vs objekt?
//skulle vi kunna dragon slayer med assoc array?

//Stora skillnaden
//Objekt har metoder

class ElderDragon {
    public $name;
    public $health = 100; // Draken börjar med 100 HP

    public function __construct($name) {
        $this->name = $name;
    }

    public function takeDamage($damage) {
        $this->health -= $damage;
        if ($this->health <= 0) {
            echo "$this->name är besegrad!<br>";
        } else {
            echo "$this->name har $this->health HP kvar.<br>";
        }
    }

    public function attack($slayer) {
        $damage = rand(5, 20); // Drakens skada är mellan 5 och 20
        echo "$this->name gör $damage skada!<br>";
        $slayer->takeDamage($damage);
    }
}

class DragonSlayer {
    public $name;
    public $health = 50; // Hjälten börjar också med 100 HP

    public function __construct($name) {
        $this->name = $name;
    }

    public function takeDamage($damage) {
        $this->health -= $damage; 
        if ($this->health <= 0) {
            echo "$this->name har fallit i striden!<br>";
        } else {
            echo "$this->name har $this->health HP kvar.<br>";
        }
    }

    public function attack($dragon) {
        $damage = rand(10, 30); 
        echo "$this->name gör $damage skada!<br>";
        $dragon->takeDamage($damage);
    }
}

// Starta kampen
$dragon = new ElderDragon("Alduin");
$slayer = new DragonSlayer("Hjälte");

while ($dragon->health > 0 && $slayer->health > 0) {
    $slayer->attack($dragon);
    if ($dragon->health > 0) {
        $dragon->attack($slayer);
    }
}

echo "Striden är över!";

?>
</div>

</div>
</body>
</html>