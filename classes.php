<?php

  declare(strict_types = 1);

  class SuperHero {
  
    public function __construct(
      public string $name, 
      public array $powers, 
      public string $planet){
    }

    public function attack(){
      return "¡$this->name ataca con sus poderes!";
    }

    public function description(){
      $powers = implode(",", $this->powers);
      return "$this->name es un superheroe que vieve de: $this->planet
      y tiene los siguientes poderes: $powers";
    }

  }

  $hero = new SuperHero("Ironman", ["Inteligencia, dinero y tecnología"], "Tierra");
  