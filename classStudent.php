<?php
declare(strict_types=1);

class Student {
    private $name;
    private $surname;
    private $age;
    private $gpa;
    
    //  Student constructor
    //  @param string $name
    //  @param string $surname
    //  @param int $age
    //  @param float $gpa
    public function __construct(string $name, string $surname, int $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->gpa = 0;
    }

    //  @param float $gpa
    public function setGPA(float $gpa): void {
        if (($gpa > 0) and ($gpa <= 5)) {
            $this->gpa = $gpa;
        } else {
            echo PHP_EOL;
            echo 'Ошибка: средняя оценка может быть от 0 до 5.';
        }
    }

    //  @return float
    public function getGPA(): float {
        return $this->gpa;
    }

    // @return string
    public function getName(): string {
        return $this->name;
    }
}

$student1 = new Student('Аркадий', 'Иванов', 20);

var_dump($student1);
echo $student1->getName();
echo $student1->setGPA(4.7);
echo PHP_EOL;
echo $student1->getGPA();
echo PHP_EOL;
echo PHP_EOL;


$student2 = new Student('Петр', 'Карасёв', 24);

var_dump($student2);
echo $student2->getName();
echo $student2->setGPA(5.5);
echo PHP_EOL;
echo $student2->setGPA(3.5);
echo PHP_EOL;
echo $student2->getGPA();
echo PHP_EOL;
echo PHP_EOL;


?>