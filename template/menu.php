<div id="ziwrap_bottom">
    <input type="checkbox" id="zimenu_bottom" name="zimenu">
    <div id="zioverlay">
        <label id="zitrigger" for="zimenu_bottom"><i class="fa-times"></i></label>
    </div>
    <div id="zicontainer">

    </div>
    <div id="zicircle">
        <?php if ($link1_enable == true) { ?>
        <a href="<?php echo $link1_url ?>" target="<?php echo $link1_type ?>"><i class="<?php echo $link1_icon ?>"></i></a>
        <?php } ?>
        <?php if ($link2_enable == true) { ?>
        <a href="<?php echo $link2_url ?>" target="<?php echo $link2_type ?>"><i class="<?php echo $link2_icon ?>"></i></a>
        <?php } ?>
        <?php if ($link3_enable == true) { ?>
        <a href="<?php echo $link3_url ?>" target="<?php echo $link3_type ?>"><i class="<?php echo $link3_icon ?>"></i></a>
        <?php } ?>
        <?php if ($link4_enable == true) { ?>
        <a href="<?php echo $link4_url ?>" target="<?php echo $link4_type ?>"><i class="<?php echo $link4_icon ?>"></i></a>
        <?php } ?>
        <?php if ($link5_enable == true) { ?>
        <a href="<?php echo $link5_url ?>" target="<?php echo $link5_type ?>"><i class="<?php echo $link5_icon ?>"></i></a>
        <?php } ?>
    </div>
    <label id="zitrigger" for="zimenu_bottom"><i class="fa-plus"></i></label>
</div>