<?php

// Car.php

class Car
{
    /**
     * @var integer
     */
    private $nbWheels = 4;
    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var string
     */
    private $color;
    /**
     * @var integer
     */
    private $nbSeats;
    /**
     * @var string
     */
    private $energy;
    /**
     * @var integer
     */
    private $energyLevel;
    /**
     * @var boolean
     */
    private $startCar;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        if($this->startCar == true ) {
            $this->currentSpeed = 50;
            return "<br/>"."engine is started, let's go !"."<br/>";
        }else{
            $this->currentSpeed = 0;
            return "start the engine !"."<br/>";
        }
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "<br/>"."I'm stopped !"."<br/>";
        return $sentence;
    }

    public function start(bool $start): bool
    {
       $this->startCar = $start;
       return $start;
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }
    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}
