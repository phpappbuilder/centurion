<?php
namespace App\phpappbuilder\helpers;

interface HelperInterface
{
    public function setName($name);
    public function setValue($value);
    public function setParams($params = []);
    public function getName():string;
    public function render():string ;
}