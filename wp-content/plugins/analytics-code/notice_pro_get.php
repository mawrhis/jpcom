<?php
    if(strpos($_SERVER['QUERY_STRING'], 'ga_tc_settings')) {
        return;
    }

?>
<div class="notice notice-info is-dismissible" id="ga_tc_notice_get_pro">
    <div style="float:left" class="acp_pro_banner" style="background-image: url('<?php echo plugins_url( 'banner.png', __FILE__ ); ?>')" onclick="acp_pro_banner_show_description();">
        <div class="acp_pro_banner_title">
            <?php _e( 'Google Analytics Professional plugin', 'analytics-code'); ?>
        </div>
        <div style="clear: both;"></div>
        <div class="">
            <div class="acp_pro_banner_feature">
                Statistics
            </div>
            <div class="acp_pro_banner_feature">
                Data exports
            </div>
            <div class="acp_pro_banner_feature">
                White-label reports
            </div>
            <div class="acp_pro_banner_feature">
                Analytics
            </div>
        </div>
    </div>
    <div style="clear: both;"></div>
    <div class="acp_pro_banner_buttons">
        <form method="post" action="<?php echo GA_TC_SERVER . '/billing/getPro';?>">
            <input type="hidden" name="user_email" value="<?php echo get_option('admin_email'); ?>">
            <input type="hidden" name="user_site" value="<?php echo home_url(); ?>">
            <input type="hidden" name="refer" value="<?php echo 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . rtrim($_SERVER['HTTP_HOST'], '/')."/" . ltrim($_SERVER['REQUEST_URI'], '/'); ?>">
            <input type="submit" style=";" class="acp_notice_get_pro_btn" value="Get PRO">
            <a style="position: absolute; margin-top: 15px; margin-left: 20px;" href="javascript:void(0)" onclick="acp_pro_banner_show_description()">Show details</a>
        </form>
    </div>

    <div style="clear: both"></div>
    <div id="acp_pro_banner_list_features">
        <h2>Make available many professional things in your own Google Analytics like: data tables, line/pie charts, reports, exports of data and much more...</h2>
        <?php require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'pro_features.php'; ?>
        <div style="text-align: center; width: 100%">
            <form method="post" action="<?php echo GA_TC_SERVER . '/billing/getPro';?>">
                <input type="hidden" name="user_email" value="<?php echo get_option('admin_email'); ?>">
                <input type="hidden" name="user_site" value="<?php echo home_url(); ?>">
                <input type="hidden" name="refer" value="<?php echo 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . rtrim($_SERVER['HTTP_HOST'], '/')."/" . ltrim($_SERVER['REQUEST_URI'], '/'); ?>">
                <input type="submit" class="acp_notice_get_pro_btn" value="Get PRO" style="margin-left: 20px;">
            </form>
        </div>
    </div>
</div>

<script >
    function acp_pro_banner_show_description() {
        jQuery('#acp_pro_banner_list_features').show('slow');
        jQuery('.acp_pro_banner_buttons').hide();
    }

</script>
