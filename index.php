<?php


// Vehicle.php


class Vehicle

{

 

    protected string $color;


    protected int $currentSpeed=90;


    protected int $nbSeats;


    protected int $nbWheels=4;


    public function __construct(string $color, int $nbSeats)

    {

        $this->color = $color;

        $this->nbSeats = $nbSeats;

    }


    public function forward(): string

    {

        $this->currentSpeed = 15;

        return "Go !";

    }


    public function brake(): string

    {

        $sentence = "";

        while ($this->currentSpeed > 0) {

            $this->currentSpeed--;

            $sentence .= "Brake !!!";

        }


        $sentence .= "I'm stopped !";

        return $sentence;

    }


    public function getCurrentSpeed(): int

    {

        return $this->currentSpeed;

    }


    public function setCurrentSpeed(int $currentSpeed): void

    {

        if($currentSpeed >= 0){

            $this->currentSpeed = $currentSpeed;

        }

    }


    public function getColor(): string

    {

        return $this->color;

    }


    public function setColor(string $color): void

    {

        $this->color = $color;

    }


    public function getNbSeats(): int

    {

        return $this->nbSeats;

    }


    public function setNbSeats(int $nbSeats): void

    {

        $this->nbSeats = $nbSeats;

    }


    public function getNbWheels(): int

    {

        return $this->nbWheels;

    }


    public function setNbWheels(int $nbWheels): void

    {

        $this->nbWheels = $nbWheels=4;

    }

}

class LoudVehicle extends Vehicle

{

    private int $stockCapacity;


    private int $loading;


    public function __construct(int $stockCapacity, string $color, int $nbSeats, string $energy)

    {
        $this->stockCapacity = $stockCapacity;

        parent::__construct($color, $nbSeats);

        $this->energy = $energy;

    }


    public function getStockCapacity(): int

    {

        return $this->stockCapacity;

    }


    public function setStockCapacity(int $stockCapacity): int

    {

        $this->stockCapacity = $stockCapacity;

    }

    public function getLoading(): int

    {

        return $this->loading;

    }

    public function filling(int $loading ): string

    {$word="";

        if ($loading === $this->stockCapacity) {
            $word= "Full!";
            return $word;
        }else{ $word= " in filling";
            return $word;
        }
    }

}

$Ford = new LoudVehicle(500,'blue',4,'gaz');
var_dump($Ford);

echo $Ford->filling(400);



