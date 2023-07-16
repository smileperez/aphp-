<?php
declare(strict_types=1);

class Vehicle {
    private $type;
    private $vendor;
    private $model;
    private $release;
    private $color;
    private $mileage;
    
    //  Student constructor
    //  @param string $type
    //  @param string $vendor
    //  @param string $model
    //  @param int $release
    //  @param string $color
    //  @param int $mileage
    public function __construct(string $type, string $vendor, string $model, int $release, string $color) {
        $this->type = $type;
        $this->vendor = $vendor;
        $this->model = $model;
        $this->release = $release;
        $this->color = $color;
        $this->mileage = 0;
    }

    // @param int $mileage
    public function setMileage(int $mileage): void {
        if ($mileage > 0) {
            $this->mileage = $mileage;
        }
    }

    // @return data
    private function getPassport() {
        return [
            $this->type,
            $this->vendor,
            $this->model,
            $this->release,
            $this->color,
            $this->mileage
        ];
    }

    // @echo data
    public function printPassport() {
        
        $type;
        $vendor;
        $model;
        $release;
        $color;
        $mileage;

        [$type,  $vendor, $model, $release, $color, $mileage] = self::getPassport();

        echo 
            'Тип ТС: ' . $type . PHP_EOL . 
            'Производитель ТС: ' . $vendor . PHP_EOL . 
            'Модель ТС: ' . $model . PHP_EOL . 
            'Год производства ТС: ' . $release . PHP_EOL . 
            'Цвет ТС: ' . $color . PHP_EOL . 
            'Пробег ТС: ' . $mileage . PHP_EOL;
    }

}

$car_exeed = new Vehicle('Авто', 'Exeed', 'TXL', 2021, 'Black');
echo $car_exeed->setMileage(22560);
echo $car_exeed->printPassport();
echo PHP_EOL;

$car_ford = new Vehicle('Авто', 'Ford', 'Focus', 2018, 'Gray');
echo $car_ford->setMileage(78670);
echo $car_ford->printPassport();
echo PHP_EOL;


?>