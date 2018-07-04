<?php
namespace App\phpappbuilder\helpers;

use App\phpappbuilder\template\Template as Templater;
use App\phpappbuilder\template\Template;


class Form
{
    public $params=[];
    public $prefix='';
    protected $structure=[];
    protected $data=[];

    public function __construct($params){
        $this->params=$params;
    }

    public function setPrefix(string $prefix){
        $this->prefix=$prefix;
    }

    public function setHelper($name , $object){
        $this->structure[$name]=$object;
    }

    public function setData(array $data){
        $this->data = $data;
    }

    public function render(){
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
/*
name
prefix[name]
*/