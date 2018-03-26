<?php

// Супер класс класса "Автомобиль»": средство передвижения с мотором

class Automobile extends MotorVehicle
{
    public $Color;
    public $WheelSize;
}

// Супер класс класса "Телевизор": Телевизоры, аудио, видео

class TV extends TelevisionsAudioVideo
{
    public $Сategory;
}

// Супер класс класса "Шариковая ручка»": канцелярские товары

class BallPen extends Stationery
{
    public $Сategory;
}

// Супер класс класса "Утка»": птица
class Duck extends Bird
{
    public $Сategory;
}

// Супер класс класса "Товар»": склад
class Stock extends Product
{
    public $Сategory;
}


