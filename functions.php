<?php

function admin_notice_elementor_not_installed() {
    ?>
    <div class="notice notice-warning is-dismissible">
        <p><?php _e( 'Elementor not installed in this site.', 'text-domain' ); ?></p>
    </div>
    <?php
}





if (in_array('elementor/elementor.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    
    require_once('elementor-addons/addons.php');
    
} else {
    add_action( 'admin_notices', 'admin_notice_elementor_not_installed' );
    
}


?>





