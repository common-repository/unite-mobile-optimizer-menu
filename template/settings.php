<?php
$umom_settings = get_option("umom_opt");

if ($umom_settings == false) {
    $umom_settings = array(
        "background_color" => "#333333",
        "border_color" => "#ffffff",
        "icon_color" => "#ffffff",
        "touch_icon_color" => "#E52B50",
        "touch_bg_color" => "#000000",
        "mediaqueries" => "980",
    );
    update_option("umom_opt", $umom_settings);
    extract($umom_settings);
} else {
    extract($umom_settings);
}
?>
<div class="wrap">
    <h2 id="plugin-title">
        <div id="icon-tools" class="icon32"><br></div>
        Unite Mobile Optimizer Menu Settings
    </h2> 
    <br>
    <div style="clear: both;"></div>
    <div id="wrapper">
        <form action="" method="post" id="wptb">
            <input type="hidden" name="action" value="umom_save_settings">
            <div class="inside">
                <div>
                   <script type="text/javascript">
                        jQuery(document).ready(function() {
                            jQuery("#bg_colorbox").miniColors({
                                change: function(hex, rgb) {
                                    jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                                }
                            }); 
                            jQuery("#border_colorbox").miniColors({
                                change: function(hex, rgb) {
                                    jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                                }
                            });
                            jQuery("#icon_colorbox").miniColors({
                                change: function(hex, rgb) {
                                    jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                                }
                            });
                            jQuery("#touch_icon_colorbox").miniColors({
                                change: function(hex, rgb) {
                                    jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                                }
                            });
                            jQuery("#touch_bg_colorbox").miniColors({
                                change: function(hex, rgb) {
                                    jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                                }
                            });
                        }); 
                    </script>
                    <div>
                        <div>
                            <table cellpadding="10" cellspacing="0" border="0">
                                <tr>
                                    <td>
                                        <h3>Link Settings</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label><strong>Link 1:</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label>Enable&nbsp;&nbsp;<input type="checkbox" name="umom__opt[link1_enable]" value="1" <?php if ($link1_enable == 1) echo 'checked="checked"'; else echo ''; ?>></label> 
                                    </td>
                                    <td>
                                        <label>URL</label>
                                        <input type="text" name="umom__opt[link1_url]" value="<?php echo $link1_url; ?>" style="width: 350px;"/>
                                    </td>
                                    <td>
                                        <label>Type</label>
                                        <select name="umom__opt[link1_type]">
                                            <option value="_self" <?php if ($link1_type == "_self") echo 'selected="selected"'; ?>>Open in current window / frame</option>
                                            <option value="_blank" <?php if ($link1_type == "_blank") echo 'selected="selected"'; ?>>Open in new window</option>
                                            <option value="_parent" <?php if ($link1_type == "_parent") echo 'selected="selected"'; ?>>Open in parent window / frame</option>
                                            <option value="_top" <?php if ($link1_type == "_top") echo 'selected="selected"'; ?>>Open in top frame (replaces all frames)</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label>Icon</label>
                                        <select name="umom__opt[link1_icon]">
                                            <option value="fa-glass" <?php if ($link1_icon == "fa-glass") echo 'selected="selected"'; ?>>Glass</option>
                                            <option value="fa-music" <?php if ($link1_icon == "fa-music") echo 'selected="selected"'; ?>>Music</option>
                                            <option value="fa-search" <?php if ($link1_icon == "fa-search") echo 'selected="selected"'; ?>>Search</option>
                                            <option value="fa-envelope" <?php if ($link1_icon == "fa-envelope") echo 'selected="selected"'; ?>>Envelope</option>
                                            <option value="fa-heart" <?php if ($link1_icon == "fa-heart") echo 'selected="selected"'; ?>>Heart</option>
                                            <option value="fa-star" <?php if ($link1_icon == "fa-star") echo 'selected="selected"'; ?>>Star</option>
                                            <option value="fa-star-o" <?php if ($link1_icon == "fa-star-o") echo 'selected="selected"'; ?>>Star o</option>
                                            <option value="fa-user" <?php if ($link1_icon == "fa-user") echo 'selected="selected"'; ?>>User</option>
                                            <option value="fa-film" <?php if ($link1_icon == "fa-film") echo 'selected="selected"'; ?>>Film</option>
                                            <option value="fa-th-large" <?php if ($link1_icon == "fa-th-large") echo 'selected="selected"'; ?>>Th large</option>
                                            <option value="fa-th" <?php if ($link1_icon == "fa-th") echo 'selected="selected"'; ?>>th</option>
                                            <option value="fa-th-list" <?php if ($link1_icon == "fa-th-list") echo 'selected="selected"'; ?>>Th list</option>
                                            <option value="fa-check" <?php if ($link1_icon == "fa-check") echo 'selected="selected"'; ?>>Check</option>
                                            <option value="fa-times" <?php if ($link1_icon == "fa-times") echo 'selected="selected"'; ?>>Times</option>
                                            <option value="fa-search-plus" <?php if ($link1_icon == "fa-search-plus") echo 'selected="selected"'; ?>>Search plus</option>
                                            <option value="fa-search-minus" <?php if ($link1_icon == "fa-search-minus") echo 'selected="selected"'; ?>>Search minus</option>
                                            <option value="fa-power-off" <?php if ($link1_icon == "fa-power-off") echo 'selected="selected"'; ?>>Power off</option>
                                            <option value="fa-signal" <?php if ($link1_icon == "fa-signal") echo 'selected="selected"'; ?>>Signal</option>
                                            <option value="fa-gear" <?php if ($link1_icon == "fa-gear") echo 'selected="selected"'; ?>>Gear</option>
                                            <option value="fa-cog" <?php if ($link1_icon == "fa-cog") echo 'selected="selected"'; ?>>Cog</option>
                                            <option value="fa-trash-o" <?php if ($link1_icon == "fa-trash-o") echo 'selected="selected"'; ?>>Trash o</option>
                                            <option value="fa-home" <?php if ($link1_icon == "fa-home") echo 'selected="selected"'; ?>>Home</option>
                                            <option value="fa-file-o" <?php if ($link1_icon == "fa-file-o") echo 'selected="selected"'; ?>>File o</option>
                                            <option value="fa-clock-o" <?php if ($link1_icon == "fa-clock-o") echo 'selected="selected"'; ?>>Clock o</option>
                                            <option value="fa-road" <?php if ($link1_icon == "fa-road") echo 'selected="selected"'; ?>>Road</option>
                                            <option value="fa-download" <?php if ($link1_icon == "fa-download") echo 'selected="selected"'; ?>>Download</option>
                                            <option value="fa-arrow-circle-o-down" <?php if ($link1_icon == "fa-arrow-circle-o-down") echo 'selected="selected"'; ?>>Arrow circle o down</option>
                                            <option value="fa-arrow-circle-o-up" <?php if ($link1_icon == "fa-arrow-circle-o-up") echo 'selected="selected"'; ?>>Arrow circle o up</option>
                                            <option value="fa-inbox" <?php if ($link1_icon == "fa-inbox") echo 'selected="selected"'; ?>>Inbox</option>
                                            <option value="fa-play-circle-o" <?php if ($link1_icon == "fa-play-circle-o") echo 'selected="selected"'; ?>>Play circle_o</option>
                                            <option value="fa-rotate-right" <?php if ($link1_icon == "fa-rotate-right") echo 'selected="selected"'; ?>>Rotate right</option>
                                            <option value="fa-repeat" <?php if ($link1_icon == "fa-repeat") echo 'selected="selected"'; ?>>Repeat</option>
                                            <option value="fa-refresh" <?php if ($link1_icon == "fa-refresh") echo 'selected="selected"'; ?>>Refresh</option>
                                            <option value="fa-list-alt" <?php if ($link1_icon == "fa-list-alt") echo 'selected="selected"'; ?>>List alt</option>
                                            <option value="fa-lock" <?php if ($link1_icon == "fa-lock") echo 'selected="selected"'; ?>>Lock</option>
                                            <option value="fa-flag" <?php if ($link1_icon == "fa-flag") echo 'selected="selected"'; ?>>Flag</option>
                                            <option value="fa-headphones" <?php if ($link1_icon == "fa-headphones") echo 'selected="selected"'; ?>>Headphones</option>
                                            <option value="fa-volume-off" <?php if ($link1_icon == "fa-volume-off") echo 'selected="selected"'; ?>>Volume off</option>
                                            <option value="fa-volume-down" <?php if ($link1_icon == "fa-volume-down") echo 'selected="selected"'; ?>>Volume down</option>
                                            <option value="fa-volume-up" <?php if ($link1_icon == "fa-volume-up") echo 'selected="selected"'; ?>>Volume down</option>
                                            <option value="fa-qrcode" <?php if ($link1_icon == "fa-qrcode") echo 'selected="selected"'; ?>>Qrcode</option>
                                            <option value="fa-barcode" <?php if ($link1_icon == "fa-barcode") echo 'selected="selected"'; ?>>Barcode</option>
                                            <option value="fa-tag" <?php if ($link1_icon == "fa-tag") echo 'selected="selected"'; ?>>Tag</option>
                                            <option value="fa-tags" <?php if ($link1_icon == "fa-tags") echo 'selected="selected"'; ?>>Tags</option>
                                            <option value="fa-book" <?php if ($link1_icon == "fa-book") echo 'selected="selected"'; ?>>Book</option>
                                            <option value="fa-bookmark" <?php if ($link1_icon == "fa-bookmark") echo 'selected="selected"'; ?>>Bookmark</option>
                                            <option value="fa-print" <?php if ($link1_icon == "fa-print") echo 'selected="selected"'; ?>>Print</option>
                                            <option value="fa-camera" <?php if ($link1_icon == "fa-camera") echo 'selected="selected"'; ?>>Camera</option>
                                            <option value="fa-font" <?php if ($link1_icon == "fa-font") echo 'selected="selected"'; ?>>Font</option>
                                            <option value="fa-bold" <?php if ($link1_icon == "fa-bold") echo 'selected="selected"'; ?>>Bold</option>
                                            <option value="fa-italic" <?php if ($link1_icon == "fa-italic") echo 'selected="selected"'; ?>>Italic</option>
                                            <option value="fa-text-height" <?php if ($link1_icon == "fa-text-height") echo 'selected="selected"'; ?>>Text height</option>
                                            <option value="fa-text-width" <?php if ($link1_icon == "fa-text-width") echo 'selected="selected"'; ?>>Text width</option>
                                            <option value="fa-align-left" <?php if ($link1_icon == "fa-align-left") echo 'selected="selected"'; ?>>Align left</option>
                                            <option value="fa-align-center" <?php if ($link1_icon == "fa-align-center") echo 'selected="selected"'; ?>>Align center</option>
                                            <option value="fa-align-right" <?php if ($link1_icon == "fa-align-right") echo 'selected="selected"'; ?>>Align right</option>
                                            <option value="fa-align-justify" <?php if ($link1_icon == "fa-align-justify") echo 'selected="selected"'; ?>>Align justify</option>
                                            <option value="fa-list" <?php if ($link1_icon == "fa-list") echo 'selected="selected"'; ?>>List</option>
                                            <option value="fa-dedent" <?php if ($link1_icon == "fa-dedent") echo 'selected="selected"'; ?>>Dedent</option>
                                            <option value="fa-outdent" <?php if ($link1_icon == "fa-outdent") echo 'selected="selected"'; ?>>Outdent</option>
                                            <option value="fa-indent" <?php if ($link1_icon == "fa-indent") echo 'selected="selected"'; ?>>Indent</option>
                                            <option value="fa-video-camera" <?php if ($link1_icon == "fa-video-camera") echo 'selected="selected"'; ?>>Video camera</option>
                                            <option value="fa-picture-o" <?php if ($link1_icon == "fa-picture-o") echo 'selected="selected"'; ?>>Picture o</option>
                                            <option value="fa-pencil" <?php if ($link1_icon == "fa-pencil") echo 'selected="selected"'; ?>>Pencil</option>
                                            <option value="fa-map-marker" <?php if ($link1_icon == "fa-map-marker") echo 'selected="selected"'; ?>>Map marker</option>
                                            <option value="fa-adjust" <?php if ($link1_icon == "fa-adjust") echo 'selected="selected"'; ?>>Adjust</option>
                                            <option value="fa-tint" <?php if ($link1_icon == "fa-tint") echo 'selected="selected"'; ?>>Tint</option>
                                            <option value="fa-edit" <?php if ($link1_icon == "fa-edit") echo 'selected="selected"'; ?>>Edit</option>
                                            <option value="fa-pencil-square-o" <?php if ($link1_icon == "fa-pencil-square-o") echo 'selected="selected"'; ?>>Pencil square o</option>
                                            <option value="fa-share-square-o" <?php if ($link1_icon == "fa-share-square-o") echo 'selected="selected"'; ?>>Share square o</option>
                                            <option value="fa-check-square-o" <?php if ($link1_icon == "fa-check-square-o") echo 'selected="selected"'; ?>>Check square o</option>
                                            <option value="fa-arrows" <?php if ($link1_icon == "fa-arrows") echo 'selected="selected"'; ?>>Arrows</option>
                                            <option value="fa-step-backward" <?php if ($link1_icon == "fa-step-backward") echo 'selected="selected"'; ?>>Step backward</option>
                                            <option value="fa-fast-backward" <?php if ($link1_icon == "fa-fast-backward") echo 'selected="selected"'; ?>>Fast backward</option>
                                            <option value="fa-backward" <?php if ($link1_icon == "fa-backward") echo 'selected="selected"'; ?>>Backward</option>
                                            <option value="fa-play" <?php if ($link1_icon == "fa-play") echo 'selected="selected"'; ?>>Play</option>
                                            <option value="fa-pause" <?php if ($link1_icon == "fa-pause") echo 'selected="selected"'; ?>>Pause</option>
                                            <option value="fa-stop" <?php if ($link1_icon == "fa-stop") echo 'selected="selected"'; ?>>Stop</option>
                                            <option value="fa-forward" <?php if ($link1_icon == "fa-forward") echo 'selected="selected"'; ?>>Forward</option>
                                            <option value="fa-fast-forward" <?php if ($link1_icon == "fa-fast-forward") echo 'selected="selected"'; ?>>Fast forward</option>
                                            <option value="fa-step-forward" <?php if ($link1_icon == "fa-step-forward") echo 'selected="selected"'; ?>>Step forward</option>
                                            <option value="fa-eject" <?php if ($link1_icon == "fa-eject") echo 'selected="selected"'; ?>>Eject</option>
                                            <option value="fa-chevron-left" <?php if ($link1_icon == "fa-chevron-left") echo 'selected="selected"'; ?>>Chevron left</option>
                                            <option value="fa-chevron-right" <?php if ($link1_icon == "fa-chevron-right") echo 'selected="selected"'; ?>>Chevron right</option>
                                            <option value="fa-plus-circle" <?php if ($link1_icon == "fa-plus-circle") echo 'selected="selected"'; ?>>Plus circle</option>
                                            <option value="fa-minus-circle" <?php if ($link1_icon == "fa-minus-circle") echo 'selected="selected"'; ?>>Minus circle</option>
                                            <option value="fa-times-circle" <?php if ($link1_icon == "fa-times-circle") echo 'selected="selected"'; ?>>Times circle</option>
                                            <option value="fa-check-circle" <?php if ($link1_icon == "fa-check-circle") echo 'selected="selected"'; ?>>Check circle</option>
                                            <option value="fa-question-circle" <?php if ($link1_icon == "fa-question-circle") echo 'selected="selected"'; ?>>Question circle</option>
                                            <option value="fa-info-circle" <?php if ($link1_icon == "fa-info-circle") echo 'selected="selected"'; ?>>Info circle</option>
                                            <option value="fa-crosshairs" <?php if ($link1_icon == "fa-crosshairs") echo 'selected="selected"'; ?>>Crosshairs</option>
                                            <option value="fa-times-circle-o" <?php if ($link1_icon == "fa-times-circle-o") echo 'selected="selected"'; ?>>Times circle o</option>
                                            <option value="fa-check-circle-o" <?php if ($link1_icon == "fa-check-circle-o") echo 'selected="selected"'; ?>>Check circle o</option>
                                            <option value="fa-ban" <?php if ($link1_icon == "fa-ban") echo 'selected="selected"'; ?>>Ban</option>
                                            <option value="fa-arrow-left" <?php if ($link1_icon == "fa-arrow-left") echo 'selected="selected"'; ?>>Arrow left</option>
                                            <option value="fa-arrow-right" <?php if ($link1_icon == "fa-arrow-right") echo 'selected="selected"'; ?>>Arrow right</option>
                                            <option value="fa-arrow-up" <?php if ($link1_icon == "fa-arrow-up") echo 'selected="selected"'; ?>>Arrow up</option>
                                            <option value="fa-arrow-down" <?php if ($link1_icon == "fa-arrow-down") echo 'selected="selected"'; ?>>Arrow down</option>
                                            <option value="fa-mail-forward" <?php if ($link1_icon == "fa-mail-forward") echo 'selected="selected"'; ?>>Mail forward</option>
                                            <option value="fa-share" <?php if ($link1_icon == "fa-share") echo 'selected="selected"'; ?>>Share</option>
                                            <option value="fa-expand" <?php if ($link1_icon == "fa-expand") echo 'selected="selected"'; ?>>Expand</option>
                                            <option value="fa-compress" <?php if ($link1_icon == "fa-compress") echo 'selected="selected"'; ?>>Compress</option>
                                            <option value="fa-plus" <?php if ($link1_icon == "fa-plus") echo 'selected="selected"'; ?>>Plus</option>
                                            <option value="fa-minus" <?php if ($link1_icon == "fa-minus") echo 'selected="selected"'; ?>>Minus</option>
                                            <option value="fa-asterisk" <?php if ($link1_icon == "fa-asterisk") echo 'selected="selected"'; ?>>Asterisk</option>
                                            <option value="fa-exclamation-circle" <?php if ($link1_icon == "fa-exclamation-circle") echo 'selected="selected"'; ?>>Exclamation circle</option>
                                            <option value="fa-gift" <?php if ($link1_icon == "fa-gift") echo 'selected="selected"'; ?>>Gift</option>
                                            <option value="fa-leaf" <?php if ($link1_icon == "fa-leaf") echo 'selected="selected"'; ?>>Leaf</option>
                                            <option value="fa-fire" <?php if ($link1_icon == "fa-fire") echo 'selected="selected"'; ?>>Fire</option>
                                            <option value="fa-eye" <?php if ($link1_icon == "fa-eye") echo 'selected="selected"'; ?>>Eye</option>
                                            <option value="fa-eye-slash" <?php if ($link1_icon == "fa-eye-slash") echo 'selected="selected"'; ?>>Eye slash</option>
                                            <option value="fa-warning" <?php if ($link1_icon == "fa-warning") echo 'selected="selected"'; ?>>Warning</option>
                                            <option value="fa-exclamation-triangle" <?php if ($link1_icon == "fa-exclamation-triangle") echo 'selected="selected"'; ?>>Exclamation triangle</option>
                                            <option value="fa-plane" <?php if ($link1_icon == "fa-plane") echo 'selected="selected"'; ?>>Plane</option>
                                            <option value="fa-calendar" <?php if ($link1_icon == "fa-calendar") echo 'selected="selected"'; ?>>Calendar</option>
                                            <option value="fa-random" <?php if ($link1_icon == "fa-random") echo 'selected="selected"'; ?>>Random</option>
                                            <option value="fa-comment" <?php if ($link1_icon == "fa-comment") echo 'selected="selected"'; ?>>Comment</option>
                                            <option value="fa-magnet" <?php if ($link1_icon == "fa-magnet") echo 'selected="selected"'; ?>>Magnet</option>
                                            <option value="fa-chevron-up" <?php if ($link1_icon == "fa-chevron-up") echo 'selected="selected"'; ?>>Chevron up</option>
                                            <option value="fa-chevron-down" <?php if ($link1_icon == "fa-chevron-down") echo 'selected="selected"'; ?>>Chevron down</option>
                                            <option value="fa-retweet" <?php if ($link1_icon == "fa-retweet") echo 'selected="selected"'; ?>>Retweet</option>
                                            <option value="fa-shopping-cart" <?php if ($link1_icon == "fa-shopping-cart") echo 'selected="selected"'; ?>>Shopping cart</option>
                                            <option value="fa-folder" <?php if ($link1_icon == "fa-folder") echo 'selected="selected"'; ?>>Folder</option>
                                            <option value="fa-folder-open" <?php if ($link1_icon == "fa-folder-open") echo 'selected="selected"'; ?>>Folder open</option>
                                            <option value="fa-arrows-v" <?php if ($link1_icon == "fa-arrows-v") echo 'selected="selected"'; ?>>Arrows v</option>
                                            <option value="fa-arrows-h" <?php if ($link1_icon == "fa-arrows-h") echo 'selected="selected"'; ?>>Arrows h</option>
                                            <option value="fa-bar-chart-o" <?php if ($link1_icon == "fa-bar-chart-o") echo 'selected="selected"'; ?>>Bar chart o</option>
                                            <option value="fa-twitter-square" <?php if ($link1_icon == "fa-twitter-square") echo 'selected="selected"'; ?>>Twitter square</option>
                                            <option value="fa-facebook-square" <?php if ($link1_icon == "fa-facebook-square") echo 'selected="selected"'; ?>>Facebook square</option>
                                            <option value="fa-camera-retro" <?php if ($link1_icon == "fa-camera-retro") echo 'selected="selected"'; ?>>Camera retro</option>
                                            <option value="fa-key" <?php if ($link1_icon == "fa-key") echo 'selected="selected"'; ?>>Key</option>
                                            <option value="fa-gears" <?php if ($link1_icon == "fa-gears") echo 'selected="selected"'; ?>>Gears</option>
                                            <option value="fa-cogs" <?php if ($link1_icon == "fa-cogs") echo 'selected="selected"'; ?>>Cogs</option>
                                            <option value="fa-comments" <?php if ($link1_icon == "fa-comments") echo 'selected="selected"'; ?>>Comments</option>
                                            <option value="fa-thumbs-o-up" <?php if ($link1_icon == "fa-thumbs-o-up") echo 'selected="selected"'; ?>>Thumbs o up</option>
                                            <option value="fa-thumbs-o-down" <?php if ($link1_icon == "fa-thumbs-o-down") echo 'selected="selected"'; ?>>Thumbs o down</option>
                                            <option value="fa-star-half" <?php if ($link1_icon == "fa-star-half") echo 'selected="selected"'; ?>>Star half</option>
                                            <option value="fa-heart-o" <?php if ($link1_icon == "fa-heart-o") echo 'selected="selected"'; ?>>Heart o</option>
                                            <option value="fa-sign-out" <?php if ($link1_icon == "fa-sign-out") echo 'selected="selected"'; ?>>Sign out</option>
                                            <option value="fa-linkedin-square" <?php if ($link1_icon == "fa-linkedin-square") echo 'selected="selected"'; ?>>Linkedin square</option>
                                            <option value="fa-thumb-tack" <?php if ($link1_icon == "fa-thumb-tack") echo 'selected="selected"'; ?>>Thumb tack</option>
                                            <option value="fa-external-link" <?php if ($link1_icon == "fa-external-link") echo 'selected="selected"'; ?>>External link</option>
                                            <option value="fa-sign-in" <?php if ($link1_icon == "fa-sign-in") echo 'selected="selected"'; ?>>Sign in</option>
                                            <option value="fa-trophy" <?php if ($link1_icon == "fa-trophy") echo 'selected="selected"'; ?>>Trophy</option>
                                            <option value="fa-github-square" <?php if ($link1_icon == "fa-github-square") echo 'selected="selected"'; ?>>Github square</option>
                                            <option value="fa-upload" <?php if ($link1_icon == "fa-upload") echo 'selected="selected"'; ?>>Upload</option>
                                            <option value="fa-lemon-o" <?php if ($link1_icon == "fa-lemon-o") echo 'selected="selected"'; ?>>Lemon o</option>
                                            <option value="fa-phone" <?php if ($link1_icon == "fa-phone") echo 'selected="selected"'; ?>>Phone</option>
                                            <option value="fa-square-o" <?php if ($link1_icon == "fa-square-o") echo 'selected="selected"'; ?>>Square o</option>
                                            <option value="fa-bookmark-o" <?php if ($link1_icon == "fa-bookmark-o") echo 'selected="selected"'; ?>>Bookmark o</option>
                                            <option value="fa-phone-square" <?php if ($link1_icon == "fa-phone-square") echo 'selected="selected"'; ?>>Phone square</option>
                                            <option value="fa-twitter" <?php if ($link1_icon == "fa-twitter") echo 'selected="selected"'; ?>>Twitter</option>
                                            <option value="fa-facebook" <?php if ($link1_icon == "fa-facebook") echo 'selected="selected"'; ?>>Facebook</option>
                                            <option value="fa-github" <?php if ($link1_icon == "fa-github") echo 'selected="selected"'; ?>>Github</option>
                                            <option value="fa-unlock" <?php if ($link1_icon == "fa-unlock") echo 'selected="selected"'; ?>>Unlock</option>
                                            <option value="fa-credit-card" <?php if ($link1_icon == "fa-credit-card") echo 'selected="selected"'; ?>>Credit card</option>
                                            <option value="fa-rss" <?php if ($link1_icon == "fa-rss") echo 'selected="selected"'; ?>>Rss</option>
                                            <option value="fa-hdd-o" <?php if ($link1_icon == "fa-hdd-o") echo 'selected="selected"'; ?>>Hdd o</option>
                                            <option value="fa-bullhorn" <?php if ($link1_icon == "fa-bullhorn") echo 'selected="selected"'; ?>>Bullhorn</option>
                                            <option value="fa-bell" <?php if ($link1_icon == "fa-bell") echo 'selected="selected"'; ?>>Bell</option>
                                            <option value="fa-certificate" <?php if ($link1_icon == "fa-certificate") echo 'selected="selected"'; ?>>Certificate</option>
                                            <option value="fa-hand-o-right" <?php if ($link1_icon == "fa-hand-o-right") echo 'selected="selected"'; ?>>Hand o right</option>
                                            <option value="fa-hand-o-left" <?php if ($link1_icon == "fa-hand-o-left") echo 'selected="selected"'; ?>>Hand o left</option>
                                            <option value="fa-hand-o-up" <?php if ($link1_icon == "fa-hand-o-up") echo 'selected="selected"'; ?>>Hand o up</option>
                                            <option value="fa-hand-o-down" <?php if ($link1_icon == "fa-hand-o-down") echo 'selected="selected"'; ?>>Hand o down</option>
                                            <option value="fa-arrow-circle-left" <?php if ($link1_icon == "fa-arrow-circle-left") echo 'selected="selected"'; ?>>Arrow circle left</option>
                                            <option value="fa-arrow-circle-right" <?php if ($link1_icon == "fa-arrow-circle-right") echo 'selected="selected"'; ?>>Arrow circle right</option>
                                            <option value="fa-arrow-circle-up" <?php if ($link1_icon == "fa-arrow-circle-up") echo 'selected="selected"'; ?>>Arrow circle up</option>
                                            <option value="fa-arrow-circle-down" <?php if ($link1_icon == "fa-arrow-circle-down") echo 'selected="selected"'; ?>>Arrow circle down</option>
                                            <option value="fa-globe" <?php if ($link1_icon == "fa-globe") echo 'selected="selected"'; ?>>Globe</option>
                                            <option value="fa-wrench" <?php if ($link1_icon == "fa-wrench") echo 'selected="selected"'; ?>>Wrench</option>
                                            <option value="fa-tasks" <?php if ($link1_icon == "fa-tasks") echo 'selected="selected"'; ?>>Tasks</option>
                                            <option value="fa-filter" <?php if ($link1_icon == "fa-filter") echo 'selected="selected"'; ?>>Filter</option>
                                            <option value="fa-briefcase" <?php if ($link1_icon == "fa-briefcase") echo 'selected="selected"'; ?>>Briefcase</option>
                                            <option value="fa-arrows-alt" <?php if ($link1_icon == "fa-arrows-alt") echo 'selected="selected"'; ?>>Arrows alt</option>
                                            <option value="fa-group" <?php if ($link1_icon == "fa-group") echo 'selected="selected"'; ?>>Group</option>
                                            <option value="fa-users" <?php if ($link1_icon == "fa-users") echo 'selected="selected"'; ?>>Users</option>
                                            <option value="fa-chain" <?php if ($link1_icon == "fa-chain") echo 'selected="selected"'; ?>>Chain</option>
                                            <option value="fa-link" <?php if ($link1_icon == "fa-link") echo 'selected="selected"'; ?>>Link</option>
                                            <option value="fa-cloud" <?php if ($link1_icon == "fa-cloud") echo 'selected="selected"'; ?>>Cloud</option>
                                            <option value="fa-flask" <?php if ($link1_icon == "fa-flask") echo 'selected="selected"'; ?>>Flask</option>
                                            <option value="fa-cut" <?php if ($link1_icon == "fa-cut") echo 'selected="selected"'; ?>>Cut</option>
                                            <option value="fa-scissors" <?php if ($link1_icon == "fa-scissors") echo 'selected="selected"'; ?>>Scissors</option>
                                            <option value="fa-copy" <?php if ($link1_icon == "fa-copy") echo 'selected="selected"'; ?>>Copy</option>
                                            <option value="fa-files-o" <?php if ($link1_icon == "fa-files-o") echo 'selected="selected"'; ?>>Files o</option>
                                            <option value="fa-paperclip" <?php if ($link1_icon == "fa-paperclip") echo 'selected="selected"'; ?>>Paperclip</option>
                                            <option value="fa-save" <?php if ($link1_icon == "fa-save") echo 'selected="selected"'; ?>>Save</option>
                                            <option value="fa-floppy-o" <?php if ($link1_icon == "fa-floppy-o") echo 'selected="selected"'; ?>>Floppy o</option>
                                            <option value="fa-square" <?php if ($link1_icon == "fa-square") echo 'selected="selected"'; ?>>Square</option>
                                            <option value="fa-bars" <?php if ($link1_icon == "fa-bars") echo 'selected="selected"'; ?>>Bars</option>
                                            <option value="fa-list-ul" <?php if ($link1_icon == "fa-list-ul") echo 'selected="selected"'; ?>>List ul</option>
                                            <option value="fa-list-ol" <?php if ($link1_icon == "fa-list-ol") echo 'selected="selected"'; ?>>List ol</option>
                                            <option value="fa-strikethrough" <?php if ($link1_icon == "fa-strikethrough") echo 'selected="selected"'; ?>>Strikethrough</option>
                                            <option value="fa-underline" <?php if ($link1_icon == "fa-underline") echo 'selected="selected"'; ?>>Underline</option>
                                            <option value="fa-table" <?php if ($link1_icon == "fa-table") echo 'selected="selected"'; ?>>Table</option>
                                            <option value="fa-magic" <?php if ($link1_icon == "fa-magic") echo 'selected="selected"'; ?>>Magic</option>
                                            <option value="fa-truck" <?php if ($link1_icon == "fa-truck") echo 'selected="selected"'; ?>>Truck</option>
                                            <option value="fa-pinterest" <?php if ($link1_icon == "fa-pinterest") echo 'selected="selected"'; ?>>Pinterest</option>
                                            <option value="fa-pinterest-square" <?php if ($link1_icon == "fa-pinterest-square") echo 'selected="selected"'; ?>>Pinterest square</option>
                                            <option value="fa-google-plus-square" <?php if ($link1_icon == "fa-google-plus-square") echo 'selected="selected"'; ?>>Google plus square</option>
                                            <option value="fa-google-plus" <?php if ($link1_icon == "fa-google-plus") echo 'selected="selected"'; ?>>Google plus</option>
                                            <option value="fa-money" <?php if ($link1_icon == "fa-money") echo 'selected="selected"'; ?>>Money</option>
                                            <option value="fa-caret-down" <?php if ($link1_icon == "fa-caret-down") echo 'selected="selected"'; ?>>Caret down</option>
                                            <option value="fa-caret-up" <?php if ($link1_icon == "fa-caret-up") echo 'selected="selected"'; ?>>Caret up</option>
                                            <option value="fa-caret-left" <?php if ($link1_icon == "fa-caret-left") echo 'selected="selected"'; ?>>Caret left</option>
                                            <option value="fa-caret-right" <?php if ($link1_icon == "fa-caret-right") echo 'selected="selected"'; ?>>Caret right</option>
                                            <option value="fa-columns" <?php if ($link1_icon == "fa-columns") echo 'selected="selected"'; ?>>Columns</option>
                                            <option value="fa-unsorted" <?php if ($link1_icon == "fa-unsorted") echo 'selected="selected"'; ?>>Unsorted</option>
                                            <option value="fa-sort" <?php if ($link1_icon == "fa-sort") echo 'selected="selected"'; ?>>Sort</option>
                                            <option value="fa-sort-down" <?php if ($link1_icon == "fa-sort-down") echo 'selected="selected"'; ?>>Sort down</option>
                                            <option value="fa-sort-asc" <?php if ($link1_icon == "fa-sort-asc") echo 'selected="selected"'; ?>>Sort asc</option>
                                            <option value="fa-sort-up" <?php if ($link1_icon == "fa-sort-up") echo 'selected="selected"'; ?>>Sort up</option>
                                            <option value="fa-sort-desc" <?php if ($link1_icon == "fa-sort-desc") echo 'selected="selected"'; ?>>Sort desc</option>
                                            <option value="fa-envelope" <?php if ($link1_icon == "fa-envelope") echo 'selected="selected"'; ?>>Envelope</option>
                                            <option value="fa-linkedin" <?php if ($link1_icon == "fa-linkedin") echo 'selected="selected"'; ?>>Linkedin</option>
                                            <option value="fa-rotate-left" <?php if ($link1_icon == "fa-rotate-left") echo 'selected="selected"'; ?>>Rotate left</option>
                                            <option value="fa-undo" <?php if ($link1_icon == "fa-undo") echo 'selected="selected"'; ?>>Undo</option>
                                            <option value="fa-legal" <?php if ($link1_icon == "fa-legal") echo 'selected="selected"'; ?>>Legal</option>
                                            <option value="fa-gavel" <?php if ($link1_icon == "fa-gavel") echo 'selected="selected"'; ?>>Gavel</option>
                                            <option value="fa-dashboard" <?php if ($link1_icon == "fa-dashboard") echo 'selected="selected"'; ?>>Dashboard</option>
                                            <option value="fa-tachometer" <?php if ($link1_icon == "fa-tachometer") echo 'selected="selected"'; ?>>Tachometer</option>
                                            <option value="fa-comment-o" <?php if ($link1_icon == "fa-comment-o") echo 'selected="selected"'; ?>>Comment o</option>
                                            <option value="fa-comments-o" <?php if ($link1_icon == "fa-comments-o") echo 'selected="selected"'; ?>>Comments o</option>
                                            <option value="fa-flash" <?php if ($link1_icon == "fa-flash") echo 'selected="selected"'; ?>>Flash</option>
                                            <option value="fa-bolt" <?php if ($link1_icon == "fa-bolt") echo 'selected="selected"'; ?>>Bolt</option>
                                            <option value="fa-sitemap" <?php if ($link1_icon == "fa-sitemap") echo 'selected="selected"'; ?>>Sitemap</option>
                                            <option value="fa-umbrella" <?php if ($link1_icon == "fa-umbrella") echo 'selected="selected"'; ?>>Umbrella</option>
                                            <option value="fa-paste" <?php if ($link1_icon == "fa-paste") echo 'selected="selected"'; ?>>Paste</option>
                                            <option value="fa-clipboard" <?php if ($link1_icon == "fa-clipboard") echo 'selected="selected"'; ?>>Clipboard</option>
                                            <option value="fa-lightbulb-o" <?php if ($link1_icon == "fa-lightbulb-o") echo 'selected="selected"'; ?>>Lightbulb o</option>
                                            <option value="fa-exchange" <?php if ($link1_icon == "fa-exchange") echo 'selected="selected"'; ?>>Exchange</option>
                                            <option value="fa-cloud-download" <?php if ($link1_icon == "fa-cloud-download") echo 'selected="selected"'; ?>>Cloud download</option>
                                            <option value="fa-cloud-upload" <?php if ($link1_icon == "fa-cloud-upload") echo 'selected="selected"'; ?>>Cloud upload</option>
                                            <option value="fa-user-md" <?php if ($link1_icon == "fa-user-md") echo 'selected="selected"'; ?>>User md</option>
                                            <option value="fa-stethoscope" <?php if ($link1_icon == "fa-stethoscope") echo 'selected="selected"'; ?>>Stethoscope</option>
                                            <option value="fa-suitcase" <?php if ($link1_icon == "fa-suitcase") echo 'selected="selected"'; ?>>Suitcase</option>
                                            <option value="fa-bell-o" <?php if ($link1_icon == "fa-bell-o") echo 'selected="selected"'; ?>>Bell_o</option>
                                            <option value="fa-coffee" <?php if ($link1_icon == "fa-coffee") echo 'selected="selected"'; ?>>Coffee</option>
                                            <option value="fa-cutlery" <?php if ($link1_icon == "fa-cutlery") echo 'selected="selected"'; ?>>Cutlery</option>
                                            <option value="fa-file-text-o" <?php if ($link1_icon == "fa-file-text-o") echo 'selected="selected"'; ?>>File text o</option>
                                            <option value="fa-building-o" <?php if ($link1_icon == "fa-building-o") echo 'selected="selected"'; ?>>Building o</option>
                                            <option value="fa-hospital-o" <?php if ($link1_icon == "fa-hospital-o") echo 'selected="selected"'; ?>>Hospital o</option>
                                            <option value="fa-ambulance" <?php if ($link1_icon == "fa-ambulance") echo 'selected="selected"'; ?>>Ambulance</option>
                                            <option value="fa-medkit" <?php if ($link1_icon == "fa-medkit") echo 'selected="selected"'; ?>>Medkit</option>
                                            <option value="fa-fighter-jet" <?php if ($link1_icon == "fa-fighter-jet") echo 'selected="selected"'; ?>>Fighter jet</option>
                                            <option value="fa-beer" <?php if ($link1_icon == "fa-beer") echo 'selected="selected"'; ?>>Beer</option>
                                            <option value="fa-h-square" <?php if ($link1_icon == "fa-h-square") echo 'selected="selected"'; ?>>H square</option>
                                            <option value="fa-plus-square" <?php if ($link1_icon == "fa-plus-square") echo 'selected="selected"'; ?>>Plus square</option>
                                            <option value="fa-angle-double-left" <?php if ($link1_icon == "fa-angle-double-left") echo 'selected="selected"'; ?>>Angle double left</option>
                                            <option value="fa-angle-double-right" <?php if ($link1_icon == "fa-angle-double-right") echo 'selected="selected"'; ?>>Angle double right</option>
                                            <option value="fa-angle-double-up" <?php if ($link1_icon == "fa-angle-double-up") echo 'selected="selected"'; ?>>Angle double up</option>
                                            <option value="fa-angle-double-down" <?php if ($link1_icon == "fa-angle-double-down") echo 'selected="selected"'; ?>>Angle double down</option>
                                            <option value="fa-angle-left" <?php if ($link1_icon == "fa-angle-left") echo 'selected="selected"'; ?>>Angle left</option>
                                            <option value="fa-angle-right" <?php if ($link1_icon == "fa-angle-right") echo 'selected="selected"'; ?>>Angle right</option>
                                            <option value="fa-angle-up" <?php if ($link1_icon == "fa-angle-up") echo 'selected="selected"'; ?>>Angle up</option>
                                            <option value="fa-angle-down" <?php if ($link1_icon == "fa-angle-down") echo 'selected="selected"'; ?>>Angle down</option>
                                            <option value="fa-desktop" <?php if ($link1_icon == "fa-desktop") echo 'selected="selected"'; ?>>Desktop</option>
                                            <option value="fa-laptop" <?php if ($link1_icon == "fa-laptop") echo 'selected="selected"'; ?>>Laptop</option>
                                            <option value="fa-tablet" <?php if ($link1_icon == "fa-tablet") echo 'selected="selected"'; ?>>Tablet</option>
                                            <option value="fa-mobile-phone" <?php if ($link1_icon == "fa-mobile-phone") echo 'selected="selected"'; ?>>Mobile phone</option>
                                            <option value="fa-mobile" <?php if ($link1_icon == "fa-mobile") echo 'selected="selected"'; ?>>Mobile</option>
                                            <option value="fa-circle-o" <?php if ($link1_icon == "fa-circle-o") echo 'selected="selected"'; ?>>Circle o</option>
                                            <option value="fa-quote-left" <?php if ($link1_icon == "fa-quote-left") echo 'selected="selected"'; ?>>Quote left</option>
                                            <option value="fa-quote-right" <?php if ($link1_icon == "fa-quote-right") echo 'selected="selected"'; ?>>Quote right</option>
                                            <option value="fa-spinner" <?php if ($link1_icon == "fa-spinner") echo 'selected="selected"'; ?>>Spinner</option>
                                            <option value="fa-circle" <?php if ($link1_icon == "fa-circle") echo 'selected="selected"'; ?>>Circle</option>
                                            <option value="fa-mail-reply" <?php if ($link1_icon == "fa-mail-reply") echo 'selected="selected"'; ?>>Mail reply</option>
                                            <option value="fa-reply" <?php if ($link1_icon == "fa-reply") echo 'selected="selected"'; ?>>Reply</option>
                                            <option value="fa-github-alt" <?php if ($link1_icon == "fa-github-alt") echo 'selected="selected"'; ?>>Github alt</option>
                                            <option value="fa-folder-o" <?php if ($link1_icon == "fa-folder-o") echo 'selected="selected"'; ?>>Folder o</option>
                                            <option value="fa-folder-open-o" <?php if ($link1_icon == "fa-folder-open-o") echo 'selected="selected"'; ?>>Folder open o</option>
                                            <option value="fa-smile-o" <?php if ($link1_icon == "fa-smile-o") echo 'selected="selected"'; ?>>Smile o</option>
                                            <option value="fa-frown-o" <?php if ($link1_icon == "fa-frown-o") echo 'selected="selected"'; ?>>Frown o</option>
                                            <option value="fa-meh-o" <?php if ($link1_icon == "fa-meh-o") echo 'selected="selected"'; ?>>Meh o</option>
                                            <option value="fa-gamepad" <?php if ($link1_icon == "fa-gamepad") echo 'selected="selected"'; ?>>Gamepad</option>
                                            <option value="fa-keyboard-o" <?php if ($link1_icon == "fa-keyboard-o") echo 'selected="selected"'; ?>>Keyboard o</option>
                                            <option value="fa-flag-o" <?php if ($link1_icon == "fa-flag-o") echo 'selected="selected"'; ?>>Flag o</option>
                                            <option value="fa-flag-checkered" <?php if ($link1_icon == "fa-flag-checkered") echo 'selected="selected"'; ?>>Flag checkered</option>
                                            <option value="fa-terminal" <?php if ($link1_icon == "fa-terminal") echo 'selected="selected"'; ?>>Terminal</option>
                                            <option value="fa-code" <?php if ($link1_icon == "fa-code") echo 'selected="selected"'; ?>>Code</option>
                                            <option value="fa-reply-all" <?php if ($link1_icon == "fa-reply-all") echo 'selected="selected"'; ?>>Reply all</option>
                                            <option value="fa-mail-reply-all" <?php if ($link1_icon == "fa-mail-reply-all") echo 'selected="selected"'; ?>>Mail reply all</option>
                                            <option value="fa-star-half-empty" <?php if ($link1_icon == "fa-star-half-empty") echo 'selected="selected"'; ?>>Star half empty</option>
                                            <option value="fa-star-half-full" <?php if ($link1_icon == "fa-star-half-full") echo 'selected="selected"'; ?>>Star half full</option>
                                            <option value="fa-star-half-o" <?php if ($link1_icon == "fa-star-half-o") echo 'selected="selected"'; ?>>Star half o</option>
                                            <option value="fa-location-arrow" <?php if ($link1_icon == "fa-location-arrow") echo 'selected="selected"'; ?>>Location arrow</option>
                                            <option value="fa-crop" <?php if ($link1_icon == "fa-crop") echo 'selected="selected"'; ?>>Crop</option>
                                            <option value="fa-code-fork" <?php if ($link1_icon == "fa-code-fork") echo 'selected="selected"'; ?>>Code fork</option>
                                            <option value="fa-unlink" <?php if ($link1_icon == "fa-unlink") echo 'selected="selected"'; ?>>Unlink</option>
                                            <option value="fa-chain-broken" <?php if ($link1_icon == "fa-chain-broken") echo 'selected="selected"'; ?>>Chain broken</option>
                                            <option value="fa-question" <?php if ($link1_icon == "fa-question") echo 'selected="selected"'; ?>>Question</option>
                                            <option value="fa-info" <?php if ($link1_icon == "fa-info") echo 'selected="selected"'; ?>>Info</option>
                                            <option value="fa-exclamation" <?php if ($link1_icon == "fa-exclamation") echo 'selected="selected"'; ?>>Exclamation</option>
                                            <option value="fa-superscript" <?php if ($link1_icon == "fa-superscript") echo 'selected="selected"'; ?>>Superscript</option>
                                            <option value="fa-subscript" <?php if ($link1_icon == "fa-subscript") echo 'selected="selected"'; ?>>Subscript</option>
                                            <option value="fa-eraser" <?php if ($link1_icon == "fa-eraser") echo 'selected="selected"'; ?>>Eraser</option>
                                            <option value="fa-puzzle-piece" <?php if ($link1_icon == "fa-puzzle-piece") echo 'selected="selected"'; ?>>Puzzle piece</option>
                                            <option value="fa-microphone" <?php if ($link1_icon == "fa-microphone") echo 'selected="selected"'; ?>>Microphone</option>
                                            <option value="fa-microphone-slash" <?php if ($link1_icon == "fa-microphone-slash") echo 'selected="selected"'; ?>>Microphone slash</option>
                                            <option value="fa-shield" <?php if ($link1_icon == "fa-shield") echo 'selected="selected"'; ?>>Shield</option>
                                            <option value="fa-calendar-o" <?php if ($link1_icon == "fa-calendar-o") echo 'selected="selected"'; ?>>Calendar o</option>
                                            <option value="fa-fire-extinguisher" <?php if ($link1_icon == "fa-fire-extinguisher") echo 'selected="selected"'; ?>>Fire extinguisher</option>
                                            <option value="fa-rocket" <?php if ($link1_icon == "fa-rocket") echo 'selected="selected"'; ?>>Rocket</option>
                                            <option value="fa-maxcdn" <?php if ($link1_icon == "fa-maxcdn") echo 'selected="selected"'; ?>>Maxcdn</option>
                                            <option value="fa-chevron-circle-left" <?php if ($link1_icon == "fa-chevron-circle-left") echo 'selected="selected"'; ?>>Chevron circle left</option>
                                            <option value="fa-chevron-circle-right" <?php if ($link1_icon == "fa-chevron-circle-right") echo 'selected="selected"'; ?>>Chevron circle right</option>
                                            <option value="fa-chevron-circle-up" <?php if ($link1_icon == "fa-chevron-circle-up") echo 'selected="selected"'; ?>>Chevron circle up</option>
                                            <option value="fa-chevron-circle-down" <?php if ($link1_icon == "fa-chevron-circle-down") echo 'selected="selected"'; ?>>Chevron circle down</option>
                                            <option value="fa-html5" <?php if ($link1_icon == "fa-html5") echo 'selected="selected"'; ?>>Html5</option>
                                            <option value="fa-css3" <?php if ($link1_icon == "fa-css3") echo 'selected="selected"'; ?>>Css3</option>
                                            <option value="fa-anchor" <?php if ($link1_icon == "fa-anchor") echo 'selected="selected"'; ?>>Anchor</option>
                                            <option value="fa-unlock-alt" <?php if ($link1_icon == "fa-unlock-alt") echo 'selected="selected"'; ?>>Unlock alt</option>
                                            <option value="fa-bullseye" <?php if ($link1_icon == "fa-bullseye") echo 'selected="selected"'; ?>>Bullseye</option>
                                            <option value="fa-ellipsis-h" <?php if ($link1_icon == "fa-ellipsis-h") echo 'selected="selected"'; ?>>Ellipsis h</option>
                                            <option value="fa-ellipsis-v" <?php if ($link1_icon == "fa-ellipsis-v") echo 'selected="selected"'; ?>>Ellipsis v</option>
                                            <option value="fa-rss-square" <?php if ($link1_icon == "fa-rss-square") echo 'selected="selected"'; ?>>Rss square</option>
                                            <option value="fa-play-circle" <?php if ($link1_icon == "fa-play-circle") echo 'selected="selected"'; ?>>Play circle</option>
                                            <option value="fa-ticket" <?php if ($link1_icon == "fa-ticket") echo 'selected="selected"'; ?>>Ticket</option>
                                            <option value="fa-minus-square" <?php if ($link1_icon == "fa-minus-square") echo 'selected="selected"'; ?>>Minus square</option>
                                            <option value="fa-minus-square-o" <?php if ($link1_icon == "fa-minus-square-o") echo 'selected="selected"'; ?>>Minus square_o</option>
                                            <option value="fa-level-up" <?php if ($link1_icon == "fa-level-up") echo 'selected="selected"'; ?>>Level up</option>
                                            <option value="fa-level-down" <?php if ($link1_icon == "fa-level-down") echo 'selected="selected"'; ?>>Level down</option>
                                            <option value="fa-check-square" <?php if ($link1_icon == "fa-check-square") echo 'selected="selected"'; ?>>Check square</option>
                                            <option value="fa-pencil-square" <?php if ($link1_icon == "fa-pencil-square") echo 'selected="selected"'; ?>>Pencil square</option>
                                            <option value="fa-external-link-square" <?php if ($link1_icon == "fa-external-link-square") echo 'selected="selected"'; ?>>External link square</option>
                                            <option value="fa-share-square" <?php if ($link1_icon == "fa-share-square") echo 'selected="selected"'; ?>>Share square</option>
                                            <option value="fa-compass" <?php if ($link1_icon == "fa-compass") echo 'selected="selected"'; ?>>Compass</option>
                                            <option value="fa-toggle-down" <?php if ($link1_icon == "fa-toggle-down") echo 'selected="selected"'; ?>>Toggle down</option>
                                            <option value="fa-caret-square-o-down" <?php if ($link1_icon == "fa-caret-square-o-down") echo 'selected="selected"'; ?>>Caret square o down</option>
                                            <option value="fa-toggle-up" <?php if ($link1_icon == "fa-toggle-up") echo 'selected="selected"'; ?>>Toggle up</option>
                                            <option value="fa-caret-square-o-up" <?php if ($link1_icon == "fa-caret-square-o-up") echo 'selected="selected"'; ?>>Caret square o up</option>
                                            <option value="fa-toggle-right" <?php if ($link1_icon == "fa-toggle-right") echo 'selected="selected"'; ?>>Toggle right</option>
                                            <option value="fa-caret-square-o-right" <?php if ($link1_icon == "fa-caret-square-o-right") echo 'selected="selected"'; ?>>Caret square o right</option>
                                            <option value="fa-euro" <?php if ($link1_icon == "fa-euro") echo 'selected="selected"'; ?>>Euro</option>
                                            <option value="fa-eur" <?php if ($link1_icon == "fa-eur") echo 'selected="selected"'; ?>>Eur</option>
                                            <option value="fa-gbp" <?php if ($link1_icon == "fa-gbp") echo 'selected="selected"'; ?>>Gbp</option>
                                            <option value="fa-dollar" <?php if ($link1_icon == "fa-dollar") echo 'selected="selected"'; ?>>Dollar</option>
                                            <option value="fa-usd" <?php if ($link1_icon == "fa-usd") echo 'selected="selected"'; ?>>Usd</option>
                                            <option value="fa-rupee" <?php if ($link1_icon == "fa-rupee") echo 'selected="selected"'; ?>>Rupee</option>
                                            <option value="fa-inr" <?php if ($link1_icon == "fa-inr") echo 'selected="selected"'; ?>>Inr</option>
                                            <option value="fa-cny" <?php if ($link1_icon == "fa-cny") echo 'selected="selected"'; ?>>Cny</option>
                                            <option value="fa-rmb" <?php if ($link1_icon == "fa-rmb") echo 'selected="selected"'; ?>>Rmb</option>
                                            <option value="fa-yen" <?php if ($link1_icon == "fa-yen") echo 'selected="selected"'; ?>>Yen</option>
                                            <option value="fa-jpy" <?php if ($link1_icon == "fa-jpy") echo 'selected="selected"'; ?>>Jpy</option>
                                            <option value="fa-ruble" <?php if ($link1_icon == "fa-ruble") echo 'selected="selected"'; ?>>Ruble</option>
                                            <option value="fa-rouble" <?php if ($link1_icon == "fa-rouble") echo 'selected="selected"'; ?>>Rouble</option>
                                            <option value="fa-rub" <?php if ($link1_icon == "fa-rub") echo 'selected="selected"'; ?>>Rub</option>
                                            <option value="fa-won" <?php if ($link1_icon == "fa-won") echo 'selected="selected"'; ?>>Won</option>
                                            <option value="fa-krw" <?php if ($link1_icon == "fa-krw") echo 'selected="selected"'; ?>>Krw</option>
                                            <option value="fa-bitcoin" <?php if ($link1_icon == "fa-bitcoin") echo 'selected="selected"'; ?>>Bitcoin</option>
                                            <option value="fa-btc" <?php if ($link1_icon == "fa-btc") echo 'selected="selected"'; ?>>Btc</option>
                                            <option value="fa-file" <?php if ($link1_icon == "fa-file") echo 'selected="selected"'; ?>>File</option>
                                            <option value="fa-file-text" <?php if ($link1_icon == "fa-file-text") echo 'selected="selected"'; ?>>File text</option>
                                            <option value="fa-sort-alpha-asc" <?php if ($link1_icon == "fa-sort-alpha-asc") echo 'selected="selected"'; ?>>Sort alpha asc</option>
                                            <option value="fa-sort-alpha-desc" <?php if ($link1_icon == "fa-sort-alpha-desc") echo 'selected="selected"'; ?>>Sort alpha desc</option>
                                            <option value="fa-sort-amount-asc" <?php if ($link1_icon == "fa-sort-amount-asc") echo 'selected="selected"'; ?>>Sort amount asc</option>
                                            <option value="fa-sort-amount-desc" <?php if ($link1_icon == "fa-sort-amount-desc") echo 'selected="selected"'; ?>>Sort amount desc</option>
                                            <option value="fa-sort-numeric-asc" <?php if ($link1_icon == "fa-sort-numeric-asc") echo 'selected="selected"'; ?>>Sort numeric asc</option>
                                            <option value="fa-sort-numeric-desc" <?php if ($link1_icon == "fa-sort-numeric-desc") echo 'selected="selected"'; ?>>Sort numeric desc</option>
                                            <option value="fa-thumbs-up" <?php if ($link1_icon == "fa-thumbs-up") echo 'selected="selected"'; ?>>Thumbs up</option>
                                            <option value="fa-thumbs-down" <?php if ($link1_icon == "fa-thumbs-down") echo 'selected="selected"'; ?>>Thumbs down</option>
                                            <option value="fa-youtube-square" <?php if ($link1_icon == "fa-youtube-square") echo 'selected="selected"'; ?>>Youtube square</option>
                                            <option value="fa-youtube" <?php if ($link1_icon == "fa-youtube") echo 'selected="selected"'; ?>>Youtube</option>
                                            <option value="fa-xing" <?php if ($link1_icon == "fa-xing") echo 'selected="selected"'; ?>>Xing</option>
                                            <option value="fa-xing-square" <?php if ($link1_icon == "fa-xing-square") echo 'selected="selected"'; ?>>Xing square</option>
                                            <option value="fa-youtube-play" <?php if ($link1_icon == "fa-youtube-play") echo 'selected="selected"'; ?>>Youtube play</option>
                                            <option value="fa-dropbox" <?php if ($link1_icon == "fa-dropbox") echo 'selected="selected"'; ?>>Dropbox</option>
                                            <option value="fa-stack-overflow" <?php if ($link1_icon == "fa-stack-overflow") echo 'selected="selected"'; ?>>Stack overflow</option>
                                            <option value="fa-instagram" <?php if ($link1_icon == "fa-instagram") echo 'selected="selected"'; ?>>Instagram</option>
                                            <option value="fa-flickr" <?php if ($link1_icon == "fa-flickr") echo 'selected="selected"'; ?>>Flickr</option>
                                            <option value="fa-adn" <?php if ($link1_icon == "fa-adn") echo 'selected="selected"'; ?>>Adn</option>
                                            <option value="fa-bitbucket" <?php if ($link1_icon == "fa-bitbucket") echo 'selected="selected"'; ?>>Bitbucket</option>
                                            <option value="fa-bitbucket-square" <?php if ($link1_icon == "fa-bitbucket-square") echo 'selected="selected"'; ?>>Bitbucket square</option>
                                            <option value="fa-tumblr" <?php if ($link1_icon == "fa-tumblr") echo 'selected="selected"'; ?>>Tumblr</option>
                                            <option value="fa-tumblr-square" <?php if ($link1_icon == "fa-tumblr-square") echo 'selected="selected"'; ?>>Tumblr square</option>
                                            <option value="fa-long-arrow-down" <?php if ($link1_icon == "fa-long-arrow-down") echo 'selected="selected"'; ?>>Long arrow down</option>
                                            <option value="fa-long-arrow-up" <?php if ($link1_icon == "fa-long-arrow-up") echo 'selected="selected"'; ?>>Long arrow up</option>
                                            <option value="fa-long-arrow-left" <?php if ($link1_icon == "fa-long-arrow-left") echo 'selected="selected"'; ?>>Long arrow left</option>
                                            <option value="fa-long-arrow-right" <?php if ($link1_icon == "fa-long-arrow-right") echo 'selected="selected"'; ?>>Long arrow right</option>
                                            <option value="fa-apple" <?php if ($link1_icon == "fa-apple") echo 'selected="selected"'; ?>>Apple</option>
                                            <option value="fa-windows" <?php if ($link1_icon == "fa-windows") echo 'selected="selected"'; ?>>Windows</option>
                                            <option value="fa-android" <?php if ($link1_icon == "fa-android") echo 'selected="selected"'; ?>>Android</option>
                                            <option value="fa-linux" <?php if ($link1_icon == "fa-linux") echo 'selected="selected"'; ?>>Linux</option>
                                            <option value="fa-dribbble" <?php if ($link1_icon == "fa-dribbble") echo 'selected="selected"'; ?>>Dribbble</option>
                                            <option value="fa-skype" <?php if ($link1_icon == "fa-skype") echo 'selected="selected"'; ?>>Skype</option>
                                            <option value="fa-foursquare" <?php if ($link1_icon == "fa-foursquare") echo 'selected="selected"'; ?>>Foursquare</option>
                                            <option value="fa-trello" <?php if ($link1_icon == "fa-trello") echo 'selected="selected"'; ?>>Trello</option>
                                            <option value="fa-female" <?php if ($link1_icon == "fa-female") echo 'selected="selected"'; ?>>Female</option>
                                            <option value="fa-male" <?php if ($link1_icon == "fa-male") echo 'selected="selected"'; ?>>Male</option>
                                            <option value="fa-gittip" <?php if ($link1_icon == "fa-gittip") echo 'selected="selected"'; ?>>Gittip</option>
                                            <option value="fa-sun-o" <?php if ($link1_icon == "fa-sun-o") echo 'selected="selected"'; ?>>Sun o</option>
                                            <option value="fa-moon-o" <?php if ($link1_icon == "fa-moon-o") echo 'selected="selected"'; ?>>Moon o</option>
                                            <option value="fa-archive" <?php if ($link1_icon == "fa-archive") echo 'selected="selected"'; ?>>Archive</option>
                                            <option value="fa-bug" <?php if ($link1_icon == "fa-bug") echo 'selected="selected"'; ?>>Bug</option>
                                            <option value="fa-vk" <?php if ($link1_icon == "fa-vk") echo 'selected="selected"'; ?>>Vk</option>
                                            <option value="fa-weibo" <?php if ($link1_icon == "fa-weibo") echo 'selected="selected"'; ?>>Weibo</option>
                                            <option value="fa-renren" <?php if ($link1_icon == "fa-renren") echo 'selected="selected"'; ?>>Renren</option>
                                            <option value="fa-pagelines" <?php if ($link1_icon == "fa-pagelines") echo 'selected="selected"'; ?>>Pagelines</option>
                                            <option value="fa-stack-exchange" <?php if ($link1_icon == "fa-stack-exchange") echo 'selected="selected"'; ?>>Stack exchange</option>
                                            <option value="fa-arrow-circle-o-right" <?php if ($link1_icon == "fa-arrow-circle-o-right") echo 'selected="selected"'; ?>>Arrow circle o right</option>
                                            <option value="fa-arrow-circle-o-left" <?php if ($link1_icon == "fa-arrow-circle-o-left") echo 'selected="selected"'; ?>>Arrow circle o left</option>
                                            <option value="fa-toggle-left" <?php if ($link1_icon == "fa-toggle-left") echo 'selected="selected"'; ?>>Toggle left</option>
                                            <option value="fa-caret-square-o-left" <?php if ($link1_icon == "fa-caret-square-o-left") echo 'selected="selected"'; ?>>Caret square o left</option>
                                            <option value="fa-dot-circle-o" <?php if ($link1_icon == "fa-dot-circle-o") echo 'selected="selected"'; ?>>Dot circle o</option>
                                            <option value="fa-wheelchair" <?php if ($link1_icon == "fa-wheelchair") echo 'selected="selected"'; ?>>Wheelchair</option>
                                            <option value="fa-vimeo-square" <?php if ($link1_icon == "fa-vimeo-square") echo 'selected="selected"'; ?>>Vimeo square</option>
                                            <option value="fa-turkish-lira" <?php if ($link1_icon == "fa-turkish-lira") echo 'selected="selected"'; ?>>Turkish lira</option>
                                            <option value="fa-try" <?php if ($link1_icon == "fa-try") echo 'selected="selected"'; ?>>Try</option>
                                            <option value="fa-plus-square-o" <?php if ($link1_icon == "fa-plus-square-o") echo 'selected="selected"'; ?>>Plus square o</option>
                                        </select>
                                    </td>
                                <tr>

                                <tr>
                                   <td>
                                        <label><strong>Link 2:</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label>Enable&nbsp;&nbsp;<input type="checkbox" name="umom__opt[link2_enable]" value="1" <?php if ($link2_enable == 1) echo 'checked="checked"'; else echo ''; ?>></label> 
                                    </td>
                                    <td>
                                        <label>URL</label>
                                        <input type="text" name="umom__opt[link2_url]" value="<?php echo $link2_url; ?>" style="width: 350px;"/>
                                    </td>
                                    <td>
                                        <label>Type</label>
                                        <select name="umom__opt[link2_type]">
                                            <option value="_self" <?php if ($link2_type == "_self") echo 'selected="selected"'; ?>>Open in current window / frame</option>
                                            <option value="_blank" <?php if ($link2_type == "_blank") echo 'selected="selected"'; ?>>Open in new window</option>
                                            <option value="_parent" <?php if ($link2_type == "_parent") echo 'selected="selected"'; ?>>Open in parent window / frame</option>
                                            <option value="_top" <?php if ($link2_type == "_top") echo 'selected="selected"'; ?>>Open in top frame (replaces all frames)</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label>Icon</label>
                                        <select name="umom__opt[link2_icon]">
                                            <option value="fa-glass" <?php if ($link2_icon == "fa-glass") echo 'selected="selected"'; ?>>Glass</option>
                                            <option value="fa-music" <?php if ($link2_icon == "fa-music") echo 'selected="selected"'; ?>>Music</option>
                                            <option value="fa-search" <?php if ($link2_icon == "fa-search") echo 'selected="selected"'; ?>>Search</option>
                                            <option value="fa-envelope" <?php if ($link2_icon == "fa-envelope") echo 'selected="selected"'; ?>>Envelope</option>
                                            <option value="fa-heart" <?php if ($link2_icon == "fa-heart") echo 'selected="selected"'; ?>>Heart</option>
                                            <option value="fa-star" <?php if ($link2_icon == "fa-star") echo 'selected="selected"'; ?>>Star</option>
                                            <option value="fa-star-o" <?php if ($link2_icon == "fa-star-o") echo 'selected="selected"'; ?>>Star o</option>
                                            <option value="fa-user" <?php if ($link2_icon == "fa-user") echo 'selected="selected"'; ?>>User</option>
                                            <option value="fa-film" <?php if ($link2_icon == "fa-film") echo 'selected="selected"'; ?>>Film</option>
                                            <option value="fa-th-large" <?php if ($link2_icon == "fa-th-large") echo 'selected="selected"'; ?>>Th large</option>
                                            <option value="fa-th" <?php if ($link2_icon == "fa-th") echo 'selected="selected"'; ?>>th</option>
                                            <option value="fa-th-list" <?php if ($link2_icon == "fa-th-list") echo 'selected="selected"'; ?>>Th list</option>
                                            <option value="fa-check" <?php if ($link2_icon == "fa-check") echo 'selected="selected"'; ?>>Check</option>
                                            <option value="fa-times" <?php if ($link2_icon == "fa-times") echo 'selected="selected"'; ?>>Times</option>
                                            <option value="fa-search-plus" <?php if ($link2_icon == "fa-search-plus") echo 'selected="selected"'; ?>>Search plus</option>
                                            <option value="fa-search-minus" <?php if ($link2_icon == "fa-search-minus") echo 'selected="selected"'; ?>>Search minus</option>
                                            <option value="fa-power-off" <?php if ($link2_icon == "fa-power-off") echo 'selected="selected"'; ?>>Power off</option>
                                            <option value="fa-signal" <?php if ($link2_icon == "fa-signal") echo 'selected="selected"'; ?>>Signal</option>
                                            <option value="fa-gear" <?php if ($link2_icon == "fa-gear") echo 'selected="selected"'; ?>>Gear</option>
                                            <option value="fa-cog" <?php if ($link2_icon == "fa-cog") echo 'selected="selected"'; ?>>Cog</option>
                                            <option value="fa-trash-o" <?php if ($link2_icon == "fa-trash-o") echo 'selected="selected"'; ?>>Trash o</option>
                                            <option value="fa-home" <?php if ($link2_icon == "fa-home") echo 'selected="selected"'; ?>>Home</option>
                                            <option value="fa-file-o" <?php if ($link2_icon == "fa-file-o") echo 'selected="selected"'; ?>>File o</option>
                                            <option value="fa-clock-o" <?php if ($link2_icon == "fa-clock-o") echo 'selected="selected"'; ?>>Clock o</option>
                                            <option value="fa-road" <?php if ($link2_icon == "fa-road") echo 'selected="selected"'; ?>>Road</option>
                                            <option value="fa-download" <?php if ($link2_icon == "fa-download") echo 'selected="selected"'; ?>>Download</option>
                                            <option value="fa-arrow-circle-o-down" <?php if ($link2_icon == "fa-arrow-circle-o-down") echo 'selected="selected"'; ?>>Arrow circle o down</option>
                                            <option value="fa-arrow-circle-o-up" <?php if ($link2_icon == "fa-arrow-circle-o-up") echo 'selected="selected"'; ?>>Arrow circle o up</option>
                                            <option value="fa-inbox" <?php if ($link2_icon == "fa-inbox") echo 'selected="selected"'; ?>>Inbox</option>
                                            <option value="fa-play-circle-o" <?php if ($link2_icon == "fa-play-circle-o") echo 'selected="selected"'; ?>>Play circle_o</option>
                                            <option value="fa-rotate-right" <?php if ($link2_icon == "fa-rotate-right") echo 'selected="selected"'; ?>>Rotate right</option>
                                            <option value="fa-repeat" <?php if ($link2_icon == "fa-repeat") echo 'selected="selected"'; ?>>Repeat</option>
                                            <option value="fa-refresh" <?php if ($link2_icon == "fa-refresh") echo 'selected="selected"'; ?>>Refresh</option>
                                            <option value="fa-list-alt" <?php if ($link2_icon == "fa-list-alt") echo 'selected="selected"'; ?>>List alt</option>
                                            <option value="fa-lock" <?php if ($link2_icon == "fa-lock") echo 'selected="selected"'; ?>>Lock</option>
                                            <option value="fa-flag" <?php if ($link2_icon == "fa-flag") echo 'selected="selected"'; ?>>Flag</option>
                                            <option value="fa-headphones" <?php if ($link2_icon == "fa-headphones") echo 'selected="selected"'; ?>>Headphones</option>
                                            <option value="fa-volume-off" <?php if ($link2_icon == "fa-volume-off") echo 'selected="selected"'; ?>>Volume off</option>
                                            <option value="fa-volume-down" <?php if ($link2_icon == "fa-volume-down") echo 'selected="selected"'; ?>>Volume down</option>
                                            <option value="fa-volume-up" <?php if ($link2_icon == "fa-volume-up") echo 'selected="selected"'; ?>>Volume down</option>
                                            <option value="fa-qrcode" <?php if ($link2_icon == "fa-qrcode") echo 'selected="selected"'; ?>>Qrcode</option>
                                            <option value="fa-barcode" <?php if ($link2_icon == "fa-barcode") echo 'selected="selected"'; ?>>Barcode</option>
                                            <option value="fa-tag" <?php if ($link2_icon == "fa-tag") echo 'selected="selected"'; ?>>Tag</option>
                                            <option value="fa-tags" <?php if ($link2_icon == "fa-tags") echo 'selected="selected"'; ?>>Tags</option>
                                            <option value="fa-book" <?php if ($link2_icon == "fa-book") echo 'selected="selected"'; ?>>Book</option>
                                            <option value="fa-bookmark" <?php if ($link2_icon == "fa-bookmark") echo 'selected="selected"'; ?>>Bookmark</option>
                                            <option value="fa-print" <?php if ($link2_icon == "fa-print") echo 'selected="selected"'; ?>>Print</option>
                                            <option value="fa-camera" <?php if ($link2_icon == "fa-camera") echo 'selected="selected"'; ?>>Camera</option>
                                            <option value="fa-font" <?php if ($link2_icon == "fa-font") echo 'selected="selected"'; ?>>Font</option>
                                            <option value="fa-bold" <?php if ($link2_icon == "fa-bold") echo 'selected="selected"'; ?>>Bold</option>
                                            <option value="fa-italic" <?php if ($link2_icon == "fa-italic") echo 'selected="selected"'; ?>>Italic</option>
                                            <option value="fa-text-height" <?php if ($link2_icon == "fa-text-height") echo 'selected="selected"'; ?>>Text height</option>
                                            <option value="fa-text-width" <?php if ($link2_icon == "fa-text-width") echo 'selected="selected"'; ?>>Text width</option>
                                            <option value="fa-align-left" <?php if ($link2_icon == "fa-align-left") echo 'selected="selected"'; ?>>Align left</option>
                                            <option value="fa-align-center" <?php if ($link2_icon == "fa-align-center") echo 'selected="selected"'; ?>>Align center</option>
                                            <option value="fa-align-right" <?php if ($link2_icon == "fa-align-right") echo 'selected="selected"'; ?>>Align right</option>
                                            <option value="fa-align-justify" <?php if ($link2_icon == "fa-align-justify") echo 'selected="selected"'; ?>>Align justify</option>
                                            <option value="fa-list" <?php if ($link2_icon == "fa-list") echo 'selected="selected"'; ?>>List</option>
                                            <option value="fa-dedent" <?php if ($link2_icon == "fa-dedent") echo 'selected="selected"'; ?>>Dedent</option>
                                            <option value="fa-outdent" <?php if ($link2_icon == "fa-outdent") echo 'selected="selected"'; ?>>Outdent</option>
                                            <option value="fa-indent" <?php if ($link2_icon == "fa-indent") echo 'selected="selected"'; ?>>Indent</option>
                                            <option value="fa-video-camera" <?php if ($link2_icon == "fa-video-camera") echo 'selected="selected"'; ?>>Video camera</option>
                                            <option value="fa-picture-o" <?php if ($link2_icon == "fa-picture-o") echo 'selected="selected"'; ?>>Picture o</option>
                                            <option value="fa-pencil" <?php if ($link2_icon == "fa-pencil") echo 'selected="selected"'; ?>>Pencil</option>
                                            <option value="fa-map-marker" <?php if ($link2_icon == "fa-map-marker") echo 'selected="selected"'; ?>>Map marker</option>
                                            <option value="fa-adjust" <?php if ($link2_icon == "fa-adjust") echo 'selected="selected"'; ?>>Adjust</option>
                                            <option value="fa-tint" <?php if ($link2_icon == "fa-tint") echo 'selected="selected"'; ?>>Tint</option>
                                            <option value="fa-edit" <?php if ($link2_icon == "fa-edit") echo 'selected="selected"'; ?>>Edit</option>
                                            <option value="fa-pencil-square-o" <?php if ($link2_icon == "fa-pencil-square-o") echo 'selected="selected"'; ?>>Pencil square o</option>
                                            <option value="fa-share-square-o" <?php if ($link2_icon == "fa-share-square-o") echo 'selected="selected"'; ?>>Share square o</option>
                                            <option value="fa-check-square-o" <?php if ($link2_icon == "fa-check-square-o") echo 'selected="selected"'; ?>>Check square o</option>
                                            <option value="fa-arrows" <?php if ($link2_icon == "fa-arrows") echo 'selected="selected"'; ?>>Arrows</option>
                                            <option value="fa-step-backward" <?php if ($link2_icon == "fa-step-backward") echo 'selected="selected"'; ?>>Step backward</option>
                                            <option value="fa-fast-backward" <?php if ($link2_icon == "fa-fast-backward") echo 'selected="selected"'; ?>>Fast backward</option>
                                            <option value="fa-backward" <?php if ($link2_icon == "fa-backward") echo 'selected="selected"'; ?>>Backward</option>
                                            <option value="fa-play" <?php if ($link2_icon == "fa-play") echo 'selected="selected"'; ?>>Play</option>
                                            <option value="fa-pause" <?php if ($link2_icon == "fa-pause") echo 'selected="selected"'; ?>>Pause</option>
                                            <option value="fa-stop" <?php if ($link2_icon == "fa-stop") echo 'selected="selected"'; ?>>Stop</option>
                                            <option value="fa-forward" <?php if ($link2_icon == "fa-forward") echo 'selected="selected"'; ?>>Forward</option>
                                            <option value="fa-fast-forward" <?php if ($link2_icon == "fa-fast-forward") echo 'selected="selected"'; ?>>Fast forward</option>
                                            <option value="fa-step-forward" <?php if ($link2_icon == "fa-step-forward") echo 'selected="selected"'; ?>>Step forward</option>
                                            <option value="fa-eject" <?php if ($link2_icon == "fa-eject") echo 'selected="selected"'; ?>>Eject</option>
                                            <option value="fa-chevron-left" <?php if ($link2_icon == "fa-chevron-left") echo 'selected="selected"'; ?>>Chevron left</option>
                                            <option value="fa-chevron-right" <?php if ($link2_icon == "fa-chevron-right") echo 'selected="selected"'; ?>>Chevron right</option>
                                            <option value="fa-plus-circle" <?php if ($link2_icon == "fa-plus-circle") echo 'selected="selected"'; ?>>Plus circle</option>
                                            <option value="fa-minus-circle" <?php if ($link2_icon == "fa-minus-circle") echo 'selected="selected"'; ?>>Minus circle</option>
                                            <option value="fa-times-circle" <?php if ($link2_icon == "fa-times-circle") echo 'selected="selected"'; ?>>Times circle</option>
                                            <option value="fa-check-circle" <?php if ($link2_icon == "fa-check-circle") echo 'selected="selected"'; ?>>Check circle</option>
                                            <option value="fa-question-circle" <?php if ($link2_icon == "fa-question-circle") echo 'selected="selected"'; ?>>Question circle</option>
                                            <option value="fa-info-circle" <?php if ($link2_icon == "fa-info-circle") echo 'selected="selected"'; ?>>Info circle</option>
                                            <option value="fa-crosshairs" <?php if ($link2_icon == "fa-crosshairs") echo 'selected="selected"'; ?>>Crosshairs</option>
                                            <option value="fa-times-circle-o" <?php if ($link2_icon == "fa-times-circle-o") echo 'selected="selected"'; ?>>Times circle o</option>
                                            <option value="fa-check-circle-o" <?php if ($link2_icon == "fa-check-circle-o") echo 'selected="selected"'; ?>>Check circle o</option>
                                            <option value="fa-ban" <?php if ($link2_icon == "fa-ban") echo 'selected="selected"'; ?>>Ban</option>
                                            <option value="fa-arrow-left" <?php if ($link2_icon == "fa-arrow-left") echo 'selected="selected"'; ?>>Arrow left</option>
                                            <option value="fa-arrow-right" <?php if ($link2_icon == "fa-arrow-right") echo 'selected="selected"'; ?>>Arrow right</option>
                                            <option value="fa-arrow-up" <?php if ($link2_icon == "fa-arrow-up") echo 'selected="selected"'; ?>>Arrow up</option>
                                            <option value="fa-arrow-down" <?php if ($link2_icon == "fa-arrow-down") echo 'selected="selected"'; ?>>Arrow down</option>
                                            <option value="fa-mail-forward" <?php if ($link2_icon == "fa-mail-forward") echo 'selected="selected"'; ?>>Mail forward</option>
                                            <option value="fa-share" <?php if ($link2_icon == "fa-share") echo 'selected="selected"'; ?>>Share</option>
                                            <option value="fa-expand" <?php if ($link2_icon == "fa-expand") echo 'selected="selected"'; ?>>Expand</option>
                                            <option value="fa-compress" <?php if ($link2_icon == "fa-compress") echo 'selected="selected"'; ?>>Compress</option>
                                            <option value="fa-plus" <?php if ($link2_icon == "fa-plus") echo 'selected="selected"'; ?>>Plus</option>
                                            <option value="fa-minus" <?php if ($link2_icon == "fa-minus") echo 'selected="selected"'; ?>>Minus</option>
                                            <option value="fa-asterisk" <?php if ($link2_icon == "fa-asterisk") echo 'selected="selected"'; ?>>Asterisk</option>
                                            <option value="fa-exclamation-circle" <?php if ($link2_icon == "fa-exclamation-circle") echo 'selected="selected"'; ?>>Exclamation circle</option>
                                            <option value="fa-gift" <?php if ($link2_icon == "fa-gift") echo 'selected="selected"'; ?>>Gift</option>
                                            <option value="fa-leaf" <?php if ($link2_icon == "fa-leaf") echo 'selected="selected"'; ?>>Leaf</option>
                                            <option value="fa-fire" <?php if ($link2_icon == "fa-fire") echo 'selected="selected"'; ?>>Fire</option>
                                            <option value="fa-eye" <?php if ($link2_icon == "fa-eye") echo 'selected="selected"'; ?>>Eye</option>
                                            <option value="fa-eye-slash" <?php if ($link2_icon == "fa-eye-slash") echo 'selected="selected"'; ?>>Eye slash</option>
                                            <option value="fa-warning" <?php if ($link2_icon == "fa-warning") echo 'selected="selected"'; ?>>Warning</option>
                                            <option value="fa-exclamation-triangle" <?php if ($link2_icon == "fa-exclamation-triangle") echo 'selected="selected"'; ?>>Exclamation triangle</option>
                                            <option value="fa-plane" <?php if ($link2_icon == "fa-plane") echo 'selected="selected"'; ?>>Plane</option>
                                            <option value="fa-calendar" <?php if ($link2_icon == "fa-calendar") echo 'selected="selected"'; ?>>Calendar</option>
                                            <option value="fa-random" <?php if ($link2_icon == "fa-random") echo 'selected="selected"'; ?>>Random</option>
                                            <option value="fa-comment" <?php if ($link2_icon == "fa-comment") echo 'selected="selected"'; ?>>Comment</option>
                                            <option value="fa-magnet" <?php if ($link2_icon == "fa-magnet") echo 'selected="selected"'; ?>>Magnet</option>
                                            <option value="fa-chevron-up" <?php if ($link2_icon == "fa-chevron-up") echo 'selected="selected"'; ?>>Chevron up</option>
                                            <option value="fa-chevron-down" <?php if ($link2_icon == "fa-chevron-down") echo 'selected="selected"'; ?>>Chevron down</option>
                                            <option value="fa-retweet" <?php if ($link2_icon == "fa-retweet") echo 'selected="selected"'; ?>>Retweet</option>
                                            <option value="fa-shopping-cart" <?php if ($link2_icon == "fa-shopping-cart") echo 'selected="selected"'; ?>>Shopping cart</option>
                                            <option value="fa-folder" <?php if ($link2_icon == "fa-folder") echo 'selected="selected"'; ?>>Folder</option>
                                            <option value="fa-folder-open" <?php if ($link2_icon == "fa-folder-open") echo 'selected="selected"'; ?>>Folder open</option>
                                            <option value="fa-arrows-v" <?php if ($link2_icon == "fa-arrows-v") echo 'selected="selected"'; ?>>Arrows v</option>
                                            <option value="fa-arrows-h" <?php if ($link2_icon == "fa-arrows-h") echo 'selected="selected"'; ?>>Arrows h</option>
                                            <option value="fa-bar-chart-o" <?php if ($link2_icon == "fa-bar-chart-o") echo 'selected="selected"'; ?>>Bar chart o</option>
                                            <option value="fa-twitter-square" <?php if ($link2_icon == "fa-twitter-square") echo 'selected="selected"'; ?>>Twitter square</option>
                                            <option value="fa-facebook-square" <?php if ($link2_icon == "fa-facebook-square") echo 'selected="selected"'; ?>>Facebook square</option>
                                            <option value="fa-camera-retro" <?php if ($link2_icon == "fa-camera-retro") echo 'selected="selected"'; ?>>Camera retro</option>
                                            <option value="fa-key" <?php if ($link2_icon == "fa-key") echo 'selected="selected"'; ?>>Key</option>
                                            <option value="fa-gears" <?php if ($link2_icon == "fa-gears") echo 'selected="selected"'; ?>>Gears</option>
                                            <option value="fa-cogs" <?php if ($link2_icon == "fa-cogs") echo 'selected="selected"'; ?>>Cogs</option>
                                            <option value="fa-comments" <?php if ($link2_icon == "fa-comments") echo 'selected="selected"'; ?>>Comments</option>
                                            <option value="fa-thumbs-o-up" <?php if ($link2_icon == "fa-thumbs-o-up") echo 'selected="selected"'; ?>>Thumbs o up</option>
                                            <option value="fa-thumbs-o-down" <?php if ($link2_icon == "fa-thumbs-o-down") echo 'selected="selected"'; ?>>Thumbs o down</option>
                                            <option value="fa-star-half" <?php if ($link2_icon == "fa-star-half") echo 'selected="selected"'; ?>>Star half</option>
                                            <option value="fa-heart-o" <?php if ($link2_icon == "fa-heart-o") echo 'selected="selected"'; ?>>Heart o</option>
                                            <option value="fa-sign-out" <?php if ($link2_icon == "fa-sign-out") echo 'selected="selected"'; ?>>Sign out</option>
                                            <option value="fa-linkedin-square" <?php if ($link2_icon == "fa-linkedin-square") echo 'selected="selected"'; ?>>Linkedin square</option>
                                            <option value="fa-thumb-tack" <?php if ($link2_icon == "fa-thumb-tack") echo 'selected="selected"'; ?>>Thumb tack</option>
                                            <option value="fa-external-link" <?php if ($link2_icon == "fa-external-link") echo 'selected="selected"'; ?>>External link</option>
                                            <option value="fa-sign-in" <?php if ($link2_icon == "fa-sign-in") echo 'selected="selected"'; ?>>Sign in</option>
                                            <option value="fa-trophy" <?php if ($link2_icon == "fa-trophy") echo 'selected="selected"'; ?>>Trophy</option>
                                            <option value="fa-github-square" <?php if ($link2_icon == "fa-github-square") echo 'selected="selected"'; ?>>Github square</option>
                                            <option value="fa-upload" <?php if ($link2_icon == "fa-upload") echo 'selected="selected"'; ?>>Upload</option>
                                            <option value="fa-lemon-o" <?php if ($link2_icon == "fa-lemon-o") echo 'selected="selected"'; ?>>Lemon o</option>
                                            <option value="fa-phone" <?php if ($link2_icon == "fa-phone") echo 'selected="selected"'; ?>>Phone</option>
                                            <option value="fa-square-o" <?php if ($link2_icon == "fa-square-o") echo 'selected="selected"'; ?>>Square o</option>
                                            <option value="fa-bookmark-o" <?php if ($link2_icon == "fa-bookmark-o") echo 'selected="selected"'; ?>>Bookmark o</option>
                                            <option value="fa-phone-square" <?php if ($link2_icon == "fa-phone-square") echo 'selected="selected"'; ?>>Phone square</option>
                                            <option value="fa-twitter" <?php if ($link2_icon == "fa-twitter") echo 'selected="selected"'; ?>>Twitter</option>
                                            <option value="fa-facebook" <?php if ($link2_icon == "fa-facebook") echo 'selected="selected"'; ?>>Facebook</option>
                                            <option value="fa-github" <?php if ($link2_icon == "fa-github") echo 'selected="selected"'; ?>>Github</option>
                                            <option value="fa-unlock" <?php if ($link2_icon == "fa-unlock") echo 'selected="selected"'; ?>>Unlock</option>
                                            <option value="fa-credit-card" <?php if ($link2_icon == "fa-credit-card") echo 'selected="selected"'; ?>>Credit card</option>
                                            <option value="fa-rss" <?php if ($link2_icon == "fa-rss") echo 'selected="selected"'; ?>>Rss</option>
                                            <option value="fa-hdd-o" <?php if ($link2_icon == "fa-hdd-o") echo 'selected="selected"'; ?>>Hdd o</option>
                                            <option value="fa-bullhorn" <?php if ($link2_icon == "fa-bullhorn") echo 'selected="selected"'; ?>>Bullhorn</option>
                                            <option value="fa-bell" <?php if ($link2_icon == "fa-bell") echo 'selected="selected"'; ?>>Bell</option>
                                            <option value="fa-certificate" <?php if ($link2_icon == "fa-certificate") echo 'selected="selected"'; ?>>Certificate</option>
                                            <option value="fa-hand-o-right" <?php if ($link2_icon == "fa-hand-o-right") echo 'selected="selected"'; ?>>Hand o right</option>
                                            <option value="fa-hand-o-left" <?php if ($link2_icon == "fa-hand-o-left") echo 'selected="selected"'; ?>>Hand o left</option>
                                            <option value="fa-hand-o-up" <?php if ($link2_icon == "fa-hand-o-up") echo 'selected="selected"'; ?>>Hand o up</option>
                                            <option value="fa-hand-o-down" <?php if ($link2_icon == "fa-hand-o-down") echo 'selected="selected"'; ?>>Hand o down</option>
                                            <option value="fa-arrow-circle-left" <?php if ($link2_icon == "fa-arrow-circle-left") echo 'selected="selected"'; ?>>Arrow circle left</option>
                                            <option value="fa-arrow-circle-right" <?php if ($link2_icon == "fa-arrow-circle-right") echo 'selected="selected"'; ?>>Arrow circle right</option>
                                            <option value="fa-arrow-circle-up" <?php if ($link2_icon == "fa-arrow-circle-up") echo 'selected="selected"'; ?>>Arrow circle up</option>
                                            <option value="fa-arrow-circle-down" <?php if ($link2_icon == "fa-arrow-circle-down") echo 'selected="selected"'; ?>>Arrow circle down</option>
                                            <option value="fa-globe" <?php if ($link2_icon == "fa-globe") echo 'selected="selected"'; ?>>Globe</option>
                                            <option value="fa-wrench" <?php if ($link2_icon == "fa-wrench") echo 'selected="selected"'; ?>>Wrench</option>
                                            <option value="fa-tasks" <?php if ($link2_icon == "fa-tasks") echo 'selected="selected"'; ?>>Tasks</option>
                                            <option value="fa-filter" <?php if ($link2_icon == "fa-filter") echo 'selected="selected"'; ?>>Filter</option>
                                            <option value="fa-briefcase" <?php if ($link2_icon == "fa-briefcase") echo 'selected="selected"'; ?>>Briefcase</option>
                                            <option value="fa-arrows-alt" <?php if ($link2_icon == "fa-arrows-alt") echo 'selected="selected"'; ?>>Arrows alt</option>
                                            <option value="fa-group" <?php if ($link2_icon == "fa-group") echo 'selected="selected"'; ?>>Group</option>
                                            <option value="fa-users" <?php if ($link2_icon == "fa-users") echo 'selected="selected"'; ?>>Users</option>
                                            <option value="fa-chain" <?php if ($link2_icon == "fa-chain") echo 'selected="selected"'; ?>>Chain</option>
                                            <option value="fa-link" <?php if ($link2_icon == "fa-link") echo 'selected="selected"'; ?>>Link</option>
                                            <option value="fa-cloud" <?php if ($link2_icon == "fa-cloud") echo 'selected="selected"'; ?>>Cloud</option>
                                            <option value="fa-flask" <?php if ($link2_icon == "fa-flask") echo 'selected="selected"'; ?>>Flask</option>
                                            <option value="fa-cut" <?php if ($link2_icon == "fa-cut") echo 'selected="selected"'; ?>>Cut</option>
                                            <option value="fa-scissors" <?php if ($link2_icon == "fa-scissors") echo 'selected="selected"'; ?>>Scissors</option>
                                            <option value="fa-copy" <?php if ($link2_icon == "fa-copy") echo 'selected="selected"'; ?>>Copy</option>
                                            <option value="fa-files-o" <?php if ($link2_icon == "fa-files-o") echo 'selected="selected"'; ?>>Files o</option>
                                            <option value="fa-paperclip" <?php if ($link2_icon == "fa-paperclip") echo 'selected="selected"'; ?>>Paperclip</option>
                                            <option value="fa-save" <?php if ($link2_icon == "fa-save") echo 'selected="selected"'; ?>>Save</option>
                                            <option value="fa-floppy-o" <?php if ($link2_icon == "fa-floppy-o") echo 'selected="selected"'; ?>>Floppy o</option>
                                            <option value="fa-square" <?php if ($link2_icon == "fa-square") echo 'selected="selected"'; ?>>Square</option>
                                            <option value="fa-bars" <?php if ($link2_icon == "fa-bars") echo 'selected="selected"'; ?>>Bars</option>
                                            <option value="fa-list-ul" <?php if ($link2_icon == "fa-list-ul") echo 'selected="selected"'; ?>>List ul</option>
                                            <option value="fa-list-ol" <?php if ($link2_icon == "fa-list-ol") echo 'selected="selected"'; ?>>List ol</option>
                                            <option value="fa-strikethrough" <?php if ($link2_icon == "fa-strikethrough") echo 'selected="selected"'; ?>>Strikethrough</option>
                                            <option value="fa-underline" <?php if ($link2_icon == "fa-underline") echo 'selected="selected"'; ?>>Underline</option>
                                            <option value="fa-table" <?php if ($link2_icon == "fa-table") echo 'selected="selected"'; ?>>Table</option>
                                            <option value="fa-magic" <?php if ($link2_icon == "fa-magic") echo 'selected="selected"'; ?>>Magic</option>
                                            <option value="fa-truck" <?php if ($link2_icon == "fa-truck") echo 'selected="selected"'; ?>>Truck</option>
                                            <option value="fa-pinterest" <?php if ($link2_icon == "fa-pinterest") echo 'selected="selected"'; ?>>Pinterest</option>
                                            <option value="fa-pinterest-square" <?php if ($link2_icon == "fa-pinterest-square") echo 'selected="selected"'; ?>>Pinterest square</option>
                                            <option value="fa-google-plus-square" <?php if ($link2_icon == "fa-google-plus-square") echo 'selected="selected"'; ?>>Google plus square</option>
                                            <option value="fa-google-plus" <?php if ($link2_icon == "fa-google-plus") echo 'selected="selected"'; ?>>Google plus</option>
                                            <option value="fa-money" <?php if ($link2_icon == "fa-money") echo 'selected="selected"'; ?>>Money</option>
                                            <option value="fa-caret-down" <?php if ($link2_icon == "fa-caret-down") echo 'selected="selected"'; ?>>Caret down</option>
                                            <option value="fa-caret-up" <?php if ($link2_icon == "fa-caret-up") echo 'selected="selected"'; ?>>Caret up</option>
                                            <option value="fa-caret-left" <?php if ($link2_icon == "fa-caret-left") echo 'selected="selected"'; ?>>Caret left</option>
                                            <option value="fa-caret-right" <?php if ($link2_icon == "fa-caret-right") echo 'selected="selected"'; ?>>Caret right</option>
                                            <option value="fa-columns" <?php if ($link2_icon == "fa-columns") echo 'selected="selected"'; ?>>Columns</option>
                                            <option value="fa-unsorted" <?php if ($link2_icon == "fa-unsorted") echo 'selected="selected"'; ?>>Unsorted</option>
                                            <option value="fa-sort" <?php if ($link2_icon == "fa-sort") echo 'selected="selected"'; ?>>Sort</option>
                                            <option value="fa-sort-down" <?php if ($link2_icon == "fa-sort-down") echo 'selected="selected"'; ?>>Sort down</option>
                                            <option value="fa-sort-asc" <?php if ($link2_icon == "fa-sort-asc") echo 'selected="selected"'; ?>>Sort asc</option>
                                            <option value="fa-sort-up" <?php if ($link2_icon == "fa-sort-up") echo 'selected="selected"'; ?>>Sort up</option>
                                            <option value="fa-sort-desc" <?php if ($link2_icon == "fa-sort-desc") echo 'selected="selected"'; ?>>Sort desc</option>
                                            <option value="fa-envelope" <?php if ($link2_icon == "fa-envelope") echo 'selected="selected"'; ?>>Envelope</option>
                                            <option value="fa-linkedin" <?php if ($link2_icon == "fa-linkedin") echo 'selected="selected"'; ?>>Linkedin</option>
                                            <option value="fa-rotate-left" <?php if ($link2_icon == "fa-rotate-left") echo 'selected="selected"'; ?>>Rotate left</option>
                                            <option value="fa-undo" <?php if ($link2_icon == "fa-undo") echo 'selected="selected"'; ?>>Undo</option>
                                            <option value="fa-legal" <?php if ($link2_icon == "fa-legal") echo 'selected="selected"'; ?>>Legal</option>
                                            <option value="fa-gavel" <?php if ($link2_icon == "fa-gavel") echo 'selected="selected"'; ?>>Gavel</option>
                                            <option value="fa-dashboard" <?php if ($link2_icon == "fa-dashboard") echo 'selected="selected"'; ?>>Dashboard</option>
                                            <option value="fa-tachometer" <?php if ($link2_icon == "fa-tachometer") echo 'selected="selected"'; ?>>Tachometer</option>
                                            <option value="fa-comment-o" <?php if ($link2_icon == "fa-comment-o") echo 'selected="selected"'; ?>>Comment o</option>
                                            <option value="fa-comments-o" <?php if ($link2_icon == "fa-comments-o") echo 'selected="selected"'; ?>>Comments o</option>
                                            <option value="fa-flash" <?php if ($link2_icon == "fa-flash") echo 'selected="selected"'; ?>>Flash</option>
                                            <option value="fa-bolt" <?php if ($link2_icon == "fa-bolt") echo 'selected="selected"'; ?>>Bolt</option>
                                            <option value="fa-sitemap" <?php if ($link2_icon == "fa-sitemap") echo 'selected="selected"'; ?>>Sitemap</option>
                                            <option value="fa-umbrella" <?php if ($link2_icon == "fa-umbrella") echo 'selected="selected"'; ?>>Umbrella</option>
                                            <option value="fa-paste" <?php if ($link2_icon == "fa-paste") echo 'selected="selected"'; ?>>Paste</option>
                                            <option value="fa-clipboard" <?php if ($link2_icon == "fa-clipboard") echo 'selected="selected"'; ?>>Clipboard</option>
                                            <option value="fa-lightbulb-o" <?php if ($link2_icon == "fa-lightbulb-o") echo 'selected="selected"'; ?>>Lightbulb o</option>
                                            <option value="fa-exchange" <?php if ($link2_icon == "fa-exchange") echo 'selected="selected"'; ?>>Exchange</option>
                                            <option value="fa-cloud-download" <?php if ($link2_icon == "fa-cloud-download") echo 'selected="selected"'; ?>>Cloud download</option>
                                            <option value="fa-cloud-upload" <?php if ($link2_icon == "fa-cloud-upload") echo 'selected="selected"'; ?>>Cloud upload</option>
                                            <option value="fa-user-md" <?php if ($link2_icon == "fa-user-md") echo 'selected="selected"'; ?>>User md</option>
                                            <option value="fa-stethoscope" <?php if ($link2_icon == "fa-stethoscope") echo 'selected="selected"'; ?>>Stethoscope</option>
                                            <option value="fa-suitcase" <?php if ($link2_icon == "fa-suitcase") echo 'selected="selected"'; ?>>Suitcase</option>
                                            <option value="fa-bell-o" <?php if ($link2_icon == "fa-bell-o") echo 'selected="selected"'; ?>>Bell_o</option>
                                            <option value="fa-coffee" <?php if ($link2_icon == "fa-coffee") echo 'selected="selected"'; ?>>Coffee</option>
                                            <option value="fa-cutlery" <?php if ($link2_icon == "fa-cutlery") echo 'selected="selected"'; ?>>Cutlery</option>
                                            <option value="fa-file-text-o" <?php if ($link2_icon == "fa-file-text-o") echo 'selected="selected"'; ?>>File text o</option>
                                            <option value="fa-building-o" <?php if ($link2_icon == "fa-building-o") echo 'selected="selected"'; ?>>Building o</option>
                                            <option value="fa-hospital-o" <?php if ($link2_icon == "fa-hospital-o") echo 'selected="selected"'; ?>>Hospital o</option>
                                            <option value="fa-ambulance" <?php if ($link2_icon == "fa-ambulance") echo 'selected="selected"'; ?>>Ambulance</option>
                                            <option value="fa-medkit" <?php if ($link2_icon == "fa-medkit") echo 'selected="selected"'; ?>>Medkit</option>
                                            <option value="fa-fighter-jet" <?php if ($link2_icon == "fa-fighter-jet") echo 'selected="selected"'; ?>>Fighter jet</option>
                                            <option value="fa-beer" <?php if ($link2_icon == "fa-beer") echo 'selected="selected"'; ?>>Beer</option>
                                            <option value="fa-h-square" <?php if ($link2_icon == "fa-h-square") echo 'selected="selected"'; ?>>H square</option>
                                            <option value="fa-plus-square" <?php if ($link2_icon == "fa-plus-square") echo 'selected="selected"'; ?>>Plus square</option>
                                            <option value="fa-angle-double-left" <?php if ($link2_icon == "fa-angle-double-left") echo 'selected="selected"'; ?>>Angle double left</option>
                                            <option value="fa-angle-double-right" <?php if ($link2_icon == "fa-angle-double-right") echo 'selected="selected"'; ?>>Angle double right</option>
                                            <option value="fa-angle-double-up" <?php if ($link2_icon == "fa-angle-double-up") echo 'selected="selected"'; ?>>Angle double up</option>
                                            <option value="fa-angle-double-down" <?php if ($link2_icon == "fa-angle-double-down") echo 'selected="selected"'; ?>>Angle double down</option>
                                            <option value="fa-angle-left" <?php if ($link2_icon == "fa-angle-left") echo 'selected="selected"'; ?>>Angle left</option>
                                            <option value="fa-angle-right" <?php if ($link2_icon == "fa-angle-right") echo 'selected="selected"'; ?>>Angle right</option>
                                            <option value="fa-angle-up" <?php if ($link2_icon == "fa-angle-up") echo 'selected="selected"'; ?>>Angle up</option>
                                            <option value="fa-angle-down" <?php if ($link2_icon == "fa-angle-down") echo 'selected="selected"'; ?>>Angle down</option>
                                            <option value="fa-desktop" <?php if ($link2_icon == "fa-desktop") echo 'selected="selected"'; ?>>Desktop</option>
                                            <option value="fa-laptop" <?php if ($link2_icon == "fa-laptop") echo 'selected="selected"'; ?>>Laptop</option>
                                            <option value="fa-tablet" <?php if ($link2_icon == "fa-tablet") echo 'selected="selected"'; ?>>Tablet</option>
                                            <option value="fa-mobile-phone" <?php if ($link2_icon == "fa-mobile-phone") echo 'selected="selected"'; ?>>Mobile phone</option>
                                            <option value="fa-mobile" <?php if ($link2_icon == "fa-mobile") echo 'selected="selected"'; ?>>Mobile</option>
                                            <option value="fa-circle-o" <?php if ($link2_icon == "fa-circle-o") echo 'selected="selected"'; ?>>Circle o</option>
                                            <option value="fa-quote-left" <?php if ($link2_icon == "fa-quote-left") echo 'selected="selected"'; ?>>Quote left</option>
                                            <option value="fa-quote-right" <?php if ($link2_icon == "fa-quote-right") echo 'selected="selected"'; ?>>Quote right</option>
                                            <option value="fa-spinner" <?php if ($link2_icon == "fa-spinner") echo 'selected="selected"'; ?>>Spinner</option>
                                            <option value="fa-circle" <?php if ($link2_icon == "fa-circle") echo 'selected="selected"'; ?>>Circle</option>
                                            <option value="fa-mail-reply" <?php if ($link2_icon == "fa-mail-reply") echo 'selected="selected"'; ?>>Mail reply</option>
                                            <option value="fa-reply" <?php if ($link2_icon == "fa-reply") echo 'selected="selected"'; ?>>Reply</option>
                                            <option value="fa-github-alt" <?php if ($link2_icon == "fa-github-alt") echo 'selected="selected"'; ?>>Github alt</option>
                                            <option value="fa-folder-o" <?php if ($link2_icon == "fa-folder-o") echo 'selected="selected"'; ?>>Folder o</option>
                                            <option value="fa-folder-open-o" <?php if ($link2_icon == "fa-folder-open-o") echo 'selected="selected"'; ?>>Folder open o</option>
                                            <option value="fa-smile-o" <?php if ($link2_icon == "fa-smile-o") echo 'selected="selected"'; ?>>Smile o</option>
                                            <option value="fa-frown-o" <?php if ($link2_icon == "fa-frown-o") echo 'selected="selected"'; ?>>Frown o</option>
                                            <option value="fa-meh-o" <?php if ($link2_icon == "fa-meh-o") echo 'selected="selected"'; ?>>Meh o</option>
                                            <option value="fa-gamepad" <?php if ($link2_icon == "fa-gamepad") echo 'selected="selected"'; ?>>Gamepad</option>
                                            <option value="fa-keyboard-o" <?php if ($link2_icon == "fa-keyboard-o") echo 'selected="selected"'; ?>>Keyboard o</option>
                                            <option value="fa-flag-o" <?php if ($link2_icon == "fa-flag-o") echo 'selected="selected"'; ?>>Flag o</option>
                                            <option value="fa-flag-checkered" <?php if ($link2_icon == "fa-flag-checkered") echo 'selected="selected"'; ?>>Flag checkered</option>
                                            <option value="fa-terminal" <?php if ($link2_icon == "fa-terminal") echo 'selected="selected"'; ?>>Terminal</option>
                                            <option value="fa-code" <?php if ($link2_icon == "fa-code") echo 'selected="selected"'; ?>>Code</option>
                                            <option value="fa-reply-all" <?php if ($link2_icon == "fa-reply-all") echo 'selected="selected"'; ?>>Reply all</option>
                                            <option value="fa-mail-reply-all" <?php if ($link2_icon == "fa-mail-reply-all") echo 'selected="selected"'; ?>>Mail reply all</option>
                                            <option value="fa-star-half-empty" <?php if ($link2_icon == "fa-star-half-empty") echo 'selected="selected"'; ?>>Star half empty</option>
                                            <option value="fa-star-half-full" <?php if ($link2_icon == "fa-star-half-full") echo 'selected="selected"'; ?>>Star half full</option>
                                            <option value="fa-star-half-o" <?php if ($link2_icon == "fa-star-half-o") echo 'selected="selected"'; ?>>Star half o</option>
                                            <option value="fa-location-arrow" <?php if ($link2_icon == "fa-location-arrow") echo 'selected="selected"'; ?>>Location arrow</option>
                                            <option value="fa-crop" <?php if ($link2_icon == "fa-crop") echo 'selected="selected"'; ?>>Crop</option>
                                            <option value="fa-code-fork" <?php if ($link2_icon == "fa-code-fork") echo 'selected="selected"'; ?>>Code fork</option>
                                            <option value="fa-unlink" <?php if ($link2_icon == "fa-unlink") echo 'selected="selected"'; ?>>Unlink</option>
                                            <option value="fa-chain-broken" <?php if ($link2_icon == "fa-chain-broken") echo 'selected="selected"'; ?>>Chain broken</option>
                                            <option value="fa-question" <?php if ($link2_icon == "fa-question") echo 'selected="selected"'; ?>>Question</option>
                                            <option value="fa-info" <?php if ($link2_icon == "fa-info") echo 'selected="selected"'; ?>>Info</option>
                                            <option value="fa-exclamation" <?php if ($link2_icon == "fa-exclamation") echo 'selected="selected"'; ?>>Exclamation</option>
                                            <option value="fa-superscript" <?php if ($link2_icon == "fa-superscript") echo 'selected="selected"'; ?>>Superscript</option>
                                            <option value="fa-subscript" <?php if ($link2_icon == "fa-subscript") echo 'selected="selected"'; ?>>Subscript</option>
                                            <option value="fa-eraser" <?php if ($link2_icon == "fa-eraser") echo 'selected="selected"'; ?>>Eraser</option>
                                            <option value="fa-puzzle-piece" <?php if ($link2_icon == "fa-puzzle-piece") echo 'selected="selected"'; ?>>Puzzle piece</option>
                                            <option value="fa-microphone" <?php if ($link2_icon == "fa-microphone") echo 'selected="selected"'; ?>>Microphone</option>
                                            <option value="fa-microphone-slash" <?php if ($link2_icon == "fa-microphone-slash") echo 'selected="selected"'; ?>>Microphone slash</option>
                                            <option value="fa-shield" <?php if ($link2_icon == "fa-shield") echo 'selected="selected"'; ?>>Shield</option>
                                            <option value="fa-calendar-o" <?php if ($link2_icon == "fa-calendar-o") echo 'selected="selected"'; ?>>Calendar o</option>
                                            <option value="fa-fire-extinguisher" <?php if ($link2_icon == "fa-fire-extinguisher") echo 'selected="selected"'; ?>>Fire extinguisher</option>
                                            <option value="fa-rocket" <?php if ($link2_icon == "fa-rocket") echo 'selected="selected"'; ?>>Rocket</option>
                                            <option value="fa-maxcdn" <?php if ($link2_icon == "fa-maxcdn") echo 'selected="selected"'; ?>>Maxcdn</option>
                                            <option value="fa-chevron-circle-left" <?php if ($link2_icon == "fa-chevron-circle-left") echo 'selected="selected"'; ?>>Chevron circle left</option>
                                            <option value="fa-chevron-circle-right" <?php if ($link2_icon == "fa-chevron-circle-right") echo 'selected="selected"'; ?>>Chevron circle right</option>
                                            <option value="fa-chevron-circle-up" <?php if ($link2_icon == "fa-chevron-circle-up") echo 'selected="selected"'; ?>>Chevron circle up</option>
                                            <option value="fa-chevron-circle-down" <?php if ($link2_icon == "fa-chevron-circle-down") echo 'selected="selected"'; ?>>Chevron circle down</option>
                                            <option value="fa-html5" <?php if ($link2_icon == "fa-html5") echo 'selected="selected"'; ?>>Html5</option>
                                            <option value="fa-css3" <?php if ($link2_icon == "fa-css3") echo 'selected="selected"'; ?>>Css3</option>
                                            <option value="fa-anchor" <?php if ($link2_icon == "fa-anchor") echo 'selected="selected"'; ?>>Anchor</option>
                                            <option value="fa-unlock-alt" <?php if ($link2_icon == "fa-unlock-alt") echo 'selected="selected"'; ?>>Unlock alt</option>
                                            <option value="fa-bullseye" <?php if ($link2_icon == "fa-bullseye") echo 'selected="selected"'; ?>>Bullseye</option>
                                            <option value="fa-ellipsis-h" <?php if ($link2_icon == "fa-ellipsis-h") echo 'selected="selected"'; ?>>Ellipsis h</option>
                                            <option value="fa-ellipsis-v" <?php if ($link2_icon == "fa-ellipsis-v") echo 'selected="selected"'; ?>>Ellipsis v</option>
                                            <option value="fa-rss-square" <?php if ($link2_icon == "fa-rss-square") echo 'selected="selected"'; ?>>Rss square</option>
                                            <option value="fa-play-circle" <?php if ($link2_icon == "fa-play-circle") echo 'selected="selected"'; ?>>Play circle</option>
                                            <option value="fa-ticket" <?php if ($link2_icon == "fa-ticket") echo 'selected="selected"'; ?>>Ticket</option>
                                            <option value="fa-minus-square" <?php if ($link2_icon == "fa-minus-square") echo 'selected="selected"'; ?>>Minus square</option>
                                            <option value="fa-minus-square-o" <?php if ($link2_icon == "fa-minus-square-o") echo 'selected="selected"'; ?>>Minus square_o</option>
                                            <option value="fa-level-up" <?php if ($link2_icon == "fa-level-up") echo 'selected="selected"'; ?>>Level up</option>
                                            <option value="fa-level-down" <?php if ($link2_icon == "fa-level-down") echo 'selected="selected"'; ?>>Level down</option>
                                            <option value="fa-check-square" <?php if ($link2_icon == "fa-check-square") echo 'selected="selected"'; ?>>Check square</option>
                                            <option value="fa-pencil-square" <?php if ($link2_icon == "fa-pencil-square") echo 'selected="selected"'; ?>>Pencil square</option>
                                            <option value="fa-external-link-square" <?php if ($link2_icon == "fa-external-link-square") echo 'selected="selected"'; ?>>External link square</option>
                                            <option value="fa-share-square" <?php if ($link2_icon == "fa-share-square") echo 'selected="selected"'; ?>>Share square</option>
                                            <option value="fa-compass" <?php if ($link2_icon == "fa-compass") echo 'selected="selected"'; ?>>Compass</option>
                                            <option value="fa-toggle-down" <?php if ($link2_icon == "fa-toggle-down") echo 'selected="selected"'; ?>>Toggle down</option>
                                            <option value="fa-caret-square-o-down" <?php if ($link2_icon == "fa-caret-square-o-down") echo 'selected="selected"'; ?>>Caret square o down</option>
                                            <option value="fa-toggle-up" <?php if ($link2_icon == "fa-toggle-up") echo 'selected="selected"'; ?>>Toggle up</option>
                                            <option value="fa-caret-square-o-up" <?php if ($link2_icon == "fa-caret-square-o-up") echo 'selected="selected"'; ?>>Caret square o up</option>
                                            <option value="fa-toggle-right" <?php if ($link2_icon == "fa-toggle-right") echo 'selected="selected"'; ?>>Toggle right</option>
                                            <option value="fa-caret-square-o-right" <?php if ($link2_icon == "fa-caret-square-o-right") echo 'selected="selected"'; ?>>Caret square o right</option>
                                            <option value="fa-euro" <?php if ($link2_icon == "fa-euro") echo 'selected="selected"'; ?>>Euro</option>
                                            <option value="fa-eur" <?php if ($link2_icon == "fa-eur") echo 'selected="selected"'; ?>>Eur</option>
                                            <option value="fa-gbp" <?php if ($link2_icon == "fa-gbp") echo 'selected="selected"'; ?>>Gbp</option>
                                            <option value="fa-dollar" <?php if ($link2_icon == "fa-dollar") echo 'selected="selected"'; ?>>Dollar</option>
                                            <option value="fa-usd" <?php if ($link2_icon == "fa-usd") echo 'selected="selected"'; ?>>Usd</option>
                                            <option value="fa-rupee" <?php if ($link2_icon == "fa-rupee") echo 'selected="selected"'; ?>>Rupee</option>
                                            <option value="fa-inr" <?php if ($link2_icon == "fa-inr") echo 'selected="selected"'; ?>>Inr</option>
                                            <option value="fa-cny" <?php if ($link2_icon == "fa-cny") echo 'selected="selected"'; ?>>Cny</option>
                                            <option value="fa-rmb" <?php if ($link2_icon == "fa-rmb") echo 'selected="selected"'; ?>>Rmb</option>
                                            <option value="fa-yen" <?php if ($link2_icon == "fa-yen") echo 'selected="selected"'; ?>>Yen</option>
                                            <option value="fa-jpy" <?php if ($link2_icon == "fa-jpy") echo 'selected="selected"'; ?>>Jpy</option>
                                            <option value="fa-ruble" <?php if ($link2_icon == "fa-ruble") echo 'selected="selected"'; ?>>Ruble</option>
                                            <option value="fa-rouble" <?php if ($link2_icon == "fa-rouble") echo 'selected="selected"'; ?>>Rouble</option>
                                            <option value="fa-rub" <?php if ($link2_icon == "fa-rub") echo 'selected="selected"'; ?>>Rub</option>
                                            <option value="fa-won" <?php if ($link2_icon == "fa-won") echo 'selected="selected"'; ?>>Won</option>
                                            <option value="fa-krw" <?php if ($link2_icon == "fa-krw") echo 'selected="selected"'; ?>>Krw</option>
                                            <option value="fa-bitcoin" <?php if ($link2_icon == "fa-bitcoin") echo 'selected="selected"'; ?>>Bitcoin</option>
                                            <option value="fa-btc" <?php if ($link2_icon == "fa-btc") echo 'selected="selected"'; ?>>Btc</option>
                                            <option value="fa-file" <?php if ($link2_icon == "fa-file") echo 'selected="selected"'; ?>>File</option>
                                            <option value="fa-file-text" <?php if ($link2_icon == "fa-file-text") echo 'selected="selected"'; ?>>File text</option>
                                            <option value="fa-sort-alpha-asc" <?php if ($link2_icon == "fa-sort-alpha-asc") echo 'selected="selected"'; ?>>Sort alpha asc</option>
                                            <option value="fa-sort-alpha-desc" <?php if ($link2_icon == "fa-sort-alpha-desc") echo 'selected="selected"'; ?>>Sort alpha desc</option>
                                            <option value="fa-sort-amount-asc" <?php if ($link2_icon == "fa-sort-amount-asc") echo 'selected="selected"'; ?>>Sort amount asc</option>
                                            <option value="fa-sort-amount-desc" <?php if ($link2_icon == "fa-sort-amount-desc") echo 'selected="selected"'; ?>>Sort amount desc</option>
                                            <option value="fa-sort-numeric-asc" <?php if ($link2_icon == "fa-sort-numeric-asc") echo 'selected="selected"'; ?>>Sort numeric asc</option>
                                            <option value="fa-sort-numeric-desc" <?php if ($link2_icon == "fa-sort-numeric-desc") echo 'selected="selected"'; ?>>Sort numeric desc</option>
                                            <option value="fa-thumbs-up" <?php if ($link2_icon == "fa-thumbs-up") echo 'selected="selected"'; ?>>Thumbs up</option>
                                            <option value="fa-thumbs-down" <?php if ($link2_icon == "fa-thumbs-down") echo 'selected="selected"'; ?>>Thumbs down</option>
                                            <option value="fa-youtube-square" <?php if ($link2_icon == "fa-youtube-square") echo 'selected="selected"'; ?>>Youtube square</option>
                                            <option value="fa-youtube" <?php if ($link2_icon == "fa-youtube") echo 'selected="selected"'; ?>>Youtube</option>
                                            <option value="fa-xing" <?php if ($link2_icon == "fa-xing") echo 'selected="selected"'; ?>>Xing</option>
                                            <option value="fa-xing-square" <?php if ($link2_icon == "fa-xing-square") echo 'selected="selected"'; ?>>Xing square</option>
                                            <option value="fa-youtube-play" <?php if ($link2_icon == "fa-youtube-play") echo 'selected="selected"'; ?>>Youtube play</option>
                                            <option value="fa-dropbox" <?php if ($link2_icon == "fa-dropbox") echo 'selected="selected"'; ?>>Dropbox</option>
                                            <option value="fa-stack-overflow" <?php if ($link2_icon == "fa-stack-overflow") echo 'selected="selected"'; ?>>Stack overflow</option>
                                            <option value="fa-instagram" <?php if ($link2_icon == "fa-instagram") echo 'selected="selected"'; ?>>Instagram</option>
                                            <option value="fa-flickr" <?php if ($link2_icon == "fa-flickr") echo 'selected="selected"'; ?>>Flickr</option>
                                            <option value="fa-adn" <?php if ($link2_icon == "fa-adn") echo 'selected="selected"'; ?>>Adn</option>
                                            <option value="fa-bitbucket" <?php if ($link2_icon == "fa-bitbucket") echo 'selected="selected"'; ?>>Bitbucket</option>
                                            <option value="fa-bitbucket-square" <?php if ($link2_icon == "fa-bitbucket-square") echo 'selected="selected"'; ?>>Bitbucket square</option>
                                            <option value="fa-tumblr" <?php if ($link2_icon == "fa-tumblr") echo 'selected="selected"'; ?>>Tumblr</option>
                                            <option value="fa-tumblr-square" <?php if ($link2_icon == "fa-tumblr-square") echo 'selected="selected"'; ?>>Tumblr square</option>
                                            <option value="fa-long-arrow-down" <?php if ($link2_icon == "fa-long-arrow-down") echo 'selected="selected"'; ?>>Long arrow down</option>
                                            <option value="fa-long-arrow-up" <?php if ($link2_icon == "fa-long-arrow-up") echo 'selected="selected"'; ?>>Long arrow up</option>
                                            <option value="fa-long-arrow-left" <?php if ($link2_icon == "fa-long-arrow-left") echo 'selected="selected"'; ?>>Long arrow left</option>
                                            <option value="fa-long-arrow-right" <?php if ($link2_icon == "fa-long-arrow-right") echo 'selected="selected"'; ?>>Long arrow right</option>
                                            <option value="fa-apple" <?php if ($link2_icon == "fa-apple") echo 'selected="selected"'; ?>>Apple</option>
                                            <option value="fa-windows" <?php if ($link2_icon == "fa-windows") echo 'selected="selected"'; ?>>Windows</option>
                                            <option value="fa-android" <?php if ($link2_icon == "fa-android") echo 'selected="selected"'; ?>>Android</option>
                                            <option value="fa-linux" <?php if ($link2_icon == "fa-linux") echo 'selected="selected"'; ?>>Linux</option>
                                            <option value="fa-dribbble" <?php if ($link2_icon == "fa-dribbble") echo 'selected="selected"'; ?>>Dribbble</option>
                                            <option value="fa-skype" <?php if ($link2_icon == "fa-skype") echo 'selected="selected"'; ?>>Skype</option>
                                            <option value="fa-foursquare" <?php if ($link2_icon == "fa-foursquare") echo 'selected="selected"'; ?>>Foursquare</option>
                                            <option value="fa-trello" <?php if ($link2_icon == "fa-trello") echo 'selected="selected"'; ?>>Trello</option>
                                            <option value="fa-female" <?php if ($link2_icon == "fa-female") echo 'selected="selected"'; ?>>Female</option>
                                            <option value="fa-male" <?php if ($link2_icon == "fa-male") echo 'selected="selected"'; ?>>Male</option>
                                            <option value="fa-gittip" <?php if ($link2_icon == "fa-gittip") echo 'selected="selected"'; ?>>Gittip</option>
                                            <option value="fa-sun-o" <?php if ($link2_icon == "fa-sun-o") echo 'selected="selected"'; ?>>Sun o</option>
                                            <option value="fa-moon-o" <?php if ($link2_icon == "fa-moon-o") echo 'selected="selected"'; ?>>Moon o</option>
                                            <option value="fa-archive" <?php if ($link2_icon == "fa-archive") echo 'selected="selected"'; ?>>Archive</option>
                                            <option value="fa-bug" <?php if ($link2_icon == "fa-bug") echo 'selected="selected"'; ?>>Bug</option>
                                            <option value="fa-vk" <?php if ($link2_icon == "fa-vk") echo 'selected="selected"'; ?>>Vk</option>
                                            <option value="fa-weibo" <?php if ($link2_icon == "fa-weibo") echo 'selected="selected"'; ?>>Weibo</option>
                                            <option value="fa-renren" <?php if ($link2_icon == "fa-renren") echo 'selected="selected"'; ?>>Renren</option>
                                            <option value="fa-pagelines" <?php if ($link2_icon == "fa-pagelines") echo 'selected="selected"'; ?>>Pagelines</option>
                                            <option value="fa-stack-exchange" <?php if ($link2_icon == "fa-stack-exchange") echo 'selected="selected"'; ?>>Stack exchange</option>
                                            <option value="fa-arrow-circle-o-right" <?php if ($link2_icon == "fa-arrow-circle-o-right") echo 'selected="selected"'; ?>>Arrow circle o right</option>
                                            <option value="fa-arrow-circle-o-left" <?php if ($link2_icon == "fa-arrow-circle-o-left") echo 'selected="selected"'; ?>>Arrow circle o left</option>
                                            <option value="fa-toggle-left" <?php if ($link2_icon == "fa-toggle-left") echo 'selected="selected"'; ?>>Toggle left</option>
                                            <option value="fa-caret-square-o-left" <?php if ($link2_icon == "fa-caret-square-o-left") echo 'selected="selected"'; ?>>Caret square o left</option>
                                            <option value="fa-dot-circle-o" <?php if ($link2_icon == "fa-dot-circle-o") echo 'selected="selected"'; ?>>Dot circle o</option>
                                            <option value="fa-wheelchair" <?php if ($link2_icon == "fa-wheelchair") echo 'selected="selected"'; ?>>Wheelchair</option>
                                            <option value="fa-vimeo-square" <?php if ($link2_icon == "fa-vimeo-square") echo 'selected="selected"'; ?>>Vimeo square</option>
                                            <option value="fa-turkish-lira" <?php if ($link2_icon == "fa-turkish-lira") echo 'selected="selected"'; ?>>Turkish lira</option>
                                            <option value="fa-try" <?php if ($link2_icon == "fa-try") echo 'selected="selected"'; ?>>Try</option>
                                            <option value="fa-plus-square-o" <?php if ($link2_icon == "fa-plus-square-o") echo 'selected="selected"'; ?>>Plus square o</option>
                                        </select>
                                    </td>
                                <tr>

                                <tr>
                                    <td>
                                        <label><strong>Link 3:</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label>Enable&nbsp;&nbsp;<input type="checkbox" name="umom__opt[link3_enable]" value="1" <?php if ($link3_enable == 1) echo 'checked="checked"'; else echo ''; ?>></label> 
                                    </td>
                                    <td>
                                        <label>URL</label>
                                        <input type="text" name="umom__opt[link3_url]" value="<?php echo $link3_url; ?>" style="width: 350px;"/>
                                    </td>
                                    <td>
                                        <label>Type</label>
                                        <select name="umom__opt[link3_type]">
                                            <option value="_self" <?php if ($link3_type == "_self") echo 'selected="selected"'; ?>>Open in current window / frame</option>
                                            <option value="_blank" <?php if ($link3_type == "_blank") echo 'selected="selected"'; ?>>Open in new window</option>
                                            <option value="_parent" <?php if ($link3_type == "_parent") echo 'selected="selected"'; ?>>Open in parent window / frame</option>
                                            <option value="_top" <?php if ($link3_type == "_top") echo 'selected="selected"'; ?>>Open in top frame (replaces all frames)</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label>Icon</label>
                                        <select name="umom__opt[link3_icon]">
                                            <option value="fa-glass" <?php if ($link3_icon == "fa-glass") echo 'selected="selected"'; ?>>Glass</option>
                                            <option value="fa-music" <?php if ($link3_icon == "fa-music") echo 'selected="selected"'; ?>>Music</option>
                                            <option value="fa-search" <?php if ($link3_icon == "fa-search") echo 'selected="selected"'; ?>>Search</option>
                                            <option value="fa-envelope" <?php if ($link3_icon == "fa-envelope") echo 'selected="selected"'; ?>>Envelope</option>
                                            <option value="fa-heart" <?php if ($link3_icon == "fa-heart") echo 'selected="selected"'; ?>>Heart</option>
                                            <option value="fa-star" <?php if ($link3_icon == "fa-star") echo 'selected="selected"'; ?>>Star</option>
                                            <option value="fa-star-o" <?php if ($link3_icon == "fa-star-o") echo 'selected="selected"'; ?>>Star o</option>
                                            <option value="fa-user" <?php if ($link3_icon == "fa-user") echo 'selected="selected"'; ?>>User</option>
                                            <option value="fa-film" <?php if ($link3_icon == "fa-film") echo 'selected="selected"'; ?>>Film</option>
                                            <option value="fa-th-large" <?php if ($link3_icon == "fa-th-large") echo 'selected="selected"'; ?>>Th large</option>
                                            <option value="fa-th" <?php if ($link3_icon == "fa-th") echo 'selected="selected"'; ?>>th</option>
                                            <option value="fa-th-list" <?php if ($link3_icon == "fa-th-list") echo 'selected="selected"'; ?>>Th list</option>
                                            <option value="fa-check" <?php if ($link3_icon == "fa-check") echo 'selected="selected"'; ?>>Check</option>
                                            <option value="fa-times" <?php if ($link3_icon == "fa-times") echo 'selected="selected"'; ?>>Times</option>
                                            <option value="fa-search-plus" <?php if ($link3_icon == "fa-search-plus") echo 'selected="selected"'; ?>>Search plus</option>
                                            <option value="fa-search-minus" <?php if ($link3_icon == "fa-search-minus") echo 'selected="selected"'; ?>>Search minus</option>
                                            <option value="fa-power-off" <?php if ($link3_icon == "fa-power-off") echo 'selected="selected"'; ?>>Power off</option>
                                            <option value="fa-signal" <?php if ($link3_icon == "fa-signal") echo 'selected="selected"'; ?>>Signal</option>
                                            <option value="fa-gear" <?php if ($link3_icon == "fa-gear") echo 'selected="selected"'; ?>>Gear</option>
                                            <option value="fa-cog" <?php if ($link3_icon == "fa-cog") echo 'selected="selected"'; ?>>Cog</option>
                                            <option value="fa-trash-o" <?php if ($link3_icon == "fa-trash-o") echo 'selected="selected"'; ?>>Trash o</option>
                                            <option value="fa-home" <?php if ($link3_icon == "fa-home") echo 'selected="selected"'; ?>>Home</option>
                                            <option value="fa-file-o" <?php if ($link3_icon == "fa-file-o") echo 'selected="selected"'; ?>>File o</option>
                                            <option value="fa-clock-o" <?php if ($link3_icon == "fa-clock-o") echo 'selected="selected"'; ?>>Clock o</option>
                                            <option value="fa-road" <?php if ($link3_icon == "fa-road") echo 'selected="selected"'; ?>>Road</option>
                                            <option value="fa-download" <?php if ($link3_icon == "fa-download") echo 'selected="selected"'; ?>>Download</option>
                                            <option value="fa-arrow-circle-o-down" <?php if ($link3_icon == "fa-arrow-circle-o-down") echo 'selected="selected"'; ?>>Arrow circle o down</option>
                                            <option value="fa-arrow-circle-o-up" <?php if ($link3_icon == "fa-arrow-circle-o-up") echo 'selected="selected"'; ?>>Arrow circle o up</option>
                                            <option value="fa-inbox" <?php if ($link3_icon == "fa-inbox") echo 'selected="selected"'; ?>>Inbox</option>
                                            <option value="fa-play-circle-o" <?php if ($link3_icon == "fa-play-circle-o") echo 'selected="selected"'; ?>>Play circle_o</option>
                                            <option value="fa-rotate-right" <?php if ($link3_icon == "fa-rotate-right") echo 'selected="selected"'; ?>>Rotate right</option>
                                            <option value="fa-repeat" <?php if ($link3_icon == "fa-repeat") echo 'selected="selected"'; ?>>Repeat</option>
                                            <option value="fa-refresh" <?php if ($link3_icon == "fa-refresh") echo 'selected="selected"'; ?>>Refresh</option>
                                            <option value="fa-list-alt" <?php if ($link3_icon == "fa-list-alt") echo 'selected="selected"'; ?>>List alt</option>
                                            <option value="fa-lock" <?php if ($link3_icon == "fa-lock") echo 'selected="selected"'; ?>>Lock</option>
                                            <option value="fa-flag" <?php if ($link3_icon == "fa-flag") echo 'selected="selected"'; ?>>Flag</option>
                                            <option value="fa-headphones" <?php if ($link3_icon == "fa-headphones") echo 'selected="selected"'; ?>>Headphones</option>
                                            <option value="fa-volume-off" <?php if ($link3_icon == "fa-volume-off") echo 'selected="selected"'; ?>>Volume off</option>
                                            <option value="fa-volume-down" <?php if ($link3_icon == "fa-volume-down") echo 'selected="selected"'; ?>>Volume down</option>
                                            <option value="fa-volume-up" <?php if ($link3_icon == "fa-volume-up") echo 'selected="selected"'; ?>>Volume down</option>
                                            <option value="fa-qrcode" <?php if ($link3_icon == "fa-qrcode") echo 'selected="selected"'; ?>>Qrcode</option>
                                            <option value="fa-barcode" <?php if ($link3_icon == "fa-barcode") echo 'selected="selected"'; ?>>Barcode</option>
                                            <option value="fa-tag" <?php if ($link3_icon == "fa-tag") echo 'selected="selected"'; ?>>Tag</option>
                                            <option value="fa-tags" <?php if ($link3_icon == "fa-tags") echo 'selected="selected"'; ?>>Tags</option>
                                            <option value="fa-book" <?php if ($link3_icon == "fa-book") echo 'selected="selected"'; ?>>Book</option>
                                            <option value="fa-bookmark" <?php if ($link3_icon == "fa-bookmark") echo 'selected="selected"'; ?>>Bookmark</option>
                                            <option value="fa-print" <?php if ($link3_icon == "fa-print") echo 'selected="selected"'; ?>>Print</option>
                                            <option value="fa-camera" <?php if ($link3_icon == "fa-camera") echo 'selected="selected"'; ?>>Camera</option>
                                            <option value="fa-font" <?php if ($link3_icon == "fa-font") echo 'selected="selected"'; ?>>Font</option>
                                            <option value="fa-bold" <?php if ($link3_icon == "fa-bold") echo 'selected="selected"'; ?>>Bold</option>
                                            <option value="fa-italic" <?php if ($link3_icon == "fa-italic") echo 'selected="selected"'; ?>>Italic</option>
                                            <option value="fa-text-height" <?php if ($link3_icon == "fa-text-height") echo 'selected="selected"'; ?>>Text height</option>
                                            <option value="fa-text-width" <?php if ($link3_icon == "fa-text-width") echo 'selected="selected"'; ?>>Text width</option>
                                            <option value="fa-align-left" <?php if ($link3_icon == "fa-align-left") echo 'selected="selected"'; ?>>Align left</option>
                                            <option value="fa-align-center" <?php if ($link3_icon == "fa-align-center") echo 'selected="selected"'; ?>>Align center</option>
                                            <option value="fa-align-right" <?php if ($link3_icon == "fa-align-right") echo 'selected="selected"'; ?>>Align right</option>
                                            <option value="fa-align-justify" <?php if ($link3_icon == "fa-align-justify") echo 'selected="selected"'; ?>>Align justify</option>
                                            <option value="fa-list" <?php if ($link3_icon == "fa-list") echo 'selected="selected"'; ?>>List</option>
                                            <option value="fa-dedent" <?php if ($link3_icon == "fa-dedent") echo 'selected="selected"'; ?>>Dedent</option>
                                            <option value="fa-outdent" <?php if ($link3_icon == "fa-outdent") echo 'selected="selected"'; ?>>Outdent</option>
                                            <option value="fa-indent" <?php if ($link3_icon == "fa-indent") echo 'selected="selected"'; ?>>Indent</option>
                                            <option value="fa-video-camera" <?php if ($link3_icon == "fa-video-camera") echo 'selected="selected"'; ?>>Video camera</option>
                                            <option value="fa-picture-o" <?php if ($link3_icon == "fa-picture-o") echo 'selected="selected"'; ?>>Picture o</option>
                                            <option value="fa-pencil" <?php if ($link3_icon == "fa-pencil") echo 'selected="selected"'; ?>>Pencil</option>
                                            <option value="fa-map-marker" <?php if ($link3_icon == "fa-map-marker") echo 'selected="selected"'; ?>>Map marker</option>
                                            <option value="fa-adjust" <?php if ($link3_icon == "fa-adjust") echo 'selected="selected"'; ?>>Adjust</option>
                                            <option value="fa-tint" <?php if ($link3_icon == "fa-tint") echo 'selected="selected"'; ?>>Tint</option>
                                            <option value="fa-edit" <?php if ($link3_icon == "fa-edit") echo 'selected="selected"'; ?>>Edit</option>
                                            <option value="fa-pencil-square-o" <?php if ($link3_icon == "fa-pencil-square-o") echo 'selected="selected"'; ?>>Pencil square o</option>
                                            <option value="fa-share-square-o" <?php if ($link3_icon == "fa-share-square-o") echo 'selected="selected"'; ?>>Share square o</option>
                                            <option value="fa-check-square-o" <?php if ($link3_icon == "fa-check-square-o") echo 'selected="selected"'; ?>>Check square o</option>
                                            <option value="fa-arrows" <?php if ($link3_icon == "fa-arrows") echo 'selected="selected"'; ?>>Arrows</option>
                                            <option value="fa-step-backward" <?php if ($link3_icon == "fa-step-backward") echo 'selected="selected"'; ?>>Step backward</option>
                                            <option value="fa-fast-backward" <?php if ($link3_icon == "fa-fast-backward") echo 'selected="selected"'; ?>>Fast backward</option>
                                            <option value="fa-backward" <?php if ($link3_icon == "fa-backward") echo 'selected="selected"'; ?>>Backward</option>
                                            <option value="fa-play" <?php if ($link3_icon == "fa-play") echo 'selected="selected"'; ?>>Play</option>
                                            <option value="fa-pause" <?php if ($link3_icon == "fa-pause") echo 'selected="selected"'; ?>>Pause</option>
                                            <option value="fa-stop" <?php if ($link3_icon == "fa-stop") echo 'selected="selected"'; ?>>Stop</option>
                                            <option value="fa-forward" <?php if ($link3_icon == "fa-forward") echo 'selected="selected"'; ?>>Forward</option>
                                            <option value="fa-fast-forward" <?php if ($link3_icon == "fa-fast-forward") echo 'selected="selected"'; ?>>Fast forward</option>
                                            <option value="fa-step-forward" <?php if ($link3_icon == "fa-step-forward") echo 'selected="selected"'; ?>>Step forward</option>
                                            <option value="fa-eject" <?php if ($link3_icon == "fa-eject") echo 'selected="selected"'; ?>>Eject</option>
                                            <option value="fa-chevron-left" <?php if ($link3_icon == "fa-chevron-left") echo 'selected="selected"'; ?>>Chevron left</option>
                                            <option value="fa-chevron-right" <?php if ($link3_icon == "fa-chevron-right") echo 'selected="selected"'; ?>>Chevron right</option>
                                            <option value="fa-plus-circle" <?php if ($link3_icon == "fa-plus-circle") echo 'selected="selected"'; ?>>Plus circle</option>
                                            <option value="fa-minus-circle" <?php if ($link3_icon == "fa-minus-circle") echo 'selected="selected"'; ?>>Minus circle</option>
                                            <option value="fa-times-circle" <?php if ($link3_icon == "fa-times-circle") echo 'selected="selected"'; ?>>Times circle</option>
                                            <option value="fa-check-circle" <?php if ($link3_icon == "fa-check-circle") echo 'selected="selected"'; ?>>Check circle</option>
                                            <option value="fa-question-circle" <?php if ($link3_icon == "fa-question-circle") echo 'selected="selected"'; ?>>Question circle</option>
                                            <option value="fa-info-circle" <?php if ($link3_icon == "fa-info-circle") echo 'selected="selected"'; ?>>Info circle</option>
                                            <option value="fa-crosshairs" <?php if ($link3_icon == "fa-crosshairs") echo 'selected="selected"'; ?>>Crosshairs</option>
                                            <option value="fa-times-circle-o" <?php if ($link3_icon == "fa-times-circle-o") echo 'selected="selected"'; ?>>Times circle o</option>
                                            <option value="fa-check-circle-o" <?php if ($link3_icon == "fa-check-circle-o") echo 'selected="selected"'; ?>>Check circle o</option>
                                            <option value="fa-ban" <?php if ($link3_icon == "fa-ban") echo 'selected="selected"'; ?>>Ban</option>
                                            <option value="fa-arrow-left" <?php if ($link3_icon == "fa-arrow-left") echo 'selected="selected"'; ?>>Arrow left</option>
                                            <option value="fa-arrow-right" <?php if ($link3_icon == "fa-arrow-right") echo 'selected="selected"'; ?>>Arrow right</option>
                                            <option value="fa-arrow-up" <?php if ($link3_icon == "fa-arrow-up") echo 'selected="selected"'; ?>>Arrow up</option>
                                            <option value="fa-arrow-down" <?php if ($link3_icon == "fa-arrow-down") echo 'selected="selected"'; ?>>Arrow down</option>
                                            <option value="fa-mail-forward" <?php if ($link3_icon == "fa-mail-forward") echo 'selected="selected"'; ?>>Mail forward</option>
                                            <option value="fa-share" <?php if ($link3_icon == "fa-share") echo 'selected="selected"'; ?>>Share</option>
                                            <option value="fa-expand" <?php if ($link3_icon == "fa-expand") echo 'selected="selected"'; ?>>Expand</option>
                                            <option value="fa-compress" <?php if ($link3_icon == "fa-compress") echo 'selected="selected"'; ?>>Compress</option>
                                            <option value="fa-plus" <?php if ($link3_icon == "fa-plus") echo 'selected="selected"'; ?>>Plus</option>
                                            <option value="fa-minus" <?php if ($link3_icon == "fa-minus") echo 'selected="selected"'; ?>>Minus</option>
                                            <option value="fa-asterisk" <?php if ($link3_icon == "fa-asterisk") echo 'selected="selected"'; ?>>Asterisk</option>
                                            <option value="fa-exclamation-circle" <?php if ($link3_icon == "fa-exclamation-circle") echo 'selected="selected"'; ?>>Exclamation circle</option>
                                            <option value="fa-gift" <?php if ($link3_icon == "fa-gift") echo 'selected="selected"'; ?>>Gift</option>
                                            <option value="fa-leaf" <?php if ($link3_icon == "fa-leaf") echo 'selected="selected"'; ?>>Leaf</option>
                                            <option value="fa-fire" <?php if ($link3_icon == "fa-fire") echo 'selected="selected"'; ?>>Fire</option>
                                            <option value="fa-eye" <?php if ($link3_icon == "fa-eye") echo 'selected="selected"'; ?>>Eye</option>
                                            <option value="fa-eye-slash" <?php if ($link3_icon == "fa-eye-slash") echo 'selected="selected"'; ?>>Eye slash</option>
                                            <option value="fa-warning" <?php if ($link3_icon == "fa-warning") echo 'selected="selected"'; ?>>Warning</option>
                                            <option value="fa-exclamation-triangle" <?php if ($link3_icon == "fa-exclamation-triangle") echo 'selected="selected"'; ?>>Exclamation triangle</option>
                                            <option value="fa-plane" <?php if ($link3_icon == "fa-plane") echo 'selected="selected"'; ?>>Plane</option>
                                            <option value="fa-calendar" <?php if ($link3_icon == "fa-calendar") echo 'selected="selected"'; ?>>Calendar</option>
                                            <option value="fa-random" <?php if ($link3_icon == "fa-random") echo 'selected="selected"'; ?>>Random</option>
                                            <option value="fa-comment" <?php if ($link3_icon == "fa-comment") echo 'selected="selected"'; ?>>Comment</option>
                                            <option value="fa-magnet" <?php if ($link3_icon == "fa-magnet") echo 'selected="selected"'; ?>>Magnet</option>
                                            <option value="fa-chevron-up" <?php if ($link3_icon == "fa-chevron-up") echo 'selected="selected"'; ?>>Chevron up</option>
                                            <option value="fa-chevron-down" <?php if ($link3_icon == "fa-chevron-down") echo 'selected="selected"'; ?>>Chevron down</option>
                                            <option value="fa-retweet" <?php if ($link3_icon == "fa-retweet") echo 'selected="selected"'; ?>>Retweet</option>
                                            <option value="fa-shopping-cart" <?php if ($link3_icon == "fa-shopping-cart") echo 'selected="selected"'; ?>>Shopping cart</option>
                                            <option value="fa-folder" <?php if ($link3_icon == "fa-folder") echo 'selected="selected"'; ?>>Folder</option>
                                            <option value="fa-folder-open" <?php if ($link3_icon == "fa-folder-open") echo 'selected="selected"'; ?>>Folder open</option>
                                            <option value="fa-arrows-v" <?php if ($link3_icon == "fa-arrows-v") echo 'selected="selected"'; ?>>Arrows v</option>
                                            <option value="fa-arrows-h" <?php if ($link3_icon == "fa-arrows-h") echo 'selected="selected"'; ?>>Arrows h</option>
                                            <option value="fa-bar-chart-o" <?php if ($link3_icon == "fa-bar-chart-o") echo 'selected="selected"'; ?>>Bar chart o</option>
                                            <option value="fa-twitter-square" <?php if ($link3_icon == "fa-twitter-square") echo 'selected="selected"'; ?>>Twitter square</option>
                                            <option value="fa-facebook-square" <?php if ($link3_icon == "fa-facebook-square") echo 'selected="selected"'; ?>>Facebook square</option>
                                            <option value="fa-camera-retro" <?php if ($link3_icon == "fa-camera-retro") echo 'selected="selected"'; ?>>Camera retro</option>
                                            <option value="fa-key" <?php if ($link3_icon == "fa-key") echo 'selected="selected"'; ?>>Key</option>
                                            <option value="fa-gears" <?php if ($link3_icon == "fa-gears") echo 'selected="selected"'; ?>>Gears</option>
                                            <option value="fa-cogs" <?php if ($link3_icon == "fa-cogs") echo 'selected="selected"'; ?>>Cogs</option>
                                            <option value="fa-comments" <?php if ($link3_icon == "fa-comments") echo 'selected="selected"'; ?>>Comments</option>
                                            <option value="fa-thumbs-o-up" <?php if ($link3_icon == "fa-thumbs-o-up") echo 'selected="selected"'; ?>>Thumbs o up</option>
                                            <option value="fa-thumbs-o-down" <?php if ($link3_icon == "fa-thumbs-o-down") echo 'selected="selected"'; ?>>Thumbs o down</option>
                                            <option value="fa-star-half" <?php if ($link3_icon == "fa-star-half") echo 'selected="selected"'; ?>>Star half</option>
                                            <option value="fa-heart-o" <?php if ($link3_icon == "fa-heart-o") echo 'selected="selected"'; ?>>Heart o</option>
                                            <option value="fa-sign-out" <?php if ($link3_icon == "fa-sign-out") echo 'selected="selected"'; ?>>Sign out</option>
                                            <option value="fa-linkedin-square" <?php if ($link3_icon == "fa-linkedin-square") echo 'selected="selected"'; ?>>Linkedin square</option>
                                            <option value="fa-thumb-tack" <?php if ($link3_icon == "fa-thumb-tack") echo 'selected="selected"'; ?>>Thumb tack</option>
                                            <option value="fa-external-link" <?php if ($link3_icon == "fa-external-link") echo 'selected="selected"'; ?>>External link</option>
                                            <option value="fa-sign-in" <?php if ($link3_icon == "fa-sign-in") echo 'selected="selected"'; ?>>Sign in</option>
                                            <option value="fa-trophy" <?php if ($link3_icon == "fa-trophy") echo 'selected="selected"'; ?>>Trophy</option>
                                            <option value="fa-github-square" <?php if ($link3_icon == "fa-github-square") echo 'selected="selected"'; ?>>Github square</option>
                                            <option value="fa-upload" <?php if ($link3_icon == "fa-upload") echo 'selected="selected"'; ?>>Upload</option>
                                            <option value="fa-lemon-o" <?php if ($link3_icon == "fa-lemon-o") echo 'selected="selected"'; ?>>Lemon o</option>
                                            <option value="fa-phone" <?php if ($link3_icon == "fa-phone") echo 'selected="selected"'; ?>>Phone</option>
                                            <option value="fa-square-o" <?php if ($link3_icon == "fa-square-o") echo 'selected="selected"'; ?>>Square o</option>
                                            <option value="fa-bookmark-o" <?php if ($link3_icon == "fa-bookmark-o") echo 'selected="selected"'; ?>>Bookmark o</option>
                                            <option value="fa-phone-square" <?php if ($link3_icon == "fa-phone-square") echo 'selected="selected"'; ?>>Phone square</option>
                                            <option value="fa-twitter" <?php if ($link3_icon == "fa-twitter") echo 'selected="selected"'; ?>>Twitter</option>
                                            <option value="fa-facebook" <?php if ($link3_icon == "fa-facebook") echo 'selected="selected"'; ?>>Facebook</option>
                                            <option value="fa-github" <?php if ($link3_icon == "fa-github") echo 'selected="selected"'; ?>>Github</option>
                                            <option value="fa-unlock" <?php if ($link3_icon == "fa-unlock") echo 'selected="selected"'; ?>>Unlock</option>
                                            <option value="fa-credit-card" <?php if ($link3_icon == "fa-credit-card") echo 'selected="selected"'; ?>>Credit card</option>
                                            <option value="fa-rss" <?php if ($link3_icon == "fa-rss") echo 'selected="selected"'; ?>>Rss</option>
                                            <option value="fa-hdd-o" <?php if ($link3_icon == "fa-hdd-o") echo 'selected="selected"'; ?>>Hdd o</option>
                                            <option value="fa-bullhorn" <?php if ($link3_icon == "fa-bullhorn") echo 'selected="selected"'; ?>>Bullhorn</option>
                                            <option value="fa-bell" <?php if ($link3_icon == "fa-bell") echo 'selected="selected"'; ?>>Bell</option>
                                            <option value="fa-certificate" <?php if ($link3_icon == "fa-certificate") echo 'selected="selected"'; ?>>Certificate</option>
                                            <option value="fa-hand-o-right" <?php if ($link3_icon == "fa-hand-o-right") echo 'selected="selected"'; ?>>Hand o right</option>
                                            <option value="fa-hand-o-left" <?php if ($link3_icon == "fa-hand-o-left") echo 'selected="selected"'; ?>>Hand o left</option>
                                            <option value="fa-hand-o-up" <?php if ($link3_icon == "fa-hand-o-up") echo 'selected="selected"'; ?>>Hand o up</option>
                                            <option value="fa-hand-o-down" <?php if ($link3_icon == "fa-hand-o-down") echo 'selected="selected"'; ?>>Hand o down</option>
                                            <option value="fa-arrow-circle-left" <?php if ($link3_icon == "fa-arrow-circle-left") echo 'selected="selected"'; ?>>Arrow circle left</option>
                                            <option value="fa-arrow-circle-right" <?php if ($link3_icon == "fa-arrow-circle-right") echo 'selected="selected"'; ?>>Arrow circle right</option>
                                            <option value="fa-arrow-circle-up" <?php if ($link3_icon == "fa-arrow-circle-up") echo 'selected="selected"'; ?>>Arrow circle up</option>
                                            <option value="fa-arrow-circle-down" <?php if ($link3_icon == "fa-arrow-circle-down") echo 'selected="selected"'; ?>>Arrow circle down</option>
                                            <option value="fa-globe" <?php if ($link3_icon == "fa-globe") echo 'selected="selected"'; ?>>Globe</option>
                                            <option value="fa-wrench" <?php if ($link3_icon == "fa-wrench") echo 'selected="selected"'; ?>>Wrench</option>
                                            <option value="fa-tasks" <?php if ($link3_icon == "fa-tasks") echo 'selected="selected"'; ?>>Tasks</option>
                                            <option value="fa-filter" <?php if ($link3_icon == "fa-filter") echo 'selected="selected"'; ?>>Filter</option>
                                            <option value="fa-briefcase" <?php if ($link3_icon == "fa-briefcase") echo 'selected="selected"'; ?>>Briefcase</option>
                                            <option value="fa-arrows-alt" <?php if ($link3_icon == "fa-arrows-alt") echo 'selected="selected"'; ?>>Arrows alt</option>
                                            <option value="fa-group" <?php if ($link3_icon == "fa-group") echo 'selected="selected"'; ?>>Group</option>
                                            <option value="fa-users" <?php if ($link3_icon == "fa-users") echo 'selected="selected"'; ?>>Users</option>
                                            <option value="fa-chain" <?php if ($link3_icon == "fa-chain") echo 'selected="selected"'; ?>>Chain</option>
                                            <option value="fa-link" <?php if ($link3_icon == "fa-link") echo 'selected="selected"'; ?>>Link</option>
                                            <option value="fa-cloud" <?php if ($link3_icon == "fa-cloud") echo 'selected="selected"'; ?>>Cloud</option>
                                            <option value="fa-flask" <?php if ($link3_icon == "fa-flask") echo 'selected="selected"'; ?>>Flask</option>
                                            <option value="fa-cut" <?php if ($link3_icon == "fa-cut") echo 'selected="selected"'; ?>>Cut</option>
                                            <option value="fa-scissors" <?php if ($link3_icon == "fa-scissors") echo 'selected="selected"'; ?>>Scissors</option>
                                            <option value="fa-copy" <?php if ($link3_icon == "fa-copy") echo 'selected="selected"'; ?>>Copy</option>
                                            <option value="fa-files-o" <?php if ($link3_icon == "fa-files-o") echo 'selected="selected"'; ?>>Files o</option>
                                            <option value="fa-paperclip" <?php if ($link3_icon == "fa-paperclip") echo 'selected="selected"'; ?>>Paperclip</option>
                                            <option value="fa-save" <?php if ($link3_icon == "fa-save") echo 'selected="selected"'; ?>>Save</option>
                                            <option value="fa-floppy-o" <?php if ($link3_icon == "fa-floppy-o") echo 'selected="selected"'; ?>>Floppy o</option>
                                            <option value="fa-square" <?php if ($link3_icon == "fa-square") echo 'selected="selected"'; ?>>Square</option>
                                            <option value="fa-bars" <?php if ($link3_icon == "fa-bars") echo 'selected="selected"'; ?>>Bars</option>
                                            <option value="fa-list-ul" <?php if ($link3_icon == "fa-list-ul") echo 'selected="selected"'; ?>>List ul</option>
                                            <option value="fa-list-ol" <?php if ($link3_icon == "fa-list-ol") echo 'selected="selected"'; ?>>List ol</option>
                                            <option value="fa-strikethrough" <?php if ($link3_icon == "fa-strikethrough") echo 'selected="selected"'; ?>>Strikethrough</option>
                                            <option value="fa-underline" <?php if ($link3_icon == "fa-underline") echo 'selected="selected"'; ?>>Underline</option>
                                            <option value="fa-table" <?php if ($link3_icon == "fa-table") echo 'selected="selected"'; ?>>Table</option>
                                            <option value="fa-magic" <?php if ($link3_icon == "fa-magic") echo 'selected="selected"'; ?>>Magic</option>
                                            <option value="fa-truck" <?php if ($link3_icon == "fa-truck") echo 'selected="selected"'; ?>>Truck</option>
                                            <option value="fa-pinterest" <?php if ($link3_icon == "fa-pinterest") echo 'selected="selected"'; ?>>Pinterest</option>
                                            <option value="fa-pinterest-square" <?php if ($link3_icon == "fa-pinterest-square") echo 'selected="selected"'; ?>>Pinterest square</option>
                                            <option value="fa-google-plus-square" <?php if ($link3_icon == "fa-google-plus-square") echo 'selected="selected"'; ?>>Google plus square</option>
                                            <option value="fa-google-plus" <?php if ($link3_icon == "fa-google-plus") echo 'selected="selected"'; ?>>Google plus</option>
                                            <option value="fa-money" <?php if ($link3_icon == "fa-money") echo 'selected="selected"'; ?>>Money</option>
                                            <option value="fa-caret-down" <?php if ($link3_icon == "fa-caret-down") echo 'selected="selected"'; ?>>Caret down</option>
                                            <option value="fa-caret-up" <?php if ($link3_icon == "fa-caret-up") echo 'selected="selected"'; ?>>Caret up</option>
                                            <option value="fa-caret-left" <?php if ($link3_icon == "fa-caret-left") echo 'selected="selected"'; ?>>Caret left</option>
                                            <option value="fa-caret-right" <?php if ($link3_icon == "fa-caret-right") echo 'selected="selected"'; ?>>Caret right</option>
                                            <option value="fa-columns" <?php if ($link3_icon == "fa-columns") echo 'selected="selected"'; ?>>Columns</option>
                                            <option value="fa-unsorted" <?php if ($link3_icon == "fa-unsorted") echo 'selected="selected"'; ?>>Unsorted</option>
                                            <option value="fa-sort" <?php if ($link3_icon == "fa-sort") echo 'selected="selected"'; ?>>Sort</option>
                                            <option value="fa-sort-down" <?php if ($link3_icon == "fa-sort-down") echo 'selected="selected"'; ?>>Sort down</option>
                                            <option value="fa-sort-asc" <?php if ($link3_icon == "fa-sort-asc") echo 'selected="selected"'; ?>>Sort asc</option>
                                            <option value="fa-sort-up" <?php if ($link3_icon == "fa-sort-up") echo 'selected="selected"'; ?>>Sort up</option>
                                            <option value="fa-sort-desc" <?php if ($link3_icon == "fa-sort-desc") echo 'selected="selected"'; ?>>Sort desc</option>
                                            <option value="fa-envelope" <?php if ($link3_icon == "fa-envelope") echo 'selected="selected"'; ?>>Envelope</option>
                                            <option value="fa-linkedin" <?php if ($link3_icon == "fa-linkedin") echo 'selected="selected"'; ?>>Linkedin</option>
                                            <option value="fa-rotate-left" <?php if ($link3_icon == "fa-rotate-left") echo 'selected="selected"'; ?>>Rotate left</option>
                                            <option value="fa-undo" <?php if ($link3_icon == "fa-undo") echo 'selected="selected"'; ?>>Undo</option>
                                            <option value="fa-legal" <?php if ($link3_icon == "fa-legal") echo 'selected="selected"'; ?>>Legal</option>
                                            <option value="fa-gavel" <?php if ($link3_icon == "fa-gavel") echo 'selected="selected"'; ?>>Gavel</option>
                                            <option value="fa-dashboard" <?php if ($link3_icon == "fa-dashboard") echo 'selected="selected"'; ?>>Dashboard</option>
                                            <option value="fa-tachometer" <?php if ($link3_icon == "fa-tachometer") echo 'selected="selected"'; ?>>Tachometer</option>
                                            <option value="fa-comment-o" <?php if ($link3_icon == "fa-comment-o") echo 'selected="selected"'; ?>>Comment o</option>
                                            <option value="fa-comments-o" <?php if ($link3_icon == "fa-comments-o") echo 'selected="selected"'; ?>>Comments o</option>
                                            <option value="fa-flash" <?php if ($link3_icon == "fa-flash") echo 'selected="selected"'; ?>>Flash</option>
                                            <option value="fa-bolt" <?php if ($link3_icon == "fa-bolt") echo 'selected="selected"'; ?>>Bolt</option>
                                            <option value="fa-sitemap" <?php if ($link3_icon == "fa-sitemap") echo 'selected="selected"'; ?>>Sitemap</option>
                                            <option value="fa-umbrella" <?php if ($link3_icon == "fa-umbrella") echo 'selected="selected"'; ?>>Umbrella</option>
                                            <option value="fa-paste" <?php if ($link3_icon == "fa-paste") echo 'selected="selected"'; ?>>Paste</option>
                                            <option value="fa-clipboard" <?php if ($link3_icon == "fa-clipboard") echo 'selected="selected"'; ?>>Clipboard</option>
                                            <option value="fa-lightbulb-o" <?php if ($link3_icon == "fa-lightbulb-o") echo 'selected="selected"'; ?>>Lightbulb o</option>
                                            <option value="fa-exchange" <?php if ($link3_icon == "fa-exchange") echo 'selected="selected"'; ?>>Exchange</option>
                                            <option value="fa-cloud-download" <?php if ($link3_icon == "fa-cloud-download") echo 'selected="selected"'; ?>>Cloud download</option>
                                            <option value="fa-cloud-upload" <?php if ($link3_icon == "fa-cloud-upload") echo 'selected="selected"'; ?>>Cloud upload</option>
                                            <option value="fa-user-md" <?php if ($link3_icon == "fa-user-md") echo 'selected="selected"'; ?>>User md</option>
                                            <option value="fa-stethoscope" <?php if ($link3_icon == "fa-stethoscope") echo 'selected="selected"'; ?>>Stethoscope</option>
                                            <option value="fa-suitcase" <?php if ($link3_icon == "fa-suitcase") echo 'selected="selected"'; ?>>Suitcase</option>
                                            <option value="fa-bell-o" <?php if ($link3_icon == "fa-bell-o") echo 'selected="selected"'; ?>>Bell_o</option>
                                            <option value="fa-coffee" <?php if ($link3_icon == "fa-coffee") echo 'selected="selected"'; ?>>Coffee</option>
                                            <option value="fa-cutlery" <?php if ($link3_icon == "fa-cutlery") echo 'selected="selected"'; ?>>Cutlery</option>
                                            <option value="fa-file-text-o" <?php if ($link3_icon == "fa-file-text-o") echo 'selected="selected"'; ?>>File text o</option>
                                            <option value="fa-building-o" <?php if ($link3_icon == "fa-building-o") echo 'selected="selected"'; ?>>Building o</option>
                                            <option value="fa-hospital-o" <?php if ($link3_icon == "fa-hospital-o") echo 'selected="selected"'; ?>>Hospital o</option>
                                            <option value="fa-ambulance" <?php if ($link3_icon == "fa-ambulance") echo 'selected="selected"'; ?>>Ambulance</option>
                                            <option value="fa-medkit" <?php if ($link3_icon == "fa-medkit") echo 'selected="selected"'; ?>>Medkit</option>
                                            <option value="fa-fighter-jet" <?php if ($link3_icon == "fa-fighter-jet") echo 'selected="selected"'; ?>>Fighter jet</option>
                                            <option value="fa-beer" <?php if ($link3_icon == "fa-beer") echo 'selected="selected"'; ?>>Beer</option>
                                            <option value="fa-h-square" <?php if ($link3_icon == "fa-h-square") echo 'selected="selected"'; ?>>H square</option>
                                            <option value="fa-plus-square" <?php if ($link3_icon == "fa-plus-square") echo 'selected="selected"'; ?>>Plus square</option>
                                            <option value="fa-angle-double-left" <?php if ($link3_icon == "fa-angle-double-left") echo 'selected="selected"'; ?>>Angle double left</option>
                                            <option value="fa-angle-double-right" <?php if ($link3_icon == "fa-angle-double-right") echo 'selected="selected"'; ?>>Angle double right</option>
                                            <option value="fa-angle-double-up" <?php if ($link3_icon == "fa-angle-double-up") echo 'selected="selected"'; ?>>Angle double up</option>
                                            <option value="fa-angle-double-down" <?php if ($link3_icon == "fa-angle-double-down") echo 'selected="selected"'; ?>>Angle double down</option>
                                            <option value="fa-angle-left" <?php if ($link3_icon == "fa-angle-left") echo 'selected="selected"'; ?>>Angle left</option>
                                            <option value="fa-angle-right" <?php if ($link3_icon == "fa-angle-right") echo 'selected="selected"'; ?>>Angle right</option>
                                            <option value="fa-angle-up" <?php if ($link3_icon == "fa-angle-up") echo 'selected="selected"'; ?>>Angle up</option>
                                            <option value="fa-angle-down" <?php if ($link3_icon == "fa-angle-down") echo 'selected="selected"'; ?>>Angle down</option>
                                            <option value="fa-desktop" <?php if ($link3_icon == "fa-desktop") echo 'selected="selected"'; ?>>Desktop</option>
                                            <option value="fa-laptop" <?php if ($link3_icon == "fa-laptop") echo 'selected="selected"'; ?>>Laptop</option>
                                            <option value="fa-tablet" <?php if ($link3_icon == "fa-tablet") echo 'selected="selected"'; ?>>Tablet</option>
                                            <option value="fa-mobile-phone" <?php if ($link3_icon == "fa-mobile-phone") echo 'selected="selected"'; ?>>Mobile phone</option>
                                            <option value="fa-mobile" <?php if ($link3_icon == "fa-mobile") echo 'selected="selected"'; ?>>Mobile</option>
                                            <option value="fa-circle-o" <?php if ($link3_icon == "fa-circle-o") echo 'selected="selected"'; ?>>Circle o</option>
                                            <option value="fa-quote-left" <?php if ($link3_icon == "fa-quote-left") echo 'selected="selected"'; ?>>Quote left</option>
                                            <option value="fa-quote-right" <?php if ($link3_icon == "fa-quote-right") echo 'selected="selected"'; ?>>Quote right</option>
                                            <option value="fa-spinner" <?php if ($link3_icon == "fa-spinner") echo 'selected="selected"'; ?>>Spinner</option>
                                            <option value="fa-circle" <?php if ($link3_icon == "fa-circle") echo 'selected="selected"'; ?>>Circle</option>
                                            <option value="fa-mail-reply" <?php if ($link3_icon == "fa-mail-reply") echo 'selected="selected"'; ?>>Mail reply</option>
                                            <option value="fa-reply" <?php if ($link3_icon == "fa-reply") echo 'selected="selected"'; ?>>Reply</option>
                                            <option value="fa-github-alt" <?php if ($link3_icon == "fa-github-alt") echo 'selected="selected"'; ?>>Github alt</option>
                                            <option value="fa-folder-o" <?php if ($link3_icon == "fa-folder-o") echo 'selected="selected"'; ?>>Folder o</option>
                                            <option value="fa-folder-open-o" <?php if ($link3_icon == "fa-folder-open-o") echo 'selected="selected"'; ?>>Folder open o</option>
                                            <option value="fa-smile-o" <?php if ($link3_icon == "fa-smile-o") echo 'selected="selected"'; ?>>Smile o</option>
                                            <option value="fa-frown-o" <?php if ($link3_icon == "fa-frown-o") echo 'selected="selected"'; ?>>Frown o</option>
                                            <option value="fa-meh-o" <?php if ($link3_icon == "fa-meh-o") echo 'selected="selected"'; ?>>Meh o</option>
                                            <option value="fa-gamepad" <?php if ($link3_icon == "fa-gamepad") echo 'selected="selected"'; ?>>Gamepad</option>
                                            <option value="fa-keyboard-o" <?php if ($link3_icon == "fa-keyboard-o") echo 'selected="selected"'; ?>>Keyboard o</option>
                                            <option value="fa-flag-o" <?php if ($link3_icon == "fa-flag-o") echo 'selected="selected"'; ?>>Flag o</option>
                                            <option value="fa-flag-checkered" <?php if ($link3_icon == "fa-flag-checkered") echo 'selected="selected"'; ?>>Flag checkered</option>
                                            <option value="fa-terminal" <?php if ($link3_icon == "fa-terminal") echo 'selected="selected"'; ?>>Terminal</option>
                                            <option value="fa-code" <?php if ($link3_icon == "fa-code") echo 'selected="selected"'; ?>>Code</option>
                                            <option value="fa-reply-all" <?php if ($link3_icon == "fa-reply-all") echo 'selected="selected"'; ?>>Reply all</option>
                                            <option value="fa-mail-reply-all" <?php if ($link3_icon == "fa-mail-reply-all") echo 'selected="selected"'; ?>>Mail reply all</option>
                                            <option value="fa-star-half-empty" <?php if ($link3_icon == "fa-star-half-empty") echo 'selected="selected"'; ?>>Star half empty</option>
                                            <option value="fa-star-half-full" <?php if ($link3_icon == "fa-star-half-full") echo 'selected="selected"'; ?>>Star half full</option>
                                            <option value="fa-star-half-o" <?php if ($link3_icon == "fa-star-half-o") echo 'selected="selected"'; ?>>Star half o</option>
                                            <option value="fa-location-arrow" <?php if ($link3_icon == "fa-location-arrow") echo 'selected="selected"'; ?>>Location arrow</option>
                                            <option value="fa-crop" <?php if ($link3_icon == "fa-crop") echo 'selected="selected"'; ?>>Crop</option>
                                            <option value="fa-code-fork" <?php if ($link3_icon == "fa-code-fork") echo 'selected="selected"'; ?>>Code fork</option>
                                            <option value="fa-unlink" <?php if ($link3_icon == "fa-unlink") echo 'selected="selected"'; ?>>Unlink</option>
                                            <option value="fa-chain-broken" <?php if ($link3_icon == "fa-chain-broken") echo 'selected="selected"'; ?>>Chain broken</option>
                                            <option value="fa-question" <?php if ($link3_icon == "fa-question") echo 'selected="selected"'; ?>>Question</option>
                                            <option value="fa-info" <?php if ($link3_icon == "fa-info") echo 'selected="selected"'; ?>>Info</option>
                                            <option value="fa-exclamation" <?php if ($link3_icon == "fa-exclamation") echo 'selected="selected"'; ?>>Exclamation</option>
                                            <option value="fa-superscript" <?php if ($link3_icon == "fa-superscript") echo 'selected="selected"'; ?>>Superscript</option>
                                            <option value="fa-subscript" <?php if ($link3_icon == "fa-subscript") echo 'selected="selected"'; ?>>Subscript</option>
                                            <option value="fa-eraser" <?php if ($link3_icon == "fa-eraser") echo 'selected="selected"'; ?>>Eraser</option>
                                            <option value="fa-puzzle-piece" <?php if ($link3_icon == "fa-puzzle-piece") echo 'selected="selected"'; ?>>Puzzle piece</option>
                                            <option value="fa-microphone" <?php if ($link3_icon == "fa-microphone") echo 'selected="selected"'; ?>>Microphone</option>
                                            <option value="fa-microphone-slash" <?php if ($link3_icon == "fa-microphone-slash") echo 'selected="selected"'; ?>>Microphone slash</option>
                                            <option value="fa-shield" <?php if ($link3_icon == "fa-shield") echo 'selected="selected"'; ?>>Shield</option>
                                            <option value="fa-calendar-o" <?php if ($link3_icon == "fa-calendar-o") echo 'selected="selected"'; ?>>Calendar o</option>
                                            <option value="fa-fire-extinguisher" <?php if ($link3_icon == "fa-fire-extinguisher") echo 'selected="selected"'; ?>>Fire extinguisher</option>
                                            <option value="fa-rocket" <?php if ($link3_icon == "fa-rocket") echo 'selected="selected"'; ?>>Rocket</option>
                                            <option value="fa-maxcdn" <?php if ($link3_icon == "fa-maxcdn") echo 'selected="selected"'; ?>>Maxcdn</option>
                                            <option value="fa-chevron-circle-left" <?php if ($link3_icon == "fa-chevron-circle-left") echo 'selected="selected"'; ?>>Chevron circle left</option>
                                            <option value="fa-chevron-circle-right" <?php if ($link3_icon == "fa-chevron-circle-right") echo 'selected="selected"'; ?>>Chevron circle right</option>
                                            <option value="fa-chevron-circle-up" <?php if ($link3_icon == "fa-chevron-circle-up") echo 'selected="selected"'; ?>>Chevron circle up</option>
                                            <option value="fa-chevron-circle-down" <?php if ($link3_icon == "fa-chevron-circle-down") echo 'selected="selected"'; ?>>Chevron circle down</option>
                                            <option value="fa-html5" <?php if ($link3_icon == "fa-html5") echo 'selected="selected"'; ?>>Html5</option>
                                            <option value="fa-css3" <?php if ($link3_icon == "fa-css3") echo 'selected="selected"'; ?>>Css3</option>
                                            <option value="fa-anchor" <?php if ($link3_icon == "fa-anchor") echo 'selected="selected"'; ?>>Anchor</option>
                                            <option value="fa-unlock-alt" <?php if ($link3_icon == "fa-unlock-alt") echo 'selected="selected"'; ?>>Unlock alt</option>
                                            <option value="fa-bullseye" <?php if ($link3_icon == "fa-bullseye") echo 'selected="selected"'; ?>>Bullseye</option>
                                            <option value="fa-ellipsis-h" <?php if ($link3_icon == "fa-ellipsis-h") echo 'selected="selected"'; ?>>Ellipsis h</option>
                                            <option value="fa-ellipsis-v" <?php if ($link3_icon == "fa-ellipsis-v") echo 'selected="selected"'; ?>>Ellipsis v</option>
                                            <option value="fa-rss-square" <?php if ($link3_icon == "fa-rss-square") echo 'selected="selected"'; ?>>Rss square</option>
                                            <option value="fa-play-circle" <?php if ($link3_icon == "fa-play-circle") echo 'selected="selected"'; ?>>Play circle</option>
                                            <option value="fa-ticket" <?php if ($link3_icon == "fa-ticket") echo 'selected="selected"'; ?>>Ticket</option>
                                            <option value="fa-minus-square" <?php if ($link3_icon == "fa-minus-square") echo 'selected="selected"'; ?>>Minus square</option>
                                            <option value="fa-minus-square-o" <?php if ($link3_icon == "fa-minus-square-o") echo 'selected="selected"'; ?>>Minus square_o</option>
                                            <option value="fa-level-up" <?php if ($link3_icon == "fa-level-up") echo 'selected="selected"'; ?>>Level up</option>
                                            <option value="fa-level-down" <?php if ($link3_icon == "fa-level-down") echo 'selected="selected"'; ?>>Level down</option>
                                            <option value="fa-check-square" <?php if ($link3_icon == "fa-check-square") echo 'selected="selected"'; ?>>Check square</option>
                                            <option value="fa-pencil-square" <?php if ($link3_icon == "fa-pencil-square") echo 'selected="selected"'; ?>>Pencil square</option>
                                            <option value="fa-external-link-square" <?php if ($link3_icon == "fa-external-link-square") echo 'selected="selected"'; ?>>External link square</option>
                                            <option value="fa-share-square" <?php if ($link3_icon == "fa-share-square") echo 'selected="selected"'; ?>>Share square</option>
                                            <option value="fa-compass" <?php if ($link3_icon == "fa-compass") echo 'selected="selected"'; ?>>Compass</option>
                                            <option value="fa-toggle-down" <?php if ($link3_icon == "fa-toggle-down") echo 'selected="selected"'; ?>>Toggle down</option>
                                            <option value="fa-caret-square-o-down" <?php if ($link3_icon == "fa-caret-square-o-down") echo 'selected="selected"'; ?>>Caret square o down</option>
                                            <option value="fa-toggle-up" <?php if ($link3_icon == "fa-toggle-up") echo 'selected="selected"'; ?>>Toggle up</option>
                                            <option value="fa-caret-square-o-up" <?php if ($link3_icon == "fa-caret-square-o-up") echo 'selected="selected"'; ?>>Caret square o up</option>
                                            <option value="fa-toggle-right" <?php if ($link3_icon == "fa-toggle-right") echo 'selected="selected"'; ?>>Toggle right</option>
                                            <option value="fa-caret-square-o-right" <?php if ($link3_icon == "fa-caret-square-o-right") echo 'selected="selected"'; ?>>Caret square o right</option>
                                            <option value="fa-euro" <?php if ($link3_icon == "fa-euro") echo 'selected="selected"'; ?>>Euro</option>
                                            <option value="fa-eur" <?php if ($link3_icon == "fa-eur") echo 'selected="selected"'; ?>>Eur</option>
                                            <option value="fa-gbp" <?php if ($link3_icon == "fa-gbp") echo 'selected="selected"'; ?>>Gbp</option>
                                            <option value="fa-dollar" <?php if ($link3_icon == "fa-dollar") echo 'selected="selected"'; ?>>Dollar</option>
                                            <option value="fa-usd" <?php if ($link3_icon == "fa-usd") echo 'selected="selected"'; ?>>Usd</option>
                                            <option value="fa-rupee" <?php if ($link3_icon == "fa-rupee") echo 'selected="selected"'; ?>>Rupee</option>
                                            <option value="fa-inr" <?php if ($link3_icon == "fa-inr") echo 'selected="selected"'; ?>>Inr</option>
                                            <option value="fa-cny" <?php if ($link3_icon == "fa-cny") echo 'selected="selected"'; ?>>Cny</option>
                                            <option value="fa-rmb" <?php if ($link3_icon == "fa-rmb") echo 'selected="selected"'; ?>>Rmb</option>
                                            <option value="fa-yen" <?php if ($link3_icon == "fa-yen") echo 'selected="selected"'; ?>>Yen</option>
                                            <option value="fa-jpy" <?php if ($link3_icon == "fa-jpy") echo 'selected="selected"'; ?>>Jpy</option>
                                            <option value="fa-ruble" <?php if ($link3_icon == "fa-ruble") echo 'selected="selected"'; ?>>Ruble</option>
                                            <option value="fa-rouble" <?php if ($link3_icon == "fa-rouble") echo 'selected="selected"'; ?>>Rouble</option>
                                            <option value="fa-rub" <?php if ($link3_icon == "fa-rub") echo 'selected="selected"'; ?>>Rub</option>
                                            <option value="fa-won" <?php if ($link3_icon == "fa-won") echo 'selected="selected"'; ?>>Won</option>
                                            <option value="fa-krw" <?php if ($link3_icon == "fa-krw") echo 'selected="selected"'; ?>>Krw</option>
                                            <option value="fa-bitcoin" <?php if ($link3_icon == "fa-bitcoin") echo 'selected="selected"'; ?>>Bitcoin</option>
                                            <option value="fa-btc" <?php if ($link3_icon == "fa-btc") echo 'selected="selected"'; ?>>Btc</option>
                                            <option value="fa-file" <?php if ($link3_icon == "fa-file") echo 'selected="selected"'; ?>>File</option>
                                            <option value="fa-file-text" <?php if ($link3_icon == "fa-file-text") echo 'selected="selected"'; ?>>File text</option>
                                            <option value="fa-sort-alpha-asc" <?php if ($link3_icon == "fa-sort-alpha-asc") echo 'selected="selected"'; ?>>Sort alpha asc</option>
                                            <option value="fa-sort-alpha-desc" <?php if ($link3_icon == "fa-sort-alpha-desc") echo 'selected="selected"'; ?>>Sort alpha desc</option>
                                            <option value="fa-sort-amount-asc" <?php if ($link3_icon == "fa-sort-amount-asc") echo 'selected="selected"'; ?>>Sort amount asc</option>
                                            <option value="fa-sort-amount-desc" <?php if ($link3_icon == "fa-sort-amount-desc") echo 'selected="selected"'; ?>>Sort amount desc</option>
                                            <option value="fa-sort-numeric-asc" <?php if ($link3_icon == "fa-sort-numeric-asc") echo 'selected="selected"'; ?>>Sort numeric asc</option>
                                            <option value="fa-sort-numeric-desc" <?php if ($link3_icon == "fa-sort-numeric-desc") echo 'selected="selected"'; ?>>Sort numeric desc</option>
                                            <option value="fa-thumbs-up" <?php if ($link3_icon == "fa-thumbs-up") echo 'selected="selected"'; ?>>Thumbs up</option>
                                            <option value="fa-thumbs-down" <?php if ($link3_icon == "fa-thumbs-down") echo 'selected="selected"'; ?>>Thumbs down</option>
                                            <option value="fa-youtube-square" <?php if ($link3_icon == "fa-youtube-square") echo 'selected="selected"'; ?>>Youtube square</option>
                                            <option value="fa-youtube" <?php if ($link3_icon == "fa-youtube") echo 'selected="selected"'; ?>>Youtube</option>
                                            <option value="fa-xing" <?php if ($link3_icon == "fa-xing") echo 'selected="selected"'; ?>>Xing</option>
                                            <option value="fa-xing-square" <?php if ($link3_icon == "fa-xing-square") echo 'selected="selected"'; ?>>Xing square</option>
                                            <option value="fa-youtube-play" <?php if ($link3_icon == "fa-youtube-play") echo 'selected="selected"'; ?>>Youtube play</option>
                                            <option value="fa-dropbox" <?php if ($link3_icon == "fa-dropbox") echo 'selected="selected"'; ?>>Dropbox</option>
                                            <option value="fa-stack-overflow" <?php if ($link3_icon == "fa-stack-overflow") echo 'selected="selected"'; ?>>Stack overflow</option>
                                            <option value="fa-instagram" <?php if ($link3_icon == "fa-instagram") echo 'selected="selected"'; ?>>Instagram</option>
                                            <option value="fa-flickr" <?php if ($link3_icon == "fa-flickr") echo 'selected="selected"'; ?>>Flickr</option>
                                            <option value="fa-adn" <?php if ($link3_icon == "fa-adn") echo 'selected="selected"'; ?>>Adn</option>
                                            <option value="fa-bitbucket" <?php if ($link3_icon == "fa-bitbucket") echo 'selected="selected"'; ?>>Bitbucket</option>
                                            <option value="fa-bitbucket-square" <?php if ($link3_icon == "fa-bitbucket-square") echo 'selected="selected"'; ?>>Bitbucket square</option>
                                            <option value="fa-tumblr" <?php if ($link3_icon == "fa-tumblr") echo 'selected="selected"'; ?>>Tumblr</option>
                                            <option value="fa-tumblr-square" <?php if ($link3_icon == "fa-tumblr-square") echo 'selected="selected"'; ?>>Tumblr square</option>
                                            <option value="fa-long-arrow-down" <?php if ($link3_icon == "fa-long-arrow-down") echo 'selected="selected"'; ?>>Long arrow down</option>
                                            <option value="fa-long-arrow-up" <?php if ($link3_icon == "fa-long-arrow-up") echo 'selected="selected"'; ?>>Long arrow up</option>
                                            <option value="fa-long-arrow-left" <?php if ($link3_icon == "fa-long-arrow-left") echo 'selected="selected"'; ?>>Long arrow left</option>
                                            <option value="fa-long-arrow-right" <?php if ($link3_icon == "fa-long-arrow-right") echo 'selected="selected"'; ?>>Long arrow right</option>
                                            <option value="fa-apple" <?php if ($link3_icon == "fa-apple") echo 'selected="selected"'; ?>>Apple</option>
                                            <option value="fa-windows" <?php if ($link3_icon == "fa-windows") echo 'selected="selected"'; ?>>Windows</option>
                                            <option value="fa-android" <?php if ($link3_icon == "fa-android") echo 'selected="selected"'; ?>>Android</option>
                                            <option value="fa-linux" <?php if ($link3_icon == "fa-linux") echo 'selected="selected"'; ?>>Linux</option>
                                            <option value="fa-dribbble" <?php if ($link3_icon == "fa-dribbble") echo 'selected="selected"'; ?>>Dribbble</option>
                                            <option value="fa-skype" <?php if ($link3_icon == "fa-skype") echo 'selected="selected"'; ?>>Skype</option>
                                            <option value="fa-foursquare" <?php if ($link3_icon == "fa-foursquare") echo 'selected="selected"'; ?>>Foursquare</option>
                                            <option value="fa-trello" <?php if ($link3_icon == "fa-trello") echo 'selected="selected"'; ?>>Trello</option>
                                            <option value="fa-female" <?php if ($link3_icon == "fa-female") echo 'selected="selected"'; ?>>Female</option>
                                            <option value="fa-male" <?php if ($link3_icon == "fa-male") echo 'selected="selected"'; ?>>Male</option>
                                            <option value="fa-gittip" <?php if ($link3_icon == "fa-gittip") echo 'selected="selected"'; ?>>Gittip</option>
                                            <option value="fa-sun-o" <?php if ($link3_icon == "fa-sun-o") echo 'selected="selected"'; ?>>Sun o</option>
                                            <option value="fa-moon-o" <?php if ($link3_icon == "fa-moon-o") echo 'selected="selected"'; ?>>Moon o</option>
                                            <option value="fa-archive" <?php if ($link3_icon == "fa-archive") echo 'selected="selected"'; ?>>Archive</option>
                                            <option value="fa-bug" <?php if ($link3_icon == "fa-bug") echo 'selected="selected"'; ?>>Bug</option>
                                            <option value="fa-vk" <?php if ($link3_icon == "fa-vk") echo 'selected="selected"'; ?>>Vk</option>
                                            <option value="fa-weibo" <?php if ($link3_icon == "fa-weibo") echo 'selected="selected"'; ?>>Weibo</option>
                                            <option value="fa-renren" <?php if ($link3_icon == "fa-renren") echo 'selected="selected"'; ?>>Renren</option>
                                            <option value="fa-pagelines" <?php if ($link3_icon == "fa-pagelines") echo 'selected="selected"'; ?>>Pagelines</option>
                                            <option value="fa-stack-exchange" <?php if ($link3_icon == "fa-stack-exchange") echo 'selected="selected"'; ?>>Stack exchange</option>
                                            <option value="fa-arrow-circle-o-right" <?php if ($link3_icon == "fa-arrow-circle-o-right") echo 'selected="selected"'; ?>>Arrow circle o right</option>
                                            <option value="fa-arrow-circle-o-left" <?php if ($link3_icon == "fa-arrow-circle-o-left") echo 'selected="selected"'; ?>>Arrow circle o left</option>
                                            <option value="fa-toggle-left" <?php if ($link3_icon == "fa-toggle-left") echo 'selected="selected"'; ?>>Toggle left</option>
                                            <option value="fa-caret-square-o-left" <?php if ($link3_icon == "fa-caret-square-o-left") echo 'selected="selected"'; ?>>Caret square o left</option>
                                            <option value="fa-dot-circle-o" <?php if ($link3_icon == "fa-dot-circle-o") echo 'selected="selected"'; ?>>Dot circle o</option>
                                            <option value="fa-wheelchair" <?php if ($link3_icon == "fa-wheelchair") echo 'selected="selected"'; ?>>Wheelchair</option>
                                            <option value="fa-vimeo-square" <?php if ($link3_icon == "fa-vimeo-square") echo 'selected="selected"'; ?>>Vimeo square</option>
                                            <option value="fa-turkish-lira" <?php if ($link3_icon == "fa-turkish-lira") echo 'selected="selected"'; ?>>Turkish lira</option>
                                            <option value="fa-try" <?php if ($link3_icon == "fa-try") echo 'selected="selected"'; ?>>Try</option>
                                            <option value="fa-plus-square-o" <?php if ($link3_icon == "fa-plus-square-o") echo 'selected="selected"'; ?>>Plus square o</option>
                                        </select>
                                    </td>
                                <tr>

                                <tr>
                                    <td>
                                        <label><strong>Link 4:</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label>Enable&nbsp;&nbsp;<input type="checkbox" name="umom__opt[link4_enable]" value="1" <?php if ($link4_enable == 1) echo 'checked="checked"'; else echo ''; ?>></label> 
                                    </td>
                                    <td>
                                        <label>URL</label>
                                        <input type="text" name="umom__opt[link4_url]" value="<?php echo $link4_url; ?>" style="width: 350px;"/>
                                    </td>
                                    <td>
                                        <label>Type</label>
                                        <select name="umom__opt[link4_type]">
                                            <option value="_self" <?php if ($link4_type == "_self") echo 'selected="selected"'; ?>>Open in current window / frame</option>
                                            <option value="_blank" <?php if ($link4_type == "_blank") echo 'selected="selected"'; ?>>Open in new window</option>
                                            <option value="_parent" <?php if ($link4_type == "_parent") echo 'selected="selected"'; ?>>Open in parent window / frame</option>
                                            <option value="_top" <?php if ($link4_type == "_top") echo 'selected="selected"'; ?>>Open in top frame (replaces all frames)</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label>Icon</label>
                                        <select name="umom__opt[link4_icon]">
                                            <option value="fa-glass" <?php if ($link4_icon == "fa-glass") echo 'selected="selected"'; ?>>Glass</option>
                                            <option value="fa-music" <?php if ($link4_icon == "fa-music") echo 'selected="selected"'; ?>>Music</option>
                                            <option value="fa-search" <?php if ($link4_icon == "fa-search") echo 'selected="selected"'; ?>>Search</option>
                                            <option value="fa-envelope" <?php if ($link4_icon == "fa-envelope") echo 'selected="selected"'; ?>>Envelope</option>
                                            <option value="fa-heart" <?php if ($link4_icon == "fa-heart") echo 'selected="selected"'; ?>>Heart</option>
                                            <option value="fa-star" <?php if ($link4_icon == "fa-star") echo 'selected="selected"'; ?>>Star</option>
                                            <option value="fa-star-o" <?php if ($link4_icon == "fa-star-o") echo 'selected="selected"'; ?>>Star o</option>
                                            <option value="fa-user" <?php if ($link4_icon == "fa-user") echo 'selected="selected"'; ?>>User</option>
                                            <option value="fa-film" <?php if ($link4_icon == "fa-film") echo 'selected="selected"'; ?>>Film</option>
                                            <option value="fa-th-large" <?php if ($link4_icon == "fa-th-large") echo 'selected="selected"'; ?>>Th large</option>
                                            <option value="fa-th" <?php if ($link4_icon == "fa-th") echo 'selected="selected"'; ?>>th</option>
                                            <option value="fa-th-list" <?php if ($link4_icon == "fa-th-list") echo 'selected="selected"'; ?>>Th list</option>
                                            <option value="fa-check" <?php if ($link4_icon == "fa-check") echo 'selected="selected"'; ?>>Check</option>
                                            <option value="fa-times" <?php if ($link4_icon == "fa-times") echo 'selected="selected"'; ?>>Times</option>
                                            <option value="fa-search-plus" <?php if ($link4_icon == "fa-search-plus") echo 'selected="selected"'; ?>>Search plus</option>
                                            <option value="fa-search-minus" <?php if ($link4_icon == "fa-search-minus") echo 'selected="selected"'; ?>>Search minus</option>
                                            <option value="fa-power-off" <?php if ($link4_icon == "fa-power-off") echo 'selected="selected"'; ?>>Power off</option>
                                            <option value="fa-signal" <?php if ($link4_icon == "fa-signal") echo 'selected="selected"'; ?>>Signal</option>
                                            <option value="fa-gear" <?php if ($link4_icon == "fa-gear") echo 'selected="selected"'; ?>>Gear</option>
                                            <option value="fa-cog" <?php if ($link4_icon == "fa-cog") echo 'selected="selected"'; ?>>Cog</option>
                                            <option value="fa-trash-o" <?php if ($link4_icon == "fa-trash-o") echo 'selected="selected"'; ?>>Trash o</option>
                                            <option value="fa-home" <?php if ($link4_icon == "fa-home") echo 'selected="selected"'; ?>>Home</option>
                                            <option value="fa-file-o" <?php if ($link4_icon == "fa-file-o") echo 'selected="selected"'; ?>>File o</option>
                                            <option value="fa-clock-o" <?php if ($link4_icon == "fa-clock-o") echo 'selected="selected"'; ?>>Clock o</option>
                                            <option value="fa-road" <?php if ($link4_icon == "fa-road") echo 'selected="selected"'; ?>>Road</option>
                                            <option value="fa-download" <?php if ($link4_icon == "fa-download") echo 'selected="selected"'; ?>>Download</option>
                                            <option value="fa-arrow-circle-o-down" <?php if ($link4_icon == "fa-arrow-circle-o-down") echo 'selected="selected"'; ?>>Arrow circle o down</option>
                                            <option value="fa-arrow-circle-o-up" <?php if ($link4_icon == "fa-arrow-circle-o-up") echo 'selected="selected"'; ?>>Arrow circle o up</option>
                                            <option value="fa-inbox" <?php if ($link4_icon == "fa-inbox") echo 'selected="selected"'; ?>>Inbox</option>
                                            <option value="fa-play-circle-o" <?php if ($link4_icon == "fa-play-circle-o") echo 'selected="selected"'; ?>>Play circle_o</option>
                                            <option value="fa-rotate-right" <?php if ($link4_icon == "fa-rotate-right") echo 'selected="selected"'; ?>>Rotate right</option>
                                            <option value="fa-repeat" <?php if ($link4_icon == "fa-repeat") echo 'selected="selected"'; ?>>Repeat</option>
                                            <option value="fa-refresh" <?php if ($link4_icon == "fa-refresh") echo 'selected="selected"'; ?>>Refresh</option>
                                            <option value="fa-list-alt" <?php if ($link4_icon == "fa-list-alt") echo 'selected="selected"'; ?>>List alt</option>
                                            <option value="fa-lock" <?php if ($link4_icon == "fa-lock") echo 'selected="selected"'; ?>>Lock</option>
                                            <option value="fa-flag" <?php if ($link4_icon == "fa-flag") echo 'selected="selected"'; ?>>Flag</option>
                                            <option value="fa-headphones" <?php if ($link4_icon == "fa-headphones") echo 'selected="selected"'; ?>>Headphones</option>
                                            <option value="fa-volume-off" <?php if ($link4_icon == "fa-volume-off") echo 'selected="selected"'; ?>>Volume off</option>
                                            <option value="fa-volume-down" <?php if ($link4_icon == "fa-volume-down") echo 'selected="selected"'; ?>>Volume down</option>
                                            <option value="fa-volume-up" <?php if ($link4_icon == "fa-volume-up") echo 'selected="selected"'; ?>>Volume down</option>
                                            <option value="fa-qrcode" <?php if ($link4_icon == "fa-qrcode") echo 'selected="selected"'; ?>>Qrcode</option>
                                            <option value="fa-barcode" <?php if ($link4_icon == "fa-barcode") echo 'selected="selected"'; ?>>Barcode</option>
                                            <option value="fa-tag" <?php if ($link4_icon == "fa-tag") echo 'selected="selected"'; ?>>Tag</option>
                                            <option value="fa-tags" <?php if ($link4_icon == "fa-tags") echo 'selected="selected"'; ?>>Tags</option>
                                            <option value="fa-book" <?php if ($link4_icon == "fa-book") echo 'selected="selected"'; ?>>Book</option>
                                            <option value="fa-bookmark" <?php if ($link4_icon == "fa-bookmark") echo 'selected="selected"'; ?>>Bookmark</option>
                                            <option value="fa-print" <?php if ($link4_icon == "fa-print") echo 'selected="selected"'; ?>>Print</option>
                                            <option value="fa-camera" <?php if ($link4_icon == "fa-camera") echo 'selected="selected"'; ?>>Camera</option>
                                            <option value="fa-font" <?php if ($link4_icon == "fa-font") echo 'selected="selected"'; ?>>Font</option>
                                            <option value="fa-bold" <?php if ($link4_icon == "fa-bold") echo 'selected="selected"'; ?>>Bold</option>
                                            <option value="fa-italic" <?php if ($link4_icon == "fa-italic") echo 'selected="selected"'; ?>>Italic</option>
                                            <option value="fa-text-height" <?php if ($link4_icon == "fa-text-height") echo 'selected="selected"'; ?>>Text height</option>
                                            <option value="fa-text-width" <?php if ($link4_icon == "fa-text-width") echo 'selected="selected"'; ?>>Text width</option>
                                            <option value="fa-align-left" <?php if ($link4_icon == "fa-align-left") echo 'selected="selected"'; ?>>Align left</option>
                                            <option value="fa-align-center" <?php if ($link4_icon == "fa-align-center") echo 'selected="selected"'; ?>>Align center</option>
                                            <option value="fa-align-right" <?php if ($link4_icon == "fa-align-right") echo 'selected="selected"'; ?>>Align right</option>
                                            <option value="fa-align-justify" <?php if ($link4_icon == "fa-align-justify") echo 'selected="selected"'; ?>>Align justify</option>
                                            <option value="fa-list" <?php if ($link4_icon == "fa-list") echo 'selected="selected"'; ?>>List</option>
                                            <option value="fa-dedent" <?php if ($link4_icon == "fa-dedent") echo 'selected="selected"'; ?>>Dedent</option>
                                            <option value="fa-outdent" <?php if ($link4_icon == "fa-outdent") echo 'selected="selected"'; ?>>Outdent</option>
                                            <option value="fa-indent" <?php if ($link4_icon == "fa-indent") echo 'selected="selected"'; ?>>Indent</option>
                                            <option value="fa-video-camera" <?php if ($link4_icon == "fa-video-camera") echo 'selected="selected"'; ?>>Video camera</option>
                                            <option value="fa-picture-o" <?php if ($link4_icon == "fa-picture-o") echo 'selected="selected"'; ?>>Picture o</option>
                                            <option value="fa-pencil" <?php if ($link4_icon == "fa-pencil") echo 'selected="selected"'; ?>>Pencil</option>
                                            <option value="fa-map-marker" <?php if ($link4_icon == "fa-map-marker") echo 'selected="selected"'; ?>>Map marker</option>
                                            <option value="fa-adjust" <?php if ($link4_icon == "fa-adjust") echo 'selected="selected"'; ?>>Adjust</option>
                                            <option value="fa-tint" <?php if ($link4_icon == "fa-tint") echo 'selected="selected"'; ?>>Tint</option>
                                            <option value="fa-edit" <?php if ($link4_icon == "fa-edit") echo 'selected="selected"'; ?>>Edit</option>
                                            <option value="fa-pencil-square-o" <?php if ($link4_icon == "fa-pencil-square-o") echo 'selected="selected"'; ?>>Pencil square o</option>
                                            <option value="fa-share-square-o" <?php if ($link4_icon == "fa-share-square-o") echo 'selected="selected"'; ?>>Share square o</option>
                                            <option value="fa-check-square-o" <?php if ($link4_icon == "fa-check-square-o") echo 'selected="selected"'; ?>>Check square o</option>
                                            <option value="fa-arrows" <?php if ($link4_icon == "fa-arrows") echo 'selected="selected"'; ?>>Arrows</option>
                                            <option value="fa-step-backward" <?php if ($link4_icon == "fa-step-backward") echo 'selected="selected"'; ?>>Step backward</option>
                                            <option value="fa-fast-backward" <?php if ($link4_icon == "fa-fast-backward") echo 'selected="selected"'; ?>>Fast backward</option>
                                            <option value="fa-backward" <?php if ($link4_icon == "fa-backward") echo 'selected="selected"'; ?>>Backward</option>
                                            <option value="fa-play" <?php if ($link4_icon == "fa-play") echo 'selected="selected"'; ?>>Play</option>
                                            <option value="fa-pause" <?php if ($link4_icon == "fa-pause") echo 'selected="selected"'; ?>>Pause</option>
                                            <option value="fa-stop" <?php if ($link4_icon == "fa-stop") echo 'selected="selected"'; ?>>Stop</option>
                                            <option value="fa-forward" <?php if ($link4_icon == "fa-forward") echo 'selected="selected"'; ?>>Forward</option>
                                            <option value="fa-fast-forward" <?php if ($link4_icon == "fa-fast-forward") echo 'selected="selected"'; ?>>Fast forward</option>
                                            <option value="fa-step-forward" <?php if ($link4_icon == "fa-step-forward") echo 'selected="selected"'; ?>>Step forward</option>
                                            <option value="fa-eject" <?php if ($link4_icon == "fa-eject") echo 'selected="selected"'; ?>>Eject</option>
                                            <option value="fa-chevron-left" <?php if ($link4_icon == "fa-chevron-left") echo 'selected="selected"'; ?>>Chevron left</option>
                                            <option value="fa-chevron-right" <?php if ($link4_icon == "fa-chevron-right") echo 'selected="selected"'; ?>>Chevron right</option>
                                            <option value="fa-plus-circle" <?php if ($link4_icon == "fa-plus-circle") echo 'selected="selected"'; ?>>Plus circle</option>
                                            <option value="fa-minus-circle" <?php if ($link4_icon == "fa-minus-circle") echo 'selected="selected"'; ?>>Minus circle</option>
                                            <option value="fa-times-circle" <?php if ($link4_icon == "fa-times-circle") echo 'selected="selected"'; ?>>Times circle</option>
                                            <option value="fa-check-circle" <?php if ($link4_icon == "fa-check-circle") echo 'selected="selected"'; ?>>Check circle</option>
                                            <option value="fa-question-circle" <?php if ($link4_icon == "fa-question-circle") echo 'selected="selected"'; ?>>Question circle</option>
                                            <option value="fa-info-circle" <?php if ($link4_icon == "fa-info-circle") echo 'selected="selected"'; ?>>Info circle</option>
                                            <option value="fa-crosshairs" <?php if ($link4_icon == "fa-crosshairs") echo 'selected="selected"'; ?>>Crosshairs</option>
                                            <option value="fa-times-circle-o" <?php if ($link4_icon == "fa-times-circle-o") echo 'selected="selected"'; ?>>Times circle o</option>
                                            <option value="fa-check-circle-o" <?php if ($link4_icon == "fa-check-circle-o") echo 'selected="selected"'; ?>>Check circle o</option>
                                            <option value="fa-ban" <?php if ($link4_icon == "fa-ban") echo 'selected="selected"'; ?>>Ban</option>
                                            <option value="fa-arrow-left" <?php if ($link4_icon == "fa-arrow-left") echo 'selected="selected"'; ?>>Arrow left</option>
                                            <option value="fa-arrow-right" <?php if ($link4_icon == "fa-arrow-right") echo 'selected="selected"'; ?>>Arrow right</option>
                                            <option value="fa-arrow-up" <?php if ($link4_icon == "fa-arrow-up") echo 'selected="selected"'; ?>>Arrow up</option>
                                            <option value="fa-arrow-down" <?php if ($link4_icon == "fa-arrow-down") echo 'selected="selected"'; ?>>Arrow down</option>
                                            <option value="fa-mail-forward" <?php if ($link4_icon == "fa-mail-forward") echo 'selected="selected"'; ?>>Mail forward</option>
                                            <option value="fa-share" <?php if ($link4_icon == "fa-share") echo 'selected="selected"'; ?>>Share</option>
                                            <option value="fa-expand" <?php if ($link4_icon == "fa-expand") echo 'selected="selected"'; ?>>Expand</option>
                                            <option value="fa-compress" <?php if ($link4_icon == "fa-compress") echo 'selected="selected"'; ?>>Compress</option>
                                            <option value="fa-plus" <?php if ($link4_icon == "fa-plus") echo 'selected="selected"'; ?>>Plus</option>
                                            <option value="fa-minus" <?php if ($link4_icon == "fa-minus") echo 'selected="selected"'; ?>>Minus</option>
                                            <option value="fa-asterisk" <?php if ($link4_icon == "fa-asterisk") echo 'selected="selected"'; ?>>Asterisk</option>
                                            <option value="fa-exclamation-circle" <?php if ($link4_icon == "fa-exclamation-circle") echo 'selected="selected"'; ?>>Exclamation circle</option>
                                            <option value="fa-gift" <?php if ($link4_icon == "fa-gift") echo 'selected="selected"'; ?>>Gift</option>
                                            <option value="fa-leaf" <?php if ($link4_icon == "fa-leaf") echo 'selected="selected"'; ?>>Leaf</option>
                                            <option value="fa-fire" <?php if ($link4_icon == "fa-fire") echo 'selected="selected"'; ?>>Fire</option>
                                            <option value="fa-eye" <?php if ($link4_icon == "fa-eye") echo 'selected="selected"'; ?>>Eye</option>
                                            <option value="fa-eye-slash" <?php if ($link4_icon == "fa-eye-slash") echo 'selected="selected"'; ?>>Eye slash</option>
                                            <option value="fa-warning" <?php if ($link4_icon == "fa-warning") echo 'selected="selected"'; ?>>Warning</option>
                                            <option value="fa-exclamation-triangle" <?php if ($link4_icon == "fa-exclamation-triangle") echo 'selected="selected"'; ?>>Exclamation triangle</option>
                                            <option value="fa-plane" <?php if ($link4_icon == "fa-plane") echo 'selected="selected"'; ?>>Plane</option>
                                            <option value="fa-calendar" <?php if ($link4_icon == "fa-calendar") echo 'selected="selected"'; ?>>Calendar</option>
                                            <option value="fa-random" <?php if ($link4_icon == "fa-random") echo 'selected="selected"'; ?>>Random</option>
                                            <option value="fa-comment" <?php if ($link4_icon == "fa-comment") echo 'selected="selected"'; ?>>Comment</option>
                                            <option value="fa-magnet" <?php if ($link4_icon == "fa-magnet") echo 'selected="selected"'; ?>>Magnet</option>
                                            <option value="fa-chevron-up" <?php if ($link4_icon == "fa-chevron-up") echo 'selected="selected"'; ?>>Chevron up</option>
                                            <option value="fa-chevron-down" <?php if ($link4_icon == "fa-chevron-down") echo 'selected="selected"'; ?>>Chevron down</option>
                                            <option value="fa-retweet" <?php if ($link4_icon == "fa-retweet") echo 'selected="selected"'; ?>>Retweet</option>
                                            <option value="fa-shopping-cart" <?php if ($link4_icon == "fa-shopping-cart") echo 'selected="selected"'; ?>>Shopping cart</option>
                                            <option value="fa-folder" <?php if ($link4_icon == "fa-folder") echo 'selected="selected"'; ?>>Folder</option>
                                            <option value="fa-folder-open" <?php if ($link4_icon == "fa-folder-open") echo 'selected="selected"'; ?>>Folder open</option>
                                            <option value="fa-arrows-v" <?php if ($link4_icon == "fa-arrows-v") echo 'selected="selected"'; ?>>Arrows v</option>
                                            <option value="fa-arrows-h" <?php if ($link4_icon == "fa-arrows-h") echo 'selected="selected"'; ?>>Arrows h</option>
                                            <option value="fa-bar-chart-o" <?php if ($link4_icon == "fa-bar-chart-o") echo 'selected="selected"'; ?>>Bar chart o</option>
                                            <option value="fa-twitter-square" <?php if ($link4_icon == "fa-twitter-square") echo 'selected="selected"'; ?>>Twitter square</option>
                                            <option value="fa-facebook-square" <?php if ($link4_icon == "fa-facebook-square") echo 'selected="selected"'; ?>>Facebook square</option>
                                            <option value="fa-camera-retro" <?php if ($link4_icon == "fa-camera-retro") echo 'selected="selected"'; ?>>Camera retro</option>
                                            <option value="fa-key" <?php if ($link4_icon == "fa-key") echo 'selected="selected"'; ?>>Key</option>
                                            <option value="fa-gears" <?php if ($link4_icon == "fa-gears") echo 'selected="selected"'; ?>>Gears</option>
                                            <option value="fa-cogs" <?php if ($link4_icon == "fa-cogs") echo 'selected="selected"'; ?>>Cogs</option>
                                            <option value="fa-comments" <?php if ($link4_icon == "fa-comments") echo 'selected="selected"'; ?>>Comments</option>
                                            <option value="fa-thumbs-o-up" <?php if ($link4_icon == "fa-thumbs-o-up") echo 'selected="selected"'; ?>>Thumbs o up</option>
                                            <option value="fa-thumbs-o-down" <?php if ($link4_icon == "fa-thumbs-o-down") echo 'selected="selected"'; ?>>Thumbs o down</option>
                                            <option value="fa-star-half" <?php if ($link4_icon == "fa-star-half") echo 'selected="selected"'; ?>>Star half</option>
                                            <option value="fa-heart-o" <?php if ($link4_icon == "fa-heart-o") echo 'selected="selected"'; ?>>Heart o</option>
                                            <option value="fa-sign-out" <?php if ($link4_icon == "fa-sign-out") echo 'selected="selected"'; ?>>Sign out</option>
                                            <option value="fa-linkedin-square" <?php if ($link4_icon == "fa-linkedin-square") echo 'selected="selected"'; ?>>Linkedin square</option>
                                            <option value="fa-thumb-tack" <?php if ($link4_icon == "fa-thumb-tack") echo 'selected="selected"'; ?>>Thumb tack</option>
                                            <option value="fa-external-link" <?php if ($link4_icon == "fa-external-link") echo 'selected="selected"'; ?>>External link</option>
                                            <option value="fa-sign-in" <?php if ($link4_icon == "fa-sign-in") echo 'selected="selected"'; ?>>Sign in</option>
                                            <option value="fa-trophy" <?php if ($link4_icon == "fa-trophy") echo 'selected="selected"'; ?>>Trophy</option>
                                            <option value="fa-github-square" <?php if ($link4_icon == "fa-github-square") echo 'selected="selected"'; ?>>Github square</option>
                                            <option value="fa-upload" <?php if ($link4_icon == "fa-upload") echo 'selected="selected"'; ?>>Upload</option>
                                            <option value="fa-lemon-o" <?php if ($link4_icon == "fa-lemon-o") echo 'selected="selected"'; ?>>Lemon o</option>
                                            <option value="fa-phone" <?php if ($link4_icon == "fa-phone") echo 'selected="selected"'; ?>>Phone</option>
                                            <option value="fa-square-o" <?php if ($link4_icon == "fa-square-o") echo 'selected="selected"'; ?>>Square o</option>
                                            <option value="fa-bookmark-o" <?php if ($link4_icon == "fa-bookmark-o") echo 'selected="selected"'; ?>>Bookmark o</option>
                                            <option value="fa-phone-square" <?php if ($link4_icon == "fa-phone-square") echo 'selected="selected"'; ?>>Phone square</option>
                                            <option value="fa-twitter" <?php if ($link4_icon == "fa-twitter") echo 'selected="selected"'; ?>>Twitter</option>
                                            <option value="fa-facebook" <?php if ($link4_icon == "fa-facebook") echo 'selected="selected"'; ?>>Facebook</option>
                                            <option value="fa-github" <?php if ($link4_icon == "fa-github") echo 'selected="selected"'; ?>>Github</option>
                                            <option value="fa-unlock" <?php if ($link4_icon == "fa-unlock") echo 'selected="selected"'; ?>>Unlock</option>
                                            <option value="fa-credit-card" <?php if ($link4_icon == "fa-credit-card") echo 'selected="selected"'; ?>>Credit card</option>
                                            <option value="fa-rss" <?php if ($link4_icon == "fa-rss") echo 'selected="selected"'; ?>>Rss</option>
                                            <option value="fa-hdd-o" <?php if ($link4_icon == "fa-hdd-o") echo 'selected="selected"'; ?>>Hdd o</option>
                                            <option value="fa-bullhorn" <?php if ($link4_icon == "fa-bullhorn") echo 'selected="selected"'; ?>>Bullhorn</option>
                                            <option value="fa-bell" <?php if ($link4_icon == "fa-bell") echo 'selected="selected"'; ?>>Bell</option>
                                            <option value="fa-certificate" <?php if ($link4_icon == "fa-certificate") echo 'selected="selected"'; ?>>Certificate</option>
                                            <option value="fa-hand-o-right" <?php if ($link4_icon == "fa-hand-o-right") echo 'selected="selected"'; ?>>Hand o right</option>
                                            <option value="fa-hand-o-left" <?php if ($link4_icon == "fa-hand-o-left") echo 'selected="selected"'; ?>>Hand o left</option>
                                            <option value="fa-hand-o-up" <?php if ($link4_icon == "fa-hand-o-up") echo 'selected="selected"'; ?>>Hand o up</option>
                                            <option value="fa-hand-o-down" <?php if ($link4_icon == "fa-hand-o-down") echo 'selected="selected"'; ?>>Hand o down</option>
                                            <option value="fa-arrow-circle-left" <?php if ($link4_icon == "fa-arrow-circle-left") echo 'selected="selected"'; ?>>Arrow circle left</option>
                                            <option value="fa-arrow-circle-right" <?php if ($link4_icon == "fa-arrow-circle-right") echo 'selected="selected"'; ?>>Arrow circle right</option>
                                            <option value="fa-arrow-circle-up" <?php if ($link4_icon == "fa-arrow-circle-up") echo 'selected="selected"'; ?>>Arrow circle up</option>
                                            <option value="fa-arrow-circle-down" <?php if ($link4_icon == "fa-arrow-circle-down") echo 'selected="selected"'; ?>>Arrow circle down</option>
                                            <option value="fa-globe" <?php if ($link4_icon == "fa-globe") echo 'selected="selected"'; ?>>Globe</option>
                                            <option value="fa-wrench" <?php if ($link4_icon == "fa-wrench") echo 'selected="selected"'; ?>>Wrench</option>
                                            <option value="fa-tasks" <?php if ($link4_icon == "fa-tasks") echo 'selected="selected"'; ?>>Tasks</option>
                                            <option value="fa-filter" <?php if ($link4_icon == "fa-filter") echo 'selected="selected"'; ?>>Filter</option>
                                            <option value="fa-briefcase" <?php if ($link4_icon == "fa-briefcase") echo 'selected="selected"'; ?>>Briefcase</option>
                                            <option value="fa-arrows-alt" <?php if ($link4_icon == "fa-arrows-alt") echo 'selected="selected"'; ?>>Arrows alt</option>
                                            <option value="fa-group" <?php if ($link4_icon == "fa-group") echo 'selected="selected"'; ?>>Group</option>
                                            <option value="fa-users" <?php if ($link4_icon == "fa-users") echo 'selected="selected"'; ?>>Users</option>
                                            <option value="fa-chain" <?php if ($link4_icon == "fa-chain") echo 'selected="selected"'; ?>>Chain</option>
                                            <option value="fa-link" <?php if ($link4_icon == "fa-link") echo 'selected="selected"'; ?>>Link</option>
                                            <option value="fa-cloud" <?php if ($link4_icon == "fa-cloud") echo 'selected="selected"'; ?>>Cloud</option>
                                            <option value="fa-flask" <?php if ($link4_icon == "fa-flask") echo 'selected="selected"'; ?>>Flask</option>
                                            <option value="fa-cut" <?php if ($link4_icon == "fa-cut") echo 'selected="selected"'; ?>>Cut</option>
                                            <option value="fa-scissors" <?php if ($link4_icon == "fa-scissors") echo 'selected="selected"'; ?>>Scissors</option>
                                            <option value="fa-copy" <?php if ($link4_icon == "fa-copy") echo 'selected="selected"'; ?>>Copy</option>
                                            <option value="fa-files-o" <?php if ($link4_icon == "fa-files-o") echo 'selected="selected"'; ?>>Files o</option>
                                            <option value="fa-paperclip" <?php if ($link4_icon == "fa-paperclip") echo 'selected="selected"'; ?>>Paperclip</option>
                                            <option value="fa-save" <?php if ($link4_icon == "fa-save") echo 'selected="selected"'; ?>>Save</option>
                                            <option value="fa-floppy-o" <?php if ($link4_icon == "fa-floppy-o") echo 'selected="selected"'; ?>>Floppy o</option>
                                            <option value="fa-square" <?php if ($link4_icon == "fa-square") echo 'selected="selected"'; ?>>Square</option>
                                            <option value="fa-bars" <?php if ($link4_icon == "fa-bars") echo 'selected="selected"'; ?>>Bars</option>
                                            <option value="fa-list-ul" <?php if ($link4_icon == "fa-list-ul") echo 'selected="selected"'; ?>>List ul</option>
                                            <option value="fa-list-ol" <?php if ($link4_icon == "fa-list-ol") echo 'selected="selected"'; ?>>List ol</option>
                                            <option value="fa-strikethrough" <?php if ($link4_icon == "fa-strikethrough") echo 'selected="selected"'; ?>>Strikethrough</option>
                                            <option value="fa-underline" <?php if ($link4_icon == "fa-underline") echo 'selected="selected"'; ?>>Underline</option>
                                            <option value="fa-table" <?php if ($link4_icon == "fa-table") echo 'selected="selected"'; ?>>Table</option>
                                            <option value="fa-magic" <?php if ($link4_icon == "fa-magic") echo 'selected="selected"'; ?>>Magic</option>
                                            <option value="fa-truck" <?php if ($link4_icon == "fa-truck") echo 'selected="selected"'; ?>>Truck</option>
                                            <option value="fa-pinterest" <?php if ($link4_icon == "fa-pinterest") echo 'selected="selected"'; ?>>Pinterest</option>
                                            <option value="fa-pinterest-square" <?php if ($link4_icon == "fa-pinterest-square") echo 'selected="selected"'; ?>>Pinterest square</option>
                                            <option value="fa-google-plus-square" <?php if ($link4_icon == "fa-google-plus-square") echo 'selected="selected"'; ?>>Google plus square</option>
                                            <option value="fa-google-plus" <?php if ($link4_icon == "fa-google-plus") echo 'selected="selected"'; ?>>Google plus</option>
                                            <option value="fa-money" <?php if ($link4_icon == "fa-money") echo 'selected="selected"'; ?>>Money</option>
                                            <option value="fa-caret-down" <?php if ($link4_icon == "fa-caret-down") echo 'selected="selected"'; ?>>Caret down</option>
                                            <option value="fa-caret-up" <?php if ($link4_icon == "fa-caret-up") echo 'selected="selected"'; ?>>Caret up</option>
                                            <option value="fa-caret-left" <?php if ($link4_icon == "fa-caret-left") echo 'selected="selected"'; ?>>Caret left</option>
                                            <option value="fa-caret-right" <?php if ($link4_icon == "fa-caret-right") echo 'selected="selected"'; ?>>Caret right</option>
                                            <option value="fa-columns" <?php if ($link4_icon == "fa-columns") echo 'selected="selected"'; ?>>Columns</option>
                                            <option value="fa-unsorted" <?php if ($link4_icon == "fa-unsorted") echo 'selected="selected"'; ?>>Unsorted</option>
                                            <option value="fa-sort" <?php if ($link4_icon == "fa-sort") echo 'selected="selected"'; ?>>Sort</option>
                                            <option value="fa-sort-down" <?php if ($link4_icon == "fa-sort-down") echo 'selected="selected"'; ?>>Sort down</option>
                                            <option value="fa-sort-asc" <?php if ($link4_icon == "fa-sort-asc") echo 'selected="selected"'; ?>>Sort asc</option>
                                            <option value="fa-sort-up" <?php if ($link4_icon == "fa-sort-up") echo 'selected="selected"'; ?>>Sort up</option>
                                            <option value="fa-sort-desc" <?php if ($link4_icon == "fa-sort-desc") echo 'selected="selected"'; ?>>Sort desc</option>
                                            <option value="fa-envelope" <?php if ($link4_icon == "fa-envelope") echo 'selected="selected"'; ?>>Envelope</option>
                                            <option value="fa-linkedin" <?php if ($link4_icon == "fa-linkedin") echo 'selected="selected"'; ?>>Linkedin</option>
                                            <option value="fa-rotate-left" <?php if ($link4_icon == "fa-rotate-left") echo 'selected="selected"'; ?>>Rotate left</option>
                                            <option value="fa-undo" <?php if ($link4_icon == "fa-undo") echo 'selected="selected"'; ?>>Undo</option>
                                            <option value="fa-legal" <?php if ($link4_icon == "fa-legal") echo 'selected="selected"'; ?>>Legal</option>
                                            <option value="fa-gavel" <?php if ($link4_icon == "fa-gavel") echo 'selected="selected"'; ?>>Gavel</option>
                                            <option value="fa-dashboard" <?php if ($link4_icon == "fa-dashboard") echo 'selected="selected"'; ?>>Dashboard</option>
                                            <option value="fa-tachometer" <?php if ($link4_icon == "fa-tachometer") echo 'selected="selected"'; ?>>Tachometer</option>
                                            <option value="fa-comment-o" <?php if ($link4_icon == "fa-comment-o") echo 'selected="selected"'; ?>>Comment o</option>
                                            <option value="fa-comments-o" <?php if ($link4_icon == "fa-comments-o") echo 'selected="selected"'; ?>>Comments o</option>
                                            <option value="fa-flash" <?php if ($link4_icon == "fa-flash") echo 'selected="selected"'; ?>>Flash</option>
                                            <option value="fa-bolt" <?php if ($link4_icon == "fa-bolt") echo 'selected="selected"'; ?>>Bolt</option>
                                            <option value="fa-sitemap" <?php if ($link4_icon == "fa-sitemap") echo 'selected="selected"'; ?>>Sitemap</option>
                                            <option value="fa-umbrella" <?php if ($link4_icon == "fa-umbrella") echo 'selected="selected"'; ?>>Umbrella</option>
                                            <option value="fa-paste" <?php if ($link4_icon == "fa-paste") echo 'selected="selected"'; ?>>Paste</option>
                                            <option value="fa-clipboard" <?php if ($link4_icon == "fa-clipboard") echo 'selected="selected"'; ?>>Clipboard</option>
                                            <option value="fa-lightbulb-o" <?php if ($link4_icon == "fa-lightbulb-o") echo 'selected="selected"'; ?>>Lightbulb o</option>
                                            <option value="fa-exchange" <?php if ($link4_icon == "fa-exchange") echo 'selected="selected"'; ?>>Exchange</option>
                                            <option value="fa-cloud-download" <?php if ($link4_icon == "fa-cloud-download") echo 'selected="selected"'; ?>>Cloud download</option>
                                            <option value="fa-cloud-upload" <?php if ($link4_icon == "fa-cloud-upload") echo 'selected="selected"'; ?>>Cloud upload</option>
                                            <option value="fa-user-md" <?php if ($link4_icon == "fa-user-md") echo 'selected="selected"'; ?>>User md</option>
                                            <option value="fa-stethoscope" <?php if ($link4_icon == "fa-stethoscope") echo 'selected="selected"'; ?>>Stethoscope</option>
                                            <option value="fa-suitcase" <?php if ($link4_icon == "fa-suitcase") echo 'selected="selected"'; ?>>Suitcase</option>
                                            <option value="fa-bell-o" <?php if ($link4_icon == "fa-bell-o") echo 'selected="selected"'; ?>>Bell_o</option>
                                            <option value="fa-coffee" <?php if ($link4_icon == "fa-coffee") echo 'selected="selected"'; ?>>Coffee</option>
                                            <option value="fa-cutlery" <?php if ($link4_icon == "fa-cutlery") echo 'selected="selected"'; ?>>Cutlery</option>
                                            <option value="fa-file-text-o" <?php if ($link4_icon == "fa-file-text-o") echo 'selected="selected"'; ?>>File text o</option>
                                            <option value="fa-building-o" <?php if ($link4_icon == "fa-building-o") echo 'selected="selected"'; ?>>Building o</option>
                                            <option value="fa-hospital-o" <?php if ($link4_icon == "fa-hospital-o") echo 'selected="selected"'; ?>>Hospital o</option>
                                            <option value="fa-ambulance" <?php if ($link4_icon == "fa-ambulance") echo 'selected="selected"'; ?>>Ambulance</option>
                                            <option value="fa-medkit" <?php if ($link4_icon == "fa-medkit") echo 'selected="selected"'; ?>>Medkit</option>
                                            <option value="fa-fighter-jet" <?php if ($link4_icon == "fa-fighter-jet") echo 'selected="selected"'; ?>>Fighter jet</option>
                                            <option value="fa-beer" <?php if ($link4_icon == "fa-beer") echo 'selected="selected"'; ?>>Beer</option>
                                            <option value="fa-h-square" <?php if ($link4_icon == "fa-h-square") echo 'selected="selected"'; ?>>H square</option>
                                            <option value="fa-plus-square" <?php if ($link4_icon == "fa-plus-square") echo 'selected="selected"'; ?>>Plus square</option>
                                            <option value="fa-angle-double-left" <?php if ($link4_icon == "fa-angle-double-left") echo 'selected="selected"'; ?>>Angle double left</option>
                                            <option value="fa-angle-double-right" <?php if ($link4_icon == "fa-angle-double-right") echo 'selected="selected"'; ?>>Angle double right</option>
                                            <option value="fa-angle-double-up" <?php if ($link4_icon == "fa-angle-double-up") echo 'selected="selected"'; ?>>Angle double up</option>
                                            <option value="fa-angle-double-down" <?php if ($link4_icon == "fa-angle-double-down") echo 'selected="selected"'; ?>>Angle double down</option>
                                            <option value="fa-angle-left" <?php if ($link4_icon == "fa-angle-left") echo 'selected="selected"'; ?>>Angle left</option>
                                            <option value="fa-angle-right" <?php if ($link4_icon == "fa-angle-right") echo 'selected="selected"'; ?>>Angle right</option>
                                            <option value="fa-angle-up" <?php if ($link4_icon == "fa-angle-up") echo 'selected="selected"'; ?>>Angle up</option>
                                            <option value="fa-angle-down" <?php if ($link4_icon == "fa-angle-down") echo 'selected="selected"'; ?>>Angle down</option>
                                            <option value="fa-desktop" <?php if ($link4_icon == "fa-desktop") echo 'selected="selected"'; ?>>Desktop</option>
                                            <option value="fa-laptop" <?php if ($link4_icon == "fa-laptop") echo 'selected="selected"'; ?>>Laptop</option>
                                            <option value="fa-tablet" <?php if ($link4_icon == "fa-tablet") echo 'selected="selected"'; ?>>Tablet</option>
                                            <option value="fa-mobile-phone" <?php if ($link4_icon == "fa-mobile-phone") echo 'selected="selected"'; ?>>Mobile phone</option>
                                            <option value="fa-mobile" <?php if ($link4_icon == "fa-mobile") echo 'selected="selected"'; ?>>Mobile</option>
                                            <option value="fa-circle-o" <?php if ($link4_icon == "fa-circle-o") echo 'selected="selected"'; ?>>Circle o</option>
                                            <option value="fa-quote-left" <?php if ($link4_icon == "fa-quote-left") echo 'selected="selected"'; ?>>Quote left</option>
                                            <option value="fa-quote-right" <?php if ($link4_icon == "fa-quote-right") echo 'selected="selected"'; ?>>Quote right</option>
                                            <option value="fa-spinner" <?php if ($link4_icon == "fa-spinner") echo 'selected="selected"'; ?>>Spinner</option>
                                            <option value="fa-circle" <?php if ($link4_icon == "fa-circle") echo 'selected="selected"'; ?>>Circle</option>
                                            <option value="fa-mail-reply" <?php if ($link4_icon == "fa-mail-reply") echo 'selected="selected"'; ?>>Mail reply</option>
                                            <option value="fa-reply" <?php if ($link4_icon == "fa-reply") echo 'selected="selected"'; ?>>Reply</option>
                                            <option value="fa-github-alt" <?php if ($link4_icon == "fa-github-alt") echo 'selected="selected"'; ?>>Github alt</option>
                                            <option value="fa-folder-o" <?php if ($link4_icon == "fa-folder-o") echo 'selected="selected"'; ?>>Folder o</option>
                                            <option value="fa-folder-open-o" <?php if ($link4_icon == "fa-folder-open-o") echo 'selected="selected"'; ?>>Folder open o</option>
                                            <option value="fa-smile-o" <?php if ($link4_icon == "fa-smile-o") echo 'selected="selected"'; ?>>Smile o</option>
                                            <option value="fa-frown-o" <?php if ($link4_icon == "fa-frown-o") echo 'selected="selected"'; ?>>Frown o</option>
                                            <option value="fa-meh-o" <?php if ($link4_icon == "fa-meh-o") echo 'selected="selected"'; ?>>Meh o</option>
                                            <option value="fa-gamepad" <?php if ($link4_icon == "fa-gamepad") echo 'selected="selected"'; ?>>Gamepad</option>
                                            <option value="fa-keyboard-o" <?php if ($link4_icon == "fa-keyboard-o") echo 'selected="selected"'; ?>>Keyboard o</option>
                                            <option value="fa-flag-o" <?php if ($link4_icon == "fa-flag-o") echo 'selected="selected"'; ?>>Flag o</option>
                                            <option value="fa-flag-checkered" <?php if ($link4_icon == "fa-flag-checkered") echo 'selected="selected"'; ?>>Flag checkered</option>
                                            <option value="fa-terminal" <?php if ($link4_icon == "fa-terminal") echo 'selected="selected"'; ?>>Terminal</option>
                                            <option value="fa-code" <?php if ($link4_icon == "fa-code") echo 'selected="selected"'; ?>>Code</option>
                                            <option value="fa-reply-all" <?php if ($link4_icon == "fa-reply-all") echo 'selected="selected"'; ?>>Reply all</option>
                                            <option value="fa-mail-reply-all" <?php if ($link4_icon == "fa-mail-reply-all") echo 'selected="selected"'; ?>>Mail reply all</option>
                                            <option value="fa-star-half-empty" <?php if ($link4_icon == "fa-star-half-empty") echo 'selected="selected"'; ?>>Star half empty</option>
                                            <option value="fa-star-half-full" <?php if ($link4_icon == "fa-star-half-full") echo 'selected="selected"'; ?>>Star half full</option>
                                            <option value="fa-star-half-o" <?php if ($link4_icon == "fa-star-half-o") echo 'selected="selected"'; ?>>Star half o</option>
                                            <option value="fa-location-arrow" <?php if ($link4_icon == "fa-location-arrow") echo 'selected="selected"'; ?>>Location arrow</option>
                                            <option value="fa-crop" <?php if ($link4_icon == "fa-crop") echo 'selected="selected"'; ?>>Crop</option>
                                            <option value="fa-code-fork" <?php if ($link4_icon == "fa-code-fork") echo 'selected="selected"'; ?>>Code fork</option>
                                            <option value="fa-unlink" <?php if ($link4_icon == "fa-unlink") echo 'selected="selected"'; ?>>Unlink</option>
                                            <option value="fa-chain-broken" <?php if ($link4_icon == "fa-chain-broken") echo 'selected="selected"'; ?>>Chain broken</option>
                                            <option value="fa-question" <?php if ($link4_icon == "fa-question") echo 'selected="selected"'; ?>>Question</option>
                                            <option value="fa-info" <?php if ($link4_icon == "fa-info") echo 'selected="selected"'; ?>>Info</option>
                                            <option value="fa-exclamation" <?php if ($link4_icon == "fa-exclamation") echo 'selected="selected"'; ?>>Exclamation</option>
                                            <option value="fa-superscript" <?php if ($link4_icon == "fa-superscript") echo 'selected="selected"'; ?>>Superscript</option>
                                            <option value="fa-subscript" <?php if ($link4_icon == "fa-subscript") echo 'selected="selected"'; ?>>Subscript</option>
                                            <option value="fa-eraser" <?php if ($link4_icon == "fa-eraser") echo 'selected="selected"'; ?>>Eraser</option>
                                            <option value="fa-puzzle-piece" <?php if ($link4_icon == "fa-puzzle-piece") echo 'selected="selected"'; ?>>Puzzle piece</option>
                                            <option value="fa-microphone" <?php if ($link4_icon == "fa-microphone") echo 'selected="selected"'; ?>>Microphone</option>
                                            <option value="fa-microphone-slash" <?php if ($link4_icon == "fa-microphone-slash") echo 'selected="selected"'; ?>>Microphone slash</option>
                                            <option value="fa-shield" <?php if ($link4_icon == "fa-shield") echo 'selected="selected"'; ?>>Shield</option>
                                            <option value="fa-calendar-o" <?php if ($link4_icon == "fa-calendar-o") echo 'selected="selected"'; ?>>Calendar o</option>
                                            <option value="fa-fire-extinguisher" <?php if ($link4_icon == "fa-fire-extinguisher") echo 'selected="selected"'; ?>>Fire extinguisher</option>
                                            <option value="fa-rocket" <?php if ($link4_icon == "fa-rocket") echo 'selected="selected"'; ?>>Rocket</option>
                                            <option value="fa-maxcdn" <?php if ($link4_icon == "fa-maxcdn") echo 'selected="selected"'; ?>>Maxcdn</option>
                                            <option value="fa-chevron-circle-left" <?php if ($link4_icon == "fa-chevron-circle-left") echo 'selected="selected"'; ?>>Chevron circle left</option>
                                            <option value="fa-chevron-circle-right" <?php if ($link4_icon == "fa-chevron-circle-right") echo 'selected="selected"'; ?>>Chevron circle right</option>
                                            <option value="fa-chevron-circle-up" <?php if ($link4_icon == "fa-chevron-circle-up") echo 'selected="selected"'; ?>>Chevron circle up</option>
                                            <option value="fa-chevron-circle-down" <?php if ($link4_icon == "fa-chevron-circle-down") echo 'selected="selected"'; ?>>Chevron circle down</option>
                                            <option value="fa-html5" <?php if ($link4_icon == "fa-html5") echo 'selected="selected"'; ?>>Html5</option>
                                            <option value="fa-css3" <?php if ($link4_icon == "fa-css3") echo 'selected="selected"'; ?>>Css3</option>
                                            <option value="fa-anchor" <?php if ($link4_icon == "fa-anchor") echo 'selected="selected"'; ?>>Anchor</option>
                                            <option value="fa-unlock-alt" <?php if ($link4_icon == "fa-unlock-alt") echo 'selected="selected"'; ?>>Unlock alt</option>
                                            <option value="fa-bullseye" <?php if ($link4_icon == "fa-bullseye") echo 'selected="selected"'; ?>>Bullseye</option>
                                            <option value="fa-ellipsis-h" <?php if ($link4_icon == "fa-ellipsis-h") echo 'selected="selected"'; ?>>Ellipsis h</option>
                                            <option value="fa-ellipsis-v" <?php if ($link4_icon == "fa-ellipsis-v") echo 'selected="selected"'; ?>>Ellipsis v</option>
                                            <option value="fa-rss-square" <?php if ($link4_icon == "fa-rss-square") echo 'selected="selected"'; ?>>Rss square</option>
                                            <option value="fa-play-circle" <?php if ($link4_icon == "fa-play-circle") echo 'selected="selected"'; ?>>Play circle</option>
                                            <option value="fa-ticket" <?php if ($link4_icon == "fa-ticket") echo 'selected="selected"'; ?>>Ticket</option>
                                            <option value="fa-minus-square" <?php if ($link4_icon == "fa-minus-square") echo 'selected="selected"'; ?>>Minus square</option>
                                            <option value="fa-minus-square-o" <?php if ($link4_icon == "fa-minus-square-o") echo 'selected="selected"'; ?>>Minus square_o</option>
                                            <option value="fa-level-up" <?php if ($link4_icon == "fa-level-up") echo 'selected="selected"'; ?>>Level up</option>
                                            <option value="fa-level-down" <?php if ($link4_icon == "fa-level-down") echo 'selected="selected"'; ?>>Level down</option>
                                            <option value="fa-check-square" <?php if ($link4_icon == "fa-check-square") echo 'selected="selected"'; ?>>Check square</option>
                                            <option value="fa-pencil-square" <?php if ($link4_icon == "fa-pencil-square") echo 'selected="selected"'; ?>>Pencil square</option>
                                            <option value="fa-external-link-square" <?php if ($link4_icon == "fa-external-link-square") echo 'selected="selected"'; ?>>External link square</option>
                                            <option value="fa-share-square" <?php if ($link4_icon == "fa-share-square") echo 'selected="selected"'; ?>>Share square</option>
                                            <option value="fa-compass" <?php if ($link4_icon == "fa-compass") echo 'selected="selected"'; ?>>Compass</option>
                                            <option value="fa-toggle-down" <?php if ($link4_icon == "fa-toggle-down") echo 'selected="selected"'; ?>>Toggle down</option>
                                            <option value="fa-caret-square-o-down" <?php if ($link4_icon == "fa-caret-square-o-down") echo 'selected="selected"'; ?>>Caret square o down</option>
                                            <option value="fa-toggle-up" <?php if ($link4_icon == "fa-toggle-up") echo 'selected="selected"'; ?>>Toggle up</option>
                                            <option value="fa-caret-square-o-up" <?php if ($link4_icon == "fa-caret-square-o-up") echo 'selected="selected"'; ?>>Caret square o up</option>
                                            <option value="fa-toggle-right" <?php if ($link4_icon == "fa-toggle-right") echo 'selected="selected"'; ?>>Toggle right</option>
                                            <option value="fa-caret-square-o-right" <?php if ($link4_icon == "fa-caret-square-o-right") echo 'selected="selected"'; ?>>Caret square o right</option>
                                            <option value="fa-euro" <?php if ($link4_icon == "fa-euro") echo 'selected="selected"'; ?>>Euro</option>
                                            <option value="fa-eur" <?php if ($link4_icon == "fa-eur") echo 'selected="selected"'; ?>>Eur</option>
                                            <option value="fa-gbp" <?php if ($link4_icon == "fa-gbp") echo 'selected="selected"'; ?>>Gbp</option>
                                            <option value="fa-dollar" <?php if ($link4_icon == "fa-dollar") echo 'selected="selected"'; ?>>Dollar</option>
                                            <option value="fa-usd" <?php if ($link4_icon == "fa-usd") echo 'selected="selected"'; ?>>Usd</option>
                                            <option value="fa-rupee" <?php if ($link4_icon == "fa-rupee") echo 'selected="selected"'; ?>>Rupee</option>
                                            <option value="fa-inr" <?php if ($link4_icon == "fa-inr") echo 'selected="selected"'; ?>>Inr</option>
                                            <option value="fa-cny" <?php if ($link4_icon == "fa-cny") echo 'selected="selected"'; ?>>Cny</option>
                                            <option value="fa-rmb" <?php if ($link4_icon == "fa-rmb") echo 'selected="selected"'; ?>>Rmb</option>
                                            <option value="fa-yen" <?php if ($link4_icon == "fa-yen") echo 'selected="selected"'; ?>>Yen</option>
                                            <option value="fa-jpy" <?php if ($link4_icon == "fa-jpy") echo 'selected="selected"'; ?>>Jpy</option>
                                            <option value="fa-ruble" <?php if ($link4_icon == "fa-ruble") echo 'selected="selected"'; ?>>Ruble</option>
                                            <option value="fa-rouble" <?php if ($link4_icon == "fa-rouble") echo 'selected="selected"'; ?>>Rouble</option>
                                            <option value="fa-rub" <?php if ($link4_icon == "fa-rub") echo 'selected="selected"'; ?>>Rub</option>
                                            <option value="fa-won" <?php if ($link4_icon == "fa-won") echo 'selected="selected"'; ?>>Won</option>
                                            <option value="fa-krw" <?php if ($link4_icon == "fa-krw") echo 'selected="selected"'; ?>>Krw</option>
                                            <option value="fa-bitcoin" <?php if ($link4_icon == "fa-bitcoin") echo 'selected="selected"'; ?>>Bitcoin</option>
                                            <option value="fa-btc" <?php if ($link4_icon == "fa-btc") echo 'selected="selected"'; ?>>Btc</option>
                                            <option value="fa-file" <?php if ($link4_icon == "fa-file") echo 'selected="selected"'; ?>>File</option>
                                            <option value="fa-file-text" <?php if ($link4_icon == "fa-file-text") echo 'selected="selected"'; ?>>File text</option>
                                            <option value="fa-sort-alpha-asc" <?php if ($link4_icon == "fa-sort-alpha-asc") echo 'selected="selected"'; ?>>Sort alpha asc</option>
                                            <option value="fa-sort-alpha-desc" <?php if ($link4_icon == "fa-sort-alpha-desc") echo 'selected="selected"'; ?>>Sort alpha desc</option>
                                            <option value="fa-sort-amount-asc" <?php if ($link4_icon == "fa-sort-amount-asc") echo 'selected="selected"'; ?>>Sort amount asc</option>
                                            <option value="fa-sort-amount-desc" <?php if ($link4_icon == "fa-sort-amount-desc") echo 'selected="selected"'; ?>>Sort amount desc</option>
                                            <option value="fa-sort-numeric-asc" <?php if ($link4_icon == "fa-sort-numeric-asc") echo 'selected="selected"'; ?>>Sort numeric asc</option>
                                            <option value="fa-sort-numeric-desc" <?php if ($link4_icon == "fa-sort-numeric-desc") echo 'selected="selected"'; ?>>Sort numeric desc</option>
                                            <option value="fa-thumbs-up" <?php if ($link4_icon == "fa-thumbs-up") echo 'selected="selected"'; ?>>Thumbs up</option>
                                            <option value="fa-thumbs-down" <?php if ($link4_icon == "fa-thumbs-down") echo 'selected="selected"'; ?>>Thumbs down</option>
                                            <option value="fa-youtube-square" <?php if ($link4_icon == "fa-youtube-square") echo 'selected="selected"'; ?>>Youtube square</option>
                                            <option value="fa-youtube" <?php if ($link4_icon == "fa-youtube") echo 'selected="selected"'; ?>>Youtube</option>
                                            <option value="fa-xing" <?php if ($link4_icon == "fa-xing") echo 'selected="selected"'; ?>>Xing</option>
                                            <option value="fa-xing-square" <?php if ($link4_icon == "fa-xing-square") echo 'selected="selected"'; ?>>Xing square</option>
                                            <option value="fa-youtube-play" <?php if ($link4_icon == "fa-youtube-play") echo 'selected="selected"'; ?>>Youtube play</option>
                                            <option value="fa-dropbox" <?php if ($link4_icon == "fa-dropbox") echo 'selected="selected"'; ?>>Dropbox</option>
                                            <option value="fa-stack-overflow" <?php if ($link4_icon == "fa-stack-overflow") echo 'selected="selected"'; ?>>Stack overflow</option>
                                            <option value="fa-instagram" <?php if ($link4_icon == "fa-instagram") echo 'selected="selected"'; ?>>Instagram</option>
                                            <option value="fa-flickr" <?php if ($link4_icon == "fa-flickr") echo 'selected="selected"'; ?>>Flickr</option>
                                            <option value="fa-adn" <?php if ($link4_icon == "fa-adn") echo 'selected="selected"'; ?>>Adn</option>
                                            <option value="fa-bitbucket" <?php if ($link4_icon == "fa-bitbucket") echo 'selected="selected"'; ?>>Bitbucket</option>
                                            <option value="fa-bitbucket-square" <?php if ($link4_icon == "fa-bitbucket-square") echo 'selected="selected"'; ?>>Bitbucket square</option>
                                            <option value="fa-tumblr" <?php if ($link4_icon == "fa-tumblr") echo 'selected="selected"'; ?>>Tumblr</option>
                                            <option value="fa-tumblr-square" <?php if ($link4_icon == "fa-tumblr-square") echo 'selected="selected"'; ?>>Tumblr square</option>
                                            <option value="fa-long-arrow-down" <?php if ($link4_icon == "fa-long-arrow-down") echo 'selected="selected"'; ?>>Long arrow down</option>
                                            <option value="fa-long-arrow-up" <?php if ($link4_icon == "fa-long-arrow-up") echo 'selected="selected"'; ?>>Long arrow up</option>
                                            <option value="fa-long-arrow-left" <?php if ($link4_icon == "fa-long-arrow-left") echo 'selected="selected"'; ?>>Long arrow left</option>
                                            <option value="fa-long-arrow-right" <?php if ($link4_icon == "fa-long-arrow-right") echo 'selected="selected"'; ?>>Long arrow right</option>
                                            <option value="fa-apple" <?php if ($link4_icon == "fa-apple") echo 'selected="selected"'; ?>>Apple</option>
                                            <option value="fa-windows" <?php if ($link4_icon == "fa-windows") echo 'selected="selected"'; ?>>Windows</option>
                                            <option value="fa-android" <?php if ($link4_icon == "fa-android") echo 'selected="selected"'; ?>>Android</option>
                                            <option value="fa-linux" <?php if ($link4_icon == "fa-linux") echo 'selected="selected"'; ?>>Linux</option>
                                            <option value="fa-dribbble" <?php if ($link4_icon == "fa-dribbble") echo 'selected="selected"'; ?>>Dribbble</option>
                                            <option value="fa-skype" <?php if ($link4_icon == "fa-skype") echo 'selected="selected"'; ?>>Skype</option>
                                            <option value="fa-foursquare" <?php if ($link4_icon == "fa-foursquare") echo 'selected="selected"'; ?>>Foursquare</option>
                                            <option value="fa-trello" <?php if ($link4_icon == "fa-trello") echo 'selected="selected"'; ?>>Trello</option>
                                            <option value="fa-female" <?php if ($link4_icon == "fa-female") echo 'selected="selected"'; ?>>Female</option>
                                            <option value="fa-male" <?php if ($link4_icon == "fa-male") echo 'selected="selected"'; ?>>Male</option>
                                            <option value="fa-gittip" <?php if ($link4_icon == "fa-gittip") echo 'selected="selected"'; ?>>Gittip</option>
                                            <option value="fa-sun-o" <?php if ($link4_icon == "fa-sun-o") echo 'selected="selected"'; ?>>Sun o</option>
                                            <option value="fa-moon-o" <?php if ($link4_icon == "fa-moon-o") echo 'selected="selected"'; ?>>Moon o</option>
                                            <option value="fa-archive" <?php if ($link4_icon == "fa-archive") echo 'selected="selected"'; ?>>Archive</option>
                                            <option value="fa-bug" <?php if ($link4_icon == "fa-bug") echo 'selected="selected"'; ?>>Bug</option>
                                            <option value="fa-vk" <?php if ($link4_icon == "fa-vk") echo 'selected="selected"'; ?>>Vk</option>
                                            <option value="fa-weibo" <?php if ($link4_icon == "fa-weibo") echo 'selected="selected"'; ?>>Weibo</option>
                                            <option value="fa-renren" <?php if ($link4_icon == "fa-renren") echo 'selected="selected"'; ?>>Renren</option>
                                            <option value="fa-pagelines" <?php if ($link4_icon == "fa-pagelines") echo 'selected="selected"'; ?>>Pagelines</option>
                                            <option value="fa-stack-exchange" <?php if ($link4_icon == "fa-stack-exchange") echo 'selected="selected"'; ?>>Stack exchange</option>
                                            <option value="fa-arrow-circle-o-right" <?php if ($link4_icon == "fa-arrow-circle-o-right") echo 'selected="selected"'; ?>>Arrow circle o right</option>
                                            <option value="fa-arrow-circle-o-left" <?php if ($link4_icon == "fa-arrow-circle-o-left") echo 'selected="selected"'; ?>>Arrow circle o left</option>
                                            <option value="fa-toggle-left" <?php if ($link4_icon == "fa-toggle-left") echo 'selected="selected"'; ?>>Toggle left</option>
                                            <option value="fa-caret-square-o-left" <?php if ($link4_icon == "fa-caret-square-o-left") echo 'selected="selected"'; ?>>Caret square o left</option>
                                            <option value="fa-dot-circle-o" <?php if ($link4_icon == "fa-dot-circle-o") echo 'selected="selected"'; ?>>Dot circle o</option>
                                            <option value="fa-wheelchair" <?php if ($link4_icon == "fa-wheelchair") echo 'selected="selected"'; ?>>Wheelchair</option>
                                            <option value="fa-vimeo-square" <?php if ($link4_icon == "fa-vimeo-square") echo 'selected="selected"'; ?>>Vimeo square</option>
                                            <option value="fa-turkish-lira" <?php if ($link4_icon == "fa-turkish-lira") echo 'selected="selected"'; ?>>Turkish lira</option>
                                            <option value="fa-try" <?php if ($link4_icon == "fa-try") echo 'selected="selected"'; ?>>Try</option>
                                            <option value="fa-plus-square-o" <?php if ($link4_icon == "fa-plus-square-o") echo 'selected="selected"'; ?>>Plus square o</option>
                                        </select>
                                    </td>
                                <tr>

                                <tr>
                                    <td>
                                        <label><strong>Link 5:</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label>Enable&nbsp;&nbsp;<input type="checkbox" name="umom__opt[link5_enable]" value="1" <?php if ($link5_enable == 1) echo 'checked="checked"'; else echo ''; ?>></label> 
                                    </td>
                                    <td>
                                        <label>URL</label>
                                        <input type="text" name="umom__opt[link5_url]" value="<?php echo $link5_url; ?>" style="width: 350px;"/>
                                    </td>
                                    <td>
                                        <label>Type</label>
                                        <select name="umom__opt[link5_type]">
                                            <option value="_self" <?php if ($link5_type == "_self") echo 'selected="selected"'; ?>>Open in current window / frame</option>
                                            <option value="_blank" <?php if ($link5_type == "_blank") echo 'selected="selected"'; ?>>Open in new window</option>
                                            <option value="_parent" <?php if ($link5_type == "_parent") echo 'selected="selected"'; ?>>Open in parent window / frame</option>
                                            <option value="_top" <?php if ($link5_type == "_top") echo 'selected="selected"'; ?>>Open in top frame (replaces all frames)</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label>Icon</label>
                                        <select name="umom__opt[link5_icon]">
                                            <option value="fa-glass" <?php if ($link5_icon == "fa-glass") echo 'selected="selected"'; ?>>Glass</option>
                                            <option value="fa-music" <?php if ($link5_icon == "fa-music") echo 'selected="selected"'; ?>>Music</option>
                                            <option value="fa-search" <?php if ($link5_icon == "fa-search") echo 'selected="selected"'; ?>>Search</option>
                                            <option value="fa-envelope" <?php if ($link5_icon == "fa-envelope") echo 'selected="selected"'; ?>>Envelope</option>
                                            <option value="fa-heart" <?php if ($link5_icon == "fa-heart") echo 'selected="selected"'; ?>>Heart</option>
                                            <option value="fa-star" <?php if ($link5_icon == "fa-star") echo 'selected="selected"'; ?>>Star</option>
                                            <option value="fa-star-o" <?php if ($link5_icon == "fa-star-o") echo 'selected="selected"'; ?>>Star o</option>
                                            <option value="fa-user" <?php if ($link5_icon == "fa-user") echo 'selected="selected"'; ?>>User</option>
                                            <option value="fa-film" <?php if ($link5_icon == "fa-film") echo 'selected="selected"'; ?>>Film</option>
                                            <option value="fa-th-large" <?php if ($link5_icon == "fa-th-large") echo 'selected="selected"'; ?>>Th large</option>
                                            <option value="fa-th" <?php if ($link5_icon == "fa-th") echo 'selected="selected"'; ?>>th</option>
                                            <option value="fa-th-list" <?php if ($link5_icon == "fa-th-list") echo 'selected="selected"'; ?>>Th list</option>
                                            <option value="fa-check" <?php if ($link5_icon == "fa-check") echo 'selected="selected"'; ?>>Check</option>
                                            <option value="fa-times" <?php if ($link5_icon == "fa-times") echo 'selected="selected"'; ?>>Times</option>
                                            <option value="fa-search-plus" <?php if ($link5_icon == "fa-search-plus") echo 'selected="selected"'; ?>>Search plus</option>
                                            <option value="fa-search-minus" <?php if ($link5_icon == "fa-search-minus") echo 'selected="selected"'; ?>>Search minus</option>
                                            <option value="fa-power-off" <?php if ($link5_icon == "fa-power-off") echo 'selected="selected"'; ?>>Power off</option>
                                            <option value="fa-signal" <?php if ($link5_icon == "fa-signal") echo 'selected="selected"'; ?>>Signal</option>
                                            <option value="fa-gear" <?php if ($link5_icon == "fa-gear") echo 'selected="selected"'; ?>>Gear</option>
                                            <option value="fa-cog" <?php if ($link5_icon == "fa-cog") echo 'selected="selected"'; ?>>Cog</option>
                                            <option value="fa-trash-o" <?php if ($link5_icon == "fa-trash-o") echo 'selected="selected"'; ?>>Trash o</option>
                                            <option value="fa-home" <?php if ($link5_icon == "fa-home") echo 'selected="selected"'; ?>>Home</option>
                                            <option value="fa-file-o" <?php if ($link5_icon == "fa-file-o") echo 'selected="selected"'; ?>>File o</option>
                                            <option value="fa-clock-o" <?php if ($link5_icon == "fa-clock-o") echo 'selected="selected"'; ?>>Clock o</option>
                                            <option value="fa-road" <?php if ($link5_icon == "fa-road") echo 'selected="selected"'; ?>>Road</option>
                                            <option value="fa-download" <?php if ($link5_icon == "fa-download") echo 'selected="selected"'; ?>>Download</option>
                                            <option value="fa-arrow-circle-o-down" <?php if ($link5_icon == "fa-arrow-circle-o-down") echo 'selected="selected"'; ?>>Arrow circle o down</option>
                                            <option value="fa-arrow-circle-o-up" <?php if ($link5_icon == "fa-arrow-circle-o-up") echo 'selected="selected"'; ?>>Arrow circle o up</option>
                                            <option value="fa-inbox" <?php if ($link5_icon == "fa-inbox") echo 'selected="selected"'; ?>>Inbox</option>
                                            <option value="fa-play-circle-o" <?php if ($link5_icon == "fa-play-circle-o") echo 'selected="selected"'; ?>>Play circle_o</option>
                                            <option value="fa-rotate-right" <?php if ($link5_icon == "fa-rotate-right") echo 'selected="selected"'; ?>>Rotate right</option>
                                            <option value="fa-repeat" <?php if ($link5_icon == "fa-repeat") echo 'selected="selected"'; ?>>Repeat</option>
                                            <option value="fa-refresh" <?php if ($link5_icon == "fa-refresh") echo 'selected="selected"'; ?>>Refresh</option>
                                            <option value="fa-list-alt" <?php if ($link5_icon == "fa-list-alt") echo 'selected="selected"'; ?>>List alt</option>
                                            <option value="fa-lock" <?php if ($link5_icon == "fa-lock") echo 'selected="selected"'; ?>>Lock</option>
                                            <option value="fa-flag" <?php if ($link5_icon == "fa-flag") echo 'selected="selected"'; ?>>Flag</option>
                                            <option value="fa-headphones" <?php if ($link5_icon == "fa-headphones") echo 'selected="selected"'; ?>>Headphones</option>
                                            <option value="fa-volume-off" <?php if ($link5_icon == "fa-volume-off") echo 'selected="selected"'; ?>>Volume off</option>
                                            <option value="fa-volume-down" <?php if ($link5_icon == "fa-volume-down") echo 'selected="selected"'; ?>>Volume down</option>
                                            <option value="fa-volume-up" <?php if ($link5_icon == "fa-volume-up") echo 'selected="selected"'; ?>>Volume down</option>
                                            <option value="fa-qrcode" <?php if ($link5_icon == "fa-qrcode") echo 'selected="selected"'; ?>>Qrcode</option>
                                            <option value="fa-barcode" <?php if ($link5_icon == "fa-barcode") echo 'selected="selected"'; ?>>Barcode</option>
                                            <option value="fa-tag" <?php if ($link5_icon == "fa-tag") echo 'selected="selected"'; ?>>Tag</option>
                                            <option value="fa-tags" <?php if ($link5_icon == "fa-tags") echo 'selected="selected"'; ?>>Tags</option>
                                            <option value="fa-book" <?php if ($link5_icon == "fa-book") echo 'selected="selected"'; ?>>Book</option>
                                            <option value="fa-bookmark" <?php if ($link5_icon == "fa-bookmark") echo 'selected="selected"'; ?>>Bookmark</option>
                                            <option value="fa-print" <?php if ($link5_icon == "fa-print") echo 'selected="selected"'; ?>>Print</option>
                                            <option value="fa-camera" <?php if ($link5_icon == "fa-camera") echo 'selected="selected"'; ?>>Camera</option>
                                            <option value="fa-font" <?php if ($link5_icon == "fa-font") echo 'selected="selected"'; ?>>Font</option>
                                            <option value="fa-bold" <?php if ($link5_icon == "fa-bold") echo 'selected="selected"'; ?>>Bold</option>
                                            <option value="fa-italic" <?php if ($link5_icon == "fa-italic") echo 'selected="selected"'; ?>>Italic</option>
                                            <option value="fa-text-height" <?php if ($link5_icon == "fa-text-height") echo 'selected="selected"'; ?>>Text height</option>
                                            <option value="fa-text-width" <?php if ($link5_icon == "fa-text-width") echo 'selected="selected"'; ?>>Text width</option>
                                            <option value="fa-align-left" <?php if ($link5_icon == "fa-align-left") echo 'selected="selected"'; ?>>Align left</option>
                                            <option value="fa-align-center" <?php if ($link5_icon == "fa-align-center") echo 'selected="selected"'; ?>>Align center</option>
                                            <option value="fa-align-right" <?php if ($link5_icon == "fa-align-right") echo 'selected="selected"'; ?>>Align right</option>
                                            <option value="fa-align-justify" <?php if ($link5_icon == "fa-align-justify") echo 'selected="selected"'; ?>>Align justify</option>
                                            <option value="fa-list" <?php if ($link5_icon == "fa-list") echo 'selected="selected"'; ?>>List</option>
                                            <option value="fa-dedent" <?php if ($link5_icon == "fa-dedent") echo 'selected="selected"'; ?>>Dedent</option>
                                            <option value="fa-outdent" <?php if ($link5_icon == "fa-outdent") echo 'selected="selected"'; ?>>Outdent</option>
                                            <option value="fa-indent" <?php if ($link5_icon == "fa-indent") echo 'selected="selected"'; ?>>Indent</option>
                                            <option value="fa-video-camera" <?php if ($link5_icon == "fa-video-camera") echo 'selected="selected"'; ?>>Video camera</option>
                                            <option value="fa-picture-o" <?php if ($link5_icon == "fa-picture-o") echo 'selected="selected"'; ?>>Picture o</option>
                                            <option value="fa-pencil" <?php if ($link5_icon == "fa-pencil") echo 'selected="selected"'; ?>>Pencil</option>
                                            <option value="fa-map-marker" <?php if ($link5_icon == "fa-map-marker") echo 'selected="selected"'; ?>>Map marker</option>
                                            <option value="fa-adjust" <?php if ($link5_icon == "fa-adjust") echo 'selected="selected"'; ?>>Adjust</option>
                                            <option value="fa-tint" <?php if ($link5_icon == "fa-tint") echo 'selected="selected"'; ?>>Tint</option>
                                            <option value="fa-edit" <?php if ($link5_icon == "fa-edit") echo 'selected="selected"'; ?>>Edit</option>
                                            <option value="fa-pencil-square-o" <?php if ($link5_icon == "fa-pencil-square-o") echo 'selected="selected"'; ?>>Pencil square o</option>
                                            <option value="fa-share-square-o" <?php if ($link5_icon == "fa-share-square-o") echo 'selected="selected"'; ?>>Share square o</option>
                                            <option value="fa-check-square-o" <?php if ($link5_icon == "fa-check-square-o") echo 'selected="selected"'; ?>>Check square o</option>
                                            <option value="fa-arrows" <?php if ($link5_icon == "fa-arrows") echo 'selected="selected"'; ?>>Arrows</option>
                                            <option value="fa-step-backward" <?php if ($link5_icon == "fa-step-backward") echo 'selected="selected"'; ?>>Step backward</option>
                                            <option value="fa-fast-backward" <?php if ($link5_icon == "fa-fast-backward") echo 'selected="selected"'; ?>>Fast backward</option>
                                            <option value="fa-backward" <?php if ($link5_icon == "fa-backward") echo 'selected="selected"'; ?>>Backward</option>
                                            <option value="fa-play" <?php if ($link5_icon == "fa-play") echo 'selected="selected"'; ?>>Play</option>
                                            <option value="fa-pause" <?php if ($link5_icon == "fa-pause") echo 'selected="selected"'; ?>>Pause</option>
                                            <option value="fa-stop" <?php if ($link5_icon == "fa-stop") echo 'selected="selected"'; ?>>Stop</option>
                                            <option value="fa-forward" <?php if ($link5_icon == "fa-forward") echo 'selected="selected"'; ?>>Forward</option>
                                            <option value="fa-fast-forward" <?php if ($link5_icon == "fa-fast-forward") echo 'selected="selected"'; ?>>Fast forward</option>
                                            <option value="fa-step-forward" <?php if ($link5_icon == "fa-step-forward") echo 'selected="selected"'; ?>>Step forward</option>
                                            <option value="fa-eject" <?php if ($link5_icon == "fa-eject") echo 'selected="selected"'; ?>>Eject</option>
                                            <option value="fa-chevron-left" <?php if ($link5_icon == "fa-chevron-left") echo 'selected="selected"'; ?>>Chevron left</option>
                                            <option value="fa-chevron-right" <?php if ($link5_icon == "fa-chevron-right") echo 'selected="selected"'; ?>>Chevron right</option>
                                            <option value="fa-plus-circle" <?php if ($link5_icon == "fa-plus-circle") echo 'selected="selected"'; ?>>Plus circle</option>
                                            <option value="fa-minus-circle" <?php if ($link5_icon == "fa-minus-circle") echo 'selected="selected"'; ?>>Minus circle</option>
                                            <option value="fa-times-circle" <?php if ($link5_icon == "fa-times-circle") echo 'selected="selected"'; ?>>Times circle</option>
                                            <option value="fa-check-circle" <?php if ($link5_icon == "fa-check-circle") echo 'selected="selected"'; ?>>Check circle</option>
                                            <option value="fa-question-circle" <?php if ($link5_icon == "fa-question-circle") echo 'selected="selected"'; ?>>Question circle</option>
                                            <option value="fa-info-circle" <?php if ($link5_icon == "fa-info-circle") echo 'selected="selected"'; ?>>Info circle</option>
                                            <option value="fa-crosshairs" <?php if ($link5_icon == "fa-crosshairs") echo 'selected="selected"'; ?>>Crosshairs</option>
                                            <option value="fa-times-circle-o" <?php if ($link5_icon == "fa-times-circle-o") echo 'selected="selected"'; ?>>Times circle o</option>
                                            <option value="fa-check-circle-o" <?php if ($link5_icon == "fa-check-circle-o") echo 'selected="selected"'; ?>>Check circle o</option>
                                            <option value="fa-ban" <?php if ($link5_icon == "fa-ban") echo 'selected="selected"'; ?>>Ban</option>
                                            <option value="fa-arrow-left" <?php if ($link5_icon == "fa-arrow-left") echo 'selected="selected"'; ?>>Arrow left</option>
                                            <option value="fa-arrow-right" <?php if ($link5_icon == "fa-arrow-right") echo 'selected="selected"'; ?>>Arrow right</option>
                                            <option value="fa-arrow-up" <?php if ($link5_icon == "fa-arrow-up") echo 'selected="selected"'; ?>>Arrow up</option>
                                            <option value="fa-arrow-down" <?php if ($link5_icon == "fa-arrow-down") echo 'selected="selected"'; ?>>Arrow down</option>
                                            <option value="fa-mail-forward" <?php if ($link5_icon == "fa-mail-forward") echo 'selected="selected"'; ?>>Mail forward</option>
                                            <option value="fa-share" <?php if ($link5_icon == "fa-share") echo 'selected="selected"'; ?>>Share</option>
                                            <option value="fa-expand" <?php if ($link5_icon == "fa-expand") echo 'selected="selected"'; ?>>Expand</option>
                                            <option value="fa-compress" <?php if ($link5_icon == "fa-compress") echo 'selected="selected"'; ?>>Compress</option>
                                            <option value="fa-plus" <?php if ($link5_icon == "fa-plus") echo 'selected="selected"'; ?>>Plus</option>
                                            <option value="fa-minus" <?php if ($link5_icon == "fa-minus") echo 'selected="selected"'; ?>>Minus</option>
                                            <option value="fa-asterisk" <?php if ($link5_icon == "fa-asterisk") echo 'selected="selected"'; ?>>Asterisk</option>
                                            <option value="fa-exclamation-circle" <?php if ($link5_icon == "fa-exclamation-circle") echo 'selected="selected"'; ?>>Exclamation circle</option>
                                            <option value="fa-gift" <?php if ($link5_icon == "fa-gift") echo 'selected="selected"'; ?>>Gift</option>
                                            <option value="fa-leaf" <?php if ($link5_icon == "fa-leaf") echo 'selected="selected"'; ?>>Leaf</option>
                                            <option value="fa-fire" <?php if ($link5_icon == "fa-fire") echo 'selected="selected"'; ?>>Fire</option>
                                            <option value="fa-eye" <?php if ($link5_icon == "fa-eye") echo 'selected="selected"'; ?>>Eye</option>
                                            <option value="fa-eye-slash" <?php if ($link5_icon == "fa-eye-slash") echo 'selected="selected"'; ?>>Eye slash</option>
                                            <option value="fa-warning" <?php if ($link5_icon == "fa-warning") echo 'selected="selected"'; ?>>Warning</option>
                                            <option value="fa-exclamation-triangle" <?php if ($link5_icon == "fa-exclamation-triangle") echo 'selected="selected"'; ?>>Exclamation triangle</option>
                                            <option value="fa-plane" <?php if ($link5_icon == "fa-plane") echo 'selected="selected"'; ?>>Plane</option>
                                            <option value="fa-calendar" <?php if ($link5_icon == "fa-calendar") echo 'selected="selected"'; ?>>Calendar</option>
                                            <option value="fa-random" <?php if ($link5_icon == "fa-random") echo 'selected="selected"'; ?>>Random</option>
                                            <option value="fa-comment" <?php if ($link5_icon == "fa-comment") echo 'selected="selected"'; ?>>Comment</option>
                                            <option value="fa-magnet" <?php if ($link5_icon == "fa-magnet") echo 'selected="selected"'; ?>>Magnet</option>
                                            <option value="fa-chevron-up" <?php if ($link5_icon == "fa-chevron-up") echo 'selected="selected"'; ?>>Chevron up</option>
                                            <option value="fa-chevron-down" <?php if ($link5_icon == "fa-chevron-down") echo 'selected="selected"'; ?>>Chevron down</option>
                                            <option value="fa-retweet" <?php if ($link5_icon == "fa-retweet") echo 'selected="selected"'; ?>>Retweet</option>
                                            <option value="fa-shopping-cart" <?php if ($link5_icon == "fa-shopping-cart") echo 'selected="selected"'; ?>>Shopping cart</option>
                                            <option value="fa-folder" <?php if ($link5_icon == "fa-folder") echo 'selected="selected"'; ?>>Folder</option>
                                            <option value="fa-folder-open" <?php if ($link5_icon == "fa-folder-open") echo 'selected="selected"'; ?>>Folder open</option>
                                            <option value="fa-arrows-v" <?php if ($link5_icon == "fa-arrows-v") echo 'selected="selected"'; ?>>Arrows v</option>
                                            <option value="fa-arrows-h" <?php if ($link5_icon == "fa-arrows-h") echo 'selected="selected"'; ?>>Arrows h</option>
                                            <option value="fa-bar-chart-o" <?php if ($link5_icon == "fa-bar-chart-o") echo 'selected="selected"'; ?>>Bar chart o</option>
                                            <option value="fa-twitter-square" <?php if ($link5_icon == "fa-twitter-square") echo 'selected="selected"'; ?>>Twitter square</option>
                                            <option value="fa-facebook-square" <?php if ($link5_icon == "fa-facebook-square") echo 'selected="selected"'; ?>>Facebook square</option>
                                            <option value="fa-camera-retro" <?php if ($link5_icon == "fa-camera-retro") echo 'selected="selected"'; ?>>Camera retro</option>
                                            <option value="fa-key" <?php if ($link5_icon == "fa-key") echo 'selected="selected"'; ?>>Key</option>
                                            <option value="fa-gears" <?php if ($link5_icon == "fa-gears") echo 'selected="selected"'; ?>>Gears</option>
                                            <option value="fa-cogs" <?php if ($link5_icon == "fa-cogs") echo 'selected="selected"'; ?>>Cogs</option>
                                            <option value="fa-comments" <?php if ($link5_icon == "fa-comments") echo 'selected="selected"'; ?>>Comments</option>
                                            <option value="fa-thumbs-o-up" <?php if ($link5_icon == "fa-thumbs-o-up") echo 'selected="selected"'; ?>>Thumbs o up</option>
                                            <option value="fa-thumbs-o-down" <?php if ($link5_icon == "fa-thumbs-o-down") echo 'selected="selected"'; ?>>Thumbs o down</option>
                                            <option value="fa-star-half" <?php if ($link5_icon == "fa-star-half") echo 'selected="selected"'; ?>>Star half</option>
                                            <option value="fa-heart-o" <?php if ($link5_icon == "fa-heart-o") echo 'selected="selected"'; ?>>Heart o</option>
                                            <option value="fa-sign-out" <?php if ($link5_icon == "fa-sign-out") echo 'selected="selected"'; ?>>Sign out</option>
                                            <option value="fa-linkedin-square" <?php if ($link5_icon == "fa-linkedin-square") echo 'selected="selected"'; ?>>Linkedin square</option>
                                            <option value="fa-thumb-tack" <?php if ($link5_icon == "fa-thumb-tack") echo 'selected="selected"'; ?>>Thumb tack</option>
                                            <option value="fa-external-link" <?php if ($link5_icon == "fa-external-link") echo 'selected="selected"'; ?>>External link</option>
                                            <option value="fa-sign-in" <?php if ($link5_icon == "fa-sign-in") echo 'selected="selected"'; ?>>Sign in</option>
                                            <option value="fa-trophy" <?php if ($link5_icon == "fa-trophy") echo 'selected="selected"'; ?>>Trophy</option>
                                            <option value="fa-github-square" <?php if ($link5_icon == "fa-github-square") echo 'selected="selected"'; ?>>Github square</option>
                                            <option value="fa-upload" <?php if ($link5_icon == "fa-upload") echo 'selected="selected"'; ?>>Upload</option>
                                            <option value="fa-lemon-o" <?php if ($link5_icon == "fa-lemon-o") echo 'selected="selected"'; ?>>Lemon o</option>
                                            <option value="fa-phone" <?php if ($link5_icon == "fa-phone") echo 'selected="selected"'; ?>>Phone</option>
                                            <option value="fa-square-o" <?php if ($link5_icon == "fa-square-o") echo 'selected="selected"'; ?>>Square o</option>
                                            <option value="fa-bookmark-o" <?php if ($link5_icon == "fa-bookmark-o") echo 'selected="selected"'; ?>>Bookmark o</option>
                                            <option value="fa-phone-square" <?php if ($link5_icon == "fa-phone-square") echo 'selected="selected"'; ?>>Phone square</option>
                                            <option value="fa-twitter" <?php if ($link5_icon == "fa-twitter") echo 'selected="selected"'; ?>>Twitter</option>
                                            <option value="fa-facebook" <?php if ($link5_icon == "fa-facebook") echo 'selected="selected"'; ?>>Facebook</option>
                                            <option value="fa-github" <?php if ($link5_icon == "fa-github") echo 'selected="selected"'; ?>>Github</option>
                                            <option value="fa-unlock" <?php if ($link5_icon == "fa-unlock") echo 'selected="selected"'; ?>>Unlock</option>
                                            <option value="fa-credit-card" <?php if ($link5_icon == "fa-credit-card") echo 'selected="selected"'; ?>>Credit card</option>
                                            <option value="fa-rss" <?php if ($link5_icon == "fa-rss") echo 'selected="selected"'; ?>>Rss</option>
                                            <option value="fa-hdd-o" <?php if ($link5_icon == "fa-hdd-o") echo 'selected="selected"'; ?>>Hdd o</option>
                                            <option value="fa-bullhorn" <?php if ($link5_icon == "fa-bullhorn") echo 'selected="selected"'; ?>>Bullhorn</option>
                                            <option value="fa-bell" <?php if ($link5_icon == "fa-bell") echo 'selected="selected"'; ?>>Bell</option>
                                            <option value="fa-certificate" <?php if ($link5_icon == "fa-certificate") echo 'selected="selected"'; ?>>Certificate</option>
                                            <option value="fa-hand-o-right" <?php if ($link5_icon == "fa-hand-o-right") echo 'selected="selected"'; ?>>Hand o right</option>
                                            <option value="fa-hand-o-left" <?php if ($link5_icon == "fa-hand-o-left") echo 'selected="selected"'; ?>>Hand o left</option>
                                            <option value="fa-hand-o-up" <?php if ($link5_icon == "fa-hand-o-up") echo 'selected="selected"'; ?>>Hand o up</option>
                                            <option value="fa-hand-o-down" <?php if ($link5_icon == "fa-hand-o-down") echo 'selected="selected"'; ?>>Hand o down</option>
                                            <option value="fa-arrow-circle-left" <?php if ($link5_icon == "fa-arrow-circle-left") echo 'selected="selected"'; ?>>Arrow circle left</option>
                                            <option value="fa-arrow-circle-right" <?php if ($link5_icon == "fa-arrow-circle-right") echo 'selected="selected"'; ?>>Arrow circle right</option>
                                            <option value="fa-arrow-circle-up" <?php if ($link5_icon == "fa-arrow-circle-up") echo 'selected="selected"'; ?>>Arrow circle up</option>
                                            <option value="fa-arrow-circle-down" <?php if ($link5_icon == "fa-arrow-circle-down") echo 'selected="selected"'; ?>>Arrow circle down</option>
                                            <option value="fa-globe" <?php if ($link5_icon == "fa-globe") echo 'selected="selected"'; ?>>Globe</option>
                                            <option value="fa-wrench" <?php if ($link5_icon == "fa-wrench") echo 'selected="selected"'; ?>>Wrench</option>
                                            <option value="fa-tasks" <?php if ($link5_icon == "fa-tasks") echo 'selected="selected"'; ?>>Tasks</option>
                                            <option value="fa-filter" <?php if ($link5_icon == "fa-filter") echo 'selected="selected"'; ?>>Filter</option>
                                            <option value="fa-briefcase" <?php if ($link5_icon == "fa-briefcase") echo 'selected="selected"'; ?>>Briefcase</option>
                                            <option value="fa-arrows-alt" <?php if ($link5_icon == "fa-arrows-alt") echo 'selected="selected"'; ?>>Arrows alt</option>
                                            <option value="fa-group" <?php if ($link5_icon == "fa-group") echo 'selected="selected"'; ?>>Group</option>
                                            <option value="fa-users" <?php if ($link5_icon == "fa-users") echo 'selected="selected"'; ?>>Users</option>
                                            <option value="fa-chain" <?php if ($link5_icon == "fa-chain") echo 'selected="selected"'; ?>>Chain</option>
                                            <option value="fa-link" <?php if ($link5_icon == "fa-link") echo 'selected="selected"'; ?>>Link</option>
                                            <option value="fa-cloud" <?php if ($link5_icon == "fa-cloud") echo 'selected="selected"'; ?>>Cloud</option>
                                            <option value="fa-flask" <?php if ($link5_icon == "fa-flask") echo 'selected="selected"'; ?>>Flask</option>
                                            <option value="fa-cut" <?php if ($link5_icon == "fa-cut") echo 'selected="selected"'; ?>>Cut</option>
                                            <option value="fa-scissors" <?php if ($link5_icon == "fa-scissors") echo 'selected="selected"'; ?>>Scissors</option>
                                            <option value="fa-copy" <?php if ($link5_icon == "fa-copy") echo 'selected="selected"'; ?>>Copy</option>
                                            <option value="fa-files-o" <?php if ($link5_icon == "fa-files-o") echo 'selected="selected"'; ?>>Files o</option>
                                            <option value="fa-paperclip" <?php if ($link5_icon == "fa-paperclip") echo 'selected="selected"'; ?>>Paperclip</option>
                                            <option value="fa-save" <?php if ($link5_icon == "fa-save") echo 'selected="selected"'; ?>>Save</option>
                                            <option value="fa-floppy-o" <?php if ($link5_icon == "fa-floppy-o") echo 'selected="selected"'; ?>>Floppy o</option>
                                            <option value="fa-square" <?php if ($link5_icon == "fa-square") echo 'selected="selected"'; ?>>Square</option>
                                            <option value="fa-bars" <?php if ($link5_icon == "fa-bars") echo 'selected="selected"'; ?>>Bars</option>
                                            <option value="fa-list-ul" <?php if ($link5_icon == "fa-list-ul") echo 'selected="selected"'; ?>>List ul</option>
                                            <option value="fa-list-ol" <?php if ($link5_icon == "fa-list-ol") echo 'selected="selected"'; ?>>List ol</option>
                                            <option value="fa-strikethrough" <?php if ($link5_icon == "fa-strikethrough") echo 'selected="selected"'; ?>>Strikethrough</option>
                                            <option value="fa-underline" <?php if ($link5_icon == "fa-underline") echo 'selected="selected"'; ?>>Underline</option>
                                            <option value="fa-table" <?php if ($link5_icon == "fa-table") echo 'selected="selected"'; ?>>Table</option>
                                            <option value="fa-magic" <?php if ($link5_icon == "fa-magic") echo 'selected="selected"'; ?>>Magic</option>
                                            <option value="fa-truck" <?php if ($link5_icon == "fa-truck") echo 'selected="selected"'; ?>>Truck</option>
                                            <option value="fa-pinterest" <?php if ($link5_icon == "fa-pinterest") echo 'selected="selected"'; ?>>Pinterest</option>
                                            <option value="fa-pinterest-square" <?php if ($link5_icon == "fa-pinterest-square") echo 'selected="selected"'; ?>>Pinterest square</option>
                                            <option value="fa-google-plus-square" <?php if ($link5_icon == "fa-google-plus-square") echo 'selected="selected"'; ?>>Google plus square</option>
                                            <option value="fa-google-plus" <?php if ($link5_icon == "fa-google-plus") echo 'selected="selected"'; ?>>Google plus</option>
                                            <option value="fa-money" <?php if ($link5_icon == "fa-money") echo 'selected="selected"'; ?>>Money</option>
                                            <option value="fa-caret-down" <?php if ($link5_icon == "fa-caret-down") echo 'selected="selected"'; ?>>Caret down</option>
                                            <option value="fa-caret-up" <?php if ($link5_icon == "fa-caret-up") echo 'selected="selected"'; ?>>Caret up</option>
                                            <option value="fa-caret-left" <?php if ($link5_icon == "fa-caret-left") echo 'selected="selected"'; ?>>Caret left</option>
                                            <option value="fa-caret-right" <?php if ($link5_icon == "fa-caret-right") echo 'selected="selected"'; ?>>Caret right</option>
                                            <option value="fa-columns" <?php if ($link5_icon == "fa-columns") echo 'selected="selected"'; ?>>Columns</option>
                                            <option value="fa-unsorted" <?php if ($link5_icon == "fa-unsorted") echo 'selected="selected"'; ?>>Unsorted</option>
                                            <option value="fa-sort" <?php if ($link5_icon == "fa-sort") echo 'selected="selected"'; ?>>Sort</option>
                                            <option value="fa-sort-down" <?php if ($link5_icon == "fa-sort-down") echo 'selected="selected"'; ?>>Sort down</option>
                                            <option value="fa-sort-asc" <?php if ($link5_icon == "fa-sort-asc") echo 'selected="selected"'; ?>>Sort asc</option>
                                            <option value="fa-sort-up" <?php if ($link5_icon == "fa-sort-up") echo 'selected="selected"'; ?>>Sort up</option>
                                            <option value="fa-sort-desc" <?php if ($link5_icon == "fa-sort-desc") echo 'selected="selected"'; ?>>Sort desc</option>
                                            <option value="fa-envelope" <?php if ($link5_icon == "fa-envelope") echo 'selected="selected"'; ?>>Envelope</option>
                                            <option value="fa-linkedin" <?php if ($link5_icon == "fa-linkedin") echo 'selected="selected"'; ?>>Linkedin</option>
                                            <option value="fa-rotate-left" <?php if ($link5_icon == "fa-rotate-left") echo 'selected="selected"'; ?>>Rotate left</option>
                                            <option value="fa-undo" <?php if ($link5_icon == "fa-undo") echo 'selected="selected"'; ?>>Undo</option>
                                            <option value="fa-legal" <?php if ($link5_icon == "fa-legal") echo 'selected="selected"'; ?>>Legal</option>
                                            <option value="fa-gavel" <?php if ($link5_icon == "fa-gavel") echo 'selected="selected"'; ?>>Gavel</option>
                                            <option value="fa-dashboard" <?php if ($link5_icon == "fa-dashboard") echo 'selected="selected"'; ?>>Dashboard</option>
                                            <option value="fa-tachometer" <?php if ($link5_icon == "fa-tachometer") echo 'selected="selected"'; ?>>Tachometer</option>
                                            <option value="fa-comment-o" <?php if ($link5_icon == "fa-comment-o") echo 'selected="selected"'; ?>>Comment o</option>
                                            <option value="fa-comments-o" <?php if ($link5_icon == "fa-comments-o") echo 'selected="selected"'; ?>>Comments o</option>
                                            <option value="fa-flash" <?php if ($link5_icon == "fa-flash") echo 'selected="selected"'; ?>>Flash</option>
                                            <option value="fa-bolt" <?php if ($link5_icon == "fa-bolt") echo 'selected="selected"'; ?>>Bolt</option>
                                            <option value="fa-sitemap" <?php if ($link5_icon == "fa-sitemap") echo 'selected="selected"'; ?>>Sitemap</option>
                                            <option value="fa-umbrella" <?php if ($link5_icon == "fa-umbrella") echo 'selected="selected"'; ?>>Umbrella</option>
                                            <option value="fa-paste" <?php if ($link5_icon == "fa-paste") echo 'selected="selected"'; ?>>Paste</option>
                                            <option value="fa-clipboard" <?php if ($link5_icon == "fa-clipboard") echo 'selected="selected"'; ?>>Clipboard</option>
                                            <option value="fa-lightbulb-o" <?php if ($link5_icon == "fa-lightbulb-o") echo 'selected="selected"'; ?>>Lightbulb o</option>
                                            <option value="fa-exchange" <?php if ($link5_icon == "fa-exchange") echo 'selected="selected"'; ?>>Exchange</option>
                                            <option value="fa-cloud-download" <?php if ($link5_icon == "fa-cloud-download") echo 'selected="selected"'; ?>>Cloud download</option>
                                            <option value="fa-cloud-upload" <?php if ($link5_icon == "fa-cloud-upload") echo 'selected="selected"'; ?>>Cloud upload</option>
                                            <option value="fa-user-md" <?php if ($link5_icon == "fa-user-md") echo 'selected="selected"'; ?>>User md</option>
                                            <option value="fa-stethoscope" <?php if ($link5_icon == "fa-stethoscope") echo 'selected="selected"'; ?>>Stethoscope</option>
                                            <option value="fa-suitcase" <?php if ($link5_icon == "fa-suitcase") echo 'selected="selected"'; ?>>Suitcase</option>
                                            <option value="fa-bell-o" <?php if ($link5_icon == "fa-bell-o") echo 'selected="selected"'; ?>>Bell_o</option>
                                            <option value="fa-coffee" <?php if ($link5_icon == "fa-coffee") echo 'selected="selected"'; ?>>Coffee</option>
                                            <option value="fa-cutlery" <?php if ($link5_icon == "fa-cutlery") echo 'selected="selected"'; ?>>Cutlery</option>
                                            <option value="fa-file-text-o" <?php if ($link5_icon == "fa-file-text-o") echo 'selected="selected"'; ?>>File text o</option>
                                            <option value="fa-building-o" <?php if ($link5_icon == "fa-building-o") echo 'selected="selected"'; ?>>Building o</option>
                                            <option value="fa-hospital-o" <?php if ($link5_icon == "fa-hospital-o") echo 'selected="selected"'; ?>>Hospital o</option>
                                            <option value="fa-ambulance" <?php if ($link5_icon == "fa-ambulance") echo 'selected="selected"'; ?>>Ambulance</option>
                                            <option value="fa-medkit" <?php if ($link5_icon == "fa-medkit") echo 'selected="selected"'; ?>>Medkit</option>
                                            <option value="fa-fighter-jet" <?php if ($link5_icon == "fa-fighter-jet") echo 'selected="selected"'; ?>>Fighter jet</option>
                                            <option value="fa-beer" <?php if ($link5_icon == "fa-beer") echo 'selected="selected"'; ?>>Beer</option>
                                            <option value="fa-h-square" <?php if ($link5_icon == "fa-h-square") echo 'selected="selected"'; ?>>H square</option>
                                            <option value="fa-plus-square" <?php if ($link5_icon == "fa-plus-square") echo 'selected="selected"'; ?>>Plus square</option>
                                            <option value="fa-angle-double-left" <?php if ($link5_icon == "fa-angle-double-left") echo 'selected="selected"'; ?>>Angle double left</option>
                                            <option value="fa-angle-double-right" <?php if ($link5_icon == "fa-angle-double-right") echo 'selected="selected"'; ?>>Angle double right</option>
                                            <option value="fa-angle-double-up" <?php if ($link5_icon == "fa-angle-double-up") echo 'selected="selected"'; ?>>Angle double up</option>
                                            <option value="fa-angle-double-down" <?php if ($link5_icon == "fa-angle-double-down") echo 'selected="selected"'; ?>>Angle double down</option>
                                            <option value="fa-angle-left" <?php if ($link5_icon == "fa-angle-left") echo 'selected="selected"'; ?>>Angle left</option>
                                            <option value="fa-angle-right" <?php if ($link5_icon == "fa-angle-right") echo 'selected="selected"'; ?>>Angle right</option>
                                            <option value="fa-angle-up" <?php if ($link5_icon == "fa-angle-up") echo 'selected="selected"'; ?>>Angle up</option>
                                            <option value="fa-angle-down" <?php if ($link5_icon == "fa-angle-down") echo 'selected="selected"'; ?>>Angle down</option>
                                            <option value="fa-desktop" <?php if ($link5_icon == "fa-desktop") echo 'selected="selected"'; ?>>Desktop</option>
                                            <option value="fa-laptop" <?php if ($link5_icon == "fa-laptop") echo 'selected="selected"'; ?>>Laptop</option>
                                            <option value="fa-tablet" <?php if ($link5_icon == "fa-tablet") echo 'selected="selected"'; ?>>Tablet</option>
                                            <option value="fa-mobile-phone" <?php if ($link5_icon == "fa-mobile-phone") echo 'selected="selected"'; ?>>Mobile phone</option>
                                            <option value="fa-mobile" <?php if ($link5_icon == "fa-mobile") echo 'selected="selected"'; ?>>Mobile</option>
                                            <option value="fa-circle-o" <?php if ($link5_icon == "fa-circle-o") echo 'selected="selected"'; ?>>Circle o</option>
                                            <option value="fa-quote-left" <?php if ($link5_icon == "fa-quote-left") echo 'selected="selected"'; ?>>Quote left</option>
                                            <option value="fa-quote-right" <?php if ($link5_icon == "fa-quote-right") echo 'selected="selected"'; ?>>Quote right</option>
                                            <option value="fa-spinner" <?php if ($link5_icon == "fa-spinner") echo 'selected="selected"'; ?>>Spinner</option>
                                            <option value="fa-circle" <?php if ($link5_icon == "fa-circle") echo 'selected="selected"'; ?>>Circle</option>
                                            <option value="fa-mail-reply" <?php if ($link5_icon == "fa-mail-reply") echo 'selected="selected"'; ?>>Mail reply</option>
                                            <option value="fa-reply" <?php if ($link5_icon == "fa-reply") echo 'selected="selected"'; ?>>Reply</option>
                                            <option value="fa-github-alt" <?php if ($link5_icon == "fa-github-alt") echo 'selected="selected"'; ?>>Github alt</option>
                                            <option value="fa-folder-o" <?php if ($link5_icon == "fa-folder-o") echo 'selected="selected"'; ?>>Folder o</option>
                                            <option value="fa-folder-open-o" <?php if ($link5_icon == "fa-folder-open-o") echo 'selected="selected"'; ?>>Folder open o</option>
                                            <option value="fa-smile-o" <?php if ($link5_icon == "fa-smile-o") echo 'selected="selected"'; ?>>Smile o</option>
                                            <option value="fa-frown-o" <?php if ($link5_icon == "fa-frown-o") echo 'selected="selected"'; ?>>Frown o</option>
                                            <option value="fa-meh-o" <?php if ($link5_icon == "fa-meh-o") echo 'selected="selected"'; ?>>Meh o</option>
                                            <option value="fa-gamepad" <?php if ($link5_icon == "fa-gamepad") echo 'selected="selected"'; ?>>Gamepad</option>
                                            <option value="fa-keyboard-o" <?php if ($link5_icon == "fa-keyboard-o") echo 'selected="selected"'; ?>>Keyboard o</option>
                                            <option value="fa-flag-o" <?php if ($link5_icon == "fa-flag-o") echo 'selected="selected"'; ?>>Flag o</option>
                                            <option value="fa-flag-checkered" <?php if ($link5_icon == "fa-flag-checkered") echo 'selected="selected"'; ?>>Flag checkered</option>
                                            <option value="fa-terminal" <?php if ($link5_icon == "fa-terminal") echo 'selected="selected"'; ?>>Terminal</option>
                                            <option value="fa-code" <?php if ($link5_icon == "fa-code") echo 'selected="selected"'; ?>>Code</option>
                                            <option value="fa-reply-all" <?php if ($link5_icon == "fa-reply-all") echo 'selected="selected"'; ?>>Reply all</option>
                                            <option value="fa-mail-reply-all" <?php if ($link5_icon == "fa-mail-reply-all") echo 'selected="selected"'; ?>>Mail reply all</option>
                                            <option value="fa-star-half-empty" <?php if ($link5_icon == "fa-star-half-empty") echo 'selected="selected"'; ?>>Star half empty</option>
                                            <option value="fa-star-half-full" <?php if ($link5_icon == "fa-star-half-full") echo 'selected="selected"'; ?>>Star half full</option>
                                            <option value="fa-star-half-o" <?php if ($link5_icon == "fa-star-half-o") echo 'selected="selected"'; ?>>Star half o</option>
                                            <option value="fa-location-arrow" <?php if ($link5_icon == "fa-location-arrow") echo 'selected="selected"'; ?>>Location arrow</option>
                                            <option value="fa-crop" <?php if ($link5_icon == "fa-crop") echo 'selected="selected"'; ?>>Crop</option>
                                            <option value="fa-code-fork" <?php if ($link5_icon == "fa-code-fork") echo 'selected="selected"'; ?>>Code fork</option>
                                            <option value="fa-unlink" <?php if ($link5_icon == "fa-unlink") echo 'selected="selected"'; ?>>Unlink</option>
                                            <option value="fa-chain-broken" <?php if ($link5_icon == "fa-chain-broken") echo 'selected="selected"'; ?>>Chain broken</option>
                                            <option value="fa-question" <?php if ($link5_icon == "fa-question") echo 'selected="selected"'; ?>>Question</option>
                                            <option value="fa-info" <?php if ($link5_icon == "fa-info") echo 'selected="selected"'; ?>>Info</option>
                                            <option value="fa-exclamation" <?php if ($link5_icon == "fa-exclamation") echo 'selected="selected"'; ?>>Exclamation</option>
                                            <option value="fa-superscript" <?php if ($link5_icon == "fa-superscript") echo 'selected="selected"'; ?>>Superscript</option>
                                            <option value="fa-subscript" <?php if ($link5_icon == "fa-subscript") echo 'selected="selected"'; ?>>Subscript</option>
                                            <option value="fa-eraser" <?php if ($link5_icon == "fa-eraser") echo 'selected="selected"'; ?>>Eraser</option>
                                            <option value="fa-puzzle-piece" <?php if ($link5_icon == "fa-puzzle-piece") echo 'selected="selected"'; ?>>Puzzle piece</option>
                                            <option value="fa-microphone" <?php if ($link5_icon == "fa-microphone") echo 'selected="selected"'; ?>>Microphone</option>
                                            <option value="fa-microphone-slash" <?php if ($link5_icon == "fa-microphone-slash") echo 'selected="selected"'; ?>>Microphone slash</option>
                                            <option value="fa-shield" <?php if ($link5_icon == "fa-shield") echo 'selected="selected"'; ?>>Shield</option>
                                            <option value="fa-calendar-o" <?php if ($link5_icon == "fa-calendar-o") echo 'selected="selected"'; ?>>Calendar o</option>
                                            <option value="fa-fire-extinguisher" <?php if ($link5_icon == "fa-fire-extinguisher") echo 'selected="selected"'; ?>>Fire extinguisher</option>
                                            <option value="fa-rocket" <?php if ($link5_icon == "fa-rocket") echo 'selected="selected"'; ?>>Rocket</option>
                                            <option value="fa-maxcdn" <?php if ($link5_icon == "fa-maxcdn") echo 'selected="selected"'; ?>>Maxcdn</option>
                                            <option value="fa-chevron-circle-left" <?php if ($link5_icon == "fa-chevron-circle-left") echo 'selected="selected"'; ?>>Chevron circle left</option>
                                            <option value="fa-chevron-circle-right" <?php if ($link5_icon == "fa-chevron-circle-right") echo 'selected="selected"'; ?>>Chevron circle right</option>
                                            <option value="fa-chevron-circle-up" <?php if ($link5_icon == "fa-chevron-circle-up") echo 'selected="selected"'; ?>>Chevron circle up</option>
                                            <option value="fa-chevron-circle-down" <?php if ($link5_icon == "fa-chevron-circle-down") echo 'selected="selected"'; ?>>Chevron circle down</option>
                                            <option value="fa-html5" <?php if ($link5_icon == "fa-html5") echo 'selected="selected"'; ?>>Html5</option>
                                            <option value="fa-css3" <?php if ($link5_icon == "fa-css3") echo 'selected="selected"'; ?>>Css3</option>
                                            <option value="fa-anchor" <?php if ($link5_icon == "fa-anchor") echo 'selected="selected"'; ?>>Anchor</option>
                                            <option value="fa-unlock-alt" <?php if ($link5_icon == "fa-unlock-alt") echo 'selected="selected"'; ?>>Unlock alt</option>
                                            <option value="fa-bullseye" <?php if ($link5_icon == "fa-bullseye") echo 'selected="selected"'; ?>>Bullseye</option>
                                            <option value="fa-ellipsis-h" <?php if ($link5_icon == "fa-ellipsis-h") echo 'selected="selected"'; ?>>Ellipsis h</option>
                                            <option value="fa-ellipsis-v" <?php if ($link5_icon == "fa-ellipsis-v") echo 'selected="selected"'; ?>>Ellipsis v</option>
                                            <option value="fa-rss-square" <?php if ($link5_icon == "fa-rss-square") echo 'selected="selected"'; ?>>Rss square</option>
                                            <option value="fa-play-circle" <?php if ($link5_icon == "fa-play-circle") echo 'selected="selected"'; ?>>Play circle</option>
                                            <option value="fa-ticket" <?php if ($link5_icon == "fa-ticket") echo 'selected="selected"'; ?>>Ticket</option>
                                            <option value="fa-minus-square" <?php if ($link5_icon == "fa-minus-square") echo 'selected="selected"'; ?>>Minus square</option>
                                            <option value="fa-minus-square-o" <?php if ($link5_icon == "fa-minus-square-o") echo 'selected="selected"'; ?>>Minus square_o</option>
                                            <option value="fa-level-up" <?php if ($link5_icon == "fa-level-up") echo 'selected="selected"'; ?>>Level up</option>
                                            <option value="fa-level-down" <?php if ($link5_icon == "fa-level-down") echo 'selected="selected"'; ?>>Level down</option>
                                            <option value="fa-check-square" <?php if ($link5_icon == "fa-check-square") echo 'selected="selected"'; ?>>Check square</option>
                                            <option value="fa-pencil-square" <?php if ($link5_icon == "fa-pencil-square") echo 'selected="selected"'; ?>>Pencil square</option>
                                            <option value="fa-external-link-square" <?php if ($link5_icon == "fa-external-link-square") echo 'selected="selected"'; ?>>External link square</option>
                                            <option value="fa-share-square" <?php if ($link5_icon == "fa-share-square") echo 'selected="selected"'; ?>>Share square</option>
                                            <option value="fa-compass" <?php if ($link5_icon == "fa-compass") echo 'selected="selected"'; ?>>Compass</option>
                                            <option value="fa-toggle-down" <?php if ($link5_icon == "fa-toggle-down") echo 'selected="selected"'; ?>>Toggle down</option>
                                            <option value="fa-caret-square-o-down" <?php if ($link5_icon == "fa-caret-square-o-down") echo 'selected="selected"'; ?>>Caret square o down</option>
                                            <option value="fa-toggle-up" <?php if ($link5_icon == "fa-toggle-up") echo 'selected="selected"'; ?>>Toggle up</option>
                                            <option value="fa-caret-square-o-up" <?php if ($link5_icon == "fa-caret-square-o-up") echo 'selected="selected"'; ?>>Caret square o up</option>
                                            <option value="fa-toggle-right" <?php if ($link5_icon == "fa-toggle-right") echo 'selected="selected"'; ?>>Toggle right</option>
                                            <option value="fa-caret-square-o-right" <?php if ($link5_icon == "fa-caret-square-o-right") echo 'selected="selected"'; ?>>Caret square o right</option>
                                            <option value="fa-euro" <?php if ($link5_icon == "fa-euro") echo 'selected="selected"'; ?>>Euro</option>
                                            <option value="fa-eur" <?php if ($link5_icon == "fa-eur") echo 'selected="selected"'; ?>>Eur</option>
                                            <option value="fa-gbp" <?php if ($link5_icon == "fa-gbp") echo 'selected="selected"'; ?>>Gbp</option>
                                            <option value="fa-dollar" <?php if ($link5_icon == "fa-dollar") echo 'selected="selected"'; ?>>Dollar</option>
                                            <option value="fa-usd" <?php if ($link5_icon == "fa-usd") echo 'selected="selected"'; ?>>Usd</option>
                                            <option value="fa-rupee" <?php if ($link5_icon == "fa-rupee") echo 'selected="selected"'; ?>>Rupee</option>
                                            <option value="fa-inr" <?php if ($link5_icon == "fa-inr") echo 'selected="selected"'; ?>>Inr</option>
                                            <option value="fa-cny" <?php if ($link5_icon == "fa-cny") echo 'selected="selected"'; ?>>Cny</option>
                                            <option value="fa-rmb" <?php if ($link5_icon == "fa-rmb") echo 'selected="selected"'; ?>>Rmb</option>
                                            <option value="fa-yen" <?php if ($link5_icon == "fa-yen") echo 'selected="selected"'; ?>>Yen</option>
                                            <option value="fa-jpy" <?php if ($link5_icon == "fa-jpy") echo 'selected="selected"'; ?>>Jpy</option>
                                            <option value="fa-ruble" <?php if ($link5_icon == "fa-ruble") echo 'selected="selected"'; ?>>Ruble</option>
                                            <option value="fa-rouble" <?php if ($link5_icon == "fa-rouble") echo 'selected="selected"'; ?>>Rouble</option>
                                            <option value="fa-rub" <?php if ($link5_icon == "fa-rub") echo 'selected="selected"'; ?>>Rub</option>
                                            <option value="fa-won" <?php if ($link5_icon == "fa-won") echo 'selected="selected"'; ?>>Won</option>
                                            <option value="fa-krw" <?php if ($link5_icon == "fa-krw") echo 'selected="selected"'; ?>>Krw</option>
                                            <option value="fa-bitcoin" <?php if ($link5_icon == "fa-bitcoin") echo 'selected="selected"'; ?>>Bitcoin</option>
                                            <option value="fa-btc" <?php if ($link5_icon == "fa-btc") echo 'selected="selected"'; ?>>Btc</option>
                                            <option value="fa-file" <?php if ($link5_icon == "fa-file") echo 'selected="selected"'; ?>>File</option>
                                            <option value="fa-file-text" <?php if ($link5_icon == "fa-file-text") echo 'selected="selected"'; ?>>File text</option>
                                            <option value="fa-sort-alpha-asc" <?php if ($link5_icon == "fa-sort-alpha-asc") echo 'selected="selected"'; ?>>Sort alpha asc</option>
                                            <option value="fa-sort-alpha-desc" <?php if ($link5_icon == "fa-sort-alpha-desc") echo 'selected="selected"'; ?>>Sort alpha desc</option>
                                            <option value="fa-sort-amount-asc" <?php if ($link5_icon == "fa-sort-amount-asc") echo 'selected="selected"'; ?>>Sort amount asc</option>
                                            <option value="fa-sort-amount-desc" <?php if ($link5_icon == "fa-sort-amount-desc") echo 'selected="selected"'; ?>>Sort amount desc</option>
                                            <option value="fa-sort-numeric-asc" <?php if ($link5_icon == "fa-sort-numeric-asc") echo 'selected="selected"'; ?>>Sort numeric asc</option>
                                            <option value="fa-sort-numeric-desc" <?php if ($link5_icon == "fa-sort-numeric-desc") echo 'selected="selected"'; ?>>Sort numeric desc</option>
                                            <option value="fa-thumbs-up" <?php if ($link5_icon == "fa-thumbs-up") echo 'selected="selected"'; ?>>Thumbs up</option>
                                            <option value="fa-thumbs-down" <?php if ($link5_icon == "fa-thumbs-down") echo 'selected="selected"'; ?>>Thumbs down</option>
                                            <option value="fa-youtube-square" <?php if ($link5_icon == "fa-youtube-square") echo 'selected="selected"'; ?>>Youtube square</option>
                                            <option value="fa-youtube" <?php if ($link5_icon == "fa-youtube") echo 'selected="selected"'; ?>>Youtube</option>
                                            <option value="fa-xing" <?php if ($link5_icon == "fa-xing") echo 'selected="selected"'; ?>>Xing</option>
                                            <option value="fa-xing-square" <?php if ($link5_icon == "fa-xing-square") echo 'selected="selected"'; ?>>Xing square</option>
                                            <option value="fa-youtube-play" <?php if ($link5_icon == "fa-youtube-play") echo 'selected="selected"'; ?>>Youtube play</option>
                                            <option value="fa-dropbox" <?php if ($link5_icon == "fa-dropbox") echo 'selected="selected"'; ?>>Dropbox</option>
                                            <option value="fa-stack-overflow" <?php if ($link5_icon == "fa-stack-overflow") echo 'selected="selected"'; ?>>Stack overflow</option>
                                            <option value="fa-instagram" <?php if ($link5_icon == "fa-instagram") echo 'selected="selected"'; ?>>Instagram</option>
                                            <option value="fa-flickr" <?php if ($link5_icon == "fa-flickr") echo 'selected="selected"'; ?>>Flickr</option>
                                            <option value="fa-adn" <?php if ($link5_icon == "fa-adn") echo 'selected="selected"'; ?>>Adn</option>
                                            <option value="fa-bitbucket" <?php if ($link5_icon == "fa-bitbucket") echo 'selected="selected"'; ?>>Bitbucket</option>
                                            <option value="fa-bitbucket-square" <?php if ($link5_icon == "fa-bitbucket-square") echo 'selected="selected"'; ?>>Bitbucket square</option>
                                            <option value="fa-tumblr" <?php if ($link5_icon == "fa-tumblr") echo 'selected="selected"'; ?>>Tumblr</option>
                                            <option value="fa-tumblr-square" <?php if ($link5_icon == "fa-tumblr-square") echo 'selected="selected"'; ?>>Tumblr square</option>
                                            <option value="fa-long-arrow-down" <?php if ($link5_icon == "fa-long-arrow-down") echo 'selected="selected"'; ?>>Long arrow down</option>
                                            <option value="fa-long-arrow-up" <?php if ($link5_icon == "fa-long-arrow-up") echo 'selected="selected"'; ?>>Long arrow up</option>
                                            <option value="fa-long-arrow-left" <?php if ($link5_icon == "fa-long-arrow-left") echo 'selected="selected"'; ?>>Long arrow left</option>
                                            <option value="fa-long-arrow-right" <?php if ($link5_icon == "fa-long-arrow-right") echo 'selected="selected"'; ?>>Long arrow right</option>
                                            <option value="fa-apple" <?php if ($link5_icon == "fa-apple") echo 'selected="selected"'; ?>>Apple</option>
                                            <option value="fa-windows" <?php if ($link5_icon == "fa-windows") echo 'selected="selected"'; ?>>Windows</option>
                                            <option value="fa-android" <?php if ($link5_icon == "fa-android") echo 'selected="selected"'; ?>>Android</option>
                                            <option value="fa-linux" <?php if ($link5_icon == "fa-linux") echo 'selected="selected"'; ?>>Linux</option>
                                            <option value="fa-dribbble" <?php if ($link5_icon == "fa-dribbble") echo 'selected="selected"'; ?>>Dribbble</option>
                                            <option value="fa-skype" <?php if ($link5_icon == "fa-skype") echo 'selected="selected"'; ?>>Skype</option>
                                            <option value="fa-foursquare" <?php if ($link5_icon == "fa-foursquare") echo 'selected="selected"'; ?>>Foursquare</option>
                                            <option value="fa-trello" <?php if ($link5_icon == "fa-trello") echo 'selected="selected"'; ?>>Trello</option>
                                            <option value="fa-female" <?php if ($link5_icon == "fa-female") echo 'selected="selected"'; ?>>Female</option>
                                            <option value="fa-male" <?php if ($link5_icon == "fa-male") echo 'selected="selected"'; ?>>Male</option>
                                            <option value="fa-gittip" <?php if ($link5_icon == "fa-gittip") echo 'selected="selected"'; ?>>Gittip</option>
                                            <option value="fa-sun-o" <?php if ($link5_icon == "fa-sun-o") echo 'selected="selected"'; ?>>Sun o</option>
                                            <option value="fa-moon-o" <?php if ($link5_icon == "fa-moon-o") echo 'selected="selected"'; ?>>Moon o</option>
                                            <option value="fa-archive" <?php if ($link5_icon == "fa-archive") echo 'selected="selected"'; ?>>Archive</option>
                                            <option value="fa-bug" <?php if ($link5_icon == "fa-bug") echo 'selected="selected"'; ?>>Bug</option>
                                            <option value="fa-vk" <?php if ($link5_icon == "fa-vk") echo 'selected="selected"'; ?>>Vk</option>
                                            <option value="fa-weibo" <?php if ($link5_icon == "fa-weibo") echo 'selected="selected"'; ?>>Weibo</option>
                                            <option value="fa-renren" <?php if ($link5_icon == "fa-renren") echo 'selected="selected"'; ?>>Renren</option>
                                            <option value="fa-pagelines" <?php if ($link5_icon == "fa-pagelines") echo 'selected="selected"'; ?>>Pagelines</option>
                                            <option value="fa-stack-exchange" <?php if ($link5_icon == "fa-stack-exchange") echo 'selected="selected"'; ?>>Stack exchange</option>
                                            <option value="fa-arrow-circle-o-right" <?php if ($link5_icon == "fa-arrow-circle-o-right") echo 'selected="selected"'; ?>>Arrow circle o right</option>
                                            <option value="fa-arrow-circle-o-left" <?php if ($link5_icon == "fa-arrow-circle-o-left") echo 'selected="selected"'; ?>>Arrow circle o left</option>
                                            <option value="fa-toggle-left" <?php if ($link5_icon == "fa-toggle-left") echo 'selected="selected"'; ?>>Toggle left</option>
                                            <option value="fa-caret-square-o-left" <?php if ($link5_icon == "fa-caret-square-o-left") echo 'selected="selected"'; ?>>Caret square o left</option>
                                            <option value="fa-dot-circle-o" <?php if ($link5_icon == "fa-dot-circle-o") echo 'selected="selected"'; ?>>Dot circle o</option>
                                            <option value="fa-wheelchair" <?php if ($link5_icon == "fa-wheelchair") echo 'selected="selected"'; ?>>Wheelchair</option>
                                            <option value="fa-vimeo-square" <?php if ($link5_icon == "fa-vimeo-square") echo 'selected="selected"'; ?>>Vimeo square</option>
                                            <option value="fa-turkish-lira" <?php if ($link5_icon == "fa-turkish-lira") echo 'selected="selected"'; ?>>Turkish lira</option>
                                            <option value="fa-try" <?php if ($link5_icon == "fa-try") echo 'selected="selected"'; ?>>Try</option>
                                            <option value="fa-plus-square-o" <?php if ($link5_icon == "fa-plus-square-o") echo 'selected="selected"'; ?>>Plus square o</option>
                                        </select>
                                    </td>
                                <tr>

                                <tr>
                                    <td>
                                        <h3>Color Settings</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Circle background color</label><br>
                                        <input type="text" id="bg_colorbox" name="umom__opt[background_color]" value="<?php echo $background_color ?>" placeholder="#333333" /><br />
                                        
                                        <label>Circle border color</label><br>
                                        <input type="text" id="border_colorbox" name="umom__opt[border_color]" value="<?php echo $border_color; ?>" placeholder="#ffffff" /><br />

                                        <label>Color of icon</label><br>
                                        <input type="text" id="icon_colorbox" name="umom__opt[icon_color]" value="<?php echo $icon_color; ?>" placeholder="#ffffff" /><br />

                                        <label>Color of icon on touch</label><br>
                                        <input type="text" id="touch_icon_colorbox" name="umom__opt[touch_icon_color]" value="<?php echo $touch_icon_color; ?>" placeholder="#E52B50" /><br />

                                        <label>Circle background on touch</label><br>
                                        <input type="text" id="touch_bg_colorbox" name="umom__opt[touch_bg_color]" value="<?php echo $touch_bg_color ?>" placeholder="#000000" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Display Settings</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>@media (max-width:</label>
                                        <input type="number" name="umom__opt[mediaqueries]" value="<?php echo $mediaqueries; ?>" placeholder="980" style="width: 100px;"/>px)
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="checkbox" name="umom__opt[disable]" value="1" <?php if ($disable == 1) echo 'checked="checked"'; else echo ''; ?>> Disable Menu
                                    </td>
                                </tr>
                            </table>

                            <div style="clear: both;">&nbsp;</div>
                        </div>     
                   
                </div>

                </div>
                <br>
                <input type="submit" id="btn" class="button-primary" value="Save Settings"> 
                <span id="loading" style="display: none;"><img src="images/loading.gif" alt=""> Saving...</span><br /><br />

            </div>
            <br clear="all" />
            <br clear="all" />
        </form>  
    </div> 
    <br>
    <br>
</div>
<br clear="all" />
<br clear="all" />

<script type="text/javascript">
    jQuery('#wptb').submit(function(){
        jQuery(this).ajaxSubmit({
            'url': ajaxurl,
            'beforeSubmit':function(){
                jQuery('#loading').fadeIn();
            },
            'success':function(res){
                jQuery('#loading').fadeOut();
            }
        });
        return false;
    });
</script>