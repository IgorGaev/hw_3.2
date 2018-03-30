<?php

interface GetSetPrice
{
    public function setPrice($price);
    public function getPrice();
}

interface GetType
{
    public function getType();
}

interface GetAmobileProperty
{
    public function getName();
    public function getWheelSize();
    public function getCategory();
    public function getColor();

}

interface ChangeAmobileProperty
{
    public function changeColor($color);
    public function changeWheelSize($wheelSize);
}

//Суперкласс "Объекты домашнего задания"
class HomeworkObject
{
    public $name;

    public function getName()
    {
        return $this->name;
    }
}

//Класс "Автомобиль"
class Automobile extends HomeworkObject implements \GetAmobileProperty, \ChangeAmobileProperty
{
    public $category;
    public $color;
    public $wheelSize;

    public function __construct($name,$category,$color,$wheelSize)
    {
        $this->name = $name;
        $this->category = $category;
        $this->color = $color;
        $this->wheelSize = $wheelSize;
    }

    public function getWheelSize()
    {
        return $this->wheelSize;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function changeColor($color)
    {
        $this->color = $color;
    }

    public function changeWheelSize($wheelSize)
    {
        $this->wheelSize = $wheelSize;
    }
}

// Создаём объекты класса "Автомобиль"
$mustangShelby = new Automobile('Mustang Shelby', 'Muscle car', 'black', '18');
$chevroletCorvette = new Automobile('Chevrolet Corvette', 'Super car', 'Red', '19');


//Класс "Телевизор"
class Tv extends HomeworkObject implements GetSetPrice
{
    public $price;
    public $diagonal;
    public $technology;
    public $hdReady;
    public $resolution;

    public function __construct($name, $price, $diagonal, $technology, $hdReady, $resolution)
    {
        $this->name = $name;
        $this->price = $price;
        $this->diagonal = $diagonal;
        $this->technology = $technology;
        $this->hdReady = $hdReady;
        $this->resolution = $resolution;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDiagonal()
    {
        return $this->diagonal;
    }

    public function getHdReady()
    {
        return $this->hdReady;
    }

    public function getResolution()
    {
        return $this->resolution;
    }

    public function getTechnology()
    {
        return $this->technology;
    }

}

// Создаём объекты класса "Телевизор"
$lg43UJ655V = new Tv('LG 43UJ655V', 38999, '43" (109.2 см)', 'LED', 'Нет', '3840x2160 Пикс');

$lg55UJ740V = new Tv('LG 55UJ740V', 69999, '55" (139.7 см)', 'Edge LED', 'Нет', '3840x2160 Пикс');

//Класс "Шариковая ручка"
class BallPen extends HomeworkObject implements GetSetPrice
{
    public $price;
    public $collection;
    public $reference;
    public $production;

    public function __construct($name, $price, $collection, $reference, $production)
    {
        $this->name = $name;
        $this->price = $price;
        $this->collection = $collection;
        $this->reference = $reference;
        $this->production = $production;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getCollection()
    {
        return $this->collection;
    }

    public function getProduction()
    {
        return $this->production;
    }

    public function getReference()
    {
        return $this->reference;
    }

}

// Создаём объекты класса "Шариковая ручка"

$F306Parker = new BallPen('PARKER', 1999, 'Parker IM Metal', '1931665', 'Великобритания');

$F306Parker = new BallPen('PARKER', 9999, 'Parker Limited Edition', 'S0959750','Великобритания');

//Класс "Утка"

class Duck extends HomeworkObject implements GetType
{
    public $type;
    public $class;
    public $residence;

    public function __construct($name, $type, $class ,$residence)
    {
        $this->type = $type;
        $this->class = $class;
        $this->residence = $residence;
    }

    public function getColor()
    {
        return $this->class;
    }

    public function getResidence()
    {
        return $this->residence;
    }


    public function getType()
    {
        return $this->type;
    }
}

// Создаём объекты класса "Утка"
$cairinaMoschata = new Duck('Дуся','Хордовые', 'Птицы', 'Мексика');

$asarcornisScutulata = new Duck('Буся', 'Хордовые', 'Птицы', 'Индия');

// Класс "Продукт"
class Product extends HomeworkObject implements GetSetPrice
{
    public $id;
    public $category;
    public $price;

    public function __construct($id, $category, $name, $price)
    {
        $this->id = $id;
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getId()
    {
        return $this->id;
    }
}

// Создаём объекты класса "Продукт"
$beef = new Product('32145', 'Мясо', 'Говядина', 399);
$beer = new Product('54844', 'Алкоголь', 'Пиво', 99);
