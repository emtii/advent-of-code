<?php

/**
 * Created by PhpStorm.
 * User: emtii
 * Date: 03.12.15
 * Time: 23:21
 */
class day2
{
    public $l;
    public $w;
    public $h;
    public $input;
    public $data = array();
    public $sum;

    public function __construct() {
        $this->input = file(__DIR__ . '/input/day2.txt');

        foreach($this->input as $in) {
            // L x W x H
            $this->data[] = explode('x', $in);
        }
    }

    // 1. find the surface area of the box, which is 2*l*w + 2*w*h + 2*h*l
    // + 2. The elves also need a little extra paper for each present: the area of the smallest side.

    public function santaBiz() {
        foreach($this->data as $in) {
            $lxw = $this->calcLxW($in[0], $in[1]);
            $wxh = $this->calcWxH($in[1], $in[2]);
            $hxl = $this->calcHxL($in[2], $in[0]);

            // sum of paper needed
            $sum = $lxw + $wxh + $hxl;

            // needed slack
            $slack = min($lxw, $wxh, $hxl);

            // sum + slack
            $this->sum += $sum + $slack;

        }
        echo 'Needed Paper is: ' . $this->sum;
    }

    public function calcLxW($l, $w) {
        $lxw = 2 * $l * $w;
        return $lxw;
    }

    public function calcWxH($w, $h) {
        $wxh = 2 * $w * $h;
        return $wxh;
    }

    public function calcHxL($h, $l) {
        $hxl = 2 * $h * $l;
        return $hxl;
    }
}

$day2 = new day2();
$run = $day2->santaBiz();