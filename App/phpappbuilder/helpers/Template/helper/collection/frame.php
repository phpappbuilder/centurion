<?php
/**
 * $content = ''
 */
?>

<div class="box box-danger centurion-helper-collection-frame" style="border-left-style: outset; border-left-color:#000; border-right-style: outset; border-right-color:#000; border-bottom-style: outset; border-bottom-color:#000;">
    <div class="box-header with-border">
        <h3 class="box-title">#</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" onclick="CenturionCollectionHelperRemove(this)">Remove <i class="fa fa-remove"></i></button>
        </div>
    </div>
    <div class="box-body">
        <?php echo isset($content)?$content:''; ?>
    </div>
</div>
