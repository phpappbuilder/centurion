<?php
namespace App\phpappbuilder\helpers;

interface HelperInterface
{
    public function __construct($params);
    public function setName($name);
    public function setValue($value);
    public function render():string ;
}