<?php
use App\phpappbuilder\template\Tag;
/**
 * $name
 * $last_id
 * $templater = ''
 * $content = ''
 * $description = ''
 */
?>

<?php
echo Tag::Get('div',['class'=>'box-danger centurion-helper-collection' , 'last_id'=>$last_id],
    Tag::Get('div', ['class'=>'box-header with-border'],
        Tag::Get('h3', ['class'=>'box-title'],
            isset($name)?$name:'').
        Tag::Get('div', ['class'=>'box-tools pull-right'],
            Tag::Get('button',[ 'type'=>"button", 'class'=>"btn btn-box-tool", 'data-widget'=>"remove"],'Add '.Tag::Get('i', ['class'=>'fa fa-remove'])))).
    Tag::Get('div', ['class'=>'box-body'],isset($content)?$content:'').
    isset($templater)?Tag::Get('script', ['type'=>'text/html', 'class'=>"helper-collection-template"],$templater):''.
    isset($description)?Tag::Get('div', ['class'=>'box-footer'], $description):'');
?>
