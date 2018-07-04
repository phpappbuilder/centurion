<?php
namespace App\phpappbuilder\helpers\Helpers;

use App\phpappbuilder\helpers\HelperInterface;

class Collection implements HelperInterface
{
    public $name = '';
    public $params = [];
    public $value;
    public $data;
    public $object = [];

    public function __construct($params){
        $this->params=$params;
        return $this;
    }

    public function setName($name)
    {
        $this->name=$name;
        return $this;
    }

    public function setValue($value)
    {
        $this->object = $value;
        return $this;
    }

    public function setHelper($name, $object){
        $this->object[$name]=$object;
        return $this;
    }

    public function render(): string{
        $tpl = new Templater(Template::class);
        $this->params['content']='';








        foreach($this->structure as $key => $value){
            if($this->prefix!=''){$this->structure[$key]->setName($prefix.'['.$key.']');}
            else {$this->structure[$key]->setName($key);}

            if(isset($this->data[$key]) && !is_null($this->data[$key])){
                $this->structure[$key]->setValue($this->data[$key]);
            }
            $this->params['content'].=$this->structure[$key]->render();
        }
        return $tpl->render('frame', $this->params);
    }
}