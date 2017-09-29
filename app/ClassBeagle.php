<?php 

require_once('ClassDog.php');

class Beagle extends Dog\Dog {
    
    public $breed = "Beagle";
    public $puppiesCount = 0;

    public function __destruct() {
        echo "<h4>Your $this->breed is sleeping";
    }

    public function makePuppies(int $num) {
        $this->puppiesCount = $this->puppiesCount + $num;
        return "Congratulations! You have $this->puppiesCount puppies."; 
    }


}
