<?php
use App\phpappbuilder\template\Tag;
/**
 * $name
 * $content = ''
 * $description = ''
 */
?>

<?php
echo Tag::Get('div',['class'=>'box-danger'],
    Tag::Get('div', ['class'=>'box-header with-border'],
        Tag::Get('h3', ['class'=>'box-title'],
            isset($name)?$name:'').
        Tag::Get('div', ['class'=>'box-tools pull-right'],
            Tag::Get('button',[ 'type'=>"button", 'class'=>"btn btn-box-tool", 'data-widget'=>"remove"],'Add '.Tag::Get('i', ['class'=>'fa fa-remove'])))).
    Tag::Get('div', ['class'=>'box-body'],isset($content)?$content:'').
    isset($description)?Tag::Get('div', ['class'=>'box-footer'], $description):'');
?>
