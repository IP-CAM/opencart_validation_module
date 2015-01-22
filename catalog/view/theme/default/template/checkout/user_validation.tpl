<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title"><a href="#collapse-user-validaton" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"><?php echo $heading_title; ?> <i class="fa fa-caret-down"></i></a></h4>
    </div>
    <div id="collapse-user-validaton" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="input-group">
            <label class="col-sm-2 control-label" for="input-coupon"><?php echo $entry_imagefile; ?></label>
            <td class="text-left"><button type="button" onclick="addImage();" data-toggle="tooltip" title="<?php echo $button_image_add; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>


        <span class="input-group-btn">
        <input type="button" value="<?php echo $send_imagefile; ?>" id="button-coupon" data-loading-text="<?php echo $text_loading; ?>"  class="btn btn-primary" />
        </span>
            </div>

        </div>
    </div>

</div>
<script type="text/javascript">
    function addImage() {
       conslole.log('Image_loaded');
    }
</script>