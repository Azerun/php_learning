<?php

class Alien {
  public $hp;

  function __construct() {
    $this->hp = 100;
  }

  function attack($food) {
    return $food->hp = $food->hp - 10;
  }
}

class Marine {
  public $hp;

  function __construct() {
    $this->hp = 100;
  }

  function attack($enemy) {
    return $enemy->hp = $enemy->hp  - 5;
  }
}

$alien = new Alien();
$marine = new Marine();

$alien->attack($marine);
$marine->attack($alien);
$alien->attack($marine);

echo "Alien HP: " . $alien->hp;
echo "<br>\n";
echo "Marine HP: " .$marine->hp;
