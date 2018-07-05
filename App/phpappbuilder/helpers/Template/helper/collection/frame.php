<?php
use App\phpappbuilder\template\Tag;
/**
 * $content = ''
 */
?>

<?php
echo Tag::Get('div',['class'=>'box box-danger centurion-helper-collection-frame', 'style'=>'border-left-style: outset; border-left-color:#000; border-right-style: outset; border-right-color:#000; border-bottom-style: outset; border-bottom-color:#000;'],
    Tag::Get('div', ['class'=>'box-header with-border'],
        Tag::Get('h3', ['class'=>'box-title'],
            '#').
        Tag::Get('div', ['class'=>'box-tools pull-right'],
            Tag::Get('button',[ 'type'=>"button", 'class'=>"btn btn-box-tool", 'data-widget'=>"remove"],'Remove '.Tag::Get('i', ['class'=>'fa fa-remove'])))).
    Tag::Get('div', ['class'=>'box-body'],isset($content)?$content:''));
?>
