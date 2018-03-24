<?php
/**
 * Created by PhpStorm.
 * User: Игорь
 * Date: 24.03.2018
 * Time: 22:46
 */

class Automobile extends MotorVehicle #Супер класс класса "Автомобиль»": средство передвижения с мотором
{
    public $Color;
    public $WheelSize;
}

class TV extends TelevisionsAudioVideo #Супер класс класса "Телевизор": Телевизоры, аудио, видео
{
    public $Сategory;
}

class BallPen extends Stationery #Супер класс класса "Шариковая ручка»": канцелярские товары
{
    public $Сategory;
}

class Duck extends Bird #Супер класс класса "Утка»": птица
{
    public $Сategory;
}

class Stock extends Product #Супер класс класса "Товар»": склад
{
    public $Сategory;
}


