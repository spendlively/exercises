<?php

class Test
{

    public $data;

    public $count = 0;

    public $maxRange = 0;

    public function __construct($data)
    {
        $this->data = $data;
        $this->count = count($data);

        foreach ($data as $pair) {
            $this->maxRange += $pair[1];
        }
    }

    public function getRandom()
    {
        $randomRange = rand(0, $this->maxRange);
        $sum = 0;

        for ($i = 0; $i < $this->count; $i++) {
            $sum += $this->data[$i][1];
            if ($sum >= $randomRange) return $this->data[$i][0];
        }


        throw new \Exception('Undefined error!');
    }

}

$data = [[1, 1], [2, 2], [3, 3]];
$test = new Test($data);
var_dump($test->getRandom());
