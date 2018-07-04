<?php
/**
 * Created by PhpStorm.
 * User: server
 * Date: 03.07.18
 * Time: 16:07
 */

namespace App\phpappbuilder\template;


class Tag
{
    static function Get($tag, $params=[], $content='', $close=true){
        $str = '';
        foreach ($params as $key => $value){if(!isset($value) or $value==''){$str.=' '.$key;}else{$str.=' '.$key.'="'.$value.'"';}}
        if ($close){$fin = "\n".$content."\n</".$tag.">";$c='';}else{$fin="\n";$c=' /';}
        return "<".$tag.$str.$c.">".$fin;
    }
}