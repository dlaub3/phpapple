<?php

require_once('ClassBeagle.php');

echo "<h1> Testing </h1>";

$beagle = new Beagle();

$beagle->bark();

$puppies = $beagle->makePuppies(10);

$beagle->bark();



unset($beagle);
