<?php
declare(strict_types=1);

class Vehicle {
    private $name;
    private $surname;
    private $age;
    private $gpa;
    
    /**
     * Student constructor.
     * 
     * @param string $name
     * @param string $surname
     * @param int $age
     * @param float $gpa
     */

    public function __construct(string $name, string $surname, int $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->gpa = 0;
    }

    /**
     * @param float $gpa
     */
    public function setGPA(float $gpa): void
    {
        if ($gpa > 0) {
            $this->gpa = $gpa;
        }
    }

    /**
     * @return float
     */
    public function getGPA(): float
    {
        return $this->gpa;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


}

$student = new Vehicle('Аркадий', 'Иванов', 20);

echo $student->getName();
echo $student->getGPA();
echo $student->setGPA(4.7);
echo $student->getGPA();


?>