<?php
namespace Dog;

abstract class Dog {

    public static $count;

    public function __construct() {
        self::$count += 1;
        echo "<h4> You have " . self::$count. " breeds of dogs awake!</h4>";
    }

}
