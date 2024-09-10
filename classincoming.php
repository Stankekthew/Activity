<?php

class Incoming {
    private $num1;
    private $num2;
    private $additional = 0;

    public function __construct() {
        $this->num1 = $_POST['num1'] ?? 10;
    }

    public function add($value) {
        $this->additional += $value;
    }

    public function getTotal() {
        return $this->num1 + $this->additional;
    }
}

$incoming = new Incoming();

// Adding 69 to the total
$incoming->add(5);

echo "The total is: " . $incoming->getTotal();

?>
