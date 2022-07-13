<?php
require_once "Movie.php";

// i will create here my istance
$Film1 = new Movie("Pirati Dei Caraibi", "Joachim Rønning", "Johnny Depp", "Orlando Bloom", 2003, "avventura");
$Film2 = new Movie("Il Signore Degli Anelli", "Peter Jackson", "Elijah Wood", "Sean Astin", 2001, "Fantasy");
$Film3 = new Movie("Avengers: Infinity War", "Anthony Russo, Joe Russo","Robert Downey Jr.", "Chris Evans & Chris Hemsworth" ,2018 ,"Fantasy");
$Film4 = new Movie("300","Zack Snyder", "Gerard Butler", "David Wenham", 2006, "azione");


// I print my films with an echo
echo "<h1> I MIEI FILM PREFERITI </h1>";


// i used var_dump to see if my instances worked
var_dump($Film1);
var_dump($Film2);
var_dump($Film3);
var_dump($Film4);