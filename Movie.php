<!--   
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->
<?php

class Movie{
public $titolo;
public $regista;
public $attorePrincipale;
public $attoreSecondario;
public $annoFilm;
public $genere;


// i will write here function construct
function __construct($_titolo, $_regista, $_attorePrincipale, $_attoreSecondario, $_annoFilm, $_genere)
{
   
   $this->titolo =$_titolo;
   $this->regista = $_regista;
   $this->attorePrincipale = $_attorePrincipale;
   $this->attoreSecondario = $_attoreSecondario;
   $this->annoFilm =$_annoFilm;
   $this->genere =$_genere;
}


/**
 * Get the value of titolo
 */
public function getTitolo()
{
return $this->titolo;
}

/**
 * Set the value of titolo
 */
public function setTitolo($titolo): self
{
$this->titolo = $titolo;

return $this;
}

/**
 * Get the value of regista
 */
public function getRegista()
{
return $this->regista;
}

/**
 * Set the value of regista
 */
public function setRegista($regista): self
{
$this->regista = $regista;

return $this;
}

/**
 * Get the value of attorePrincipale
 */
public function getAttorePrincipale()
{
return $this->attorePrincipale;
}

/**
 * Set the value of attorePrincipale
 */
public function setAttorePrincipale($attorePrincipale): self
{
$this->attorePrincipale = $attorePrincipale;

return $this;
}

/**
 * Get the value of attoreSecondario
 */
public function getAttoreSecondario()
{
return $this->attoreSecondario;
}

/**
 * Set the value of attoreSecondario
 */
public function setAttoreSecondario($attoreSecondario): self
{
$this->attoreSecondario = $attoreSecondario;

return $this;
}

/**
 * Get the value of annoFilm
 */
public function getAnnoFilm()
{
return $this->annoFilm;
}

/**
 * Set the value of annoFilm
 */
public function setAnnoFilm($annoFilm): self
{
$this->annoFilm = $annoFilm;

return $this;
}

/**
 * Get the value of genere
 */
public function getGenere()
{
return $this->genere;
}

/**
 * Set the value of genere
 */
public function setGenere($genere): self
{
$this->genere = $genere;

return $this;
}


}
