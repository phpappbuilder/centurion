<?php
use App\phpappbuilder\template\Tag;
/**
 * $title
 * $submit = true|false
 * $content = ''
 * $description = ''
 * $form = []
 */
?>

<?php
    echo (isset($form) && is_array($form))?Tag::Get('form', $form,
    Tag::Get('div',['class'=>'box box-default'],
        Tag::Get('div', ['class'=>'box-header with-border'],
            Tag::Get('h3', ['class'=>'box-title'],
                isset($title)?$title:'').
                    Tag::Get('div', ['class'=>'box-tools pull-right'],

                                $submit?Tag::Get('button',[ 'type'=>"submit", 'class'=>"btn btn-sm"],Tag::Get('i', ['class'=>'fa fa-save'])):'')).
                Tag::Get('div', ['class'=>'box-body'], $content).
                Tag::Get('div', ['class'=>'box-footer'], isset($description)?$description:''))):'';
?>
