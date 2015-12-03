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
    public $floor;

    public function __construct() {
        $this->input = file_get_contents(__DIR__ . '/input/day1.txt');
        $this->input = str_split($this->input);
    }

    // Santa starts at floor 0
    // follows instructions of input
    public function getFloorOfSanta() {
        for($i = 0; $i < count($this->input); $i++)  {

            // ) means  +
            if( $this->input[ $i ] === '(' ) {
                $this->floor++;
            }

            // ( means -
            if( $this->input[ $i ] === ')') {
                $this->floor--;
            }

        }

        return $this->floor;
    }
}

$day1 = new day1();
$floor = $day1->getFloorOfSanta();
echo 'Santa is at floor: ' . $floor;