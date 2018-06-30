<?php

namespace App\phpappbuilder\template;


class Template {

    private $class;

    public function __construct($class) {
        $this->class = new $class();
    }

    public function _exist(){
        get_parent_class($this);//Нужно вникнуть!!!

    }

    /* Вывод tpl-файла, в который подставляются все данные для вывода */
    public function render($template , $args = []) {
        $template = $this->dir_tmpl.$template.".php";
        ob_start();
        extract($args);
        include ($template);
        return ob_get_clean();
    }
}