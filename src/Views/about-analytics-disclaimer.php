<?php

namespace Rich4rdMuvirimi\ForceReinstall\Views;

if (!defined('WPINC')) {
    die(); // Exit if accessed directly.
}

/**
 * Provide an about area view for the plugin
 * This file is used to mark up the admin-facing aspects of the plugin.
 *
 * @package ForceReinstall
 * @subpackage ForceReinstall/Views
 *
 * @link http://richard.co.zw
 * @author Richard Muvirimi <tygalive@gmail.com>
 * @since 1.5.0
 * @version 1.5.0
 *
 */

?>
<span>
    <?php _e("Collecting usage data helps us understand how our users interact with our products and services, and enables us to improve and enhance our offerings to better meet their needs. This information is collected anonymously and is used solely for the purposes of product development and improvement. To learn more about our data collection practices, please review our", FORCE_REINSTALL_SLUG) ?>
    <a href="https://site.tyganeutronics.com/privacy-policy">
       <?php _e("privacy policy", FORCE_REINSTALL_SLUG) ?>
    </a>.
</span>