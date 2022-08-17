<?php

class Tower
{
    private $height;
    private $towerArr = [];

    public function __construct($height)
    {
        $this->height = $height;
        $this->build();
    }

    private function build()
    {
        for ($i = 1; $i <= $this->height; $i++) {
            $this->towerArr [] = $this->getFloor($i);
        }
    }

    private function getMargin($floor)
    {
        $res = '';

        $needed = $this->height - ($floor);

        for ($i = 0; $i < (int)$needed; $i++)
            $res .= ' ';

        return $res;
    }

    private function getBrake($floor)
    {
        $res = '';
        $needed = (2 * $floor) - 1;

        for ($i = 0; $i < $needed; $i++)
            $res .= '*';

        return $res;
    }

    protected function getFloor($floor)
    {

        $margin = $this->getMargin($floor);
        $breaks = $this->getBrake($floor);

        return $margin . $breaks . $margin;
    }

    public function getTower()
    {
        return $this->towerArr;
    }
}
echo "input: 1 \n";
$tower = new Tower(1);
foreach ($tower->getTower() as $floor)
    print_r("$floor\n");

echo "input: 3 \n";
$tower = new Tower(3);
foreach ($tower->getTower() as $floor)
    print_r("$floor\n");


echo "input: 6 \n";
$tower = new Tower(6);
foreach ($tower->getTower() as $floor)
    print_r("$floor\n");
?>
