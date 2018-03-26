<?php

// Интерфейс с функциями изменения цвет и размер колес

interface AutomobileParamChange
{
    public function changeColor($color);
    public function changeWheelSize($wheelSize);
}

// Реализуем для объектов класса "Автомобиль"

class Automobile implements AutomobileParamChange
{
    public $color;
    public $wheelSize;
    public function changeColor($color)
    {
        $this->color = $color;
    }
    public function changeWheelSize($wheelSize)
    {
        $this->wheelSize = $wheelSize;
    }
}

// Интерфейс с функциями вывода цены цены и расчета скидки

interface GetPrice
{
    public function getPrice($price, $discount, $category);
}

// Реализуем для объектов класса "Телевизор"
class TV implements GetPrice
{
    public $price;
    public $category;
    public $discount;

    public function getPrice($price, $discount, $category)
    {
        $tvDiscount = ($category == 'Телевизор') ? 5 : 0;
        $discount = min($this->discount, $tvDiscount);

        if ($discount) {
            return round($this->price - ($this->price * $discount / 100));
    }   else {
            return $this->price;
        }
    }
}

// Интерфейс с функцией смены цвета чернил

interface BallPenOptions
{
    public function changeInkColor($inkColor);
}

// Реализуем для объектов класса "Шариковая ручка"
class BallPen implements BallPenOptions
{
    public $inkColor;
    public function changeInkColor($inkColor)
    {
        $this->inkColor = $inkColor;
    }
}

// Интерфейс с функцией вызова звук
interface DuckSound
{
    public function getSound($sound);
}

// Реализуем для объектов класса "Утка"
class Duck implements DuckSound
{
    public $sound;
    public function getSound($sound)
    {
        $this->sound = $sound;
        echo 'Я издаю звук ' . $this->sound;
    }
}
// Интерфейс с функцией вызова звук
interface DisplayProductInfo
{
    public function getProductInfo($type, $name, $price);
}

// Реализуем для объектов класса "Продукт"
class Product implements DisplayProductInfo
{
    public $type;
    public $name;
    public $price;

    public function getProductInfo($type, $name, $price)
    {
        echo 'Категория товара:' . $this->type;
        echo 'Название товара:' . $this->name;
        echo 'Цена товара:' . $this->price . 'руб';
    }
}
