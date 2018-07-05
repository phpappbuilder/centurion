<?php
use App\phpappbuilder\template\Tag;
/**
 * $name
 * $last_id
 * $JsTemplater = ''
 * $content = ''
 * $description = ''
 */
?>

<?php
echo Tag::Get('div',['class'=>'box box-success centurion-helper-collection', 'style'=>'border-left-style: dotted; border-left-color:#000; border-right-style: dotted; border-right-color:#000; border-bottom-style: dotted; border-bottom-color:#000;', 'last_id'=>$last_id],
    Tag::Get('div', ['class'=>'box-header with-border'],
        Tag::Get('h3', ['class'=>'box-title'], $name).
        Tag::Get('div', ['class'=>'box-tools pull-right'],
            Tag::Get('button',[ 'type'=>"button", 'class'=>"btn btn-box-tool centurion-helper-add-collection-item", 'onclick'=>'CenturionCollectionHelperAdd(this)'],'Add '.Tag::Get('i', ['class'=>'fa fa-plus-circle'])))).
    Tag::Get('div', ['class'=>'box-body'],$content).
    Tag::Get('script', ['type'=>'text/html', 'class'=>"helper-collection-template"],$JsTemplater).
    Tag::Get('div', ['class'=>'box-footer'], $description));
?>
