<?php
use App\phpappbuilder\template\Tag;
/**
 * $name
 * $input_name
 * $placeholder = ''
 */
?>

<?php
echo Tag::Get('div', ['class'=>'form-group'],
        Tag::Get('label', [], $name).
                Tag::Get('input', ['name'=>$input_name, 'type'=>'text', 'class'=>'form-control', 'placeholder'=>isset($placeholder)?$placeholder:'' , 'value'=>$data],'',false)
    );
?>
