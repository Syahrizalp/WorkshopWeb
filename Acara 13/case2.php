<?php
// abstract class Person
abstract class Person {
    abstract public function greet();
}
// class English turunan dari Person
class English extends Person {
    public function greet() {
        echo "Hello! Nice to meet you.<br>";
    }
}
// class German turunan dari Person
class German extends Person {
    public function greet() {
        echo "Hallo! Schön, dich zu treffen.<br>";
    }
}
// class French turunan dari Person
class French extends Person {
    public function greet() {
        echo "Bonjour! Ravi de vous rencontrer.<br>";
    }
}
$people = [new English(), new German(), new French()];
foreach ($people as $person) {
    $person->greet();
}
?>
