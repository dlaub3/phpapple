<?php

require_once('app/ClassBeagle.php');
require_once('app/ClassGermanShepherd.php');


//creating a PHP closure

$feed = function(int $fed = null ): string {
    
    if ( $fed === null ) {
       return "Your dog is unhappy. You should feed him.<br />";
    }
    if ( $fed > 3 ) {
        return "Your dog is happy since he is well fed.<br />";
    }
    else {
        return "You should feed your dog more. He is still hungry.<br />";
    }
};

$sadDog = $feed();
$hungryDog = $feed(1);
$happyDog = $feed(4);


echo "<div>
        $sadDog
        $hungryDog
        $happyDog
     </div>";


//this method is inherited from the parent
//here it is invoked statically
Dog\Dog::kingdom('Animal');

//create an object
//the constructor echos it's message
$beagle = new Beagle();
$germanShepherd = new GermanShepherd();
$germanShepherdSize = $germanShepherd->getDogSize();
$germanShepherdColor = $germanShepherd->getDogColor();
$beagleSize = $beagle->getDogSize();
$beagleColor = $beagle->getDogColor();

//Animal Trait tells us what the Dog eats
$diet = $beagle->feedDog();
echo $diet;

echo "A Beagle is a $beagleSize breed of dog with $beagleColor fur.";
echo "A German Shepherd is a $germanShepherdSize breed of dog with $germanShepherdColor fur.";


//store date for output
$beaglePuppies = $beagle->makePuppies(10);
$germanShepherdPuppies = $germanShepherd->makePuppies(5);
$allPuppies = Dog\Dog::getTotalPuppies();
//output data
echo $beaglePuppies;
echo $germanShepherdPuppies;
echo "<p> You have $allPuppies Puppies all together.";

//unset the object so the __destruct method echos it's message in place
unset($beagle, $germanShepherd);
