<?php
// Question 1
abstract class Vehicule {
    protected $code;
    protected $reservedSeats;
    protected $capacity;

    public function __construct($code, $reservedSeats, $capacity) {
        $this->code = $code;
        $this->reservedSeats = $reservedSeats;
        $this->capacity = $capacity;
    }

    // Question 2
    abstract public function afficher();

    // Question 3
    abstract public function total();
}

// Question 4
class Bateau extends Vehicule {
    private $color;
    private $pricePerSeat;

    public function __construct($code, $reservedSeats, $capacity, $color, $pricePerSeat) {
        parent::__construct($code, $reservedSeats, $capacity);
        $this->color = $color;
        $this->pricePerSeat = $pricePerSeat;
    }

    // Question 5
    public function afficher() {
        echo "Code: " . $this->code . "\n";
        echo "Reserved Seats: " . $this->reservedSeats . "\n";
        echo "Capacity: " . $this->capacity . "\n";
        echo "Color: " . $this->color . "\n";
        echo "Price Per Seat: " . $this->pricePerSeat . "\n";
    }

    // Question 6
    public function total() {
        return $this->reservedSeats * $this->pricePerSeat;
    }
}

// Question 7
$bateau = new Bateau("B123", 10, 50, "Blue", 20);
$bateau->afficher();
echo "Total to be paid: " . $bateau->total() . " units\n";