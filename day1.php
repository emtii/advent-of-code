<?php

/**
 * Created by PhpStorm.
 * User: emtii
 * Date: 03.12.15
 * Time: 21:49
 */
class day1
{
    public $input;
    public $floor = 0;
    public $position = -1;

    public function __construct() {
        $this->input = file_get_contents(__DIR__ . '/input/day1.txt');
        $this->input = str_split($this->input);
    }

    // Santa starts at floor 0
    // follows instructions of input
    public function getSantaBiz() {
        for($i = 0; $i < count($this->input); $i++)  {

            // ) means +
            if( $this->input[ $i ] === '(' ) {
                $this->floor++;
            }

            // ( means -
            if( $this->input[ $i ] === ')' ) {
                $this->floor--;
            }

            // when he enters basement -1
            if($this->floor < 0 && $this->position < 0)
                $this->position = $i + 1;
        }

        echo 'Santa is at floor: ' . $this->floor . PHP_EOL;
        echo 'Santa enters basement first time at position: ' . $this->position . PHP_EOL;
    }
}

$day1 = new day1();

$run = $day1->getSantaBiz();