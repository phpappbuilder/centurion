<?php
namespace App\phpappbuilder\helpers\Helpers;

use App\phpappbuilder\helpers\HelperInterface;
use App\phpappbuilder\template\Template as Templater;
use App\phpappbuilder\helpers\Template;

class Text implements HelperInterface
{
    public $name = '';
    public $params = [];
    public $data = '';

    public function __construct($params){
        $this->params=$params;
        return $this;
    }

    public function setName($name)
    {
        $this->name=$name;
        return $this;
    }

    public function setData($value)
    {
        $this->data = $value;
        return $this;
    }

    public function render(): string{
        $tpl = new Templater(Template::class);
        return $tpl->render('helper/text', [
            'name'=>isset($this->params['name'])?$this->params['name']:null,
            'input_name'=>$this->name,
            'placeholder'=>isset($this->params['placeholder'])?$this->params['placeholder']:null,
            'data'=>isset($this->data)?$this->data:null
            ]);
    }
}