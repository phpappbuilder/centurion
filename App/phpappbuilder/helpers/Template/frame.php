<?php
use App\phpappbuilder\template\Tag;
/**
 * $title
 * $collapse = true|false
 * $close = true|false
 * $content = ''
 * $description = ''
 * $form = []
 */
?>

<?php
bdump($collapse);
    echo Tag::Get('div',['class'=>'box box-default'],
        Tag::Get('div', ['class'=>'box-header with-border'],
            Tag::Get('h3', ['class'=>'box-title'],
                isset($title)?$title:'').
                    Tag::Get('div', ['class'=>'box-tools pull-right'],
                        $collapse?Tag::Get('button',[ 'type'=>"button", 'class'=>"btn btn-box-tool", 'data-widget'=>"collapse"],Tag::Get('i', ['class'=>'fa fa-minus'])):''.
                                $close?Tag::Get('button',[ 'type'=>"button", 'class'=>"btn btn-box-tool", 'data-widget'=>"remove"],Tag::Get('i', ['class'=>'fa fa-remove'])):'')).
                Tag::Get('div', ['class'=>'box-body'],(isset($form) && is_array($form))?Tag::Get('form', $form, $content):'').
                Tag::Get('div', ['class'=>'box-footer'], isset($description)?$description:''));
?>
