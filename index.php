<!--
Creare una o più classi a vostro piacimento, che rappresentino degli oggetti comuni.
Dichiarate le sue proprietà e quindi il costruttore per istruire la classe su come, appunto, creare l'oggetto.
Instanziare almeno 3 oggetti per ciascuna classe.
Bonus: Provare a far interagire due oggetti. Per esempio, come abbiamo visto in classe, dove nella Biblioteca
aggiungevamo il libro (oggetto Book).
Quindi nel bonus, il consiglio è quello di creare una classe che "contenga" un'altra.
Es: Il Frigorifero con il Cibo, Il Concessionario con l'Automobile, Il Giradischi con il Vinile... etc..
 -->
<?php

// ================= CLASSE PIATTAFORM ====================

   class Piattaforma {

     private $name;
     private $videogames = [];

     public function __construct($name){
       $this ->name = $name;
     }

     public function getName() {
       return $this->name;
     }

     public function getGames() {
       return $this->videogames;
     }

     public function addGames($game){
       $this ->videogames[] = $game;
     }
   }

  $computer = new Piattaforma('PC');
  $playStation = new Piattaforma('Play Station');
  $xbox = new Piattaforma('Xbox One');


  echo $computer ->getName() . '<br/>';
  echo $playStation ->getName() . '<br/>';
  echo $xbox ->getName() . '<br/><br/>';

  // ================= CLASSE VIDEOGIOCO ====================

  class VideoGioco {

    private $name;
    private $category;
    private $platform;
    private $pegi;

    public function __construct($name, $category, $platform, $pegi){
      $this ->name = $name;
      $this ->category = $category;
      $this ->platform = $platform;
      $this ->pegi = $pegi;
    }

    public function getName() {
      return $this ->name;
    }
    public function getCategory() {
      return $this ->category;
    }
    public function getPlatform() {
      return $this ->platform;
    }
    public function getPegi() {
      return $this ->pegi;
    }
  }

  $minecraft = new VideoGioco('Minecraft', 'Adventure', 'PC', 3);
  $blackOps = new VideoGioco('Call of Duty Black Ops 3', 'First Person Shooter', 'Play Station', 18);
  $forzaHorizon = new VideoGioco('Forza Horizion', 'Race', 'Xbox One', 16);

  echo $minecraft ->getName() . '<br/>';
  echo $minecraft ->getCategory() . '<br/>';
  echo $minecraft ->getPlatform() . '<br/>';
  echo $minecraft ->getPegi() . '<br/> <br/>';

  echo $blackOps ->getName() . '<br/>';
  echo $blackOps ->getCategory() . '<br/>';
  echo $blackOps ->getPlatform() . '<br/>';
  echo $blackOps ->getPegi() . '<br/> <br/>';

  echo $forzaHorizon ->getName() . '<br/>';
  echo $forzaHorizon ->getCategory() . '<br/>';
  echo $forzaHorizon ->getPlatform() . '<br/>';
  echo $forzaHorizon ->getPegi() . '<br/> <br/>';

  $raccolta = new Piattaforma('raccolta');
  $raccolta->addGames($minecraft);
  $raccolta->addGames($blackOps);
  $raccolta->addGames($forzaHorizon);

  print_r($raccolta->getGames());


 ?>
