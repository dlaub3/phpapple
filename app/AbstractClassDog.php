<?php
namespace Dog;

require_once('InterfaceKingdom.php');
require_once('TraitAnimal.php');

use InterfaceKingdom;

abstract class Dog implements InterfaceKingdom {
    use \Animal;

    private static $count;
    private static $puppiesCountAllBreeds;
    private $puppiesCount = 0;

    protected $dogBreed = null;
    protected $dogSize = null;
    protected $dogColor = null;

    public function __construct() {
        self::$count += 1;
        echo "<h4> You have " . self::$count. " breeds of dogs awake!</h4>";
    }
    
    public function __destruct() {
        echo "<h4>Your $this->dogBreed is sleeping.";
    }

    public function makePuppies(int $num): string {
        $this->puppiesCount = $this->puppiesCount + $num;
        //add new puppies to total puppies
        $this->setTotalPupies($num);
        //return puppies for this breed of dog.
        return "<p> Congratulations! You have $this->puppiesCount $this->dogBreed puppies.</p>"; 
    }

    protected function setTotalPupies(int $morePuppies) {
        self::$puppiesCountAllBreeds = self::$puppiesCountAllBreeds + $morePuppies;
    }

    public static function getTotalPuppies(): int {
        return self::$puppiesCountAllBreeds;
    }

    public function getDogColor(): string {
        return $this->dogColor;
    }

    public function getDogSize(): string {
        return $this->dogSize;
    }

    //using the Animal trait
    public function feedDog() {
        $diet = $this->diet('Kibbles and Bits');
        return "<p> $diet, Woof. </p>";
    }

    //Interface Methods
    public static function kingdom($kingdom = null): string {
        if ($kingdom === null) {
          $kingdom = 'Animal';
        }
        return "<h4>A dog is in the $kingdom Kingdom.</h4>";
    }

}
