<?php
class Animal
{
    private $nama;
    private $jenis;

    public function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo()
    {
        return "Hewan ini adalah {$this->nama} jenis {$this->jenis}.";
    }
}

class Cat extends Animal
{
    public function __construct($nama)
    {
        parent::__construct($nama, "Kucing");
    }

    public function getInfo()
    {
        $animalInfo = parent::getInfo();
        return $animalInfo . " Fyi. Kucing merupakan hewan yang senang dan gemar berdiam diri bahkan tidur ditempat-tempat atau barang-barang baru.";
    }
}

class Dog extends Animal
{
    public function __construct($nama)
    {
        parent::__construct($nama, "Anjing");
    }

    public function getInfo()
    {
        $animalInfo = parent::getInfo();
        return $animalInfo . " Fyi. Anjing merupakan hewan pintar dan memiliki insting yang sangat tajam.";
    }
}

// objek dari class Animal
$animal = new Animal("Harimau", "Karnivora");
echo $animal->getInfo() . "<br><br>";

// objek dari class Cat
$cat = new Cat("King");
echo $cat->getInfo() . "<br><br>";

// objek dari class Dog
$dog = new Dog("Kerr");
echo $dog->getInfo() . "<br><br>";