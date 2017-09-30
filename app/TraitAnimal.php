<?php

//Traits allow horizontal code sharing
//They are commonly used for logs.

trait Animal {
    protected function Diet(string $diet): string {
        return "This animal eats $diet.";
    }
}
