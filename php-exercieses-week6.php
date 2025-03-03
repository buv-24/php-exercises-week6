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
?>
</div>

<div class="grid-item">
<h2>Övning 2: Konstruktor</h2>
<?php
// Lägg till en konstruktor i Animal-klassen som tar emot namnet som parameter och sparar det i $name.
?>
</div>

<div class="grid-item">
<h2>Övning 3: Skapa objekt</h2>
<?php
// Skapa två objekt av Animal-klassen med olika namn och anropa showName().
?>
</div>

<div class="grid-item">
<h2>Övning 4: Lägg till en ny egenskap</h2>
<?php
// Lägg till en ny egenskap $age i Animal-klassen.
// Uppdatera konstruktorn så att den också sätter åldern.
?>
</div>

<div class="grid-item"> 
<h2>Övning 5: Metod för att visa all information</h2>
<?php
// Lägg till en metod showInfo() som skriver ut både namn och ålder.
?>
</div>

<div class="grid-item">
<h2>Övning 6: Private & Public</h2>
<?php
// Ändra $name och $age till private och skapa getter-metoder getName() och getAge() för att hämta värdena.
?>
</div>

<div class="grid-item">
<h2>Övning 7: Arv</h2>
<?php
// Skapa en ny klass Dog som ärver från Animal.
// Lägg till en egenskap $breed och en metod showBreed().
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
?>
</div>

<div class="grid-item">
<h2>Övning 10: Skapa en lista med objekt</h2>
<?php
// Skapa en array där du lagrar flera Dog-objekt med olika raser och namn.
// Loopa igenom arrayen och anropa showInfo() för varje objekt.
?>
</div>

<div class="grid-item">
<h2>Övning 11: Filtrera objekt i en array</h2>
<?php
// Skapa en metod filterByBreed($breed) som returnerar alla Dog-objekt i arrayen med en viss ras.
?>
</div>

<div class="grid-item">
<h2>Övning 12: Statisk metod</h2>
<?php
// Lägg till en statisk metod getType() i Animal-klassen som returnerar "Djur".
// Anropa den utan att skapa ett objekt.
?>
</div>

<div class="grid-item">
<h2>Övning 13: Magic Methods</h2>
<?php
// Lägg till __toString() i Animal-klassen så att den returnerar namnet när objektet skrivs ut.
?>
</div>

<div class="grid-item">
<h2>Övning 14: Autoload</h2>
<?php
// Använd spl_autoload_register() för att automatiskt ladda klasser från en "classes"-mapp.
?>
</div>

<div class="grid-item">
<h2>Övning 15: Dragon Slayer</h2>
<?php
// Bygg två klasser, en DragonSlayer och en ElderDragon. Bygg OOP-kod för att klasserna ska slåss mot varandra.
// Lägg in valfria properties, metoder och sedan kör en simulerad strid till sista andetag.
?>
</div>

</div>
</body>
</html>