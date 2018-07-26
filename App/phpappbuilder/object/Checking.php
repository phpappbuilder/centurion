<?php
namespace App\phpappbuilder\object;
use Space\Get as Space;

/**
 * all_except - все кроме
 * none_but - никто кроме
 * allowed - разрешить
 * banned - забанить
 * multiple => false - только один в коллекции
 */
final class Checking
{
    public $all_except = [];
    public $none_but = [];
    public $none_but_null = false;
    public $allowed = [];
    public $banned = [];
    public $multiple = true;

    protected function setCheck($name, $value){
        if (is_array($value)){
            foreach($value as $class){
                if (!in_array($class, $this->{$name})){
                    $this->{$name}[] = $class;
                }
            }
        } else {
            if (!in_array($value, $this->{$name})){
                $this->{$name}[] = $value;
            }
        }
    }

    protected function getParent($class){
        $result = [];
        $collection = Space::Collection('phpappbuilder/object/checking_parent');
        if ($collection != null && is_array($collection) && count($collection)>0){
            foreach ($collection as $value){
                if ($value['object']==$class){
                    if (isset($value['all_except'])){$this->setCheck('all_except',$value['all_except']);}
                    if (isset($value['none_but'])){if($value['none_but']!=null){$this->setCheck('none_but',$value['none_but']);}else{$this->none_but_null=true;}}
                    if (isset($value['allowed'])){$this->setCheck('allowed',$value['allowed']);}
                    if (isset($value['banned'])){$this->setCheck('banned',$value['banned']);}
                    if (isset($value['multiple']) && !$value['multiple']){$this->multiple=false;}
                }
            }
        }
    }

    protected function getChild($class){
        $result = [];
        $collection = Space::Collection('phpappbuilder/object/checking_child');
        if ($collection != null && is_array($collection) && count($collection)>0){
            foreach ($collection as $value){
                if ($value['object']==$class){
                    if (isset($value['all_except'])){$this->setCheck('all_except',$value['all_except']);}
                    if (isset($value['none_but'])){if($value['none_but']!=null){$this->setCheck('none_but',$value['none_but']);}else{$this->none_but_null=true;}}
                    if (isset($value['allowed'])){$this->setCheck('allowed',$value['allowed']);}
                    if (isset($value['banned'])){$this->setCheck('banned',$value['banned']);}
                }
            }
        }
    }

    protected function validCheck(){
        if( count($this->all_except)>0 && (count($this->none_but)>0 or $this->none_but_null) ){
            throw new \Exception("The check is only a 'all_except' or 'none_but' can be used");
        }
        if( count(array_intersect($this->allowed, $this->banned))>0 ){
            throw new \Exception("Values in an 'allowed' and 'banned' can not intersect");
        }
    }

    protected function finalCheck(){
        $this->validCheck();
        $status = 'ALL_';
        if (count($this->all_except)>0){
            $status = 'ALL_';
            return ['type'=>$status, 'banned'=>array_unique(array_merge($this->all_except , $banned))];
        } else {
            if (count($this->none_but)>0){
                $status = 'NONE_';
                return ['type'=>$status, 'allowed'=>array_unique(array_merge($this->none_but , $this->allowed))];
            } else {
                if ($this->none_but_null){
                    $status = 'NONE_';
                    return ['type'=>$status, 'allowed'=>$this->allowed];
                }
                return ['type'=>$status, 'banned'=>$this->banned];
            }
        }
    }

    public function parent($object_class , $check_class){
        $this->getParent();
    }

    public function child($object_class , $check_class){

    }

}