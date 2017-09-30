<?php
namespace Dog;

require_once('InterfaceAnimal.php');

use InterfaceAnimal;

abstract class Dog implements InterfaceAnimal {

    public static $count;
    public static $puppiesCountAllBreeds;
    public $puppiesCount = 0;
    public $breed = null;
    public $size = null;

    public function __construct() {
        self::$count += 1;
        echo "<h4> You have " . self::$count. " breeds of dogs awake!</h4>";
    }
    
    public function __destruct() {
        echo "<h4>Your $this->breed is sleeping.";
    }

    public function makePuppies(int $num) {
        $this->puppiesCount = $this->puppiesCount + $num;
        //add new puppies to total puppies
        $this->setTotalPupies($num);
        //return puppies for this breed of dog.
        return "<p> Congratulations! You have $this->puppiesCount $this->breed puppies.</p>"; 
    }

    public function setTotalPupies($morePuppies) {
        self::$puppiesCountAllBreeds = self::$puppiesCountAllBreeds + $morePuppies;
    }

    public static function getTotalPuppies() {
        return self::$puppiesCountAllBreeds;
    }

    //Interface Methods
    public static function kingdom($kingdom) {
        echo "<h4>A dog is in the $kingdom Kingdom.</h4>";
    }

}
