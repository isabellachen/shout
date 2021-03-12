<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example: 
 */

?>
<div class="fl-mission-header">
    <a class="fl-mission-icon" href="<?php echo $settings->mission_link; ?>" target="<?php echo $settings->link_target; ?>">
      <i class="<?php echo $settings->mission_icon; ?>" aria-hidden="true"></i>
      <h2><?php echo $settings->mission_header; ?></h2>
    </a>
    <div class="fl-mission-html">
    	<?php echo $settings->mission_html; ?>
    </div>
</div>