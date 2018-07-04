<?php
namespace App\phpappbuilder\helpers\Helpers;

use App\phpappbuilder\helpers\HelperInterface;
use App\phpappbuilder\template\Template as Templater;
use App\phpappbuilder\helpers\Template;

class Collection implements HelperInterface
{
    public $name = '';
    public $params = [];
    public $data = [];
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

    public function setData($value)
    {
        $this->data = $value;
        return $this;
    }

    public function setHelper($name, $object){
        $this->object[$name]=$object;
        return $this;
    }

    public function render(): string{
        $tpl = new Templater(Template::class);
        $count=count($this->data);
        $last_id=$count--;
        $content = '';
        for ($i=0;$i<$count;$i++) {
            $frame_item = '';
            foreach ($this->object as $key => $value) {
                $this->object[$key]->setName($this->name . '[' . $i . ']' . '[' . $key . ']');
                $this->object[$key]->setData($this->data[$i][$key]);
                $frame_item .= $this->object[$key]->render();
            }
            $content.= $tpl->render('helper/collection/frame', ['content' => $frame_item]);
        }

        $frame_item = '';
        foreach ($this->object as $key => $value) {
            $this->object[$key]->setName($this->name . '[' . '<%=id%>' . ']' . '[' . $key . ']');
            $frame_item .= $this->object[$key]->render();
        }
        $template= $tpl->render('helper/collection/frame', ['content' => $frame_item]);

        return $tpl->render('helper/collection', [
            'last_id'=>$last_id,
            'templater'=>$template,
            'content'=>$content,
            'name'=>isset($this->params['name'])?$this->params['name']:null,
            'description'=>isset($this->params['description'])?$this->params['description']:null
        ]);
    }
}