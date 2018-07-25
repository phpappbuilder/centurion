<?php
namespace App\phpappbuilder\object;


interface ObjectInterface
{
    public function getStructure(); //Хелпер для объекта
    public function getName(); //Возвращает название типа объекта
    public function getIcon(); //Возвращает иконку объекта
    public function getDescription(); //Возвращает описание объекта
    public function getChildsTypes(); //Возвращает массив с классами объектов которые могут быть детьми этого объекта
}